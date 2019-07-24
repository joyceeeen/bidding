@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5">
  <div class="row">
    <div class="col-lg-6 pt-5">
      <center>
        <div class="col-lg-12">
          <div class="card">

            <h5 class="card-header success-color white-text text-center py-4">
              <strong>We just need a little more information from you as a seller.</strong>
            </h5>

            <!--Card content-->
            <div class="card-body px-lg-5 pt-3">

              <!-- Form -->
              <form class="text-center" style="color: #757575;" method="POST" action="{{ route('seller.update',0) }}" enctype="multipart/form-data">
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
                    <div class="row">
                      <div class="col-lg-12">
                        <label for="phone_input" class="font-weight-bold text-primary">
                          <center>
                            Upload Government Issued ID
                          </center>
                        </label>
                      </div>
                    </div>

                    <div class="md-form mt-2">
                      <div class="custom-file">
                        <label class="custom-file-label">Choose file</label>
                        <input type="file" name="id1_path" class="custom-file-input" required aria-describedby="inputGroupFileAddon01"/>

                        @error('mobile_number')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                    </div>

                    <div class="md-form">
                      <div class="custom-file">
                        <label class="custom-file-label">Choose file</label>
                        <input type="file" name="id2_path" class="custom-file-input" required aria-describedby="inputGroupFileAddon01"/>

                        @error('mobile_number')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
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
        </div>
      </center>

    </div>
    <div class="col-lg-6 pt-5">
      <center>
        <div class="col-lg-12">
          <label for="phone_input" class="font-weight-bold text-primary">
            <center>
              Sample of Government ID
            </center>
          </label>
          <img src="images/drivers.jpg" alt="" style="width:100%;padding-bottom:20px;">
          <img src="images/postal.png" alt="" style="width:100%;">

        </div>
      </center>

    </div>
  </div>
  <div class="row pt-4">
    <div class="col-lg-12">
      <hr>
    </div>
    <div class="col-lg-4">
      <center>
        <span class="fa-stack fa-2x">
          <i class="far fa-id-card text-primary" style="text-align:center;font-size:4rem"></i>
          <i class="fas fa-ban fa-stack-2x" style="color:Tomato"></i>
        </span>
      </center>
      <p class="text-icon-seller">TIN ID and PhilHealth ID are not accepted</p>
    </div>
    <div class="col-lg-4">
      <center>
        <i class="far fa-id-card text-primary" style="text-align:center;font-size:4rem"></i>
      </center>
    <p class="text-icon-seller">ID must show birthdate</p>
    </div>
    <div class="col-lg-4">
      <center>
        <i class="fas fa-calendar-alt text-primary" style="text-align:center;font-size:4rem"></i>
      </center>
      <p class="text-icon-seller">ID must have atleast one month before expiration</p>
    </div>
  </div>
</div>

  @endsection
