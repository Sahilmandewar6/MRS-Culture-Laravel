<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fbook;
use App\Models\User;


class BookController extends Controller
{
    public function index(){
        $fbook = Fbook::all();
        // return view('flight.flightview', compact('fbook'));
        return view('flight.flightview', ['fbook'=>$fbook]);
    }
    // public function book(){
        
    //     return view('flight.flightbooking');
    // }

    
    
    public function dataget(Request $req){
        $fbooks = new Fbook;
     
        $fbooks->name=$req->name;
        $fbooks->email=$req->email;
        $fbooks->start=$req->start;
        $fbooks->end=$req->end;
        $fbooks->adults=$req->adults;
        $fbooks->childrens=$req->childrens;
        $fbooks->travelclass=$req->travelclass;
        $fbooks->departuredate=$req->departuredate;
        // $fbooks->time=$req->time;
        $fbooks->journeytype=$req->journeytype;
        $fbooks->amount=$req->amount;
        $fbooks->save();
        return redirect('/home')->with('Status', 'flight Book Successfully');
       
    }
}
