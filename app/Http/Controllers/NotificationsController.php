<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationsController extends Controller
{
  //

  public function index(Request $request){

    if($request->ajax()){
      $user = auth()->user();
      $notifs = $user->notifications;
      $countOfUnread = $user->unreadNotifications->count();

      return response([$notifs,'unread'=>$countOfUnread],200);
    }

  }
  public function read($id,Request $request){

    if($request->ajax()){

      $notifs = auth()->user()->unreadNotifications->where('id',$id)->first();

      if($notifs) {
        $notifs->markAsRead();
      }
      return response($notifs,200);
    }
  }
}
