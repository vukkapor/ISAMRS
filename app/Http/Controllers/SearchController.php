<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search()
    {
    	$reqData = request()->all();
    	dd($reqData);
    	$query = $request->input('query');
    	$category = $request->input('category');


    	$category = 'flights';

    	if($category == 'flights')
    	{
    		$flights = DB::table('flights')
    			->where('id', 'LIKE', '%' . $query . '%')
    			->orWhere('flight_departure_date', 'LIKE', '%' . $query . '%')
    			->orWhere('flight_departure_time', 'LIKE', '%' . $query . '%')
    			->orWhere('flight_arrival_date', 'LIKE', '%' . $query . '%')
    			->orWhere('flight_departure_time', 'LIKE', '%' . $query . '%')
    			->orWhere('flight_transfers', 'LIKE', '%' . $query . '%')
    			->orWhere('flight_transfers_location', 'LIKE', '%' . $query . '%')
    			->orWhere('flight_price', 'LIKE', '%' . $query . '%')
    			->get();
    	}
    	elseif($type = 'bnbs')
    	{

    	}

    	return $flights;
    }
}
