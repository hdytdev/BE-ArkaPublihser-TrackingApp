<?php

namespace App\Livewire;

use App\Models\Article;
use App\Models\Order;
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
  #[Rule("required|file")]
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

  public function cek()
  {
    $this->validate();


    DB::transaction(function () {
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


      $article = Article::create([

      ])


    });

  }
  public function render()
  {
    return view('livewire.form-order');
  }
}
