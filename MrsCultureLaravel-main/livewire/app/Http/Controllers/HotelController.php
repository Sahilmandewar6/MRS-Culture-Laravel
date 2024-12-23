<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class HotelController extends Controller
{

    
    public function index(){
        $hotels = hotel::all();
        return view('hotel.hotelview', compact('hotels'));
    }

    public function getdata(Request $request){
         $hotels =new Hotel;
         $hotels->name=$request['name'];
         $hotels->email=$request['email'];
         $hotels->hotels=$request['hotels'];
         $hotels->adults=$request['adults'];
         $hotels->children=$request['children'];
         $hotels->checkin=$request['checkin'];
         $hotels->checkout=$request['checkout'];
         $hotels->save();

         // You can add any additional logic or redirect to a success page here.

        return redirect()->back()->with('success', 'Booking saved successfully.');
    }
}
