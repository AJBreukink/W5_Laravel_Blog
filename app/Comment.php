<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['article_id','content'];

    public function posts()
    {
    return $this->belongsTo(Article::class);
    }
}
