<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class FlightController extends Controller
{
    public function index(){
        $flight = Flight::all();
        // return view('flight.index', compact('flight'));
        return view('flight.index', ['flight'=>$flight]);
        
    }

    public function add(){
        return view('flight.create');
    }
   


    public function flightdata(Request $req){
        $flights = new Flight;
        $flights->from=$req->from;
        $flights->to=$req->to;
        $flights->departuredate=$req->departuredate;
        $flights->time=$req->time;
        $flights->amount=$req->amount;
        $flights->save();
        return redirect('flight')->with('Status', 'flight Add Successfully');
    }
}
