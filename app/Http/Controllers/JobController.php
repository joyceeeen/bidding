<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use Carbon\Carbon;
use App\OrderStatus;
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

        //SEND EMAIL
      }
    }
}
