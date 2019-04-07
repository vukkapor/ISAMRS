<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RentacarAdminController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    	$this->middleware('role:ROLE_RENTACAR');
    }

    public function index()
    {
    	return view('rentacar.dashboard');
    }
}
