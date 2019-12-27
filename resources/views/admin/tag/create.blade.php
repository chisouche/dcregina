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
            <li class="breadcrumb-item"><a href="{{route('tag.index') }}">Tag</a></li>
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
          <h3 class="card-title" style="font-weight: 800;font-size: 1.5em; ;color:#8f8103;  ">New Tag</h3>
        </div>

            @include('admin.layout.message')

          <form role="form" action="{{route('tag.store') }}" method = "POST" enctype="multipart/form-data" >
            @csrf

            <div class="form-group row" style="margin-top:30px;">
                <label for="name" class="col-sm-2 col-form-label" style="margin-left:20px;">Tag Name</label>
                <div class="col-sm-9">
                  <input name="name" type="text" class="form-control" id="name" placeholder="Tag Name" style="margin-right:-50px; .sm { font-size: 70%; }">
                </div>
            </div>

            <div class="form-group row">
                <label for="slug" class="col-sm-2 col-form-label" style="margin-left:20px;"> Slug</label>
                <div class="col-sm-9">
                  <input name="slug" type="text" class="form-control" id="slug"placeholder="Slug" style="margin-right:-50px;">
                </div>
            </div>

            <div class="form-group row">
                <div class="offset-sm-3 col-sm-9">
                    <button type="submit" class="btn btn-primary">Done</button>
                </div>
            </div>

          </form>

      </div>
    </div>
  </section>

  @endsection
