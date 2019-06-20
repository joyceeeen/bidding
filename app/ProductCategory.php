<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
      protected $fillable = [
        'product_id','category_id'
      ];

      public function description(){

        return $this->belongsTo('App\Category','product_id','id');
      }
}
