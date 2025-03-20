<?php

namespace App\Livewire\OrderDetail;

use App\Models\Order;
use App\Models\OrderTermin;
use DB;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;
use Storage;

class OrderInformation extends Component
{
  use WithFileUploads;
  #[Locked]
  public $order_id;
  public $order;
  public $payment_link;
  #[Rule("nullable|max:8192|file|extensions:pdf,doc,docx,pptx")]
  public $kwitansi;
  #[Rule("nullable|max:8192|file|extensions:pdf,doc,docx,pptx")]
  public $invoices;
  public $termins = [];

  public function getOrder()
  {
    return Order::with(['notes' => ["orderStatus"], 'termin'])->find($this->order_id);
  }

  public function download_kwitansi()
  {
    $file = Storage::disk("local")->path($this->order->kwitansi_file);
    return response()->download($file);
  }
  public function download_invoice()
  {
    $file = Storage::disk("local")->path($this->order->invoice_file);
    return response()->download($file);
  }
  public function save()
  {
    $this->validate();
    DB::transaction(function () {
      if ($this->kwitansi || $this->invoices) {
        $kwitansi = $this->kwitansi->store('order/kwitansi', 'local');
        $invoices = $this->invoices->store('order/invoices', 'local');
        $this->order->update([
          'payment_link' => $this->payment_link,
          'invoice_file' => $invoices,
          'kwitansi_file' => $kwitansi
        ]);
      }
      //save to termin order
      foreach ($this->termins as $key => $value) {
        OrderTermin::find($key)->update([
          'is_paid' => $value
        ]);
      }
      $this->dispatch("hide_modal");
    });


  }

  public function mount()
  {
    $this->order = $this->getOrder();
  }
  public function render()
  {

    foreach ($this->order->termin as $ter) {
      $this->termins[$ter->id] = $ter->is_paid;
    }

    return view('livewire.order-detail.order-information', [
      'order' => $this->order,
    ]);
  }
}
