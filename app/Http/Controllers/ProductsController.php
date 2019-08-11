<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;
use Vinkla\Hashids\Facades\Hashids;
use App\ProductCategory;
use App\Status;
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
      if($request->code){
        $category = Hashids::decode($request->code)[0];
        $categories = ProductCategory::where('category_id',$category)->groupBy('product_id')->pluck('product_id');
        if($request->product_name){
          $products = Products::whereIn('id',$categories)->where('title','like','%'.$request->product_name.'%')->get();
        }else{

          $products = Products::whereIn('id',$categories)->get();
        }
      }else{
        if($request->product_name){
          $products = Products::where('title','like','%'.$request->product_name.'%')->get();
        }else{
          $products = Products::all();
        }
      }
      return view('products.products',compact('products'));

    }

    public function sold(Request $request){
      $user = auth()->user();
      $products = Products::where('user_id',$user->id)->whereHas('winner')->with(['winner.status','ratings'])->get();
      $statuses = Status::get();
      return view('seller.sold-products',compact('products','user','statuses'));
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
      $product = Products::whereId($productId)->with(['lastBid','mainCategory.description','thumbnail','bids.user'])->first();
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
