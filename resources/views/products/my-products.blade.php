@extends('layouts.app')

@section('content')

<!--Main layout-->
<main>
  <div class="container dark-grey-text pt-5">
    <!-- Section: Products v.4 -->
    <section class="text-center my-5">

      <!-- Section heading -->
      <h2 class="h1-responsive font-weight-bold text-center my-5">My Products</h2>
      <!-- Section description -->
      <p class="grey-text text-center w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur
        adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas
        nostrum quisquam eum porro a pariatur veniam.</p>


      </section>
      <!-- Section: Products v.4 -->
      <!-- Section: Products v.1 -->
      <section class="text-center my-5">
        <!-- Grid row -->
        <div class="row">

          @foreach($products as $product)
          <div class="col-lg-3 col-md-6 mb-4">
            <!-- Card -->
            <div class="card card-cascade narrower card-ecommerce mb-4 mt-4">
              <!-- Card image -->
              <div class="view view-cascade overlay">
                <img src="{{$product->thumbnail ? asset($product->thumbnail->img_path) : 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVQYV2P4////fwAJ+wP9BUNFygAAAABJRU5ErkJggg=='}}" class="card-img-top" alt="sample photo">
                <a href="{{route('product.show', ['product'=>$product->hash])}}">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!-- Card image -->
              <!-- Card content -->
              <div class="card-body card-body-cascade text-center">
                <!-- Category & Title -->
                <a class="grey-text">
                  <h5>{{$product->mainCategory ? $product->mainCategory->description->category_name : ''}}</h5>
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
                  <p>
                    <span class="font-weight-bold">
                    <strong>Last Price: PHP {{$product->lastBid == null ? $product->base_price : $product->lastBid->amount}}</strong>
                    </span>
                  </p>
                  @if($product->ends_on < Carbon\Carbon::now() && $product->lastBid)
                  <p class="mb-0">
                    <span class="badge green mr-1">Sold</span>
                  </p>
                  @elseif($product->ends_on < Carbon\Carbon::now() && !$product->lastBid)
                  <p class="mb-0">
                    <span class="badge red mr-1">Expired</span>
                  </p>
                  @endif

                </div>
              </div>
              <!-- Card content -->
            </div>
            <!-- Card -->
          </div>
          @endforeach

        </div>
        <!-- Grid row -->

      </section>
      <!-- Section: Products v.1 -->

      <hr>

    </main>
    <!--Main layout-->
    @endsection
