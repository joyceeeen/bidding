<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use Carbon\Carbon;
use App\OrderStatus;
use Notification;
use App\Notifications\OrderNotification;

class JobController extends Controller
{
  public function run(){
    $products = Products::where('ends_on','<',Carbon::now())->where('has_ended',null)->with('bids')->withCount('bids')->get();
    foreach($products as $product){
      $product->has_ended = 1;
      $product->save();

      $lastBid = $product->lastBid;
      $details  = null;
      if($product->bids_count == 1){
        if($lastBid){
          $order = new OrderStatus();
          $order->order_id = $lastBid->id;
          $order->status_id = 1;
          $order->save();

          $details2 = [
            'greeting' => mb_strtoupper($product->title).': You won the bidding!',
            'body' => "Last Price: PHP ".$lastBid->amount,
            'actionText'=>'',
            'actionURL' => route('order.status', ['product'=>$product->hash]),
            'order_id' => $lastBid->id
          ];

          $details = [
            'greeting' => mb_strtoupper($product->title).': BIDDING ENDED!',
            'body' => "Last Price: PHP ".$lastBid->amount,
            'actionText'=>'',
            'actionURL' => route('sold.products'),
            'order_id' => $lastBid->id
          ];
          Notification::send($lastBid->user, new OrderNotification($details2));
          //SEND EMAIL
        }else{
          $details = [
            'greeting' => mb_strtoupper($product->title).': BIDDING EXPIRED!',
            'body' => "No one bidded on your product. :(",
            'actionText'=>'',
            'actionURL' => route('sold.products'),
            'order_id' => ''
          ];

        }
        Notification::send($product->seller, new OrderNotification($details));
      }
    }
  }
}
