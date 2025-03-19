<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
  /** @use HasFactory<\Database\Factories\JournalFactory> */
  use HasFactory,HasUuids;

  public $fillable = [
    'abbreviation',
    'name',
    'apc_charge',
    'processing_time',
    'category',
    'focus',
    'scope',
    'index',
    'accreditation',
    'journal_link',
    'issn',
    'publisher'
  ];
  public function article(){
    return $this->hasMany(Article::class);
}

public function getJournalFullNameAttribute(){
  return sprintf("%s:%s",$this->abbreviation,$this->name);
}
public function getFocusAndScopeAttribute(){
  return sprintf("%s & %s",$this->focus,$this->scope);
}
}
