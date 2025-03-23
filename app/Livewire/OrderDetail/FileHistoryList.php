<?php

namespace App\Livewire\OrderDetail;

use App\Models\FileHistory;
use Livewire\Attributes\Locked;
use Livewire\Component;
use Livewire\WithFileUploads;

class FileHistoryList extends Component
{
  use WithFileUploads;
  public $on_editable = true;
  #[Locked]
  public $article_id;
  public $filename;
  public $file;
  public function getFiles()
  {
    return FileHistory::where('article_id', $this->article_id)->latest()->get();
  }

  public function new()
  {
    // $this->dispatch('modal_close');
  }

  public function render()
  {
    return view('livewire.order-detail.file-history-list', [
      'files' => $this->getFiles(),
    ]);
  }
}
