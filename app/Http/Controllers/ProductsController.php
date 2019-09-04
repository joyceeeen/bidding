<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;
use Vinkla\Hashids\Facades\Hashids;
use App\ProductCategory;
use App\Status;
use App\Query;
use App\OrderStatus;
class ProductsController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index(Request $request)
  {
    $products = null;
    $searches = null;
    if($request->code){
      $category = Hashids::decode($request->code)[0];
      $categories = ProductCategory::where('category_id',$category)->groupBy('product_id')->pluck('product_id');
      $searches = Query::selectRaw("search,count(id) as count")->groupBy('search')->orderBy('count','desc')->limit(3)->get();
      $top3Sold = Products::selectRaw("title,count(id) as count")->whereHas('winner')->groupBy('title')->orderBy('count','desc')->limit(3)->get();
      if($request->product_name){
        $query = new Query();
        $query->search = mb_strtolower($request->product_name);
        $query->save();
        $products = Products::whereIn('id',$categories)->where('title','like','%'.$request->product_name.'%')->where('has_ended',null)->with('thumbnail')->get();
      }else{
        $products = Products::whereIn('id',$categories)->with('thumbnail')->where('has_ended',null)->get();
      }
    }else{
      $searches = Query::selectRaw("search,count(id) as count")->groupBy('search')->orderBy('count','desc')->limit(3)->get();
      $top3Sold = Products::selectRaw("title,count(id) as count")->whereHas('winner')->groupBy('title')->orderBy('count','desc')->limit(3)->get();
      if($request->product_name){
        $query = new Query();
        $query->search = mb_strtolower($request->product_name);
        $query->save();
        $products = Products::where('title','like','%'.$request->product_name.'%')->where('has_ended',null)->with('thumbnail')->get();
      }else{
        $products = Products::with('thumbnail')->where('has_ended',null)->get();
      }
    }

    return view('products.products',compact('products','searches','top3Sold'));
  }

  public function sold(Request $request){
    $user = auth()->user();
    $products = Products::where('user_id',$user->id)->whereHas('winner')->with(['winner.status','ratings'])->get();
    $ended = Products::where('user_id',$user->id)->where('has_ended',1)->whereHas('bids')->whereDoesntHave('winner')->with(['bids'=>function($query){
      $query->orderBy('amount','desc');
    }])->get();

    $statuses = Status::get();
    return view('seller.sold-products',compact('products','user','statuses','ended'));
  }
  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view('products.add-product');
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    $product = new Products();
    $product->user_id = auth()->user()->id;
    $product->title = $request->title;
    $product->description = $request->description;
    $product->province = $request->province;
    $product->location = $request->location;
    $product->starts_on = $request->starts_on;
    $product->ends_on = $request->ends_on;
    $product->base_price = $request->base_price;
    $product->weight = $request->weight;
    $product->unit = $request->unit;
    $product->save();

    return redirect()->route('photos.create', ['product' => $product->hash]);
  }




  /**
  * Display the specified resource.
  *
  * @param  \App\Products  $products
  * @return \Illuminate\Http\Response
  */
  public function show(Request $request)
  {
    $productId = Hashids::decode($request->product)[0];
    $product = Products::whereId($productId)->with(['lastBid','mainCategory.description','thumbnail','bids.user','ratings'])->first();

    return View('products.product',compact('product'));

  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\Products  $products
  * @return \Illuminate\Http\Response
  */
  public function edit(Products $products)
  {
    //
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\Products  $products
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, Products $products)
  {
    //
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  \App\Products  $products
  * @return \Illuminate\Http\Response
  */
  public function destroy(Products $products)
  {
    //
  }

  //CUSTOM FUNCTIONS
  /**
  * Display the sellers products
  *
  * @param  \App\Products  $products
  * @return \Illuminate\Http\Response
  */
  public function myProducts(){

    $products = Products::where('user_id', auth()->user()->id)->with(['lastBid','mainCategory.description','thumbnail'])->get();
    return view('products.my-products',compact('products'));
  }
}
