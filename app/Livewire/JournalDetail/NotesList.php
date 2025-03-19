<?php

namespace App\Livewire\JournalDetail;

use App\Models\OrderNotes;
use App\Models\OrderStatus;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Rule;
use Livewire\Component;

class NotesList extends Component
{
  public $order_id;
  #[Rule('required')]

  public $add_notes;
  #[Rule('required')]

  public $add_status_id;
  #[Rule('required')]

  public $add_date;
  #[Computed]
  public function statusess()
  {
    return OrderStatus::all();
  }
  public function getNotes(){
    return OrderNotes::with(['orderStatus'])->where('order_id', $this->order_id)->latest()->get();
  }

  public function add()
  {
    $this->validate();
    $note = new OrderNotes([
      'order_id' => $this->order_id,
      'time' => now(),
      'order_status_id' => $this->add_status_id,
      'note' => $this->add_notes,
    ]);
    if ($note->save()) {
      $this->dispatch(event: "re_render");
    }
  }

  public function delete($id){
    $delete = OrderNotes::find($id)->delete();

    if($delete){
      $this->dispatch(event: "re_render");
    }
  }

  public function render()
  {
    return view('livewire.journal-detail.notes-list', ["notes"=>$this->getNotes()]);
  }
}
