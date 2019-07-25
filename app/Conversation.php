<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
  protected $fillable = [
    'user_one','user_two'
  ];

  public function messages(){
    return $this->hasMany('App\ConversationReply','conversation_id','id');
  }

  public function receiver(){
    return $this->hasOne('App\User','id','user_two');
  }

  public function sender(){
    return $this->hasOne('App\User','id','user_one');
  }

}
