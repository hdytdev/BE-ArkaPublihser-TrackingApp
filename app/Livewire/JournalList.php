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
    $journal = Journal::where(function ($query) {
      $query->where('category', $this->category);
    })->paginate(15);
    if ($journal && $journal->count() < 1) {
      redirect(route('admin.journal'));
    }
    return $journal;
  }
  public function delete($id)
  {
    $deleted = Journal::find($id)->delete();
    if ($deleted) {
      return true;
    }
  }
  public function render()
  {
    return view('livewire.journal-list', [
      'journals' => $this->getJournal(),
    ])->title(
        "Journal $this->category"
      );
  }
}
