<?php

namespace App\Livewire\OrderDetail;

use App\Models\Order;
use Livewire\Attributes\Locked;
use Livewire\Component;

class OrderInformation extends Component
{
  #[Locked]
  public $order_id;


  public function getOrder()
  {
    return Order::with(['notes' => ["orderStatus"], 'termin'])->find($this->order_id);
  }

  public function render()
  {
    return view('livewire.order-detail.order-information', [
      'order' => $this->getOrder(),
    ]);
  }
}
