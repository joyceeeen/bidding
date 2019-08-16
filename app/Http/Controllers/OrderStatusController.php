<?php

namespace App\Http\Controllers;

use App\OrderStatus;
use Illuminate\Http\Request;
use Notification;
use App\Status;
use App\Notifications\OrderNotification;
class OrderStatusController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OrderStatus  $orderStatus
     * @return \Illuminate\Http\Response
     */
    public function show(OrderStatus $orderStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OrderStatus  $orderStatus
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderStatus $orderStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OrderStatus  $orderStatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $order = OrderStatus::find($id);
        $order->status_id = $request->nextStats;
        $order->save();

        $status = Status::find($request->nextStats);
        $body = $status->status;

        if($request->nextStats == 3){
          $body = $status->status.' You can now review the product!';
        }

        $details = [
          'greeting' => mb_strtoupper($order->order->product->title),
          'body' => $body,
          'actionText' => '',
          'actionURL' => route('order.status', ['product'=>$order->order->product->hash]),
          'order_id' => $order->id
        ];


        Notification::send($order->order->user, new OrderNotification($details));

        // Notification::send($user, new MyFirstNotification($details));

        return redirect()->back()->with('success','Status has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OrderStatus  $orderStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderStatus $orderStatus)
    {
        //
    }
}
