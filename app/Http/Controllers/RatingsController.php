<?php

namespace App\Http\Controllers;

use App\Ratings;
use Illuminate\Http\Request;
use App\OrderStatus;
class RatingsController extends Controller
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
        $user = auth()->user();
        $ratings = new Ratings();
        $ratings->user_id = $user->id;
        $ratings->product_id = $request->product_id;
        $ratings->title = $request->title;
        $ratings->rate = $request->star;
        $ratings->comment = $request->description;
        $ratings->save();

        $order = OrderStatus::find($request->order_id);
        $order->status_id = 5;
        $order->save();

        return redirect()->back()->with('success','Item has been successfully rated!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ratings  $ratings
     * @return \Illuminate\Http\Response
     */
    public function show(Ratings $ratings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ratings  $ratings
     * @return \Illuminate\Http\Response
     */
    public function edit(Ratings $ratings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ratings  $ratings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ratings $ratings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ratings  $ratings
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ratings $ratings)
    {
        //
    }
}
