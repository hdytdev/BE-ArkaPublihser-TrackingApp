<?php

namespace App\Livewire\OrderDetail;

use Livewire\Component;

class DetailJournal extends Component
{
    public $order;
    public function render()
    {
        return view('livewire.order-detail.detail-journal');
    }
}
