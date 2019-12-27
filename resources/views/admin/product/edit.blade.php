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
              <li class="breadcrumb-item"><a href="{{route('product.index') }}">Product</a></li>
              <li class="breadcrumb-item active">Edit</li>
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
            <h3 class="card-title" style="font-weight: 800;font-size: 1.5em; ;color:#8f8103;  ">Edit Product</h3>
          </div>

          @include('admin.layout.message')

          <form role="form" action="{{ route('product.update',$products->id) }}" method = "POST"  enctype="multipart/form-data">
            {{ csrf_field() }}
  	        {{ method_field('PATCH') }}

            <div class="form-group row" style="margin-top:30px;">
                <label for="name" class="col-sm-2 col-form-label" style="margin-left:20px;">Portfolio Name</label>
                <div class="col-sm-9">
                  <input name="name" type="text" class="form-control" id="name" value="{{$products->name}}" placeholder="Product Name" style="margin-right:-50px; .sm { font-size: 70%; }">
                </div>
            </div>

            <div class="form-groups row">
              <label for="image" class="col-sm-2 col-form-label" style="margin-left:20px;">Image</label>
              <div class="col-sm-9">
                  <img src="{{ URL::to('/')}}/images/{{ $products->image}}" class="img-thumbnail" width="75"/>
                  <input type="file" name="image" value="{{ $products->image}}"/>
               </div>
            </div><br>

            <div class="form-group row">
                <label for="catalog" class="col-sm-2 col-form-label" style="margin-left:20px;">Catalog</label>
                <div class="col-sm-9">
                  <input name="catalog" type="text" value="{{$products->catalog}}" class="form-control" id="catalog" placeholder="Catalog" style="margin-right:-40px;">
                </div>
            </div>

            <div class="form-group row">
                <label for="category_id" class="col-sm-2 col-form-label" style="margin-left:20px;"> Category</label>
                <div class="col-sm-9">
                  <select  name="category_id" type="text"  class="form-control select2 select2bs4 select2-hidden-accessible" id="category_id" placeholder="Product Category" style="margin-right:-50px;" tabindex="-1" aria-hidden="true" name="categories[]">
                    <option value="">--- Select Category ---</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{$products->category_id == $category->id  ? 'selected' : ''}}>{{ $category->name}}</option>
                    @endforeach
                 </select>

                </div>
            </div>

            <!--div class="form-group" style="margin-top:18px;">
                    <label>Select Tags</label>
                    <select class="form-control select2 select2bs4 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true" name="tags[]">
                      @foreach ($tags as $tag)
                      <option value="{{ $tag->id }}"
                        @foreach ($product->tags as $productTag)
                          @if ($productTag->id == $tag->id)
                            selected
                          @endif
                        @endforeach
                      >{{ $tag->name }}</option>
                      @endforeach
                    </select>
                  </div-->


            <div class="form-group row">
                <label for="slug" class="col-sm-2 col-form-label" style="margin-left:20px;">Slug</label>
                <div class="col-sm-9">
                  <input name="slug" type="text" value="{{$products->slug}}" class="form-control" id="slug" placeholder="Slug" style="margin-right:-40px;">
                </div>
            </div>

            <div class="form-group row" >
                <label for="owner" class="col-sm-2 col-form-label" style="margin-left:15px;">Owner</label>
                <div class="col-sm-9">
                  <input data-id="{{$products->owner}}" name="owner" type="text" class="form-control toggle-class" id="owner" value="{{$products->owner}}" placeholder="Owner" style="margin-right:-40px; .sm { font-size: 70%; }">
                </div>
            </div>

            <div class="form-group row" >
                <label for="price" class="col-sm-2 col-form-label" style="margin-left:15px;">Price</label>
                <div class="col-sm-9">
                  <input data-id="{{$products->price}}" name="price" type="text" class="form-control toggle-class" id="price" value="{{$products->price}}" placeholder="Price" style="margin-right:-40px; .sm { font-size: 70%; }">
                </div>
            </div>

            <div class="form-group row" >
              <label class="col-sm-2 col-form-label" for="status" style="margin-left:20px;">Status</label>
              <div class="col-sm-9 checkbox"  style="margin-left:20px; margin-top:20px;">
              <input
                    name="status"
                    type="checkbox"
                    value="1"
                    @if($products->status == 1 )
                    checked
                    @endif
                    data-toggle="toggle"
                     data-onstyle="info" data-on="Post" data-off="Unpost"
                    data-size="xs" data-offstyle="outline-dark" data-style="border" style="margin-left:20px; margin-top:20px;">
              </div>
            </div>


            <div class="form-group row">
                <div class="offset-sm-3 col-sm-9">
                    <button type="submit" class="btn btn-primary" name="done" id="done"> Done </button>
                    <a  href='{{route('product.index')}}' class="btn btn-info" style="margin-left:10px">Back</a>
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

    $('.select2-multi').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
})
    </script>

@endsection
