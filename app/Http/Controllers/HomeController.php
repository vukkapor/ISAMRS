<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flight;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('verified');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $flights = Flight::all();
        return view('home.index', [
            'flights' => $flights
        ]);
    }
}
