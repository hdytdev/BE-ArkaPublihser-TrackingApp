<?php

namespace App\Livewire\Form;

use App\Models\Position;
use Illuminate\Database\Eloquent\Model;
use Livewire\Attributes\Modelable;
use Livewire\Component;

class SelectPosition extends Component
{
    public $useManualInput;
    #[Modelable]
    public $position_id;
    public \Illuminate\Database\Eloquent\Collection $position;
    public $new_name;
    public function getPosition()
    {
        return Position::all();
    }
    public function simpan()
    {
        if ($this->useManualInput) {
            $dat = Position::firstOrCreate([
                'name' => $this->new_name
            ]);
            $this->position_id = $dat->id;
            $this->reset();
        }
    }

    public function render()
    {
        return view('livewire.form.select-position', [
            'positions' => $this->getPosition()
        ]);
    }
}
