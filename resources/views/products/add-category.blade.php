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
              <strong>Add Product</strong>
            </h5>

            <!--Card content-->
            <div class="card-body px-lg-5 pt-3">
              <form action="{{ route('photos.store') }}" class="dropzone" id="my-awesome-dropzone">
                <input type="hidden" name="product" value="{{request()->product}}">
              </form>
              <!-- Form -->
              <!-- <form class="text-center" style="color: #757575;" method="POST" action="{{ route('product.store') }}">
              @csrf
              <div class="form-row">
              <div class="col">
              <div class="md-form">
              <div class="file-upload-wrapper">
              <input type="file" id="input-file-now-custom-1" class="file-upload" data-default-file="https://mdbootstrap.com/img/Photos/Others/images/89.jpg" />
            </div>

          </div>
        </div>
      </div> -->
      <form action="{{ route('category.store') }}" class="dropzone" id="my-awesome-dropzone">
        <input type="hidden" name="product" value="{{request()->product}}">


      </form>

      <!-- Sign up button -->
      <a href="{{ route('category.index') }}" class="btn btn-outline-success btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Proceed</a>

      <!-- Form -->
    </div>
  </div>
</center>
</div>
</div>
</div>


@endsection
