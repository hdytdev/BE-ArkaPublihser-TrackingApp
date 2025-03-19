<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  use HasUuids;
  public $fillable = [
    'order_number',
    'package',
    'customer_id',
    'order_date',
    'total_termin'
  ];
}
