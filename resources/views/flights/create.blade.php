@extends('layout')

@section('content')
	<h1> Add new Flight </h1>
	<hr>
	<form class="form-horizontal" method="post" action="/flights">
		@csrf
		<div class="row">
			<div class="col">
				<div class="form-group">
    				<label class="control-label" for="f_departure_date">Date of departure:</label>
      				<input type="date" class="form-control" id="f_departure_date" name="f_departure_date">
				</div>
			</div>
			<div class="col">
				<div class="form-group">
    				<label class="control-label" for="f_departure_time">Time of departure:</label>
      				<input type="time" class="form-control" id="f_departure_time" name="f_departure_time">
  				</div>	
			</div>
  		</div>
  		<div class="row">
			<div class="col">
				<div class="form-group">
    				<label class="control-label" for="f_arrival_date">Date of arrival:</label>
      				<input type="date" class="form-control" id="f_arrival_date" name="f_arrival_date">
				</div>
			</div>
			<div class="col">
				<div class="form-group">
    				<label class="control-label" for="f_arrival_time">Time of arrival:</label>
      				<input type="time" class="form-control" id="f_arrival_time" name="f_arrival_time">
  				</div>	
			</div>
  		</div>
  		<div class="row">
  			<div class="col">
  				<div class="form-group">
    				<label class="control-label" for="f_transfers">Number of transfers:</label>
      				<input type="number" class="form-control" id="f_transfers" name="f_transfers">
  				</div>	
  			</div>
  			<div class="col">
  				<div class="form-group">
    				<label class="control-label" for="f_transfers_location">Location of transfers:</label>
      				<input type="text" class="form-control" id="f_transfers_location" name="f_transfers_location">
  				</div>	
  			</div>
  		</div>
  		<div class="row">
  			<div class="col">
  				<div class="form-group">
    				<label class="control-label" for="f_price">Flight price:</label>
      				<input type="number" class="form-control" id="f_price" name="f_price">
  				</div>	
  			</div>
  		</div>
  <div class="form-group"> 
      <button type="submit" class="btn btn-success">Add Flight</button>
  </div>
</form>
@endsection