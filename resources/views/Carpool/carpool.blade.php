@extends('layout')

@section('content')
<h1> Carpooling in Iceland </h1>

<div id="tableGoesHere" class="table table-striped table-bordered table-sm">

</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('/js/carpooling.js') }}"></script> 
@endsection