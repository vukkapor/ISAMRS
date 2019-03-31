@extends('layout')

@section('content')
	<ul>
		@foreach($flights as $flight)
			<li>
				{{ $flight }}
			</li>
		@endforeach
	</ul>
@endsection