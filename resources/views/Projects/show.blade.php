@extends('postlayout')
	
@section('content')
<h1 class="title"> </h1>
<div class=content">
	{{$project->description}}
</div>
<div class="card-footer text-muted">
	Posted on {{$project->created_at}} by {{$project->id}}
	<a href="{{$project->id}}">View profile</a>
</div>
<p>
	<a href="/projects/{{$project->id}}/edit"> Edit </a>
</p>
@endsection