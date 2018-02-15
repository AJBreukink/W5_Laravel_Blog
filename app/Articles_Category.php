<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles_Category extends Model
{
  public function article(){

    return $this->belongsTo( Article::class);
  }
  public function category(){

    return $this->belongsTo(Category::class);
  
  }
}
