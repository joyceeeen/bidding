@extends('layouts.app')

@section('content')


<!--Section: articles-->
<section id="articles" class="text-center py-5">

    <!-- Container -->
    <div class="container">

        <!-- Section heading -->

        <!-- Section: Products v.4 -->
        <section class="text-center my-5">

          <!-- Section heading -->
            <div class="row pb-5">
                <div class="col-lg-12">
                  <h5 class="section-title h1">Seller Requests</h5>
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead class="thead-dark">
                        <tr>

                          <th scope="col">Last Name</th>
                          <th scope="col">First Name</th>
                          <th scope="col">Middle Name</th>
                          <th scope="col">Date of Birth</th>
                          <th scope="col">Contact #</th>
                          <th scope="col">Accept</th>
                          <th scope="col">Decline</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>client->patient->lastname</td>
                          <td>client->patient->firstname</td>
                          <td>client->patient->middlename</td>
                          <td>client->patient->birthday</td>

                          <td>client->report</td>
                          <td align="center">
                            <form action="" method="post">

                              <input type="hidden" name="action" value="1"/>

                              <button type="submit" name="button" class="btn btn-primary">Accept</button>
                            </form>
                          </td>
                          <td align="center">
                            <form action="" method="post">
                              <input type="hidden" name="action" value="2"/>
                              <button type="submit" name="button" class="btn btn-danger">Decline</button>
                            </form>
                          </td>
                        </tr>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>


            </div>
        </section>
        <!-- Section: Products v.4 -->

    </div>
    <!-- Container -->

</section>
<!--Section: articles-->

<!--Section: contact-->

<!--Section: contact-->

</main>
<!--Main layout-->
@endsection
