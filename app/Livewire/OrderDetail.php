<?php

namespace App\Livewire;

use App\Models\Order;
use Livewire\Component;

class OrderDetail extends Component
{

    public $order_id;

    function getDetail(){

      $order = Order::with(['article','customer','termin'])->find($this->order_id);
      return $order;
    }

    public function render()
    {
        return view('livewire.order-detail',[
          'order' => $this->getDetail(),
        ]);
    }
}
