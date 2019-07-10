@extends('layouts.app')

@section('content')


<!--Main layout-->
<main class="mt-5 pt-4">
  <div class="container dark-grey-text mt-5">

    <h3>List of Purchased</h3>
    <table class="table table-hover">
      <thead>
        <tr>

          <th>Item</th>
          <th>Amount</th>
          <th>Address</th>
          <th>Date of Bid</th>
          <th>Date of Purchased</th>
          <th></th>
        </tr>
      </thead>
      <tbody>

        <tr>
          @foreach($orders as $order)
          <td>{{$order->product->title}}</td>
          <td>{{$order->amount}}</td>
          <td>{{$order->product->location}}</td>
          <td>{{$order->created_at}}</td>
          <td>{{Carbon\Carbon::parse($order->product->ends_on)->format("Y-m-d")}}</td>
          <td><a class="btn btn-primary btn-sm" href="{{route('order.status',['id'=>$order->product->hash])}}">Check Status</a></td>

          @endforeach
        </tr>
      </tbody>
    </table>

  </div>
</main>
<!--Main layout-->
@endsection
