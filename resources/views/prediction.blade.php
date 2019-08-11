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
                <p style="text-align:left"><b>Result: <span class="result-predict"></span></b> </p>
                <button id="predictBtn"  class="btn btn-outline-success btn-rounded btn-block my-4 waves-effect z-depth-0" type="button">Predict</button>

            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="font-weight-bold text-center">Prediction of Demand</h5>
              <div class="md-form">
                <select  name="item" id="item" class="item-select mdb-select md-form @error('province') is-invalid @enderror" required>
                  <option value="" disabled selected>Select Product</option>
                  <option value="Ampalaya">Ampalaya</option>
                  <option value="Atis">Atis</option>
                  <option value="Avocado">Avocado</option>
                  <option value="Balimbing">Balimbing</option>
                  <option value="Bamboo Shots">Bamboo Shots</option>
                  <option value="Banana">Banana</option>
                  <option value="Batani">Batani</option>
                  <option value="Cabbage">Cabbage</option>
                  <option value="Caimito">Caimito</option>
                  <option value="Calamansi">Calamansi</option>
                  <option value="Cassava Leaves">Cassava Leaves</option>
                  <option value="Chayote">Chayote</option>
                  <option value="Chicharo">Chicharo</option>
                  <option value="Chico">Chico</option>
                  <option value="Coconut">Coconut</option>
                  <option value="Corn">Corn</option>
                  <option value="Cucumber">Cucumber</option>
                  <option value="Dalandan">Dalandan</option>
                  <option value="Duhat">Duhat</option>
                  <option value="Durian">Durian</option>
                  <option value="Gabi">Gabi</option>
                  <option value="Garlic">Garlic</option>
                  <option value="Guyabano">Guyabano</option>
                  <option value="Kaimito">Kaimito</option>
                  <option value="Kalabasa">Kalabasa</option>
                  <option value="Kamatsile">Kamatsile</option>
                  <option value="Kamias">Kamias</option>
                  <option value="Kangkong">Kangkong</option>
                  <option value="Kasuy">Kasuy</option>
                  <option value="Katuray">Katuray</option>
                  <option value="Kiat-Kiat">Kiat-Kiat</option>
                  <option value="Kinchay">Kinchay</option>
                  <option value="Langka">Langka</option>
                  <option value="Lansones">Lansones</option>
                  <option value="Lettuce">Lettuce</option>
                  <option value="Longan">Longan</option>
                  <option value="Luya">Luya</option>
                  <option value="Mabolo">Mabolo</option>
                  <option value="Makopa">Makopa</option>
                  <option value="Malunggay">Malunggay</option>
                  <option value="Mango">Mango</option>
                  <option value="Mangosteen">Mangosteen</option>
                  <option value="Melon">Melon</option>
                  <option value="Mushrooms">Mushrooms</option>
                  <option value="Okra">Okra</option>
                  <option value="Pakwan">Pakwan</option>
                  <option value="Papaya">Papaya</option>
                  <option value="Patatas">Patatas</option>
                  <option value="Patola">Patola</option>
                  <option value="Peanuts">Peanuts</option>
                  <option value="Peas">Peas</option>
                  <option value="Pepper Green">Pepper Green</option>
                  <option value="Petchay">Petchay</option>
                  <option value="Pinya">Pinya</option>
                  <option value="Pomelo">Pomelo</option>
                  <option value="Rambutan">Rambutan</option>
                  <option value="Remolatsa">Remolatsa</option>
                  <option value="Rice">Rice</option>
                  <option value="Saluyot">Saluyot</option>
                  <option value="Sampaloc">Sampaloc</option>
                  <option value="Santol">Santol</option>
                  <option value="Sigarilyas">Sigarilyas</option>
                  <option value="Sili">Sili</option>
                  <option value="Singkamas">Singkamas</option>
                  <option value="Siniguelas">Siniguelas</option>
                  <option value="Sitaw">Sitaw</option>
                  <option value="Squash">Squash</option>
                  <option value="Suha">Suha</option>
                  <option value="Talong">Talong</option>
                  <option value="Taro Leaves">Taro Leaves</option>
                  <option value="Tiesa">Tiesa</option>
                  <option value="Tomatoes">Tomatoes</option>
                  <option value="Ubas">Ubas</option>
                  <option value="Upo">Upo</option>
                  <option value="Wintermelon">Wintermelon</option>
                </select>
                <label for="status">Month</label>

              </div>
              <div class="md-form">
                <select  name="month" id="month" class="month-select mdb-select md-form @error('province') is-invalid @enderror" required>
                  <option value="" disabled selected>Select Month</option>
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

              </div>
              <p style="text-align:left"><b>Result:</b> <span class="peak-result"></span> </p>
              <button id="peakBtn" class="btn btn-outline-success btn-rounded btn-block my-4 waves-effect z-depth-0" type="button">Predict</button>
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
