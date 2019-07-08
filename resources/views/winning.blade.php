@extends('layouts.app')

@section('content')


<!--Main layout-->
<main class="mt-5 pt-4">
  <div class="container dark-grey-text">
    <div class="row">
      <div class="col-lg-12 pb-5">
        <!-- design process steps-->
        <!-- Nav tabs -->
        <ul class="nav nav-tabs process-model more-icon-preocess" role="tablist">
          <li role="presentation" class="active"><a href="#discover" aria-controls="discover" role="tab" data-toggle="tab"><i class="fas fa-box-open"></i>
            <p>Accepted</p>
          </a></li>
          <li role="presentation"><a href="#strategy" aria-controls="strategy" role="tab" data-toggle="tab"><i class="far fa-clock"></i>
            <p>In Progress</p>
          </a></li>
          <li role="presentation"><a href="#optimization" aria-controls="optimization" role="tab" data-toggle="tab"><i class="fas fa-truck"></i>
            <p>Shipped</p>
          </a></li>
          <li role="presentation"><a href="#content" aria-controls="content" role="tab" data-toggle="tab"><i class="fas fa-gifts"></i>
            <p>Delivered</p>
          </a></li>
          <li role="presentation"><a href="#reporting" aria-controls="reporting" role="tab" data-toggle="tab"><i class="fa fa-check" aria-hidden="true"></i>
            <p>Complete</p>
          </a></li>
        </ul>
        <!-- end design process steps-->
        <!-- Tab panes -->

      </div>
    </div>
    <!--Grid row-->
    <div class="row wow fadeIn">

      <!--Grid column-->
      <div class="col-md-6 mb-4">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">

          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100 imgCarousel" src="http://localhost:8000/images/028n2e/15599826555cfb723f4d1ac.jpg" alt="First slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-md-6 mb-4">

        <!--Content-->
        <div class="p-4">
          <p style="float:right;">
            <a href="#"><i class="fab fa-twitter-square" style="color:#28aae1;font-size:2em;"></i></a>
            <a href="#"><i class="fab fa-facebook-square" style="color:rgb(66, 103, 178);font-size:2em;"></i></a>
            <a href="#"><i class="fab fa-instagram" style="color:#de397d;font-size:2em;"></i></a>
          </p>
          <div>
            <a>
              <span class="badge blue mr-1">Test</span>
            </a>
          </div>


          <p class="lead font-weight-bold mb-0">Test</p>

          <ul class="rating">
            <li>
              <i class="fas fa-star"></i>
            </li>
            <li>
              <i class="fas fa-star"></i>
            </li>
            <li>
              <i class="fas fa-star"></i>
            </li>
            <li>
              <i class="fas fa-star"></i>
            </li>
            <li>
              <i class="far fa-star"></i>
            </li>
          </ul>



          <p class="mb-0">Unit: 2222</p>
          <p class="mb-0">Address: yeyy</p>
          <hr>
          <p class="lead font-weight-bold mb-0" style="color:#ffa000;font-size:30px;">
            <span>PHP 5000</span>
          </p>
          @if(auth()->check() && auth()->user()->is_seller)

          @else

          @if($product->ends_on >= Carbon\Carbon::now())
          <form action="{{route('orders.store',['product'=>$product->hash])}}" method="post" class="d-flex justify-content-left">
            @csrf
            <!-- Default input -->
            <input type="hidden" name="lastBid" value="{{$product->lastBid != null ? $product->lastBid->amount : $product->base_price }}"/>
            <input type="number" min="{{$product->lastBid != null ? $product->lastBid->amount + 1 : $product->base_price + 1 }}" name="bid" class="form-control" style="width: 100px">
            <button class="btn btn-success btn-md my-0 p" type="submit"> Bid
              <i class="fas fa-gavel ml-1"></i>
            </button>
          </form>
          @else
          <p class="mb-0 font-weight-bold">Bidding ended last {{Carbon\Carbon::parse($product->ends_on)->format('F j, Y')}}</p>

          @endif
          @if($product->ends_on >= Carbon\Carbon::now())
          <p class="lead font-weight-bold">
            Bidding will end at {{Carbon\Carbon::parse($product->ends_on)->format('F j, Y')}}
          </p>
          @endif
          <hr>
        </div>
        <!--Content-->

      </div>
      <!--Grid column-->

    </div>
    <hr>

    <p class="lead font-weight-bold">Product Details</p>
    <p>{{$product->description}}</p>

    <!--Grid row-->
    @endif



    <!--Grid row-->

  </div>
</main>
<!--Main layout-->
@endsection
