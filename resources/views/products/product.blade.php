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

            <span>PHP {{ $product->lastBid != null ? $product->lastBid->amount : $product->base_price }}</span>
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
        </div>
        <!--Content-->


      </div>
      <!--Grid column-->

    </div>

    <!--Grid row-->



    @if(auth()->check() && auth()->user()->is_seller)
    <hr>
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

  </div>
</main>
<!--Main layout-->
@endsection
