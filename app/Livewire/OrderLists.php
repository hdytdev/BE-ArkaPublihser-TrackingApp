<?php

namespace App\Livewire;

use App\Models\Article;
use App\Models\Order;
use App\Models\OrderStatus;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;
use Livewire\Component;

class OrderLists extends Component
{
  public $month;
  public $byName;
  public $publication_status;
  public $status_pembayaran;

  /**
   * Summary of getOrders
   * @return \Illuminate\Pagination\LengthAwarePaginator
   */
  public function getOrders()
  {
    $query = Order::with(['article', 'customer', 'termin', 'notes']);

    if ($this->month) {
      [$year, $month] = explode('-', $this->month);
      $query->whereYear('created_at', $year)
        ->whereMonth('created_at', $month);
    }

    if ($this->byName) {
      $query->whereHas('customer', function ($query) {
        $query->where('name', 'like', "%{$this->byName}%");
      });
    }

    if ($this->status_pembayaran !== null) {
      $query->whereHas('termin', function ($query) {
        $query->where('is_paid', $this->status_pembayaran);
      });
    }
    if ($this->publication_status !== null) {
      $query->whereHas('notes', function ($query) {
        $query->whereHas('orderStatus', function ($query) {
          $query->where('id', $this->publication_status);
        });
      });
    }


    return $query->paginate(10);
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


  public function filter()
  {
    if ($this->getOrders()->count() < 1) {
      LivewireAlert::text("Tidak ada data pada bulan " . now()->parse($this->month)->format("M-Y"))->warning()->show();
    }
  }

  /**
   * Summary of render
   * @return \Illuminate\Contracts\View\View
   */
  public function render()
  {
    return view('livewire.order-lists', [
      'orders' => $this->getOrders(),
      'status' => OrderStatus::all()
    ]);
  }
}
