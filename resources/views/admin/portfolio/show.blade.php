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
            <li class="breadcrumb-item"><a href="{{route('portfolio.index') }}">Portfolio</a></li>
            <li class="breadcrumb-item active">View</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>


  <section class="content">
    <div class="row">
      <div class="col-12">

        <div class="card text-left">
          <div class=" card-body ">
            <div class="card-header">
              <h3 class="card-title" style="font-weight: 800;font-size: 1.5em; ;color:#8f8103;">
              Details
              </h3>
              <div class="project-actions card-title" id="text-right">
                <a class="btn btn-info btn-sm" name="edit" href="{{route('portfolio.edit', $portfolios->id) }}" >
                    <i class="fas fa-pencil-alt">
                    </i>
                </a>

              </div>
            </div>

            <div class="id">
                <h5>ID
                  <small style="margin-left:80px;" class="text-muted">{{ $portfolios->index +1 }}</small>
                </h5>
            </div>

            <div class="img">
                <img src="{{ URL::to('/')}}/images/{{ $portfolios->image}}" class="img-thumbnail" width="300"/>

            </div>

            <div class="id">
              <table >
                <tr class="detailstable cell-breakWord">
                  <th>Name</th>
                  <td>{{$portfolios->name}}</td>
                </tr>

                <tr class="detailstable cell-breakWord">
                  <th>Description</th>
                  <td>{{$portfolios->description}}</td>
                </tr>

                <tr class="detailstable cell-breakWord">
                  <th>Category</th>
                  <td>{{$portfolios->category['name']}}</td>
                </tr>

                <tr class="detailstable cell-breakWord">
                  <th>Slug</th>
                  <td>{{$portfolios->slug}}</td>
                </tr>

                <tr class="detailstable cell-breakWord">
                  <th>Details</th>
                  <td>{{$portfolios->details}}</td>
                </tr>

                <tr class="detailstable cell-breakWord">
                  <th>Status</th>
                  <td>{{$portfolios->status}}</td>
                </tr>

                <tr class="detailstable cell-breakWord">
                  <th>Created at</th>
                  <td>{{$portfolios->updated_at}}</td>
                </tr>
              </table>

            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  @endsection
