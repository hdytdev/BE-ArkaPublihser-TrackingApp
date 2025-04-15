<?php

namespace App\Http\Resources\Api\Tracking;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NotesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'date' => Carbon::parse($this->created_at)->format("d-M-Y"),
            'progress' => $this->orderStatus->name,
            'identifier' => "[1]",
            'text' => $this->note,
        ];
    }
}
