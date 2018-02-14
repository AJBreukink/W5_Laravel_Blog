<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
  public function scopePublished($query)
  {
    return $query->where('deleted', 0)->latest();
  }


}
