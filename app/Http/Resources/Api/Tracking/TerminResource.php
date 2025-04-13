<?php

namespace App\Http\Resources\Api\Tracking;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TerminResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'term' => $this->term,
            'is_paid' => $this->is_paid,
        ];
    }
}
