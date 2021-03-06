@extends('layouts.app')

@section('content')
<!-- Full Page Intro -->
<div id="intro-section" class="view">
  <img src="img/bg.jpg" alt="" width="100%;">
    <!-- Mask & flexbox options-->
    <div class="mask rgba-gradient d-flex justify-content-center align-items-center">
        <!-- Content -->
        <div class="container px-md-3 px-sm-0">
            <!--Grid row-->
            <div class="row wow fadeIn">
                <!--Grid column-->
                <div class="col-md-12 mb-4 white-text text-center wow fadeIn">
                    <h3 class="display-3 font-weight-bold white-text mb-0 pt-md-5 pt-5">WATSAP</h3>
                    <hr class="hr-light my-4 w-75">
                    <h4 class="subtext-header mt-2 mb-4">WEB APPLICATION TRADING SYSTEM FOR AGRICULTURAL PRODUCT</h4>

                    <a href="https://www.facebook.com/watsapinfocus" class="btn btn-rounded btn-outline-white" target="_blank">
                        <i class="fa fa-home"></i> Visit us
                    </a>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Content -->
    </div>
    <!-- Mask & flexbox options-->
</div>
<!-- Full Page Intro -->
</header>
<main>



<!--Section: articles-->
<section id="articles" class="text-center py-5">

    <!-- Container -->
    <div class="container">

        <!-- Section heading -->

        <!-- Section: Products v.4 -->
        <section class="text-center my-5">

          <!-- Section heading -->
          <h2 class="h1-responsive font-weight-bold text-center my-5">Categories</h2>

          <!-- Grid row -->
          <div class="row">
            @foreach($categories as $category)

            <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
              <!-- Collection card -->
              <div class="card collection-card z-depth-1-half">
                <!-- Card image -->
                <div class="view zoom">
                  <img src="{{asset($category->thumbnail)}}" class="img-fluid" alt="">
                  <div class="stripe dark">
                    <a href="{{route('product.index',['category'=>$category->category_name,'code'=>$category->code])}}">
                      <p>{{$category->category_name}}
                        <i class="fas fa-angle-right"></i>
                      </p>
                    </a>
                  </div>
                </div>
                <!-- Card image -->
              </div>
              <!-- Collection card -->
            </div>
            @endforeach



          </div>
          <!-- Grid row -->

        </section>
        <!-- Section: Products v.4 -->

    </div>
    <!-- Container -->

</section>
<!--Section: articles-->

<!--Section: contact-->

<!--Section: contact-->

</main>
<!--Main layout-->
@endsection
