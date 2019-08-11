@extends('layouts.app')

@section('content')

<!--Section: articles-->
<section id="articles" class="py-5">

  <!-- Container -->
  <div class="container pt-5">
    <div class="row">
      <div class="col-md-3 text-center">
        <img src="{{asset('images/gardener.png')}}" alt="" class="img-rounded img-responsive pb-3" style="height:200px" />
        <h4>{{$user->name}}</h4>
        <!-- <small><cite title="San Francisco, USA"> <i class="glyphicon glyphicon-map-marker">
      </i></cite></small> -->
      <p>
        <i class="fa fa-envelope text-primary"></i> {{$user->email}}
        <br />
        <!-- <i class="fa fa-gift text-primary"></i> June 02, 1988</p> -->
      </div>
      <div class="col-lg-9">

        <div class="row">
          <div class="col-lg-12">
            <h2 class="font-weight-bold" style="text-align:left">Sold Products</h2>
            <hr>
          </div>
          @if ($message = Session::get('success'))
          <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>{{ $message }}</strong>
          </div>
          @endif
          @if ($errors->any())
          <div class="alert alert-danger alert-dismissable">
            <a class="panel-close close" data-dismiss="alert">×</a>
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif
          <div class="col-lg-12">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Order #</th>
                  <th>Product</th>
                  <th>Winning Bidder</th>
                  <th>Last Price</th>
                  <th>Status</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach($products as $product)
                <tr>
                  <th>{{$product->winner->ref}}</th>
                  <td>{{$product->title}}</td>
                  <td>{{$product->winner->order->user->name}}</td>
                  <td>{{$product->winner->order->amount}}</td>
                  <td>{{$product->winner->status->status}}</td>
                  <td>
                    @if($product->winner->status_id < 5)
                    <center>
                    <form action="{{route('order.update',['id'=>$product->winner->id])}}" method="post">
                      @csrf
                      @method('put')
                      <input type="hidden" name="nextStats" value="{{$product->winner->status_id + 1}}">
                      <button @if($product->winner->status_id + 1 > 3) disabled @endif type="submit" name="button" class="btn-sm btn-primary">{{$statuses->where('id',$product->winner->status_id + 1)->first()->status}}</button>
                    </form>
                    @else
                    Completed
                    @endif
                  </center>
                  </td>

                </tr>
                @endforeach

              </tbody>
            </table>
          </div>

        </div>

      </div>
    </div>

  </div>
  <!-- Container -->

</section>
<!--Section: articles-->

<!--Section: contact-->

<!--Section: contact-->

</main>
<!--Main layout-->
@endsection
