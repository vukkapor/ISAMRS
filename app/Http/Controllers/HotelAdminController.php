<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelAdminController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    	$this->middleware('role:ROLE_HOTEL');
    }

    public function index()
    {
    	return view('hotels.dashboard');
    }
}
