<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Vinkla\Hashids\Facades\Hashids;

class Products extends Model
{

  protected $fillable = [
    'user_id','title','description','location','province','img_path', 'starts_on','ends_on','base_price', 'weight', 'unit'
  ];

  protected $appends = ['hash','ilan'];

  public function getHashAttribute()
  {
    return Hashids::encode($this->id);
  }
  public function getIlanAttribute()
  {
    return $this->weight.' '.$this->unit;
  }

  public function category(){
    return $this->hasMany('App\ProductCategory','product_id');
  }

  public function seller(){
    return $this->belongsTo('App\User','user_id');
  }

  public function photos(){
    return $this->hasMany('App\Photos','product_id');
  }

  public function bids(){
    return $this->hasMany('App\Orders','product_id');
  }

  public function ratings(){
    return $this->hasMany('App\Ratings','product_id');
  }

  public function mainCategory(){
    return $this->hasOne('App\ProductCategory','product_id')->oldest();
  }

  public function thumbnail(){
    return $this->hasOne('App\Photos','product_id')->oldest();
  }

  public function lastBid(){
    return $this->hasOne('App\Orders','product_id')->latest();
  }

  public function winner(){
    return $this->hasOneThrough('App\OrderStatus','App\Orders','product_id','order_id');
  }
}
