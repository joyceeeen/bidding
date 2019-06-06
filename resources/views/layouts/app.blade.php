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
      <div class="container">

        <!-- Brand -->
        <a class="navbar-brand waves-effect" href="/home">
          <strong class="blue-text">Crops Bidding System</strong>
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
          <li class="nav-item active">
            <a class="nav-link waves-effect" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect" href="/products" >Products</a>
          </li>

        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          @guest
          <li class="nav-item">
            <a class="nav-link" href="{{ route('seller.index') }}">Become A Seller</a>
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
          <li class="nav-item">
            @if(Auth::user()->is_seller)
              <a class="nav-link" href="{{ route('product.create') }}">Add Product</a>
            @else
            <a class="nav-link" href="{{ route('seller.index') }}">Become A Seller</a>
            @endif
          </li>
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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


  <main class="py-4">
    @yield('content')
  </main>
</div>

<!--Footer-->
<footer class="page-footer text-center font-small mt-4 wow fadeIn">

  <!--Call to action-->
  <div class="pt-4">
    <a class="btn btn-outline-white" href="https://mdbootstrap.com/docs/jquery/getting-started/download/" target="_blank"
    role="button">Download MDB
    <i class="fas fa-download ml-2"></i>
  </a>
  <a class="btn btn-outline-white" href="https://mdbootstrap.com/education/bootstrap/" target="_blank" role="button">Start
    free tutorial
    <i class="fas fa-graduation-cap ml-2"></i>
  </a>
</div>
<!--/.Call to action-->

<hr class="my-4">

<!-- Social icons -->
<div class="pb-4">
  <a href="https://www.facebook.com/mdbootstrap" target="_blank">
    <i class="fab fa-facebook-f mr-3"></i>
  </a>

  <a href="https://twitter.com/MDBootstrap" target="_blank">
    <i class="fab fa-twitter mr-3"></i>
  </a>

  <a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4" target="_blank">
    <i class="fab fa-youtube mr-3"></i>
  </a>

  <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
    <i class="fab fa-google-plus-g mr-3"></i>
  </a>

  <a href="https://dribbble.com/mdbootstrap" target="_blank">
    <i class="fab fa-dribbble mr-3"></i>
  </a>

  <a href="https://pinterest.com/mdbootstrap" target="_blank">
    <i class="fab fa-pinterest mr-3"></i>
  </a>

  <a href="https://github.com/mdbootstrap/bootstrap-material-design" target="_blank">
    <i class="fab fa-github mr-3"></i>
  </a>

  <a href="http://codepen.io/mdbootstrap/" target="_blank">
    <i class="fab fa-codepen mr-3"></i>
  </a>
</div>
<!-- Social icons -->

<!--Copyright-->
<div class="footer-copyright py-3">
  © 2018 Copyright:
  <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> MDBootstrap.com </a>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/dropzone.min.js')}}"></script>

<script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
