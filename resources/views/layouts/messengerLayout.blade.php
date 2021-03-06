<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="_token" content="{{ csrf_token() }}" />

  <title>Crops Bidding System</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{asset('css/mdb.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/select2.min.css')}}" rel="stylesheet">

  <!-- Your custom styles (optional) -->
  <link href="{{asset('css/dropzone.css')}}" rel="stylesheet">

  <link href="{{asset('css/style_home.css')}}" rel="stylesheet">

</head>
<body>

  <!-- Start your project here-->
  <!-- Main navigation -->
  <header>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark white scrolling-navbar">
      <div class="container-fluid">

        <!-- Brand -->
        <a class="navbar-brand waves-effect" href="/">
          <strong>WATSAP</strong>
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link waves-effect" href="/shop/product">Shop
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              Categories <span class="caret"></span>
            </a>



            <div class="dropdown-menu dropdown-menu-right">

              <a class="dropdown-item" href="{{route('product.index',['category'=>'Vegetables','code'=>'028n2e'])}}">Vegetables</a>

              <a class="dropdown-item" href="{{route('product.index',['category'=>'Vegetables','code'=>'n2y83w'])}}">Fruits</a>

              <a class="dropdown-item" href="{{route('product.index',['category'=>'Vegetables','code'=>'ko5eoe'])}}">Fish</a>
              <a class="dropdown-item" href="{{route('product.index',['category'=>'Vegetables','code'=>'w30n25'])}}">Poultry</a>

          </div>
        </li>

        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          @guest
          <li class="nav-item">
            <a class="nav-link" href="{{ route('seller.index') }}">Become A Seller</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/prediction">{{ __('Prediction') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          @if (Route::has('register'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>
          @endif
          @else

          <li class="nav-item nav-dropdown">
            <div class="dropdown" style="padding: 13px;margin-top:-3px;float:right;">
              <a href="#" onclick="return false;" role="button" data-toggle="dropdown" id="dropdownMenu1" data-target="#" style="float: left;    margin-top: 2px;" aria-expanded="true">
                <i class="fas fa-bell" style="font-size: 20px; float: left; color: #fff">
                </i>
              </a>
              <span style="display:none" id="badge-notification" class="badge badge-danger"></span>
              <ul class="dropdown-menu dropdown-menu-left pull-right" role="menu" aria-labelledby="dropdownMenu1" style="height: 330px; overflow: auto;">
                <div class="beeperNub"><i class="fas fa-sort-up"></i></div>

                <li role="presentation">
                  <a href="#" class="dropdown-menu-header">Notifications</a>
                </li>

                <ul id="notifications" class="timeline timeline-icons timeline-sm" style="width:210px">

                </ul>

              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('messages.index') }}">Messages</a>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="/prediction">{{ __('Prediction') }}</a>
          </li>
          <li class="nav-item">

            @if(Auth::user()->is_seller && Auth::user()->is_confirmed > 0)
            <a class="nav-link" href="{{ route('product.create') }}">Add Product</a>
            @else
            <a class="nav-link" href="{{ route('seller.index') }}">Become A Seller</a>
            @endif
          </li>
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }} <span class="caret"></span>
            </a>



            <div class="dropdown-menu dropdown-menu-right">
              @if(auth()->check())
              @if(auth()->user()->is_seller)
              <a class="dropdown-item" href="{{route('seller.profile',['id'=>auth()->user()->hash])}}" >My Profile</a>
              <a class="dropdown-item" href="{{route('sold.products')}}" >Sold Products</a>

              @endif

              <a class="dropdown-item" href="/my-bids">My Bids</a>

              <a class="dropdown-item" href="/purchased-items">Purchased Items</a>

              @endif

              <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </div>
        </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>
<!-- Navbar -->

</header>
<div id="app">


  <main class="pt-4">
    @yield('content')
  </main>
</div>

<!--Footer-->
<footer class="page-footer text-center font-small wow fadeIn">


<hr class="mb-4" style="margin-top:0px;">


<!--Copyright-->
<div class="footer-copyright py-3">
  © 2018 Copyright:
  <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> JRU</a>
</div>
<!--/.Copyright-->

</footer>
<!--/.Footer-->
</body>
</html>

<script type="text/javascript" src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{asset('js/select2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/dropzone.min.js')}}"></script>

<script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
<script type="text/javascript">
(function($) {
  var $window = $(window),
      $html = $('html');

  function resize() {
      if ($window.width() > 1300) {
          return $('.test').addClass('container');
      }

      $('.test').removeClass('container');
  }

  $window
      .resize(resize)
      .trigger('resize');
})(jQuery);
</script>
