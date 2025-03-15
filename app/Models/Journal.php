<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    /** @use HasFactory<\Database\Factories\JournalFactory> */
    use HasFactory;
    public $fillable = [
        'name',
        'apc_charge',
        'long_process_time',
        'index',
        'focus_and_scope',
        'journal_link',
        'accreditation',
        'category',
    ];
}
