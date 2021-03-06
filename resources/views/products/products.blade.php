@extends('layouts.app')

@section('content')

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
      <div class="row pb-4">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <form id="searchSubmit" method="get" action="{{route('product.index')}}">
                <div class="row">
                  <div class="col-lg-10 searchCol">
                    <div class="md-form" style="margin-top:0px;margin-bottom:0px">
                      <input type="text" name="product_name" value="" autocomplete="off" class="form-control" placeholder="Product Name">
                    </div>
                  </div>

                  <div class="col-lg-2 searchCol">
                    <div class="md-form" style="margin-top:0px;margin-bottom:0px">
                      <button type="submit" class="btn btn-primary" style="width:100%">Search</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      @if($searches)
      <h5 class="h5-responsive font-weight-bold">TOP 3 MOST SEARCH</h5>
      <div class="row pb-4">

        @foreach($searches as $s)

        <div class="col-lg-4">
          <form id="searchSubmit" method="get" action="{{route('product.index')}}">
            <!-- <div class="card"> -->
            <!-- <div class="card-body"> -->
            <input type="hidden" name="product_name" value="{{$s->search}}" autocomplete="off" class="form-control" placeholder="Product Name">
            <div class="row">
              <div class="col-lg searchCol" >
                <button type="submit" class="btn " style="width:100%;">{{$s->search}}</button>
              </div>
              <!-- </div> -->
              <!-- </div> -->
            </form>
          </div>
        </div>
        @endforeach
      </div>
      @endif

      @if($top3Sold)
      <h5 class="h5-responsive font-weight-bold">TOP 3 SOLD PRODUCTS</h5>
      <div class="row pb-4">

        @foreach($top3Sold as $t)

        <div class="col-lg-4">
          <form id="searchSubmit" method="get" action="{{route('product.index')}}">
            <!-- <div class="card"> -->
            <!-- <div class="card-body"> -->
            <input type="hidden" name="product_name" value="{{$t->title}}" autocomplete="off" class="form-control" placeholder="Product Name">
            <div class="row">
              <div class="col-lg searchCol" >
                <button type="submit" class="btn " style="width:100%;">{{$t->title}}</button>
              </div>
              <!-- </div> -->
              <!-- </div> -->
            </form>
          </div>
        </div>
        @endforeach
      </div>
      @endif
      <!-- Grid row -->
      <div class="row">

        @foreach($products as $product)
        <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
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
              <h4 class="card-title" style="margin-bottom: 0 !important">
                <strong>
                  <a href="{{route('product.show', ['product'=>$product->hash])}}">{{$product->title}}</a>
                </strong>
              </h4>
              <p style="font-size: smaller">{{$product->ilan}}</p>
              <!--Rating-->
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
