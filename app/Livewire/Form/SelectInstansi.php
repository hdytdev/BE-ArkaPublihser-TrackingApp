<?php

namespace App\Livewire\Form;

use App\Models\Institution;
use Livewire\Attributes\Modelable;
use Livewire\Component;

class SelectInstansi extends Component
{
  public $manual_instansi = "";
  public $useManualInput = false;
  #[Modelable]
  public $institution_id = "";
  function simpan(){
      if ( $this->useManualInput ) {
       $dat = Institution::firstOrCreate([
          'name' => $this->manual_instansi
        ]);
        $this->institution_id = $dat->id;
        $this->reset();
      }
  }
  public function render()
  {
    return view('livewire.form.select-instansi', [
      'instansi' => Institution::orderByDesc("created_at")->get(),
    ]);
  }
}
