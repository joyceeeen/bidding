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
            <h2 class="font-weight-bold" style="text-align:left">Products</h2>
            <hr>
          </div>
          @foreach($user->products as $product)
          <div class="col-lg-4 mb-4">
            <!-- Card -->
            <div class="card card-cascade narrower card-ecommerce mb-4 mt-4">
              <!-- Card image -->
              <div class="view view-cascade overlay">
                <img src="{{asset($product->thumbnail->img_path)}}" class="card-img-top"
                alt="sample photo">
                <a href="{{route('product.show', ['product'=>$product->hash])}}">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!-- Card image -->
              <!-- Card content -->
              <div class="card-body card-body-cascade text-center">
                <!-- Category & Title -->
                <a class="grey-text">
                  <h5>{{$product->mainCategory->description->category_name}}</h5>
                </a>
                <h4 class="card-title">
                  <strong>
                    <a href="{{route('product.show', ['product'=>$product->hash])}}">{{$product->title}}</a>
                  </strong>
                </h4>
                <!--Rating-->
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
                <!-- Description -->
                <p class="card-text">{{$product->description}}
                </p>
                <!-- Card footer -->
                <div class="card-footer px-1">
                  @if($product->ends_on <= Carbon\Carbon::now() && $product->lastBid)
                  <p>
                    <span class="float-left font-weight-bold">
                      <strong>Last Price: PHP {{$product->lastBid == null ? $product->base_price : $product->lastBid->amount}}</strong>
                    </span>
                  </p>
                  <p class="mb-0">
                    <span class="badge green mr-1">Sold</span>
                  </p>
                  @elseif($product->ends_on <= Carbon\Carbon::now() && !$product->lastBid)
                  <p>
                    <span class="float-left font-weight-bold">
                      <strong>Base Price: PHP {{$product->lastBid == null ? $product->base_price : $product->lastBid->amount}}</strong>
                    </span>
                  </p>
                  <p class="mb-0">
                    <span class="badge red mr-1">Expired</span>
                  </p>
                  @else
                  <p>
                    <span class="float-left font-weight-bold">
                      <strong>Last Bid: PHP {{$product->lastBid == null ? $product->base_price : $product->lastBid->amount}}</strong>
                    </span>
                  </p>
                  <p class="mb-0">
                    <span class="badge blue mr-1">On-going</span>
                  </p>
                  @endif
                </div>
              </div>
              <!-- Card content -->
            </div>
            <!-- Card -->
          </div>
          @endforeach
          <div class="col-lg-12">
            <h2 class="font-weight-bold" style="text-align:left">Reviews</h2>
            <hr>
            <div class="reviews">
              <div class="row review-item">
                <div class="col-md-3 text-center">
                  <img class="rounded-circle reviewer" src="http://standaloneinstaller.com/upload/avatar.png">
                  <div class="caption">
                    <small>by <a href="#joe">Joe</a></small>
                  </div>

                </div>
                <div class="col-md-9">
                  <h4>My awesome review</h4>
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
                  <p class="review-text">My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. </p>

                  <small class="review-date">March 26, 2017</small>
                  <hr>
                </div>
              </div>
            </div>
            <div class="reviews">
              <div class="row review-item">
                <div class="col-md-3 text-center">
                  <img class="rounded-circle reviewer" src="http://standaloneinstaller.com/upload/avatar.png">
                  <div class="caption">
                    <small>by <a href="#joe">Joe</a></small>
                  </div>

                </div>
                <div class="col-md-9">
                  <h4>My awesome review</h4>
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
                  <p class="review-text">My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. </p>

                  <small class="review-date">March 26, 2017</small>
                  <hr>
                </div>
              </div>
            </div>
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
