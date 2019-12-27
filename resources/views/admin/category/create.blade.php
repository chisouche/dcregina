@extends('admin/app')

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
            <li class="breadcrumb-item"><a href="{{route('category.index') }}">Category</a></li>
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
          <h3 class="card-title" style="font-weight: 800;font-size: 1.5em; ;color:#8f8103;  ">New Category</h3>
        </div>

          @include('admin.layout.message')

          <form role="form" action="{{route('category.store') }}" method = "POST"  enctype="multipart/form-data">
            @csrf
            <div class="form-group row" style="margin-top:30px;">
                <label for="name" class="col-sm-2 col-form-label" style="margin-left:20px;">Category Name</label>
                <div class="col-sm-9">
                  <input name="name" type="text" class="form-control" id="name" placeholder="Category Name" style="margin-right:-50px; .sm { font-size: 70%; }">
                </div>
            </div>

            <div class="form-groups row">
                <label for="image" class="col-sm-2 col-form-label" style="margin-left:20px;">Image</label>
                <div class="col-sm-9">
                  <input name="image" type="file" class="form-control " id="image"  placeholder="Portfolio Image" style="margin-right:-50px;" onchange="readURL(this);" accept=".png, .jpg, .jpeg" >
                </div>
            </div><br>

            <div class="form-group row">
                <label for="description" class="col-sm-2 col-form-label" style="margin-left:20px;"> Description</label>
                <div class="col-sm-9">
                  <input name="description" type="text" class="form-control" id="description"  placeholder="Description" style="margin-right:-50px;">
                </div>
            </div>

            <div class="form-group row">
                <label for="slug" class="col-sm-2 col-form-label" style="margin-left:20px;">Slug</label>
                <div class="col-sm-9">
                  <input name="slug" type="text" class="form-control" id="slug"placeholder="Slug" style="margin-right:-50px;">
                </div>
            </div>


            <div class="form-group row">
                  <label class="col-sm-2 col-form-label switch" for="status" style="margin-left:20px;">Status</label>
                  <div class="col-sm-9">
                  <input type="checkbox" checked data-toggle="toggle" data-on="post" data-off="unpost" data-size="xs" name="status" data-offstyle="outline-dark" data-onstyle="info" data-style="border" value="1" style="margin-left:20px; margin-top:20px;"/>
                </div>
            </div>

            <div class="form-group row">
                <div class="offset-sm-3 col-sm-9">
                    <button type="submit" class="btn btn-primary" name="done" id="done"> Done </button>
                    <a  href='{{route('category.index')}}' class="btn btn-info" style="margin-left:10px">Back</a>
                </div>
            </div>
        </form>


        </div>
          </div>
        </section>
      </div>
      <script>
        function readURL(input, id) {
          id = id || '#blah';
          if (input.files &amp;&amp; input.files[0]) {
              var reader = new FileReader();

              reader.onload = function (e) {
                  $(id)
                          .attr('src', e.target.result)
                          .width(50)
                          .height(50);
              };

              reader.readAsDataURL(input.files[0]);
          }
       }
     </script>
      @endsection
