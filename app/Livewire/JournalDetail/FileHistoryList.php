<?php

namespace App\Livewire\JournalDetail;

use App\Models\FileHistory;
use Livewire\Component;

class FileHistoryList extends Component
{
  public $article_id;
  public function getFiles(){
    return FileHistory::where('article_id', $this->article_id)->latest()->get();
  }
    public function render()
    {
        return view('livewire.journal-detail.file-history-list',[
          'files' => $this->getFiles(),
        ]);
    }
}
