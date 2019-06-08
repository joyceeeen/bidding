<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      dd('hi');
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
    public function show(Products $products)
    {
        //
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

       $product = Products::where('user_id', auth()->user()->id);

       return view('products.my-products',compact('product'));
     }
}
