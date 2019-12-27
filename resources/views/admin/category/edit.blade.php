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
            <h3 class="card-title" style="font-weight: 800;font-size: 1.5em; ;color:#8f8103;  ">Edit Category</h3>
          </div>

          @include('admin.layout.message')

          <form role="form" action="{{ route('category.update',$categories->id) }}" method = "POST"  enctype="multipart/form-data">
            {{ csrf_field() }}
  	        {{ method_field('PATCH') }}

            <div class="form-group row" style="margin-top:30px;">
                <label for="name" class="col-sm-2 col-form-label" style="margin-left:20px;">Category Name</label>
                <div class="col-sm-9">
                  <input name="name" type="text" class="form-control" id="name" value="{{$categories->name}}" placeholder="Category Name" style="margin-right:-50px; .sm { font-size: 70%; }">
                </div>
            </div>

            <div class="form-groups row">
              <label for="image" class="col-sm-2 col-form-label" style="margin-left:20px;">Image</label>
              <div class="col-sm-9">
                  <img src="{{ URL::to('/')}}/images/{{ $categories->image}}" class="img-thumbnail" width="75"/>
                  <input type="file" name="image" value="{{ $categories->image}}"/>
               </div>
            </div><br>

            <div class="form-group row" >
                <label for="description" class="col-sm-2 col-form-label" style="margin-left:15px;">Details</label>
                <div class="col-sm-9">
                  <input data-id="{{$categories->id}}" name="description" type="text" class="form-control toggle-class" id="description" value="{{$categories->description}}" placeholder="Description" style="margin-right:-40px; .sm { font-size: 70%; }">
                </div>
            </div>

            <div class="form-group row">
                <label for="slug" class="col-sm-2 col-form-label" style="margin-left:20px;">Slug</label>
                <div class="col-sm-9">
                  <input name="slug" type="text" value="{{$categories->slug}}" class="form-control" id="slug" placeholder="Slug" style="margin-right:-40px;">
                </div>
            </div>

            <div class="form-group row" >
              <label class="col-sm-2 col-form-label" for="status" style="margin-left:20px;">Status</label>
              <div class="col-sm-9 checkbox"  style="margin-left:20px; margin-top:20px;">
              <input
                    name="status"
                    type="checkbox"
                    value="1"
                    @if($categories->status == 1)
                    checked
                    @endif
                    data-toggle="toggle"
                     data-onstyle="info" data-on="Post" data-off="Unpost"
                    data-size="xs" data-offstyle="outline-dark" data-style="border" style="margin-left:20px; margin-top:20px;">
              </div>
            </div>


<!--              {{ $categories->status == '1' ? 'checked' : '' }}   {{ old('status') ? 'checked="checked"' : '' }}-->
<!--input type="checkbox" checked data-toggle="toggle" data-on="post" data-off="unpost" data-size="xs" name="status" data-off="Unpost" {{$categories->status == '0' ? 'checked' : ''}}
data-offstyle="outline-dark" data-onstyle="info" data-style="border" value="{{$categories->status}}" style="margin-left:20px; margin-top:20px;"-->

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
<!--script>
$(document).ready(function(){
    $('.js-switch').change(function () {
        let status = $(this).prop('checked') === true ? 1 : 0;
        let userId = $(this).data('id');
        $.ajax({
            type: "GET",
            dataType: "json",
            data: {'status': status, 'categories_id':categoriesId},
            success: function (data) {
                console.log(data.message);
            }
        });
    });
});
</script-->

@endsection
