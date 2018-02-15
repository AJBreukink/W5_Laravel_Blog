<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
<<<<<<< HEAD
    //
=======
    protected $fillable = ['article_id','content'];
    
    public function posts()
    {
    return $this->belongsTo(Article::class);
    }
>>>>>>> Comments
}
