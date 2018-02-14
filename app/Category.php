<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function article(){

      return $this->hasManyThrough(Articles_Category::class, Article::class);
    }
}
