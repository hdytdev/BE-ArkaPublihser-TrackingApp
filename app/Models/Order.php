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

  public function article(){
    return $this->hasOne(Article::class);
  }
  public function customer(){
    return $this->belongsTo(Customer::class);
  }

  public function termin(){
    return $this->hasMany(OrderTermin::class);
  }

}
