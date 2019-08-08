@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5">
  <div class="row">
    <div class="col-lg-12">
      <center>
      
        @if(auth()->user()->is_confirmed != 0)
        <div class="col-lg-6">
          <!-- Material form register -->

          <div class="card">

            <h5 class="card-header success-color white-text text-center py-4">
              <strong>Add Product</strong>
            </h5>

            <!--Card content-->
            <div class="card-body px-lg-5 pt-3">

              <!-- Form -->

              <form class="text-center" style="color: #757575;" method="POST" action="{{ route('product.store') }}">
                @csrf
                <div class="form-row">
                  <div class="col">
                    <div class="md-form">
                      <input type="text" id="title" maxlength="191" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="off" autofocus>
                      <label for="title">Product Name</label>
                      @error('title')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                  </div>
                </div>
                <div class="form-row">

                  <div class="col">
                    <div class="md-form">
                      <label for="description">Additional Details</label>
                      <textarea id="description" class="form-control @error('description') is-invalid @enderror md-textarea" name="description" value="{{ old('description') }}" required autocomplete="off"></textarea>
                      @error('description')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col">
                    <div class="md-form">
                      <select  name="province" value="{{ old('province') }}" id="province" class="mdb-select md-form @error('province') is-invalid @enderror" required>
                        <option value="" disabled selected>Select Provice</option>

                      </select>
                      <label for="status">Province</label>
                      @error('province')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                  </div>
                  <!-- <div class="col">
                  <div class="md-form">
                  <select  name="city" value="{{ old('city') }}"  id="city"  class="mdb-select md-form @error('city') is-invalid @enderror" required>
                  <option value="" disabled selected>Select City</option>

                </select>
                <label for="status">City</label>
                @error('city')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div> -->

        </div>
        <div class="form-row">
          <div class="col">
            <div class="md-form">
              <input type="text" id="location" class="form-control @error('location') is-invalid @enderror" name="location" value="{{ old('location') }}" required autocomplete="off" autofocus>
              <label for="location">Pick-up Complete Address</label>
              @error('location')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="col">
            <div class="md-form">
              <input type="date" id="starts_on" class="form-control @error('starts_on') is-invalid @enderror" name="starts_on" value="{{ old('starts_on') }}" required autocomplete="off" autofocus>
              <label for="starts_on">Bidding Starts On</label>
              @error('starts_on')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>

          <div class="col">
            <div class="md-form">
              <input type="date" id="ends_on" class="form-control @error('ends_on') is-invalid @enderror" name="ends_on" value="{{ old('ends_on') }}">
              <label for="ends_on">Bidding Ends On</label>
              @error('ends_on')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="col">
            <div class="md-form">
              <input type="text" id="base_price" class="form-control @error('base_price') is-invalid @enderror" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="base_price" autocomplete="off" value="{{ old('base_price') }}" required>
              <label for="base_price">Base Price (PHP)</label>
              @error('base_price')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
        </div>

        <div class="form-row">
          <div class="col">
            <div class="md-form">
              <input type="text" id="weight" class="form-control @error('weight') is-invalid @enderror" name="weight" autocomplete="off"  value="{{ old('weight') }}" required>
              <label for="weight">Weight</label>
              @error('weight')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
          <div class="col">
            <div class="md-form">
              <select id="unit" name="unit" value="{{ old('unit') }}" class="mdb-select md-form @error('unit') is-invalid @enderror" autocomplete="off"  required>
                <option value="" disabled selected>Select Unit</option>
                <option value="kg">Kilogram (kg)</option>
                <option value="g">Grams (g)</option>
                <option value="lb">Pounds (lb)</option>
              </select>
              <label for="status">Unit</label>
              @error('unit')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
        </div>
        <!-- Sign up button -->
        <button class="btn btn-outline-success btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Proceed</button>
      </form>

      <!-- Form -->
    </div>

  </div>

</center>
</div>
@else
<div class="row pt-5">
  <div class="col-lg-5 pt-5">
    <img src="/images/card.png" alt="" style="width:100%;">

  </div>
  <div class="col-lg-7 pt-5">
    <center>
      <h1 class="font-weight-bold text-primary text-center" style="padding-top:120px;padding-left:10px;padding-right:10px;font-size:60px;">We are currently validating your identification. It won't take long.</h1>
    </center>
  </div>
</div>

@endif

</div>
</div>

@endsection
