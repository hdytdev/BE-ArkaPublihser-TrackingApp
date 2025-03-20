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
    'invoice_file',
    'kwitansi_file',
    'payment_link',
    'total_termin'
  ];

  public function article()
  {
    return $this->hasOne(Article::class);
  }
  public function customer()
  {
    return $this->belongsTo(Customer::class);
  }

  public function termin()
  {
    return $this->hasMany(OrderTermin::class);
  }
  public function getFileInvoiceUrlAttribute()
  {
    return asset(sprintf("storage/%s"), $this->invoice_file);
  }
  public function notes()
  {
    return $this->hasMany(OrderNotes::class)->orderByDesc('created_at');
  }

  public function getStatusPembayaranAttribute()
  {
    $termin_paid = $this->termin->filter(function ($item) {
      return true === $item->is_paid;
    });
    if ($termin_paid->count() >= $this->total_termin) {
      return true;
    }
    return false;

  }

}
