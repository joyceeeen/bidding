@extends('layouts.app')

@section('content')


    <!--Main layout-->
    <main class="mt-5 pt-4">
      <div class="container dark-grey-text mt-5">

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <div class="col-md-6 mb-4">

            <img src="{{asset($product->thumbnail->img_path)}}" class="img-fluid" alt="">

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 mb-4">

            <!--Content-->
            <div class="p-4">

              <div class="mb-3">
                <a href="">
                  <span class="badge purple mr-1">{{$product->mainCategory->description->category_name}}</span>
                </a>
                <!-- <a href="">
                  <span class="badge blue mr-1">New</span>
                </a>
                <a href="">
                  <span class="badge red mr-1">Bestseller</span>
                </a> -->
              </div>


              <p class="lead font-weight-bold">Description</p>

              <p>{{$product->description}}</p>
              <p class="lead">
                <label>Last Price:</label>
                <span>PHP {{ $product->lastBid != null ? $product->lastBid->amount : $product->base_price }}</span>
              </p>

              <form action="{{route('orders.store',['product'=>$product->hash])}}" method="post" class="d-flex justify-content-left">
                @csrf
                <!-- Default input -->
                <input type="hidden" name="lastBid" value="{{$product->lastBid != null ? $product->lastBid->amount : $product->base_price }}"/>
                <input type="number" min="{{$product->lastBid != null ? $product->lastBid->amount + 1 : $product->base_price + 1 }}" name="bid" class="form-control" style="width: 100px">
                <button class="btn btn-success btn-md my-0 p" type="submit"> Bid
                  <i class="fas fa-gavel ml-1"></i>
                </button>

              </form>

            </div>
            <!--Content-->

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

        <hr>

        @if($product->user_id === auth()->user()->id)
        <h3>Bidding History</h3>
        <table class="table table-hover">
            <thead>
              <tr>
                <th>Name</th>
                <th>Amount</th>
                <th>Date of Bid</th>
              </tr>
            </thead>
            <tbody>
              @foreach($product->bids as $bid)
              <tr>
                <td>{{$bid->user->name}}</td>
                <td>{{$bid->amount}}</td>
                <td>{{$bid->created_at}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <hr>
        @endif
        <!--Grid row-->
        <div class="row d-flex justify-content-center wow fadeIn">

          <!--Grid column-->
          <div class="col-md-6 text-center">

            <h4 class="my-4 h4">Additional information</h4>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus suscipit modi sapiente illo soluta odit
              voluptates,
              quibusdam officia. Neque quibusdam quas a quis porro? Molestias illo neque eum in laborum.</p>

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <div class="col-lg-4 col-md-12 mb-4">

            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/11.jpg" class="img-fluid" alt="">

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-4 col-md-6 mb-4">

            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/12.jpg" class="img-fluid" alt="">

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-4 col-md-6 mb-4">

            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg" class="img-fluid" alt="">

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </div>
    </main>
    <!--Main layout-->
@endsection
