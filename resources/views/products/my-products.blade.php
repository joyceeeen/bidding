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
          <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
            <!-- Card -->
            <div class="card card-cascade narrower card-ecommerce">
              <!-- Card image -->
              <div class="view view-cascade overlay">
                <img src="{{asset($product->thumbnail->img_path)}}" class="card-img-top"
                alt="sample photo">
                <a href="{{route('product.index', ['product'=>$product->hash])}}">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!-- Card image -->
              <!-- Card content -->
              <div class="card-body card-body-cascade text-center">
                <!-- Category & Title -->
                <a class="grey-text">
                  <h5>{{$product->mainCategory->description ? $product->mainCategory->description->category_name : ''}}</h5>
                </a>
                <h4 class="card-title">
                  <strong>
                    <a href="{{route('product.index', ['product'=>$product->hash])}}">{{$product->title}}</a>
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
                    <strong>Last Price: PHP {{$product->lastBid == null ? $product->base_price : $product->lastBid->amount}}</strong>
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

            <img src="images/fruits/13.jpg" class="img-fluid" alt="">

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-4 col-md-6 mb-4">

            <img src="images/fruits/12.jpg" class="img-fluid" alt="">

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-4 col-md-6 mb-4">

            <img src="images/fruits/11.jpg" class="img-fluid" alt="">

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </div>
    </main>
    <!--Main layout-->
    @endsection
