@extends('layouts.app')

@section('content')


<!--Main layout-->
<main class="mt-5 pt-4">
  <div class="container dark-grey-text mt-5">
    @if($orders->isEmpty())
    <center>
      <h3>You haven't bid on anything yet.</h3>
    </center>
    @else

    <h3>List of Bids</h3>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Date of Bid</th>
          <th>Item</th>
          <th>Bid Amount</th>
          <th>Last Bid Amount</th>
          <th>End of Bidding</th>
          <th></th>
        </tr>
      </thead>
      <tbody>


          @foreach($orders as $order)
            <tr>
          <td>{{$order->created_at}}</td>
          <td>{{$order->product->title}}</td>
          <td>{{$order->amount}}</td>
          <td>{{$order->product->lastBid->amount}}</td>
          <td>{{Carbon\Carbon::parse($order->product->ends_on)->diffForHumans()}}</td>
          <td><a class="btn btn-primary btn-sm" href="{{route('product.show',['id'=>$order->product->hash])}}">Bid on Item</a></td>
        </tr>
          @endforeach

      </tbody>
    </table>

    @endif
  </div>
</main>
<!--Main layout-->
@endsection
