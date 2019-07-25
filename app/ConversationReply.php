<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConversationReply extends Model
{
  protected $fillable = [
    'message','user_id','conversation_id'
  ];

  public function user(){
    return $this->belongsTo('App\User','user_id');
  }
}
