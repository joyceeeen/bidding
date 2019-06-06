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
              <strong>We just need a little more information from you as a seller.</strong>
            </h5>

            <!--Card content-->
            <div class="card-body px-lg-5 pt-3">

              <!-- Form -->
              <form class="text-center" style="color: #757575;" method="POST" action="{{ route('seller.update',0) }}">
                @csrf
                @method('PUT')

                <div class="form-row">

                  <div class="col">
                    <!-- First name -->
                    <div class="md-form">
                        <input type="text" id="phone_input" pattern="^(09)\d{9}$" maxlength="11" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control @error('mobile_number') is-invalid @enderror" name="mobile_number" value="{{ old('mobile_number') }}" required autocomplete="name" autofocus>
                        <label for="phone_input">Mobile Number</label>
                      @error('mobile_number')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                  </div>
                  <input type="checkbox" checked name="is_seller" value="1" style="display:none"/>
                </div>
                <!-- Sign up button -->
                <button class="btn btn-outline-success btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Proceed</button>
              </form>
              <!-- Form -->
            </div>
          </div>
        </center>
      </div>

    </div>
  </div>

  @endsection
