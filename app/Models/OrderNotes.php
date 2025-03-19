<?php

namespace App\Models;

use App\WithFormatedTimeStamp;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderNotes extends Model
{
    /** @use HasFactory<\Database\Factories\OrderNotesFactory> */
    use HasFactory,HasUuids,WithFormatedTimeStamp;

    public $fillable = [
      'order_status_id',
      'note',
      'order_id'
    ];

    public function order(){
      return $this->belongsTo(Order::class);
    }
    public function orderStatus(){
      return $this->belongsTo(OrderStatus::class);
    }
}
