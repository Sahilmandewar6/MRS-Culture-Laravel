@extends('layouts.app')

@section('content')

<style>
  body{
    background-image: url('images/h-bg.jpg');
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



  
  
    <div class="container-fluid" style="margin-top: 10%; width:1400px">
      
      <h3>You Flight booking</h3>
      <hr style="color: orange; height:10px">
      
  
      <div class="col-md-12">
        @foreach($hotels as $hotel)

        <div class="p-2 col-sm-11 hotel-card flight-hover">
            
            <div style="display: flex">
              
              <div class="col-sm-2">
                <h5> <span style="font-size: small">Name</span> <strong>{{$hotel->name}}</strong> </h5>
               
                
              </div>
              <div class="col-sm-3">
                <h5> <span style="font-size: small">Email</span> <strong>{{$hotel->email}}</strong> </h5>
             
              
              </div>

              <div class="col-sm-3">
                <h5> <span style="font-size: small">Hotels</span> <strong>{{$hotel->hotels}}</strong> </h5>
               
              </div>
              <div class="col-sm-1">
                <h5 > <span style="font-size: small">Adults </span>{{$hotel->adults}}</h5>
                <h5 > <span style="font-size: small">Childrens </span>{{$hotel->childrens}}</h5>
                
  
  
              </div>

              <div class="col-sm-2">
                <h5 > <span style="font-size: small">Checkin </span>{{$hotel->checkin}}</h5>
                <h5 > <span style="font-size: small">Checkout </span>{{$hotel->checkout}}</h5>
                
  
  
              </div>
            
              
            </div>
            </div>
          
        
        @endforeach
      </div>
  
      
  
    </div>                 
     
   
  


@endsection




