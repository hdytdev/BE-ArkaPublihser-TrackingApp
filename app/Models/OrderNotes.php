<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderNotes extends Model
{
    /** @use HasFactory<\Database\Factories\OrderNotesFactory> */
    use HasFactory,HasUuids;

    public $fillable = [
      'order_status_id',
      'note',
      'order_id'
    ];
}
