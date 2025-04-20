<?php

namespace App\Http\Resources\Api\Tracking;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class JournalResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name' => sprintf("%s:%s", $this->name, $this->abbreviation),
            'accreditation' => $this->accreditation,
            'focusScope' => sprintf("%s & %s", $this->focus, $this->scope),
        ];
    }
}
