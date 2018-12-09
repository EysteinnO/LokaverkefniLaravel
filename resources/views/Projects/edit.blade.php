@extends('layout')
@section('content')
<h1 class="title"> Edit Project </h1>
<form method="POST" action="/projects/{{ $project->id}}">
	@csrf
	@method('PATCH')
	<div class="field">
		<label class="label" for="title">Title</label>
		<div class="control">
			<input type="text" class="input" name="title" placeholder="Title" value="{{ $project->title}}">
		</div>
	</div>
	<div class="field">
		<label class="label" for="title">Title</label>
		<div class="control">
			<textarea name="description" class="textarea">{{$project->description}}
			</textarea>
		</div>
	</div>
	<button class="button" type="submit">Update</button>
</form>

<form method="post" action="/projects/{{$project->id}}">
	@csrf
	@method('DELETE')
	<div class="field">
		<div class="control">
			<button class="button" type="submit">Delete</button>
		</div>
	</div>
</form>
@endsection