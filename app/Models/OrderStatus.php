<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderStatus extends Model
{
    /** @use HasFactory<\Database\Factories\OrderStatusFactory> */
    use HasFactory,HasUuids;
    public $fillable = ['name'];
    public function casts(){
      return [];
    }
}
