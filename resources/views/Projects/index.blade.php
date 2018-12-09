@extends('layout')
@section('content')
<h1 class="my-4">Welcome to your Travel Hub for Iceland</h1>
<h3 class="my-4">Your center for tavelling needs</h3>
<div class="row">
	<div class="col-lg-4 mb-4">
		<div class="card h-100">
			<h4 class="card-header">Car pooling</h4>
			<div class="card-body">
				<p class="card-text">All your carpooling needs at a glance.</p>
			</div>
			<div class="card-footer">
				<a href="carpool" class="btn btn-primary">Learn More</a>
			</div>
		</div>
	</div>
	
	<div class="col-lg-4 mb-4">
		<div class="card h-100">
			<h4 class="card-header">Gas Stations</h4>
			<div class="card-body">
				<p class="card-text">Gas station prices and more.</p>
			</div>
			<div class="card-footer">
				<a href="gas" class="btn btn-primary">Learn More</a>
			</div>
		</div>
	</div>
</div>
<h3> Flight information </h3>
<div class="row">
	
	<div class="col-lg-4 mb-4">
		<div class="card h-100">
			<h4 class="card-header">Arrivals</h4>
			<div class="card-body">
				<p class="card-text">Here you can see all arrivals today.</p>
			</div>
			<div class="card-footer">
				<a href="/arrivals" class="btn btn-primary">Learn More</a>
			</div>
		</div>
	</div>
	<div class="col-lg-4 mb-4">
		<div class="card h-100">
			<h4 class="card-header">Departures</h4>
			<div class="card-body">
				<p class="card-text">Here you can see all departures today.</p>
			</div>
			<div class="card-footer">
				<a href="/departures" class="btn btn-primary">Learn More</a>
			</div>
		</div>
	</div>
</div>
</div>
@endsection