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
          <li role="presentation" class="active">
            <a href="#discover" aria-controls="discover" role="tab" data-toggle="tab"><i class="fas fa-box-open"></i>
              <p>Bid Ended</p>
            </a>
          </li>

          <li role="presentation">
            <a href="#optimization" aria-controls="optimization" role="tab" data-toggle="tab"><i class="fas fa-truck"></i>
              <p>Ready for Pick-up</p>
            </a>
          </li>
          <li role="presentation">
            <a href="#content" aria-controls="content" role="tab" data-toggle="tab"><i class="fas fa-gifts"></i>
              <p>Product Received</p>
            </a>
          </li>
          <li role="presentation">
            <a href="#strategy" aria-controls="strategy" role="tab" data-toggle="tab"><i class="far fa-star"></i>
              <p>Rate </p>
            </a>
          </li>
          <li role="presentation">
            <a href="#reporting" aria-controls="reporting" role="tab" data-toggle="tab"><i class="fa fa-check" aria-hidden="true"></i>
              <p>Complete</p>
            </a>
          </li>
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
              <span class="badge-category blue mr-1">{{$product->mainCategory->description->category_name}}</span>
            </a>
          </div>


          <p class="lead font-weight-bold mb-0">{{$product->title}}</p>

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



          <p class="mb-0">Unit: {{$product->base_price.' '.$product->unit}}</p>
          <p class="mb-0">Address: {{$product->location}}</p>
          <hr>
          <span>Last Price:</span>
          <p class="lead font-weight-bold mb-0" style="color:#ffa000;font-size:30px;">

            <span> PHP {{$product->lastBid->amount}}</span>
          </p>

          <p class="lead font-weight-bold">
            Bidding ended last {{Carbon\Carbon::parse($product->ends_on)->format('F j, Y')}}
          </p>

          <hr>

          @if($product->lastBid->user_id == auth()->user()->id)
          <p class="lead font-weight-bold">
            Seller: {{$product->seller->name}}
          </p>

          <a href="/messenger">Chat Seller</a>
          @else
          <p class="lead font-weight-bold">
            Buyer: {{$product->lastBid->user->name}}

          </p>

          <a href="/messenger">Chat Buyer</a>
          @endif

        </div>
        <!--Content-->

      </div>
      <!--Grid column-->

    </div>
    <hr>

    <p class="lead font-weight-bold">Product Details</p>
    <p>{{$product->description}}</p>

    <!--Grid row-->

    <!--Grid row-->

  </div>
</main>
<!--Main layout-->
@endsection
