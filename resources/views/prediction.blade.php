@extends('layouts.app')

@section('content')

<main>



  <!--Section: articles-->
  <section id="articles" class="text-center py-5">

    <!-- Container -->
    <div class="container">

      <!-- Section heading -->

      <!-- Section: Products v.4 -->
      <section class="text-center my-5">

        <!-- Section heading -->
        <h2 class="h1-responsive font-weight-bold text-center my-5">Prediction</h2>




      </section>
      <!-- Section: Products v.4 -->
      <div class="row">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="font-weight-bold text-center">Price Prediction of Sugar</h5>

                <div class="md-form">
                  <select  name="month" id="month" class="month-predict mdb-select md-form @error('province') is-invalid @enderror" required>
                    <option value="" disabled selected>Select Month</option>
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">May</option>
                    <option value="6">June</option>
                    <option value="7">July</option>
                    <option value="8">August</option>
                    <option value="9">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>

                  </select>
                  <label for="status">Month</label>

                </div>
                <div class="md-form">
                  <select  name="province" id="province2" class="province-predict mdb-select md-form @error('province') is-invalid @enderror" required>
                    <option value="" disabled selected>Select Provice</option>
                    <option value="1">Batangas</option>
                    <option value="2">Cebu</option>
                    <option value="3">Commonwealth, Quezon City</option>
                    <option value="4">Mandaluyong</option>
                    <option value="5">Cubao, Quezon City</option>
                    <option value="6">Munoz</option>
                    <option value="7">Muntinlupa</option>
                    <option value="8">Pasay</option>
                    <option value="9">Pasig</option>
                    <option value="10">Pasil</option>
                    <option value="11">Tandang Sora</option>
                    <option value="12">Viajero Market</option>
                    <option value="13">Zamboanga City</option>
                    <option value="14">New Dagonoy</option>
                    <option value="15">Marikina</option>
                    <option value="16">Aklan</option>
                    <option value="17">Lucena City</option>
                    <option value="19">Antique</option>
                    <option value="19">Sariaya</option>
                    <option value="20">Siniloan</option>
                    <option value="21">Baler</option>

                  </select>
                  <label for="status">Province</label>
                  @error('province')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
                <p style="text-align:left" class="mb-5"><b>Result: <span class="result-predict"></span></b> </p>
                <button id="predictBtn"  class="btn btn-outline-success btn-rounded btn-block my-4 waves-effect z-depth-0" style="margin-top: 88px !important;" type="button">Predict</button>

            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="font-weight-bold text-center">Prediction of Demand</h5>
              <div class="md-form">
                <input type="text" id="title" maxlength="191" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="off" autofocus>
                <label for="title">Product Name</label>
                @error('title')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="md-form">
                <select  name="month" id="month" class="mdb-select md-form @error('province') is-invalid @enderror" required>
                  <option value="" disabled selected>Select Month</option>
                  <option value="1">January</option>
                  <option value="2">February</option>
                  <option value="3">March</option>
                  <option value="4">April</option>
                  <option value="5">May</option>
                  <option value="6">June</option>
                  <option value="7">July</option>
                  <option value="8">August</option>
                  <option value="9">September</option>
                  <option value="10">October</option>
                  <option value="11">November</option>
                  <option value="12">December</option>
                </select>
                <label for="status">Month</label>

              </div>
              <div class="md-form">
                <select  name="province" id="province2" class="mdb-select md-form @error('province') is-invalid @enderror" required>
                  <option value="" disabled selected>Select Provice</option>
                  <option value="1">Batangas</option>
                  <option value="2">Cebu</option>
                  <option value="3">Commonwealth, Quezon City</option>
                  <option value="4">Mandaluyong</option>
                  <option value="5">Cubao, Quezon City</option>
                  <option value="6">Munoz</option>
                  <option value="7">Muntinlupa</option>
                  <option value="8">Pasay</option>
                  <option value="9">Pasig</option>
                  <option value="10">Pasil</option>
                  <option value="11">Tandang Sora</option>
                  <option value="12">Viajero Market</option>
                  <option value="13">Zamboanga City</option>
                  <option value="14">New Dagonoy</option>
                  <option value="15">Marikina</option>
                  <option value="16">Aklan</option>
                  <option value="17">Lucena City</option>
                  <option value="19">Antique</option>
                  <option value="19">Sariaya</option>
                  <option value="20">Siniloan</option>
                  <option value="21">Baler</option>

                </select>
                <label for="status">Province</label>
                @error('province')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <p style="text-align:left"><b>Result:</b> </p>
              <button class="btn btn-outline-success btn-rounded btn-block my-4 waves-effect z-depth-0" type="button">Predict</button>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- Container -->

  </section>
  <!--Section: articles-->

  <!--Section: contact-->

  <!--Section: contact-->

</main>
<!--Main layout-->
@endsection
