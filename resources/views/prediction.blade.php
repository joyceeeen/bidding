@extends('layouts.app')

@section('content')

<main>



  <!--Section: articles-->
  <section id="articles" class="text-center py-5">

    <!-- Container -->
    <div class="container" style="margin-top:120px;">

      <!-- Section heading -->

      <!-- Section: Products v.4 -->
      <section class="text-center my-5">

        <!-- Section heading -->




      </section>
      <!-- Section: Products v.4 -->
      <div class="row mt-5">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="font-weight-bold text-center">Market Price Prediction</h5>
              <div class="row">
                <div class="col-lg-6">
                  <div class="md-form">
                    <select name="product" id="province2" class="month-predict mdb-select md-form @error('province') is-invalid @enderror" required>
                      <option value="" disabled selected>Month</option>
                      <option value="January">January</option>
                      <option value="February">February</option>
                      <option value="March">March</option>
                      <option value="April">April</option>
                      <option value="May">May</option>
                      <option value="June">June</option>
                      <option value="July">July</option>
                      <option value="August">August</option>
                      <option value="September">September</option>
                      <option value="October">October</option>
                      <option value="November">November</option>
                      <option value="December">December</option>

                    </select>
                    <label for="status">Month</label>
                    @error('province')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="md-form">
                    <select name="product" id="province2" class="year-predict mdb-select md-form @error('province') is-invalid @enderror" required>
                      <option value="" disabled selected>Year</option>
                      <option value="2019">2019</option>
                      <option value="2020">2020</option>
                    </select>
                    <label for="status">Year</label>
                    @error('province')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
              </div>

                <div class="md-form">
                  <select name="product" id="province2" class="product-predict mdb-select md-form @error('province') is-invalid @enderror" required>
                    <option value="" disabled selected>Select Product</option>
                    <option value="ampalaya">Ampalaya</option>
                    <option value="cabbage">Cabbage</option>
                    <option value="calamansi">Calamansi</option>
                    <option value="kamatis">Kamatis</option>
                    <option value="karots">Karots</option>
                    <option value="patatas">Patatas</option>
                    <option value="pipino">Pipino</option>
                    <option value="sibuyas">Sibuyas</option>
                    <option value="talong">Talong</option>
                    <option value="WellMilledRice">Well Milled Rice</option>
                  </select>
                  <label for="status">Province</label>
                  @error('province')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
                <p style="text-align:left"><b>Result:</b>  <span class="result-predict"></span></p>
                <button id="predictBtn"  class="btn btn-outline-success btn-rounded btn-block my-4 waves-effect z-depth-0" type="button">Predict</button>

            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="font-weight-bold text-center">Market Demand Prediction</h5>
              <div class="row">

              <div class="col-lg-6">
                <div class="md-form">
                  <select name="product" id="province2" class="month-select mdb-select md-form @error('province') is-invalid @enderror" required>
                    <option value="" disabled selected>Month</option>
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>

                  </select>
                  <label for="status">Month</label>
                  @error('province')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
              <div class="col-lg-6">
                <div class="md-form">
                  <select name="product" id="province2" class="year-select mdb-select md-form @error('province') is-invalid @enderror" required>
                    <option value="" disabled selected>Year</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                  </select>
                  <label for="status">Year</label>
                  @error('province')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
            </div>

              <div class="md-form">
                <select  name="item" id="item" class="item-select mdb-select md-form @error('province') is-invalid @enderror" required>
                  <option value="" disabled selected>Select Product</option>
                  <option value="ampalaya">Ampalaya</option>
                  <option value="cabbage">Cabbage</option>
                  <option value="calamansi">Calamansi</option>
                  <option value="kamatis">Kamatis</option>
                  <option value="karots">Karots</option>
                  <option value="patatas">Patatas</option>
                  <option value="pipino">Pipino</option>
                  <option value="sibuyas">Sibuyas</option>
                  <option value="talong">Talong</option>
                  <option value="WellMilledRice">Well Milled Rice</option>
                </select>
                <label for="status">Month</label>

              </div>


              <p style="text-align:left"><b>Result:</b> <span class="peak-result"></span> </p>
              <button id="peakBtn" class="btn btn-outline-success btn-rounded btn-block my-4 waves-effect z-depth-0" type="button">Predict</button>
            </div>
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
