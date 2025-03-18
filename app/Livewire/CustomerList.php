<?php

namespace App\Livewire;

use App\Models\Customer;
use Illuminate\Support\Facades\Cache;
use Livewire\Attributes\Lazy;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;
class CustomerList extends Component
{
  public $key = "dcd-";
  use WithPagination;

  #[Url(as: "query", nullable: true, keep: true, history: true)]
  public ?string $searchQuery = "";

  public function updatingSearchQuery()
  {
    Cache::delete(key: $this->getId());
    $this->gotoPage(1);
  }

  public function search()
  {
    $this->resetPage();
  }

  private function getCustomer()
  {
    $customer = Customer::with('institution')
      ->whereHas('institution', function ($query) {
        $query->orWhere('name', 'like', "%{$this->searchQuery}%");
      })
      ->where(function ($query) {
        $query->orWhere('name', 'like', "%{$this->searchQuery}%");
      })->paginate(19);
    return $customer;
  }
  public function resetCache()
  {
    Cache::delete(key: $this->key.$this->getId());
  }
  public function delete($key)
  {
    try {
      Customer::findOrFail($key)->delete();
      $this->resetCache();
    } catch (\Exception $e) {
      dump($e->getMessage());
    }
  }
  #[Title("Customers")]
  public function render()
  {
    if ($this->getPage()) {
      $this->resetCache();
    }
    $customer = Cache::remember($this->key.$this->getId(), 3600, function () {
      return $this->getCustomer();
    });
    return view('livewire.customer-list', [
      'customers' => $customer
    ]);
  }
}
