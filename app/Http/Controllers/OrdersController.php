<?php

namespace App\Http\Controllers;

use App\Orders;
use Illuminate\Http\Request;
use Vinkla\Hashids\Facades\Hashids;
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
