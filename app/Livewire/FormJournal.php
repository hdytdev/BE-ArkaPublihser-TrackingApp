<?php

namespace App\Livewire;

use App\Models\Journal;
use Livewire\Attributes\Rule;
use Livewire\Component;

class FormJournal extends Component
{
  public $isEditMode = false;
  public ?string $id = null;
  public $journal;
  #[Rule("required|string")]
  public string $abbreviation;
  #[Rule("required|string")]
  public string $name;
  #[Rule("required|string")]
  public string $apc_charge;
  #[Rule("required|string")]
  public string $processing_time;
  #[Rule("required|string")]
  public string $category;
  #[Rule("required|string")]
  public string $focus;
  #[Rule("required|string")]
  public string $scope;
  #[Rule("required|string")]
  public string $index;
  #[Rule("required|string")]
  public string $accreditation;
  #[Rule("required|string")]
  public string $journal_link;
  #[Rule("required|string|max:8|min:8|unique:journals,issn")]
  public string $issn;
  #[Rule("required|string")]
  public string $publisher;

  public function mount()
  {
    if (!empty($this->id)) {
      $this->journal = Journal::find($this->id);
      if ($data = $this->journal->toArray()) {
        $this->isEditMode = true;
        foreach ($data as $attrName => $value) {
          $this->{$attrName} = $value;
        }
      }
    }

    if (!$this->journal) {
      redirect()->route('admin.journal.new');
    }
  }

  public function save()
  {
    $validateRule = $this->getRules();
    if ($this->isEditMode && $this->journal->issn === $this->issn) {
      $validateRule['issn'] = "required|string|max:8|min:8";
    }
    $validated = $this->validate($validateRule);

    if ($this->isEditMode) {
      $saved = $this->journal->update($validated);
      if ($saved) {
        $this->dispatch('saved', [
          "success" => true,
          "message" => "Journal berhasil disimpan"
        ]);
      } else {
        $this->dispatch('saved', [
          "success" => false,
          "message" => "Journal Gagal simpan"
        ]);
      }
    } else {
      if (Journal::create($validated)) {
        $this->dispatch('saved', [
          "success" => true,
          "message" => "Journal berhasil ditambahkan"
        ]);
      } else {
        $this->dispatch('saved', [
          "success" => false,
          "message" => "Journal Gagal ditambahkan"
        ]);
      }
    }


  }

  public function render()
  {


    return view('livewire.form-journal');
  }
}
