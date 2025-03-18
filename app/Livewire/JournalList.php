<?php

namespace App\Livewire;

use App\Models\Journal;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;
class JournalList extends Component
{
  use WithPagination;
  public $category = "internal";

  public function getJournal()
  {
    return Journal::where(function ($query) {
      $query->where('category', $this->category);
    })->paginate(15);
  }
  public function delete($id){
    $deleted = Journal::find($id)->delete();
    if($deleted) {
      return true;
    }
  }
  public function render()
  {
    return view('livewire.journal-list',[
      'journals' => $this->getJournal(),
    ])->title(
      "Journal $this->category"
    );
  }
}
