<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class OrderTermin extends Model
{
  use HasUuids;
  public $fillable = [
    'order_id',
    'term',
    'is_paid',
  ];
}
