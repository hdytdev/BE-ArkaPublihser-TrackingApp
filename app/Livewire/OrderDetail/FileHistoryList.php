<?php

namespace App\Livewire\OrderDetail;

use App\Models\FileHistory;
use Livewire\Attributes\Locked;
use Livewire\Component;

class FileHistoryList extends Component
{
  public $on_editable = true;
  #[Locked]
  public $article_id;
  public function getFiles(){
    return FileHistory::where('article_id', $this->article_id)->latest()->get();
  }
    public function render()
    {
        return view('livewire.order-detail.file-history-list',[
          'files' => $this->getFiles(),
        ]);
    }
}
