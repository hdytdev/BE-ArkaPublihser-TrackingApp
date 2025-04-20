<?php

namespace App\Http\Resources\Api;

use App\Http\Resources\Api\Tracking\TerminResource;
use App\Models\OrderStatus;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResources extends JsonResource
{
    public function getTermin()
    {
        $terms = [];
        foreach ($this->termin as $term) {
            $terms['Termin ' . $term->term] = $term->is_paid ? "PAID" : "UNPAID";
        }
        return $terms;
    }
    public function getStatus()
    {

        $status = [];
        foreach (OrderStatus::all() as $item) {
            $status[$item->name] = false;
        }
        foreach ($this->notes as $note) {
            if (isset($status[$note->orderStatus->name])) {
                $status[$note->orderStatus->name] = true;
            }
        }

        return $status;
    }
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'order_steps' => $this->getStatus(),
            'id' => $this->order_number,
            'customerName' => $this->customer->name,
            'orderDate' => Carbon::parse($this->order_date)->format('d-M-Y h:i:s'),
            'package' => $this->package,
            'terms' => $this->termin->count(),
            'payments' => $this->getTermin(),
        ];
    }
}
