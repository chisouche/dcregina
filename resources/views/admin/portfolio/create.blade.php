@extends('admin/app')

@section('head-content')
<link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/\select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endsection

@section('content')
<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">

        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('portfolio.index') }}">Portfolio</a></li>
            <li class="breadcrumb-item active">New</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!--main content-->
  <section class="content">
    <div class="container-fluid">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title" style="font-weight: 800;font-size: 1.5em; ;color:#8f8103;  ">New Portfolio</h3>
        </div>

            @include('admin.layout.message')

      <form role="form" action="{{route('portfolio.store') }}" method = "POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group row" style="margin-top:30px;">
            <label for="name" class="col-sm-2 col-form-label" style="margin-left:20px;">Portfolio Name</label>
            <div class="col-sm-9">
              <input name="name" type="text" class="form-control" id="name" placeholder="Portfolio Name" style="margin-right:-50px; .sm { font-size: 70%; }">
            </div>
        </div>
        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label" style="margin-left:20px;"> Description</label>
            <div class="col-sm-9">
              <input name="description" type="text" class="form-control" id="description"placeholder="Portfolio Description" style="margin-right:-50px;">
            </div>
        </div>

        <div class="form-groups row">
            <label for="image" class="col-sm-2 col-form-label" style="margin-left:20px;">Image</label>
            <div class="col-sm-9">
              <input name="image" type="file" class="form-control " id="image"  placeholder="Portfolio Image" style="margin-right:-50px;" onchange="readURL(this);" accept=".png, .jpg, .jpeg" >
            </div>
        </div><br>

        <div class="form-group row">
            <label for="details" class="col-sm-2 col-form-label" style="margin-left:20px;">Details</label>
            <div class="col-sm-9">
              <input name="details" type="text" class="form-control" id="details" placeholder="Portfolio details" style="margin-right:-50px;">
            </div>
        </div>

        <div class="form-group row">
            <label for="category_id" class="col-sm-2 col-form-label" style="margin-left:20px;"> Category</label>
            <div class="col-sm-9">
              <select  name="category_id" type="text"  class="form-control select2 select2bs4 select2-hidden-accessible" id="category_id" placeholder=" Category" style="margin-right:-50px;" tabindex="-1" aria-hidden="true" name="categories[]">
                <option value="">--- Select Category ---</option>
                @foreach ($categories as $category)
                  <option value="{{ $category->id}}"> {{ $category->name }}
                  </option>
                @endforeach
              </select>
            </div>
        </div>

        <div class="form-group row">
          <label for="slug" class="col-sm-2 col-form-label" style="margin-left:20px;"> Portfolio slug</label>
          <div class="col-sm-9">
            <input name="slug" type="text" class="form-control" id="slug" placeholder="Portfolio slug" style="margin-right:-50px;">
          </div>
        </div>


        <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="exampleCheck2" style="margin-left:20px;">Status</label>
              <div class="col-sm-9">
                <input type="checkbox" checked data-toggle="toggle" data-on="post" data-off="unpost" data-size="xs" name="status" data-offstyle="outline-dark" data-onstyle="info" data-style="border" value="1" style="margin-left:20px; margin-top:20px;"/>
            </div>
        </div>

        <div class="form-group row">
            <div class="offset-sm-3 col-sm-9">
                <button type="submit" class="btn btn-primary">Done</button>
                <a  href='{{route('portfolio.index')}}' class="btn btn-info" style="margin-left:10px">Back</a>
            </div>
        </div>
    </form>
  </div>
    </div>
  </section>
</div>
@endsection

@section('footer-content')
<script src="{{ asset('admin/plugins/select2/js/select2.full.min.js') }}"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
})
    </script>

@endsection
