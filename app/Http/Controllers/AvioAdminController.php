<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AvioAdminController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    	$this->middleware('role:ROLE_AVIO')
    }

    public function index()
    {
    	return view('avio.dashboard');
    }
}
