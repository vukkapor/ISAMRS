<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $fillable = [
    	'flight_departure_date',
    	'flight_departure_time',
    	'flight_arrival_date',
    	'flight_arrival_time',
    	'flight_transfers',
    	'flight_transfers_location',
    	'flight_price',
    ];
}
