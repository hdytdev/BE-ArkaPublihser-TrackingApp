<?php

namespace App\Http\Resources\Api\Tracking;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FilesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name,
            'date' => Carbon::parse($this->created_at)->format("d-M-Y"),
            'download_id' => $this->id,
        ];
    }
}
