@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5">
      <div class="row">
        <div class="col-lg-12">
          <center>
            <div class="col-md-6">
              <!-- Material form login -->
              <div class="card">

                <h5 class="card-header success-color white-text text-center py-4">
                  <strong>Sign in</strong>
                </h5>

                <!--Card content-->
                <div class="card-body px-lg-5 pt-3">

                  <!-- Form -->
                  <form class="text-center" style="color: #757575;" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="col-lg-12">
                      <img src="img/bg.jpg" alt="" style="width:100%;">
                    </div>
                    <!-- Email -->
                    <div class="md-form">
                      <input id="materialLoginFormEmail" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                      <label for="materialLoginFormEmail">E-mail</label>
                      @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>

                    <!-- Password -->
                    <div class="md-form">
                      <input type="password" id="materialLoginFormPassword" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                      <label for="materialLoginFormPassword">Password</label>
                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>

                    <div class="d-flex justify-content-around">
                      <div>
                        <!-- Remember me -->
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="materialLoginFormRemember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                          <label class="form-check-label" for="materialLoginFormRemember">Remember me</label>
                        </div>
                      </div>
                      <div>
                        <!-- Forgot password -->
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                                            </div>
                    </div>

                    <!-- Sign in button -->
                    <button class="btn btn-outline-success btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign in</button>

                    <!-- Register -->
                    <p>Not a member?
                      <a href="{{ route('register') }}">Register</a>
                    </p>


                  </form>
                  <!-- Form -->

                </div>

              </div>
              <!-- Material form login -->
            </div>
          </center>
        </div>
      </div>
    </div>
@endsection
