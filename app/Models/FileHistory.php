<?php

namespace App\Models;

use App\WithFormatedTimeStamp;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileHistory extends Model
{
  /** @use HasFactory<\Database\Factories\FileHistoryFactory> */
  use HasFactory, HasUuids,WithFormatedTimeStamp;
  public $fillable = [
    'article_id',
    'name',
    'file_url',
    'customer_file'
  ];

  public function article(){
    return $this->belongsTo(Article::class);
  }


}
