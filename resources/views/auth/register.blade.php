@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5">
  <div class="row">
    <div class="col-lg-12">
      <center>
        <div class="col-lg-6">
          <!-- Material form register -->
          <div class="card">

              <h5 class="card-header success-color white-text text-center py-4">
                  <strong>Sign up</strong>
              </h5>

              <!--Card content-->
              <div class="card-body px-lg-5 pt-3">

                  <!-- Form -->
                  <form class="text-center" style="color: #757575;" method="POST" action="{{ route('register') }}">
                    @csrf
                    <img src="img/bg.jpg" alt="" style="width:100%;">

                      <div class="form-row">

                          <div class="col">
                              <!-- First name -->
                              <div class="md-form">
                                  <input type="text" id="materialRegisterFormFirstName" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="off" autofocus>
                                  <label for="materialRegisterFormFirstName">First name</label>
                                  @error('firstname')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>
                          <div class="col">
                              <!-- Last name -->
                              <div class="md-form">
                                  <input type="text" id="materialRegisterFormLastName" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="off" autofocus >
                                  <label for="materialRegisterFormLastName">Last name</label>
                                  @error('lastname')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>
                      </div>

                      <!-- E-mail -->
                      <div class="md-form mt-0">
                          <input type="email" id="materialRegisterFormEmail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off">
                          <label for="materialRegisterFormEmail">E-mail</label>
                          @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                      <!-- E-mail -->
                      <div class="md-form mt-0">
                          <input type="text" id="materialRegisterFormEmail" class="form-control" value="" required>
                          <label for="materialRegisterFormEmail">Phone Number</label>
                      </div>
                      <!-- Password -->
                      <div class="md-form">
                          <input type="password" id="materialRegisterFormPassword" aria-describedby="materialRegisterFormPasswordHelpBlock" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="off">
                          <label for="materialRegisterFormPassword">Password</label>
                          <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                              At least 8 characters and 1 digit
                          </small>
                          @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>

                      <!-- Password -->
                      <div class="md-form">
                          <input type="password" id="password-confirm" aria-describedby="materialRegisterFormPasswordHelpBlock" class="form-control" name="password_confirmation" required autocomplete="off">
                          <label for="password-confirm">Confirm Password</label>
                      </div>

                      <!-- Sign up button -->
                      <button class="btn btn-outline-success btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign in</button>



                      <hr>

                      <!-- Terms of service -->
                      <p>By clicking
                          <em>Sign up</em> you agree to our
                          <a href="" target="_blank">terms of service</a>

                  </form>
                  <!-- Form -->

              </div>

          </div>
          <!-- Material form register -->
        </div>
      </center>
    </div>

  </div>
</div>

@endsection
