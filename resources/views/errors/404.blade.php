@extends('layouts.app')

@section('content')
<div class="container">
	<h1> This is a 404 </h1>
	<p> The requested URL was not found on this server. </p>
	Go back to the <a href={{ route('home') }}>homepage </a>.
</div>
@endsection