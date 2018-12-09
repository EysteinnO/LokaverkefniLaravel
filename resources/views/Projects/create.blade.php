@extends('layout')
@section('content')
<h1> Create a new blog </h1>
<form method="post" action="/projects">
	{{ csrf_field() }} <!--Validation-->
	<div class="form-group">
		<div>
			<label for="post">Title:</label>
			<input type="text" class="form-control" value="{{ $project->title}}" required>
		</div>
		
		<label for="post">Post:</label>
		<textarea class="form-control" rows="5" id="comment" value="{{ $project->description}}"required></textarea>
		
	</div>
	<button type="submit" class="btn btn-primary btn-lg">Post</button>
</form>
@endsection