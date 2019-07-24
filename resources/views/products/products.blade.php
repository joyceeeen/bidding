@extends('layouts.app')

@section('content')
<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100" src="/images/1.jpg" height="840px"
        alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <div class="container">
          <div class="row">
            <div class="col-xl-6 col-lg-7 text-white hs-item">
              <span>New Arrivals</span>
              <h2>denim jackets</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
              <a href="#" class="btn btn-success">DISCOVER</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="/images/2.jpg" height="840px"
        alt="Second slide">
        <div class="mask rgba-black-strong"></div>
      </div>
      <div class="carousel-caption">
        <div class="container">
          <div class="row">
            <div class="col-xl-6 col-lg-7 text-white hs-item">
              <span>New Arrivals</span>
              <h2>denim jackets</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
              <a href="#" class="btn btn-success">DISCOVER</a>

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="/images/3.jpg" height="840px"
        alt="Third slide">
        <div class="mask rgba-black-slight"></div>
      </div>
      <div class="carousel-caption">
        <div class="container">
          <div class="row">
            <div class="col-xl-6 col-lg-7 text-white hs-item">
              <span>New Arrivals</span>
              <h2>denim jackets</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
              <a href="#" class="btn btn-success">DISCOVER</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-4 no-padding">
      <a href="#">
        <div class="" style="width:100%;height:120px;background:white;  border-bottom:1px solid #e4e4e4;">
          <div class="feature-inner">
            <h2>
              <i class="fas fa-money-bill-wave-alt"></i>
              CASH ON DELIVERY
            </h2>
          </div>
        </div>
      </a>
    </div>
    <div class="col-lg-4 no-padding">
      <a href="#">
        <div class="" style="width:100%;height:120px;background:#388e3c;">
          <div class="feature-inner2">
            <h2>
              <i class="fas fa-tractor"></i>
              STRAIGHT FROM THE FIELDS</h2>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 no-padding">
        <a href="#">
          <div class="" style="width:100%;height:120px;background:white;  border-bottom:1px solid #e4e4e4;">
            <div class="feature-inner">
              <h2>
                <i class="fas fa-paper-plane"></i>
                FREE AND FAST DELIVERY
              </h2>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
  <!--Main layout-->
  <main>
    <div class="container dark-grey-text pt-5">
      <!-- Section: Products v.4 -->
      <section class="text-center my-5">

        <!-- Section heading -->
        <h2 class="h1-responsive font-weight-bold text-center my-5">LATEST PRODUCTS</h2>

        </section>
        <!-- Section: Products v.4 -->
        <!-- Section: Products v.1 -->
        <section class="text-center my-5">

          <!-- Grid row -->
          <div class="row">

            @foreach($products as $product)
            <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
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
                    <span class="float-left font-weight-bold">
                      <strong>Last Bid: PHP {{$product->lastBid == null ? $product->base_price : $product->lastBid->amount}}</strong>
                    </span>


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
