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
      $products = Products::where('ends_on','<=',Carbon::now())->get();
      foreach($products as $product){
        $product->has_ended = 1;
        $product->save();

        $lastBid = $product->lastBid;

        if($lastBid){
          $order = new OrderStatus();
          $order->order_id = $lastBid->id;
          $order->status_id = 1;
          $order->save();
        }

        $details = [
          'greeting' => mb_strtoupper($productDetails->title).': BIDDING ENDED!',
          'body' => "Last Price: PHP ".$lastBid->amount,
          'actionURL' => route('sold.products'),
          'order_id' => $lastBid->id
        ];


        $details2 = [
          'greeting' => mb_strtoupper($productDetails->title).': You won the bidding!',
          'body' => "Last Price: PHP ".$lastBid->amount,
          'actionURL' => route('order.status', ['product'=>$product->hash]),
          'order_id' => $lastBid->id
        ];

        Notification::send($product->seller, new OrderNotification($details));
        Notification::send($lastBid->user, new OrderNotification($details2));
        //SEND EMAIL
      }
    }
}
