<?php

namespace App\Livewire\OrderDetail;

use App\Models\OrderNotes;
use App\Models\OrderStatus;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Rule;
use Livewire\Component;

class NotesList extends Component
{
  #[Locked]
  public $order_id;
  #[Rule('required')]

  public $add_notes;
  #[Rule('required')]

  public $add_status_id;
  #[Rule('required')]

  public $add_time;
  public $on_editable = false;
  #[Computed]
  public function statusess()
  {
    return OrderStatus::all();
  }
  public function getNotes()
  {
    return OrderNotes::with(['orderStatus'])->where('order_id', $this->order_id)->latest()->get();
  }
  public function add()
  {
    $this->validate();


    $data = [
      'order_id' => $this->order_id,
      'time' => $this->add_time ?? now(),
      'order_status_id' => $this->add_status_id,
      'note' => $this->add_notes,
    ];

    if ($this->on_editable) {
      $note = OrderNotes::find($this->on_editable);
      $note?->update($data);
    } else {
      OrderNotes::create($data);
    }
    $this->dispatch(event: "re_render");
    $this->resetForm();
  }

  public function edit($id)
  {
    $this->on_editable = $id;
    $note = OrderNotes::find($this->on_editable);

    if ($note) {
      $this->add_status_id = $note->order_status_id;
      $this->add_notes = $note->note;
      $this->add_time = $note->time ?? $note->created_at;
    }
    $this->dispatch("modal_edit_notes", $id);
  }

  public function delete($id)
  {
    $delete = OrderNotes::find($id)->delete();

    if ($delete) {
      $this->dispatch(event: "re_render");
    }
  }
  public function resetForm()
  {

    $this->reset(
      "on_editable",
      "add_status_id",
      "add_notes",
      "add_time",
    );

  }
  public function render()
  {

    return view('livewire.order-detail.notes-list', ["notes" => $this->getNotes()]);
  }
}
