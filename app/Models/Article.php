<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /** @use HasFactory<\Database\Factories\ArticleFactory> */
    use HasFactory,HasUuids;
    public $fillable = [
        'journal_id',
        'order_id',
        'title',
        'article_link',
        'authors',
        'publish_date',
        'estimated_publish_date',
        'loa_file',
        'submit_date'
    ];
    public function casts(){
        return [
            'estimated_publish_date' => 'date',
            'submit_date' => 'date',
            'publish_date' => "date:Y-m-d"
        ];
    }
    public function order(){
        return $this->belongsTo(Order::class);
    }
    public function journal(){
        return $this->belongsTo(Journal::class);
    }
    public function fileHistory(){
        return $this->hasMany(FileHistory::class);
    }

}
