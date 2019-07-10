<?php

namespace App\Http\Controllers;

use App\Orders;
use Illuminate\Http\Request;
use Vinkla\Hashids\Facades\Hashids;
use App\Products;
use Carbon\Carbon;
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

    $product = Products::whereId($productId)->where('has_ended',1)->orWhere('ends_on','<=',Carbon::now())->whereHas('lastBid')->first();

    if(!$product){
        abort(404);
    }

    return view('products.winning',compact('product'));
  }

  public function myOrders(){
    $auth = auth()->user();
    $orders = Orders::where('user_id',$auth->id)->whereHas('product',function($query){
      $query->where('has_ended',1)->orWhere('ends_on', '<=', Carbon::now());
    })->get();


    return view('products.purchased-items',compact('orders'));
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
