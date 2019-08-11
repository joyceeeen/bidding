<?php

namespace App\Http\Controllers;

use App\Orders;
use Illuminate\Http\Request;
use Vinkla\Hashids\Facades\Hashids;
use App\Products;
use Carbon\Carbon;
use App\OrderStatus;
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
    // $lastBidValue = Orders::whereProductId($productId)->oldest();
    // if()
    // $request->validate([
    //   'bid' => 'required|min:'.$lastBidValue->amount,
    // ]);

    $orders = new Orders();
    $orders->product_id = $productId;
    $orders->user_id = auth()->user()->id;
    $orders->amount = $request->bid;
    $orders->save();

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
