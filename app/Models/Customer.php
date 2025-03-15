<?php

namespace App\Models;

use Carbon\Carbon;
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
    public function casts(){
        return [
            'created_at' => "date"
        ];
    }
    protected function getRegistrationDateAttribute(){
        return Carbon::parse($this->created_at)->format("d-M-Y");
    }
}
