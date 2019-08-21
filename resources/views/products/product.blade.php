@extends('layouts.app')

@section('content')


<!--Main layout-->
<main class="mt-5 pt-4">
  <div class="container dark-grey-text mt-5">

    <!--Grid row-->
    <div class="row wow fadeIn">

      <!--Grid column-->
      <div class="col-md-6 mb-4">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            @foreach($product->photos as $key => $photo)
            <li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}" class=""></li>
            @endforeach

          </ol>
          <div class="carousel-inner">
            @foreach($product->photos as $key=>$photo)
            <div class="carousel-item {{$key === 0 ? 'active' :''}}">
              <img class="d-block w-100 imgCarousel" src="{{asset($photo->img_path)}}" alt="First slide">
            </div>
            @endforeach
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

          <div>
            <a>
              <span class="badge-category blue mr-1">{{$product->mainCategory->description->category_name}}</span>
            </a>
          </div>


          <p class="lead font-weight-bold mb-0">{{$product->title}}</p>


          <div class="rating" data-rating="{{number_format($product->ratings->average('rate'))}}">
            <span class="far fa-star" data-score='1'></span>
            <span class="far fa-star" data-score='2'></span>
            <span class="far fa-star" data-score='3'></span>
            <span class="far fa-star" data-score='4'></span>
            <span class="far fa-star" data-score='5'></span>
          </div>



          <p class="mb-0">Unit: {{$product->weight.' '.$product->unit}}</p>
          <p class="mb-0">Address: {{$product->location}}</p>
          <hr>
          <span>Last Price:</span>
          <p class="lead font-weight-bold mb-0" style="color:#ffa000;font-size:30px;">

            <span>PHP {{ $product->lastBid != null ? $product->lastBid->amount : $product->base_price }}</span>
          </p>
          @if(auth()->check() && ($product->user_id == auth()->user()->id))
          @if($product->ends_on >= Carbon\Carbon::now())
          <p class="lead font-weight-bold">
            Bidding will end at {{Carbon\Carbon::parse($product->ends_on)->format('F j, Y')}}
          </p>
          @else
          <p class="mb-0 font-weight-bold">Bidding ended last {{Carbon\Carbon::parse($product->ends_on)->format('F j, Y')}}</p>
          @endif
          @else
          @if($product->ends_on >= Carbon\Carbon::now())
          <form action="{{route('orders.store',['product'=>$product->hash])}}" method="post" class="d-flex justify-content-left">
            @csrf
            <!-- Default input -->
            <input type="hidden" name="lastBid" value="{{$product->lastBid != null ? $product->lastBid->amount : $product->base_price }}"/>
            <input type="number" min="{{$product->lastBid != null ? $product->lastBid->amount + 1 : $product->base_price + 1 }}" name="bid" autocomplete="off" class="form-control" style="width: 100px" required>
            <button class="btn btn-success btn-md my-0 p" type="submit"> Bid
              <i class="fas fa-gavel ml-1"></i>
            </button>
          </form>
          <br>
          <p class="lead font-weight-bold">
            Bidding will end at {{Carbon\Carbon::parse($product->ends_on)->format('F j, Y')}}
          </p>
          @else
          <p class="mb-0 font-weight-bold">Bidding ended last {{Carbon\Carbon::parse($product->ends_on)->format('F j, Y')}}</p>
          @endif
          @endif

          <hr>
          <p class="lead font-weight-bold">Product Details</p>
          <p>{{$product->description}}</p>
          <hr>
          <p style="float:right;">
            <a href="{{route('messages.create',['receiver'=>$product->seller->hash,'first'=>true])}}"><i class="fa fa-envelope text-primary" style="font-size:2em;"></i></a>
          </p>
          <p class="lead font-weight-bold">Being Sold By:</p>
          <h4 class="pb-0 mb-0 font-weight-bold text-primary">{{$product->seller->name}}'s Shop</h4>
          <p>
            <a href="{{route('seller.profile',['id'=>$product->seller->hash])}}">View Profile</a>
          </p>
        </div>
        <!--Content-->


      </div>
      <!--Grid column-->

    </div>

    <!--Grid row-->
      <h2 class="font-weight-bold" style="text-align:left">Reviews</h2>
      <hr>
      <div class="reviews">
        @foreach($product->ratings as $rate)
        <div class="row review-item">
          <div class="col-md-3 text-center">
            <img class="rounded-circle reviewer" src="http://standaloneinstaller.com/upload/avatar.png">
            <div class="caption">
              <small>by <a href="#joe">{{$rate->user->name}}</a></small>
            </div>

          </div>
          <div class="col-md-9">
            <h4>{{$rate->title}}</h4>
              <div class="rating" data-rating="{{$rate->rate}}">
                <span class="far fa-star" data-score='1'></span>
                <span class="far fa-star" data-score='2'></span>
                <span class="far fa-star" data-score='3'></span>
                <span class="far fa-star" data-score='4'></span>
                <span class="far fa-star" data-score='5'></span>
              </div>
            <p class="review-text">
              {{$rate->comment}}
            </p>

            <small class="review-date">{{\Carbon\Carbon::parse($rate->created_at)->format('F d, Y')}}</small>
            <hr>
          </div>
        </div>
        @endforeach
      </div>



    @if(auth()->check() && ($product->user_id == auth()->user()->id))
    <h2 class="font-weight-bold" style="text-align:left">Bidding History</h2>

    @if($product->bids->isEmpty())
    No Bids Yet
    @else
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
          <td>{{$bid->user ? $bid->user->name : ''}}</td>
          <td>{{$bid->amount}}</td>
          <td>{{$bid->created_at}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <hr>
    @endif
    @endif

    <!--Grid row-->

  </div>
</main>
<!--Main layout-->
@endsection
