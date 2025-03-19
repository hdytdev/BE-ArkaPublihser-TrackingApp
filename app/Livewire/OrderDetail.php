<?php

namespace App\Livewire;

use App\Models\Order;
use Livewire\Component;

class OrderDetail extends Component
{
  public function download_invoice()
  {
    dd("Downloaded");
  }
  public function download_kwitansi(){
    dd("Download kwitansi");
  }
  public $order_id;

  function getDetail()
  {

    $order = Order::with(['article' => ['fileHistory', 'journal'], 'customer', 'termin', 'notes'=>[
      'orderStatus'
    ]])->find($this->order_id);
    return $order;
  }

  public function render()
  {
    return view('livewire.order-detail', [
      'order' => $this->getDetail(),
    ]);
  }
}
