<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /** @use HasFactory<\Database\Factories\CustomerFactory> */
    use HasFactory;

    public $fillable = [
        'customer_id',
        'nama',
        'no_telp',
        'asal_daerah',
        'instansi',
        'email',
        'jabatan',
    ];
    protected function customerId(){
        return Attribute::make(
            set:fn(string $value) => rand(),
        );
    }
}
