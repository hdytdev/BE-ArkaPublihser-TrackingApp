<?php

namespace App\Livewire\Form;

use App\Models\Customer;
use Livewire\Attributes\Modelable;
use Livewire\Component;

class SelectCustomer extends Component
{

  #[Modelable]
  public $customer_id;
  public function render()
  {
    return view('livewire.form.select-customer', [
      'customers' => Customer::all(),
    ]);
  }
}
