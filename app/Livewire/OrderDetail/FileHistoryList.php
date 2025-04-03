<?php

namespace App\Livewire\OrderDetail;

use App\Models\FileHistory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
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
    $this->validate([
      'file' => ['required', 'file', "extensions:pdf,docx,doc", 'max:30720'],
      'filename' => "required"
    ]);
    $file = $this->file->store('file_histories');
    FileHistory::create([
      'file_url' => $file,
      'name' => $this->filename,
      'article_id' => $this->article_id,
      'customer_file' => false,
    ]);
    $this->dispatch('modal_close');
  }
  public function download($file)
  {
    if (Storage::disk('local')->exists($file)) {
      return response()->download(Storage::disk('local')->path($file));
    }
  }
  public function delete($id)
  {
    $file = FileHistory::findOrFail($id);
    if ($file->customer_file) {
      $this->dispatch('modal_close');
      return;
    }
    if ($file) {
      //file
      $deleted = DB::transaction(function () use ($file) {
        $filename = $file->file_url;
        if (Storage::disk("local")->exists($filename)) {
          Storage::disk("local")->delete($filename);
        }
        $file->delete();
        return true;
      });
      if ($deleted) {
        $this->dispatch('modal_close');
      }
    }
  }
  public function render()
  {
    return view('livewire.order-detail.file-history-list', [
      'files' => $this->getFiles(),
    ]);
  }
}
