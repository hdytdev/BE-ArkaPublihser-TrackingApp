<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicationStatus extends Model
{
    /** @use HasFactory<\Database\Factories\PublicationStatusFactory> */
    use HasFactory, HasUuids;

    public $fillable = [
        'name',
        'active'
    ];
    public function casts()
    {
        return [
            'active' => 'boolean'
        ];
    }
}
