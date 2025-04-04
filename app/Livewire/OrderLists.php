<?php

namespace App\Livewire;

use App\Models\Article;
use App\Models\Order;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;
use Livewire\Component;

class OrderLists extends Component
{
  /**
   * Summary of getOrders
   * @return \Illuminate\Pagination\LengthAwarePaginator
   */
  public function getOrders()
  {
    return Order::select("*")->with([
      'article',
      'customer',
      'termin',
      'notes'
    ])->paginate(10);
  }
  /**
   * Summary of delete
   * @param string $id
   */
  public function delete(string $id)
  {
    $order = Order::find($id);
    if (!$order) {
      LivewireAlert::title("Gagal")->text("Order data tidak ditemukan")->warning()->show();
    } else {
      if ($order->article()->exists()) {
        return LivewireAlert::title("Gagal")->text("Tidak bisa hapus data ini karena ada tabel lain yang nge relasi.")->warning()->withCancelButton("Jangan deh")->onConfirm("forceDelete", [
          'id' => $order->id,
        ])->withConfirmButton("Hapus Aja")->show();
      }
      if ($order->delete()) {
        LivewireAlert::title("Berhasil")->text("Order berhasil di hapus")->success()->show();
      }
    }
  }
  /**
   * Summary of forceDelete
   * @param mixed $data
   * @return void
   */
  public function forceDelete($data)
  {
    $order = Order::find($data['id']);
    if ($order) {
      $order->delete();
    }
  }
  /**
   * Summary of render
   * @return \Illuminate\Contracts\View\View
   */
  public function render()
  {
    return view('livewire.order-lists', [
      'orders' => $this->getOrders()
    ]);
  }
}
