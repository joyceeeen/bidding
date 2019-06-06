<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Vinkla\Hashids\Facades\Hashids;

class Products extends Model
{

  protected $fillable = [
    'user_id','title','description','location','province','img_path', 'starts_on','ends_on','base_price', 'weight', 'unit'
  ];

  protected $appends = ['hash'];

  public function getHashAttribute()
  {
    return Hashids::encode($this->id);
  }
}
