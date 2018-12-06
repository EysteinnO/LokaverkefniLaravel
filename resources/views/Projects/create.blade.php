<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1> Create a new project </h1>

	<form method="post" action="/projects">
		{{ csrf_field() }}
		<div>

			<input type="text" name="title" placeholder="Project title">


		</div>

		<div>
			<textarea name="description" placeholder="Description"> </textarea>
		</div>
		<button type="submit"> Create project </button>
	</form>

</body>
</html>