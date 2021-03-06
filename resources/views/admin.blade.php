@extends('layouts.admin')

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
                  <th scope="col">Contact #</th>
                  <th scope="col">Email</th>
                  <th scope="col">View Images</th>
                  <th scope="col"></th>
                  <th scope="col"></th>

                </tr>
              </thead>
              <tbody>
                @foreach($users as $user)
                <tr>
                  <td>{{$user->last_name}}</td>
                  <td>{{$user->first_name}}</td>
                  <td>{{$user->mobile_number}}</td>

                  <td>{{$user->email}}</td>
                  <td>
                    @if($user->ids)
                    <ul>
                      <li><a href="#imageModal" class="idModal" class="waves-effect waves-light btn modal-trigger" data-path="{{asset($user->ids->id1_path)}}">ID #1</a></li>
                      <li><a href="#imageModal" class="idModal" class="waves-effect waves-light btn modal-trigger" data-path="{{asset($user->ids->id2_path)}}">ID #2</a></li>
                    </ul>
                    @else
                    Seller did not upload any id.
                    @endif
                  </td>

                  <form action="{{route('accept')}}" method="post">
                    @csrf
                    <td align="center">
                      <input type="hidden" name="user" value="{{$user->hash}}"/>
                      <button type="submit" name="button" class="btn btn-primary">Accept</button>
                    </td>
                  </form>
                  <form action="{{route('decline')}}" method="post">
                    @csrf
                    <td align="center">
                      <input type="hidden" name="user" value="{{$user->hash}}"/>
                      <div class="md-form">
                        <label for="description">Remarks</label>
                        <textarea id="remarks" class="form-control @error('remarks') is-invalid @enderror md-textarea" name="remarks" value="{{ old('remarks') }}" required autocomplete="off"></textarea>
                      </div>
                      <button type="submit" name="button" class="btn btn-danger">Decline</button>
                    </td>
                  </form>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>



      <!-- Section heading -->
      <div class="row pb-5">
        <div class="col-lg-6">
          <h5 class="section-title h1">Market Price Prediction</h5>
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead class="thead-dark">
                <tr>

                  <th scope="col">Product</th>
                  <th scope="col">Model</th>
                  <th scope="col">Last Uploaded</th>
                  <th scope="col">Update Model</th>

                </tr>
              </thead>
              <tbody>
                @foreach($models->where('type',1) as $price)
                <tr>
                  <td width="20%">{{$price->product}}</td>
                  <td width="30%">{{$price->model}}</td>
                  <td width="20%">{{$price->updated_at}}</td>
                  <td width="30%">
                    <form class="uploadModel" method="post" enctype="multipart/form-data">
                      <input type="hidden" name="type" value="1">
                      <input type="hidden" name="id" value="{{$price->id}}">
                      <input type="file" name="model"  id="file-{{$price->id}}" class="upload-model hidden"/>
                      <label  for="file-{{$price->id}}" class="btn btn-primary">Upload</label>
                    </form>
                  </td>


                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-lg-6">
          <h5 class="section-title h1">Market Demand Prediction</h5>
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead class="thead-dark">
                <tr>

                  <th scope="col">Product</th>
                  <th scope="col">Model</th>
                  <th scope="col">Last Uploaded</th>
                  <th scope="col">Update Model</th>

                </tr>
              </thead>
              <tbody>
                @foreach($models->where('type',2) as $demand)
                <tr>
                  <td width="20%">{{$demand->product}}</td>
                  <td width="30%">{{$demand->model}}</td>
                  <td width="20%">{{$demand->updated_at}}</td>
                  <td width="30%">
                    <form class="uploadModel" method="post" enctype="multipart/form-data">
                      <input type="hidden" name="type" value="2">
                      <input type="hidden" name="id" value="{{$demand->id}}">
                      <input type="file"  name="model" id="file2-{{$demand->id}}" class="upload-model hidden"/>
                      <label for="file2-{{$demand->id}}"  class="btn btn-primary">Upload</label>
                    </form>
                  </td>
                </tr>
                @endforeach
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





<div id="imageModal" class="modal">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="modal-close close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <center>
          <img src="" class="imagepreview" style="width: 500px;" >
        </center>
      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>

@endsection
<style media="screen">
input[type="file"] {
  background: blue;
}
.hidden{
  visibility: hidden;
  width: 100%;
}
</style>
