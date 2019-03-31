<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use \App\Flight;

class FlightsController extends Controller
{
    public function index()
    {
    	$flights = Flight::all();
    	return view('flights.index', [
    		'flights' => $flights
    	]);
    }

    public function create()
    {
    	return view('flights.create');
    }

	public function store()
	{
		$current_date = Carbon::now()->format('Y-m-d');
		$attributes = request()->validate([
			'flight_departure_date' => 'required|date|after_or_equal:' . $current_date,
			'flight_departure_time' => 'required',
			'flight_arrival_date' => 'required|date|after_or_equal:flight_departure_date',
			'flight_arrival_time' => 'required',
			'flight_transfers' => 'required|alpha_num',
			'flight_transfers_location' => 'required|filled|max:255',
			'flight_price' => 'required|min:1',
		]);

		Flight::create($attributes);

		return redirect('/flights');
	}    
}
