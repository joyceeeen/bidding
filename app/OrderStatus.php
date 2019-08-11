<?php

namespace App;
use App\Status;
use Illuminate\Database\Eloquent\Model;
use Vinkla\Hashids\Facades\Hashids;

class OrderStatus extends Model
{
  protected $fillable = [
    'order_id','status_id'
  ];

  protected $appends = ['ref'];


  public function order(){
    return $this->hasOne('App\Orders','id','order_id');
  }

  public function status(){
    return $this->hasOne('App\Status','id','status_id');
  }

  public function getRefAttribute()
  {
    return Hashids::encode($this->id);
  }


}
