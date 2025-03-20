<?php

namespace App\Livewire\OrderDetail;

use App\Models\Order;
use App\Models\OrderTermin;
use Livewire\Attributes\Locked;
use Livewire\Component;

class OrderInformation extends Component
{
  #[Locked]
  public $order_id;

  public $payment_link;
  public $kwitansi_file;
  public $invoice_file;
  public $termins = [];

  public function getOrder()
  {
    return Order::with(['notes' => ["orderStatus"], 'termin'])->find($this->order_id);
  }

  function save()
  {
    foreach ($this->termins as $key => $value) {
      OrderTermin::find($key)->update([
        'is_paid' => $value
      ]);
    }
  }

  public function render()
  {
    $order = $this->getOrder();

      foreach($order->termin as $ter){
        $this->termins[$ter->id] = $ter->is_paid;
      }

    return view('livewire.order-detail.order-information', [
      'order' => $this->getOrder(),
    ]);
  }
}
