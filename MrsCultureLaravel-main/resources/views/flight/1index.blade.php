@extends('layouts.app')

@section('content')
<style>
  body{
    background-image: url('images/flight-bg.jpg');
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
  
  
  <div class="container-fluid" style="margin-top: 10%; width:1400px">
    
    <h3>Flghts</h3>
    <hr style="color: orange; height:10px">
    

    <div class="col-md-12">
        @foreach ($flight as $flight)
        
          <div class="p-2 col-sm-11 hotel-card flight-hover">
          {{-- <img src="images/flight-img.jpg" class="card-img-top" alt="..."> --}}
          <div style="display: flex">
            
            <div class="col-sm-3">
              <h5> <span style="font-size: small">From</span> <strong>{{$flight->from}}</strong> </h5>
              <h5> <span style="font-size: small">To</span> <strong>{{$flight->to}}</strong> </h5>
           
            </div>

            <div class="col-sm-3">
              <h5 > <span style="font-size: small">Departuredate </span>{{$flight->departuredate}}</h5>
             

            </div>

            <div class="col-sm-3">
              <h5 > <span style="font-size: small">Time </span>{{$flight->time}}</h5>
             
              
            </div>
            <div class="col-sm-2">
              
              <h5 > <span style="font-size: small">Amount ₹ </span>{{$flight->amount}}</h5>
            
              
            </div>


            <div class="col-sm-1">

              <a href="{{url('book-flight/'.$flight->id)}}" class="btn btn-primary">Book Now</a>
            </div>

           
          
            
          </div>
          </div>
        
      
      @endforeach
    </div>

    

  </div>                 
   
</div>
 



@endsection