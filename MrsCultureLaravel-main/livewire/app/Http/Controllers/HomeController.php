<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;
use App\Models\Fbook;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     //This for home
    public function index()
    {
        return view('home');
    }

    //This for destination
    public function destpage(){
        return view('destination/destination');
    }

    //This is for cruises
    public function cruises(){
        return view('cruises/cruisescommingsoon');
    }

    //This is for hotel
    public function hotel(){
        return view('hotel/hotel');
    }

    //This for flight
    public function flight(){
        $flight = Flight::all();
        return view('flight.index', compact('flight'));
       
        
    }
    
   
    public function book(){
        
        return view('flight.flightbooking');
        
    }

    public function blog(){
        
        return view('blog.blogcommingsoon');
    }
    public function dress(){
        return view('dress.dress');
    }

    public function photo(){
        return view('dress.photo');
    }

    public function contact(){
        return view('contact.contact');
    }

    

    public function services(){
        return view('services.service');
    }

    // public function book($id){
    //     $flight = Flight::find($id);
    //     return view('flight.edit', compact('flight'));
    // }

    // public function bookingflight()
    // {
    //     return view('flight.flightbooking');
    // }
    
    public function about(){
        return view('about.about');
    }
    
}
