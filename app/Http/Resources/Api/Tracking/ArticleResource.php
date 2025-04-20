<?php

namespace App\Http\Resources\Api\Tracking;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'title' => $this->title,
            'authors' => $this->authors,
            'publicationDate' => Carbon::parse($this->publish_date)->format('d-M-Y h:i:s'),
            'estimatedPublication' => Carbon::parse($this->estimated_publish_date)->format('d-M-Y h:i:s'),
            'submissionDate' => Carbon::parse($this->submit_date)->format('d-M-Y h:i:s'),
        ];
    }
}
