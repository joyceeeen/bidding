<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ratings extends Model
{
  protected $fillable = [
    'product_id','user_id','title','rate','comment'
  ];

  public function user(){
    return $this->hasOne('App\User','id','user_id');
  }

  public function product(){
    return $this->hasOne('App\Products','id','product_id');
  }

}
