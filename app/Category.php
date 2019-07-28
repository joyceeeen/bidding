<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Vinkla\Hashids\Facades\Hashids;

class Category extends Model
{
  protected $fillable = [
    'category_name'
  ];

  protected $appends = ['code'];


  public function getCodeAttribute()
  {
    return Hashids::encode($this->id);
  }


}
