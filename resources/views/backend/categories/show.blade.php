@extends('backend_master')
@section('content')
  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i> Categories</h1>
        <p>A free and open source Bootstrap 4 admin template</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Categories</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <h2>Category Show UI</h2>

        <img src="{{$category->photo}}" class="img-fluid">

        <p>{{$category->name}}</p>
      </div>
    </div>
  </main>
@endsection