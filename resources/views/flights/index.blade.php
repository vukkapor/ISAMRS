@extends('layouts.app')

@section('content')
	<style type="text/css">
		ul > li {
			color: #0062cc;
		}
		ul > li > b {
			color: #212529;
			font-weight: 600;
		}
	</style>
	<div class="container">
	<h1> All Flights </h1>
		@foreach($flights as $flight)
			<div class="card mb-3">
  		<div class="row no-gutters">
    		<div class="col-md-4">
      			<img width="200" src="https://hbh.law/wp-content/uploads/2013/11/dummy-image-square-300x300.jpg">
    		</div>
	    	<div class="col-md-8">
		      	<div class="card-body">
		        	<h5 class="card-title">Flight #{{ $flight->id }}</h5>
		        	<div class="row">
		        		<div class="col-md-4">
		        			<ul style="list-style-type: none;padding-inline-start:0;">
		        				<li>
		        					<b>Departure: </b>{{ $flight->flight_departure_date }}
		        				</li>
		        				<li><b>Dep. Time: </b>{{ $flight->flight_departure_time }}</li>
		        			</ul>
		        		</div>
		        		<div class="col-md-4">
		        			<ul style="list-style-type: none;padding-inline-start:0;">
		        				<li>
		        					<b>Arrival: </b>{{ $flight->flight_arrival_date }}
		        				</li>
		        				<li><b>Arr. Time: </b>{{ $flight->flight_arrival_time }}</li>
		        			</ul>
		        		</div>
		        		<div class="col-md-4">
		        			<ul style="list-style-type: none;padding-inline-start:0;">
		        				<li>
		        					<b>Transfers: </b>{{ $flight->flight_transfers }}
		        				</li>
		        				<li><b>Trans. Location: </b>{{ $flight->flight_transfers_location }}</li>
		        			</ul>
		        		</div>
		        	</div>
		        	<p class="card-text price" style="font-weight: 600;font-size: 25px;color:green;">{{ $flight->flight_price }}$</p>
		      	</div>
	    	</div>
  		</div>
	</div>
		@endforeach
	</div>
@endsection