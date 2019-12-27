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
            <li class="breadcrumb-item"><a href="{{route('catalog.index') }}">Catalog</a></li>
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
          <h3 class="card-title" style="font-weight: 800;font-size: 1.5em; ;color:#8f8103;  ">New Catalog</h3>
        </div>

            @include('admin.layout.message')


          <form role="form" action="{{route('catalog.store') }}" method = "POST"  enctype="multipart/form-data">
            @csrf
            <div class="form-group row" style="margin-top:30px;">
                <label for="title" class="col-sm-2 col-form-label" style="margin-left:20px;">Catalog Name</label>
                <div class="col-sm-9">
                  <input name="title" type="text" class="form-control" id="title" placeholder="Catalog Name" style="margin-right:-50px; .sm { font-size: 70%; }">
                </div>
            </div>
            <div class="form-group row">
                <label for="content" class="col-sm-2 col-form-label" style="margin-left:20px;"> Content </label>
                <div class="col-sm-9">
                  <input id="content" type="file" class="form-control" name="content" value="{{ old('content') }}"  multiple>
                </div>
            </div>

            <div class="form-group row">
              <label for="slug" class="col-sm-2 col-form-label" style="margin-left:20px;">slug</label>
              <div class="col-sm-9">
                <input name="slug" type="text" class="form-control" id="slug" placeholder="Catalog slug" style="margin-right:-50px;">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="exampleCheck2" style="margin-left:20px;">Status</label>
              <div class="col-sm-9">
                <input type="checkbox" checked data-toggle="toggle" data-off="unpost" data-on="post"  data-size="xs" name="status" data-offstyle="outline-dark" data-onstyle="info" data-style="border" value="1" style="margin-left:20px; margin-top:20px;"/>
              </div>
            </div>

            <div class="form-group row">
              <div class="offset-sm-3 col-sm-9">
                <button type="submit" class="btn btn-primary">Done</button>
                <a  href='{{route('catalog.index')}}' class="btn btn-info" style="margin-left:10px">Back</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
  </div>
@endsection
