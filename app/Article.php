<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
  public function scopePublished($query)
  {
    return $query->where('deleted', 0)->latest();
  }

  public function category(){

    return $this->hasManyThrough(Articles_Category::class, Category::class);
  }

  public function comments()
  {
    return $this->hasMany(Comment::class);
  }


}
