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
          <li role="presentation" @if($product->winner->status_id == 1)class="active"@endif>
            <a href="#" aria-controls="discover" role="tab" data-toggle="tab"><i class="fas fa-box-open"></i>
              <p>Bid Ended</p>
            </a>
          </li>

          <li role="presentation" @if($product->winner->status_id == 2)class="active"@endif>
            <a href="#" aria-controls="optimization" role="tab" data-toggle="tab"><i class="fas fa-truck"></i>
              <p>Ready for Pick-up</p>
            </a>
          </li>
          <li role="presentation" @if($product->winner->status_id == 3)class="active"@endif>
            <a href="#" aria-controls="content" role="tab" data-toggle="tab"><i class="fas fa-gifts"></i>
              <p>Product Received</p>
            </a>
          </li>
          <li role="presentation" @if($product->winner->status_id == 4)class="active"@endif>
            <a href="#"  aria-controls="strategy" role="tab" data-toggle="tab"><i class=" @if($product->winner->status_id == 3) can-review @endif far fa-star"></i>
              <p>Rate </p>
            </a>
          </li>
          <li role="presentation" @if($product->winner->status_id == 5)class="active"@endif>
            <a href="#" aria-controls="reporting" role="tab" data-toggle="tab"><i class="fa fa-check" aria-hidden="true"></i>
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

          <div class="rating" data-rating="{{$averageRate}}">
            <span class="far fa-star" data-score='1'></span>
            <span class="far fa-star" data-score='2'></span>
            <span class="far fa-star" data-score='3'></span>
            <span class="far fa-star" data-score='4'></span>
            <span class="far fa-star" data-score='5'></span>
          </div>



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


    <div class="col-lg-12">
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
    </div>

    <div id="canReview" class="modal">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="modal-close close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{route('rating.store')}}" method="post">
              @csrf
              <div class="form-row">
                <div class="col-6">
                  <div class="md-form">
                    <input type="text" id="title" maxlength="191" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="off" autofocus>
                    <label for="title">Title</label>
                    @error('title')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
                <input type="hidden" name="product_id" value="{{$product->id}}">
                <input type="hidden" name="order_id" value="{{$product->winner->id}}">

                <div class="col-6">
                  <div class="stars">
                    <label for="description" style="display:block;">Rating</label>
                    <input class="star star-5" value="5" id="star-5" type="radio" name="star"/>
                    <label class="star star-5" for="star-5"></label>
                    <input class="star star-4" value="4"  id="star-4" type="radio" name="star"/>
                    <label class="star star-4" for="star-4"></label>
                    <input class="star star-3" value="3" id="star-3" type="radio" name="star"/>
                    <label class="star star-3" for="star-3"></label>
                    <input class="star star-2" value="2" id="star-2" type="radio" name="star"/>
                    <label class="star star-2" for="star-2"></label>
                    <input class="star star-1" value="1" id="star-1" type="radio" name="star"/>
                    <label class="star star-1" for="star-1"></label>
                  </div>
                </div>
              </div>

              <div class="form-row">

                <div class="col">
                  <div class="md-form">
                    <label for="description">Review</label>
                    <textarea id="description" class="form-control @error('description') is-invalid @enderror md-textarea" name="description" value="{{ old('description') }}" required autocomplete="off"></textarea>
                    @error('description')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
              </div>
              <center>
                <input type="submit"  value="Submit" class="btn btn-primary" >
              </center>
            </form>
          </div>
          <div class="modal-footer">

          </div>
        </div>
      </div>
    </div>

    <!--Grid row-->

    <!--Grid row-->

  </div>
</main>
<!--Main layout-->
@endsection
