@extends('layout')
@section('content')

<h1> News </h1>

    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
@foreach ($projects as $project)
          <h1 class="my-4"> </h1>
<!--<a href="/projects/{{$project->id}}">-->
          <!-- Blog Post -->
          <div class="card mb-4">
            <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title">{{$project->title}}</h2>
              <p class="card-text">{{$project->description}}</p>
              <a href="/projects/{{$project->id}}" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on {{$project->created_at}} by {{$project->id}}
              <a href="{{$project->id}}">View profile</a>
            </div>
          </div>


@endforeach

@endsection