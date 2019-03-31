@extends('layout')

@section('content')
	<h1> Add new Flight </h1>
	<hr>
	<form class="form-horizontal" method="post" action="/flights">
		@csrf
		@if($errors->any())
			@foreach($errors->all() as $error)
				<div class="alert alert-danger" role="alert">
					{{ $error }}
				</div>			
			@endforeach
		@endif
		<div class="row">
			<div class="col">
				<div class="form-group">
    				<label class="control-label" for="flight_departure_date">Date of departure:</label>
      				<input type="date" class="form-control {{ $errors->has('flight_departure_date') ? 'is-invalid' : '' }}" id="flight_departure_date" name="flight_departure_date" value="{{ old('flight_departure_date') }}" required>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
    				<label class="control-label" for="flight_departure_time">Time of departure:</label>
      				<input type="time" class="form-control {{ $errors->has('flight_departure_time') ? 'is-invalid' : '' }}" id="flight_departure_time" name="flight_departure_time" value="{{ old('flight_departure_time') }}" required>
  				</div>	
			</div>
  		</div>
  		<div class="row">
			<div class="col">
				<div class="form-group">
    				<label class="control-label" for="flight_arrival_date">Date of arrival:</label>
      				<input type="date" class="form-control {{ $errors->has('flight_arrival_date') ? 'is-invalid' : '' }}" id="flight_arrival_date" name="flight_arrival_date" value="{{ old('flight_arrival_date') }}" required>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
    				<label class="control-label" for="flight_arrival_time">Time of arrival:</label>
      				<input type="time" class="form-control {{ $errors->has('flight_arrival_time') ? 'is-invalid' : '' }}" id="flight_arrival_time" name="flight_arrival_time" value="{{ old('flight_arrival_time') }}" required>
  				</div>	
			</div>
  		</div>
  		<div class="row">
  			<div class="col">
  				<div class="form-group">
    				<label class="control-label" for="flight_transfers">Number of transfers:</label>
      				<input type="number" class="form-control {{ $errors->has('flight_transfers') ? 'is-invalid' : '' }}" id="flight_transfers" name="flight_transfers" value="{{ old('flight_transfers') }}" required>
  				</div>	
  			</div>
  			<div class="col">
  				<div class="form-group">
    				<label class="control-label" for="flight_transfers_location">Location of transfers:</label>
      				<input type="text" class="form-control {{ $errors->has('flight_transfers_location') ? 'is-invalid' : '' }}" id="flight_transfers_location" name="flight_transfers_location" value="{{ old('flight_transfers_location') }}" required>
  				</div>	
  			</div>
  		</div>
  		<div class="row">
  			<div class="col">
  				<div class="form-group">
    				<label class="control-label" for="flight_price">Flight price:</label>
      				<input type="number" class="form-control {{ $errors->has('flight_price') ? 'is-invalid' : '' }}" id="flight_price" name="flight_price" value="{{ old('flight_price') }}" required>
  				</div>	
  			</div>
  		</div>
  <div class="form-group"> 
      <button type="submit" class="btn btn-success">Add Flight</button>
  </div>
</form>
@endsection