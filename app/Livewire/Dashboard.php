<?php

namespace App\Livewire;

use App\Models\Customer;
use App\Models\Journal;
use App\Models\Order;
use Livewire\Component;

class Dashboard extends Component
{
    public function getOrderStatistic()
    {
        $now = now()->subDays(1);
        $orderKemarin = Order::whereDay('order_date', $now)->count();
        $orderSekarang = Order::whereDay('order_date', now())->count();
        $orderCount = Order::count();

        $total = $orderKemarin > 0 ? ((($orderSekarang - $orderKemarin) / $orderKemarin) * 100) : ($orderSekarang > 0 ? 0 : 100);

        return [
            'new' => $orderSekarang,
            'type' => $total >= 0 ? "NAIK" : "TURUN",
            'persentase' => round($total),
            'total' => $orderCount
        ];

    }
    public $data = [];

    public function mount()
    {
        $this->getOrderStatistic();
        $this->data['order'] = $this->getOrderStatistic();
        $this->data['jurnal'] = Journal::count();
        $this->data['customer'] = Customer::count();
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
