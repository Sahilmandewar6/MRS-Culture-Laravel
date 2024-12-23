<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FlightBooking;
use App\Models\Flight;

class FlightBookiingController extends Controller
{
    public function flightBooking(Request $req){
        $flightbookings = new FlightBooking;
        $flightbookings->name=$req->name;
        $flightbookings->email=$req->email;
        $flightbookings->from=$req->from;
        $flightbookings->to=$req->to;
        $flightbookings->adults=$req->adults;
        $flightbookings->childrens=$req->childrens;
        $flightbookings->travelclass=$req->travelclass;
        $flightbookings->departuredate=$req->departuredate;
        // $flightbookings->time=$req->time;
        $flightbookings->journeytype=$req->journeytype;
        $flightbookings->amount=$req->amount;
        $flightbookings->save();
        return redirect('/home')->with('Status', 'flight Add Successfully');
    }
}
