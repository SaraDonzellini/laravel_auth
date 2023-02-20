@extends('layouts.app')

@section('content')
<section class="container">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <img src="{{$project->image}}" class="card-img-top" alt="{{$project->title}}">
        <div class="card-body">
          <h5 class="card-title">{{$project->title}}</h5>
          <p class="card-text">{{$project->content}}</p>
          <a href="#" class="btn btn-success">Edit</a>
          <a href="#" class="btn btn-danger">Delete</a>
        </div>
      </div>

    </div>
  </div>
</section>

@endsection