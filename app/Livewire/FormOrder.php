<?php

namespace App\Livewire;

use App\Models\Article;
use App\Models\Customer;
use App\Models\FileHistory;
use App\Models\Journal;
use App\Models\Order;
use App\Models\OrderNotes;
use App\Models\OrderStatus;
use App\Models\OrderTermin;
use DB;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;

#[Title("Form Order")]
class FormOrder extends Component
{
  use WithFileUploads;
  public $customers;
  public $journals;
  public $order_id = null;

  #[Rule("required|string")]
  public $journal_id;
  #[Rule("required|string")]
  public $customer_id;
  #[Rule("required|string")]
  public $title;
  #[Rule("nullable|string")]
  public $publish_link;
  #[Rule("required|string")]
  public $authors;
  #[Rule("nullable|string")]
  public $publish_date;
  #[Rule("required|string")]
  public $estimated_publish_date;
  #[Rule("nullable|file|extensions:pdf,docx,doc|max:30720")]
  public $article_file;
  #[Rule("required|string")]
  public $package;
  #[Rule("nullable|file")]
  public $loa_file;
  #[Rule("required|string")]
  public $submission_date;

  public function mount($order_id = null)
  {
    $this->order_id = $order_id;
    $this->customers = Customer::all();
    $this->journals = Journal::all();
    if ($order_id) {
      $order = Order::with('article')->findOrFail($order_id);
      $article = $order->article;

      $this->journal_id = $article->journal_id;
      $this->customer_id = $order->customer_id;
      $this->title = $article->title;
      $this->publish_link = $article->article_link;
      $this->authors = $article->authors;
      $this->publish_date = $article->publish_date;
      $this->estimated_publish_date = $article->estimated_publish_date;
      $this->package = $order->package;
      $this->submission_date = $article->submit_date;
    }
  }

  public function uploadArticle()
  {
    return $this->article_file->storePublicly('order/journal', 'public');
  }

  public function getFirstOrderStatus()
  {
    return OrderStatus::where('name', 'Verification')->limit(1)->first()->id;
  }

  public function createOrder()
  {
    $this->validate();

    $order = DB::transaction(function () {
      $lastOrder = Order::latest('id')->first();
      $lastOrderNumber = $lastOrder ? intval(substr($lastOrder->order_number, -6)) : 0;
      $newOrderNumber = str_pad($lastOrderNumber + 1, 6, '0', STR_PAD_LEFT);
      $orderNumber = 'TRX-' . date('Y') . '-' . $newOrderNumber;

      $order = Order::create([
        'order_number' => $orderNumber,
        'package' => $this->package,
        'customer_id' => $this->customer_id,
        'order_date' => now(),
        'total_termin' => 3,
      ]);

      foreach (range(1, 3) as $term) {
        OrderTermin::create([
          'order_id' => $order->id,
          'term' => $term,
          'is_paid' => false,
        ]);
      }

      $loa_file_name = $this->loa_file ? $this->loa_file->storePublicly('order/loa', 'public') : null;

      $article = Article::create([
        'journal_id' => $this->journal_id,
        'order_id' => $order->id,
        'title' => $this->title,
        'article_link' => $this->publish_link,
        'authors' => $this->authors,
        'publish_date' => $this->publish_date,
        'estimated_publish_date' => $this->estimated_publish_date,
        'loa_file' => $loa_file_name,
        'submit_date' => $this->submission_date,
      ]);

      FileHistory::create([
        'article_id' => $article->id,
        'file_url' => $this->uploadArticle(),
        'customer_file' => true,
        'name' => "Naskah Awal"
      ]);

      OrderNotes::create([
        'order_status_id' => $this->getFirstOrderStatus(),
        'note' => "Order sedang diverifikasi oleh tim",
        'order_id' => $order->id,
        'time' => now(),
      ]);

      return $order;
    });

    return redirect()->route('admin.order.detail', ['order_id' => $order->id]);
  }

  public function updateOrder()
  {
    $this->validate();

    DB::transaction(function () {
      $order = Order::findOrFail($this->order_id);
      $article = $order->article;

      $order->update([
        'package' => $this->package,
        'customer_id' => $this->customer_id,
      ]);

      $article->update([
        'journal_id' => $this->journal_id,
        'title' => $this->title,
        'article_link' => $this->publish_link,
        'authors' => $this->authors,
        'publish_date' => $this->publish_date,
        'estimated_publish_date' => $this->estimated_publish_date,
        'submit_date' => $this->submission_date,
      ]);

      if ($this->article_file) {
        FileHistory::create([
          'article_id' => $article->id,
          'file_url' => $this->uploadArticle(),
          'customer_file' => true,
          'name' => "Revisi Naskah"
        ]);
      }
    });

    session()->flash('success', 'Order berhasil diperbarui.');
    return redirect()->route('admin.order.detail', ['order_id' => $this->order_id]);
  }

  public function submit()
  {
    if ($this->order_id) {
      $this->updateOrder();
    } else {
      $this->createOrder();
    }
  }

  public function render()
  {
    return view('livewire.form-order');
  }
}
