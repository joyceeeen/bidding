<?php

namespace App\Http\Controllers;

use App\Orders;
use Illuminate\Http\Request;
use Vinkla\Hashids\Facades\Hashids;
use App\Products;
use Carbon\Carbon;
use App\OrderStatus;
use Notification;
use App\Notifications\OrderNotification;

class OrdersController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    //
  }

  public function winner($id){
    $productId = Hashids::decode($id)[0];

    $product = Products::whereId($productId)->whereHas('winner')->first();
    $averageRate = $product->ratings->average('rate');

    if(!$product){
      abort(404);
    }

    return view('products.winning',compact('product','averageRate'));
  }


  public function pickWinner(Request $request){
      $lastBid = Orders::find($request->id);
      $product = $lastBid->product;

      $details  = null;

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


    return redirect()->back()->with('success','Thank you for choosing a winner!');
  }

  public function myOrders(){
    $auth = auth()->user();

    $orders = Orders::where('user_id',$auth->id)->whereHas('finalOrder')->with(['product','finalOrder'])->get();


    return view('products.purchased-items',compact('orders'));
  }

  public function myBids(){
    $auth = auth()->user();
    $orders = Orders::where('user_id',$auth->id)->with('product.lastBid')->get();


    return view('products.my-bids',compact('orders'));
  }


  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    //
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {

    $productId = Hashids::decode($request->product)[0];
    $productDetails = Products::find($productId);
    $user = auth()->user();
    $seller = $productDetails->seller;
    $lastDetails = $productDetails->lastBid;

    // if()
    // $request->validate([
    //   'bid' => 'required|min:'.$lastBidValue->amount,
    // ]);
    $orders = new Orders();
    $orders->product_id = $productId;
    $orders->user_id = auth()->user()->id;
    $orders->amount = $request->bid;
    $orders->save();



    $details = [
      'greeting' => mb_strtoupper($productDetails->title).': NEW BID!',
      'body' => mb_strtoupper($productDetails->title).": " .$user->name." bidded an amount of PHP ".$request->bid,
      'actionText' => mb_strtoupper($productDetails->title),
      'actionURL' => route('product.show', ['product'=>$request->product]),
      'order_id' => $orders->id
    ];

    if($lastDetails){
      $lastBidder = $productDetails->lastBid->user;

      $details2 = [
        'greeting' => mb_strtoupper($productDetails->title).': Higher bid has been made!',
        'body' => "Someone bidded an amount of PHP ".$request->bid,
        'actionText' => mb_strtoupper($productDetails->title),
        'actionURL' => route('product.show', ['product'=>$request->product]),
        'order_id' => $orders->id
      ];
     Notification::send($lastBidder, new OrderNotification($details2));
    }

    Notification::send($seller, new OrderNotification($details));

    return redirect()->back();
  }

  /**
  * Display the specified resource.
  *
  * @param  \App\Orders  $orders
  * @return \Illuminate\Http\Response
  */
  public function show(Orders $orders)
  {
    //
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\Orders  $orders
  * @return \Illuminate\Http\Response
  */
  public function edit(Orders $orders)
  {
    //
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\Orders  $orders
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, Orders $orders)
  {
    //
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  \App\Orders  $orders
  * @return \Illuminate\Http\Response
  */
  public function destroy(Orders $orders)
  {
    //
  }
}
