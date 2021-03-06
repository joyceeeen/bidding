<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Vinkla\Hashids\Facades\Hashids;

class User extends Authenticatable implements MustVerifyEmail
{
  use Notifiable;

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = [
    'first_name','last_name','mobile_number','avatar','is_seller','is_admin', 'email', 'password','is_confirmed','remarks'
  ];

  /**
  * The attributes that should be hidden for arrays.
  *
  * @var array
  */
  protected $hidden = [
    'password', 'remember_token',
  ];

  protected $appends = ['name','hash'];


  public function getHashAttribute()
  {
    return Hashids::encode($this->id);
  }

  /**
  * The attributes that should be cast to native types.
  *
  * @var array
  */
  protected $casts = [
    'email_verified_at' => 'datetime',
  ];

  public function getNameAttribute()
  {
    return ucwords($this->first_name.' '.$this->last_name);
  }

  public function ids(){
    return $this->hasOne('App\IdentificationPhotos','user_id','id');
  }

  public function products(){
    return $this->hasMany('App\Products','user_id','id');
  }

  public function allRatings(){
    return $this->hasManyThrough('App\Ratings','App\Products','user_id','product_id');
  }
}
