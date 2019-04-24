@extends('layouts.app')

@section('content')

	<div class="container">
		<h1 class="title"> All Flights </h1>
		@foreach($flights as $flight)
		<div class="box">
			<article class="media">
    			<div class="media-left">
      				<figure class="image is-128x128">
        				<img src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
      				</figure>
    			</div>
    		<div class="media-content">
      			<div class="content">
      				<h2 class="subtitle"> Flight #{{ $flight->id }} </h2>
        			<div class="columns">
        				<div class="column">
        					<ul style="list-style-type: none;padding-inline-start:0;margin:0;">
		        				<li>
		        					<b>Departure: </b>{{ $flight->flight_departure_date }}
		        				</li>
		        				<li><b>Dep. Time: </b>{{ $flight->flight_departure_time }}</li>
		        			</ul>
        				</div>
      					<div class="column">
      						<ul style="list-style-type: none;padding-inline-start:0;margin:0;">
		        				<li>
		        					<b>Arrival: </b>{{ $flight->flight_arrival_date }}
		        				</li>
		        				<li><b>Arr. Time: </b>{{ $flight->flight_arrival_time }}</li>
		        			</ul>
      					</div>
      					<div class="column">
      						<ul style="list-style-type: none;padding-inline-start:0;margin:0;">
		        				<li>
		        					<b>Transfers: </b>{{ $flight->flight_transfers }}
		        				</li>
		        				<li><b>Trans. Location: </b>{{ $flight->flight_transfers_location }}</li>
		        			</ul>
      					</div>
      							        	<p class="card-text price" style="font-weight: 600;font-size: 25px;color:green;">{{ $flight->flight_price }}$</p>

        			</div>
      			</div>
    		</div>
  			</article>
  		</div>
		@endforeach
	</div>
@endsection