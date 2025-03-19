<?php

namespace App\Livewire;

use App\Models\Article;
use App\Models\FileHistory;
use App\Models\Order;
use App\Models\OrderNotes;
use App\Models\OrderStatus;
use App\Models\OrderTermin;
use DB;
use Illuminate\Support\Str;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;
#[Title("New Order")]
class FormOrder extends Component
{
  use WithFileUploads;
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
  #[Rule("required|file|extensions:pdf,docx,doc|max:30720")]
  public $article_file;
  #[Rule("required|string")]
  public $package;
  #[Rule("nullable|file")]
  public $loa_file;
  #[Rule("required|string")]
  public $submission_date;

  protected function createOrder()
  {
  }

  public function uploadArticle()
  {
    return $this->article_file->storePublicly('order/journal', 'public');
  }

  public function getFirstOrderStatus()
  {
    return OrderStatus::where('name', 'Verification')->limit(1)->first()->id;
  }
  public function cek()
  {
    $validated = $this->validate();
    $createOrder = DB::transaction(function () {
      $orderNumber = Str::upper(Str::uuid());
      $order = Order::create([
        'order_number' => $orderNumber,
        'package' => $this->package,
        'customer_id' => $this->customer_id,
        'order_date' => now(),
        'total_termin' => 3,
      ]);


      foreach (range(1, 3) as $term) {
        $tr = OrderTermin::create([
          'order_id' => $order->id,
          'term' => $term,
          'is_paid' => false,
        ]);
      }

      $loaa_file = "loca.pdf";

      $article = Article::create([
        'journal_id' => $this->journal_id,
        'order_id' => $order->id,
        'title' => $this->title,
        'article_link' => $this->publish_link,
        'authors' => $this->authors,
        'publish_date' => $this->publish_date,
        'estimated_publish_date' => $this->estimated_publish_date,
        'loa_file' => $loaa_file,
        'submit_date' => $this->submission_date,
      ]);

      //save article

      FileHistory::create([
        'article_id' => $article->id,
        'file_url' => $this->uploadArticle(),
        'customer_file' => true,
        'name' => "Naskah Awal"
      ]);

      //insert order status
      OrderNotes::create([
        'order_status_id' => $this->getFirstOrderStatus(),
        'note' => "Order sedang di verifikasi dan di validatsi oleh tim",
        'order_id' => $order->id,
      ]);
      return $order;


    });

    if ($createOrder) {
      return redirect()->route('admin.order.detail', [
        'order_id' => $createOrder->id,
      ]);
    }

  }
  public function render()
  {
    return view('livewire.form-order');
  }
}
