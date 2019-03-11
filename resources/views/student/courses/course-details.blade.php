@extends('layouts.backend.app')
@push('css')
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
@endpush

@section('content')

		<ul class="list-group">
			<li class="list-group-item active">{{$course->name}}</li>
			@foreach($courses as $key=>$course)
			  	<li class="list-group-item">{{$key+1}}{{". "}}<a href="">{{$course->title}}</a></li>
			  	@foreach($courses as $cp)
			  	<li class="list-group-item"><a href="">{!!$cp->course_link!!}</a></li>
			  	@endforeach
			@endforeach
		</ul>

@endsection
@push('js')
    <!-- Latest compiled and minified JavaScript -->
<!--     <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script> -->
@endpush