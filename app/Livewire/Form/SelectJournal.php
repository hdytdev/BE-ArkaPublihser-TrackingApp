<?php

namespace App\Livewire\Form;

use App\Models\Journal;
use Livewire\Attributes\Modelable;
use Livewire\Component;

class SelectJournal extends Component
{
  #[Modelable]
  public $journal_id;
  public function render()
  {
    return view('livewire.form.select-journal', [
      'journals' => Journal::all(),
    ]);
  }
}
