<?php

namespace App\Livewire;

use App\Models\Order;
use Livewire\Component;

class OrderLists extends Component
{
  public function getOrders()
  {
    return Order::select("*")->with([
      'article',
      'customer',
      'termin',
      'notes'
    ])->get();
  }
  public function render()
  {
    return view('livewire.order-lists', [
      'orders' => $this->getOrders()
    ]);
  }
}
