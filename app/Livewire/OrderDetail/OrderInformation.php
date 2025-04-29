<?php

namespace App\Livewire\OrderDetail;

use App\Models\Order;
use App\Models\OrderTermin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

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

  public function mount()
  {
    $this->order = $this->getOrder();
    $this->initializeTermins();
  }

  public function render()
  {
    return view('livewire.order-detail.order-information', [
      'order' => $this->order,
    ]);
  }

  public function save()
  {
    $this->validate();

    DB::transaction(function () {
      $kwitansiPath = $this->handleFileUpload($this->kwitansi, 'order/kwitansi', $this->order->kwitansi_file);
      $invoicePath = $this->handleFileUpload($this->invoices, 'order/invoices', $this->order->invoice_file);

      $this->order->update([
        'payment_link' => $this->payment_link,
        'invoice_file' => $invoicePath,
        'kwitansi_file' => $kwitansiPath,
      ]);

      $this->updateTermins();
    });

    $this->dispatch("hide_modal");
    $this->resetValidation();
    LivewireAlert::title("Berhasil")->text("Berhasil mengupdate data")->success()->show();
  }

  public function download_kwitansi()
  {
    $this->downloadFile($this->order->kwitansi_file);
  }

  public function download_invoice()
  {
    $this->downloadFile($this->order->invoice_file);
  }

  private function getOrder()
  {
    return Order::with(['notes' => ['orderStatus'], 'termin'])->find($this->order_id);
  }

  private function initializeTermins()
  {
    foreach ($this->order->termin as $termin) {
      $this->termins[$termin->id] = $termin->is_paid;
    }
  }

  private function handleFileUpload($file, $directory, $oldFilePath = null)
  {
    if (!$file) {
      return $oldFilePath;
    }

    $newFilePath = $file->store($directory, 'local');
    $this->deleteOldFile($oldFilePath);

    return $newFilePath;
  }

  private function deleteOldFile($filePath)
  {
    if ($filePath) {
      $absolutePath = Storage::disk('local')->path($filePath);
      if (file_exists($absolutePath)) {
        File::delete($absolutePath);
      }
    }
  }

  private function updateTermins()
  {
    foreach ($this->termins as $id => $isPaid) {
      OrderTermin::find($id)->update(['is_paid' => $isPaid]);
    }
  }

  private function downloadFile($filePath)
  {
    if (!$filePath) {
      LivewireAlert::title("Gagal")->text("File tidak ditemukan atau sudah terhapus")->warning()->show();
      return;
    }

    $absolutePath = Storage::disk('local')->path($filePath);

    if (file_exists($absolutePath)) {
      LivewireAlert::title("Berhasil")->text("File akan segera terdownload")->success()->show();
      return response()->download($absolutePath);
    } else {
      LivewireAlert::title("Gagal")->text("File tidak ditemukan atau sudah terhapus")->warning()->show();
    }
  }
}
