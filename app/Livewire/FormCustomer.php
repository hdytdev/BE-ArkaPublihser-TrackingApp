<?php

namespace App\Livewire;

use App\Models\Customer;
use App\Models\Institution;
use Illuminate\Support\Str;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Reactive;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;

class FormCustomer extends Component
{
  public $id = null;
  public $data;
  #[Title("Add New Customer")]

  #[Rule("required|string|max:100")]
  public $name;
  #[Rule("required|string|max:100")]
  public $phone_number;
  #[Rule(rule: "required|string|max:100|unique:customers,email")]
  public $email;
  #[Rule("required|string|max:100")]
  public $regional_origin;
  #[Rule("required|string|max:100")]

  public $institution_id;
  #[Rule("required|string|max:100")]
  public $position;

  #[Computed]
  public function institution()
  {
    return Institution::all();
  }
  
  
  public function save()
  {
    $rules = $this->getRules();
    if ($this->data && ($this->data->email === $this->email)) {
      $rules['email'] = "required|string";
    }
    $validated = $this->validate($rules);
    if (false === ($this->data && $this->id)) {
      $validated['customer_id'] = Str::upper(Str::random(16));
      $created = Customer::create($validated);
      if ($created) {
        $saved = $this->dispatch(event: 'customer_saved', params: true);
        $this->reset();
      }
    } else {
      $saved = $this->data->update($validated);
    }
    if ($saved) {
      $this->dispatch(event: 'customer_saved', params: true);
    } else {
      $this->dispatch(event: 'customer_saved', params: false);
    }
  }
  public function mount()
  {
    if ($this->id) {
      $this->data = Customer::find($this->id);
      if ($this->data) {
        foreach ($this->data->toArray() as $key => $value) {
          $this->{$key} = $value;
        }
      } else {
        return redirect()->route("admin.customer");
      }
    }
  }
  public function render()
  {

    return view('livewire.form-customer');
  }
}
