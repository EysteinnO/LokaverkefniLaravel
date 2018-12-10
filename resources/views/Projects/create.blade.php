@extends('layout')
@section('content')
<h1> Create a new blog </h1>
<form method="post" action="/projects">
	{{ csrf_field() }} <!--Validation-->
	<div class="form-group">
		<div>
			<label for="post">Title:</label>
			<input type="text" name="title" class="form-control" value="" required>
		</div>
		
		<label for="post">Post:</label>
		<textarea name="description" class="form-control" rows="5" id="comment" value=""required></textarea>
		
	</div>
	<button type="submit" class="btn btn-primary btn-lg">Post</button>
</form>
@endsection