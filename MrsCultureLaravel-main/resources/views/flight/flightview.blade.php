@extends('layouts.app')

@section('content')

<style>
  body{
    background-image: url('images/ticket-flight.png');
    background-position: center;
    background-size: cover
  }
  table{
    margin: 5%
  }
  .flight-hover:hover{
    background: white;
    
  }
</style>


<div class="container-fluid" style="">
    @if(session('status'))
    <div class="alert alert-success"> {{session('status')}}</div>
      
    @endif   
  
    <div class="container-fluid" style="margin-top: 10%; width:1400px">
      
      <h3>You Flight booking</h3>
      <hr style="color: orange; height:10px">
      
  
      <div class="col-md-12">
        @foreach ($fbook as $fbook)

        <div class="p-2 col-sm-11 hotel-card flight-hover">
            {{-- <img src="images/flight-img.jpg" class="card-img-top" alt="..."> --}}
            <div style="display: flex">
              
              <div class="col-sm-2">
                <h5> <span style="font-size: small">Name</span> <strong>{{$fbook->name}}</strong> </h5>
               
                
              </div>
              <div class="col-sm-2">
                <h5> <span style="font-size: small">Email</span> <strong>{{$fbook->email}}</strong> </h5>
             
              
              </div>

              <div class="col-sm-2">
                <h5> <span style="font-size: small">From</span> <strong>{{$fbook->start}}</strong> </h5>
                <h5> <span style="font-size: small">To</span> <strong>{{$fbook->end}}</strong> </h5>
             
              </div>
              <div class="col-sm-1">
                <h5 > <span style="font-size: small">Adults </span>{{$fbook->adults}}</h5>
                <h5 > <span style="font-size: small">Childrens </span>{{$fbook->childrens}}</h5>
                
  
  
              </div>

              <div class="col-sm-2">
                <h5 > <span style="font-size: small">Travelclass </span>{{$fbook->travelclass}}</h5>
                <h5 > <span style="font-size: small">Departuredate </span>{{$fbook->departuredate}}</h5>
                
  
  
              </div>
              <div class="col-sm-1">
                <h5 > <span style="font-size: small">Journeytype </span>{{$fbook->journeytype}}</h5>
              </div>
  
  
              {{-- <div class="col-sm-3">
                <h5 > <span style="font-size: small">Time </span>{{$fbook->time}}</h5>
               
                
              </div> --}}
              <div class="col-sm-2">
                
                <h5 > <span style="font-size: small">Amount ₹ </span>{{$fbook->amount}}</h5>
              
                
              </div>
            
              
            </div>
            </div>
          
        
        @endforeach
      </div>
  
      
  
    </div>                 
     
  </div>
   
  


@endsection




