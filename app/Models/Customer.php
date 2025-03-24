<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /** @use HasFactory<\Database\Factories\CustomerFactory> */
    use HasFactory, HasUuids;
    public $fillable = [
        'customer_id',
        'id',
        'name',
        'email',
        'position_id',
        'phone_number',
        'regional_origin',
        'institution_id',
    ];
    public function getRegisteredDateAttribute()
    {
        return Carbon::parse($this->created_at)->format("d-M-Y");
    }
    public function institution()
    {
        return $this->belongsTo(Institution::class);
    }
    public function order()
    {
        return $this->hasMany(Order::class);
    }
    public function position()
    {
        return $this->belongsTo(Position::class);
    }
}
