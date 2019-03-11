@extends('layouts.backend.app')

@section('content')
	<table class="table">
		<thead>
			<th>Student Id</th>
			<th>Name</th>
			<th>Topic</th>
			<th>Submission Date</th>
			<th>Action</th>
		</thead>
		<tbody>
			@foreach($assignments as $assignment)

				<tr>
					<td>{{ $assignment->student_id }}</td>
					<td>{{ $assignment->course }}</td>
					<td>Theory of relativity</td>
					<td>{{$assignment->created_at}}</td>
					<td><a href="{{URL::asset('assignment/'.$assignment->assignment)}}" class="btn btn-info">View</a> <a href="https://smallseotools.com/plagiarism-checker/" target="_blank" class="btn btn-danger">Check With Plagarism</a></td>
				</tr>

			@endforeach
		</tbody>
	</table>
@endsection