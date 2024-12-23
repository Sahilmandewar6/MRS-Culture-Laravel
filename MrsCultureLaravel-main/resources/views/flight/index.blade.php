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

              <a href="flight-booking" class="btn btn-primary">Book Now</a>
            </div>

           
          
            
          </div>
          </div>
        
      
      @endforeach
    </div>

    

  </div>                 
   
</div>
 
    <!-- ========== Start Sign Up for a Newsletter ========== -->
    
    <div class=" signup-newsletter flex-nowrap my-5" style=" background-image: url(images/news-3.jpg); background-size:cover; width:120%;">
     
      <h1 class="h1-h4">Sign Up for a Newsletter</h1>
      <h4 class="h1-h4">Sign up for our mailing list to get latest updates and offers.</h4>
      <div id="news-div" class="col-md-4">
        
        <form action="" method="get">
          <input id="news-div-email" type="email" placeholder="Enter Your Email" required="">
          <input id="news-div-submit" type="submit">
        </form>
      </div>
    
        
    </div>
    
    
    <!-- ========== End Sign Up for a Newsletter ========== -->
    
    
    
    
    
    
    <footer>
    
      <div id="footer" class="container-fluid " style="margin-top: -150px; padding: 100px; color: white;">
        <div class="row m-5"  style="padding-top: 100px;">
          <div class="col-md-3">
            <h6>Mrs Culture Agency</h6>
            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
            <a href="https://www.facebook.com/mrscultureoffical/"><img class="news-logo" src="Logo/facebook (1).png" alt=""></a>
            <a href="#"><img class="news-logo" src="Logo/twitter.png" alt=""></a>
            <a href="https://www.instagram.com/mrs._culture/"><img class="news-logo" src="Logo/instagram (1).png" alt=""></a>
            <a href="https://www.youtube.com/@m_rs_culture"><img class="news-logo" src="Logo/youtube (1).png" alt=""></a>
          </div>
          
            
          
          <div class="col-md-1" style="font-size: smaller;">
            <h6>Book Now</h6>
            <a style="text-decoration: none; color:white" href="flight"><div>Flight</div></a>
            <a style="text-decoration: none; color:white"  href="hotel"><div>Hotels</div></a>
            <a style="text-decoration: none; color:white"  href=""><div>Tour</div></a>
            <a style="text-decoration: none; color:white"  href=""><div>Car Rent</div></a>
            <a style="text-decoration: none; color:white"  href="destination"><div>Beach & Resorts</div></a>
            <a style="text-decoration: none; color:white"  href="cruises"><div>Cruises</div></a>
          </div>
        
          <div class="col-md-1" style="font-size: smaller;">
            <h6>Top Deals</h6>
            <a style="text-decoration: none; color:white"  href=""><div>Edina Hotel</div></a>
            <a style="text-decoration: none; color:white"  href=""><div>Quality Suites</div></a>
            <a style="text-decoration: none; color:white"  href=""><div>The Hotel Zephyr</div></a>
            <a style="text-decoration: none; color:white"  href=""><div>Da Vinci Villa</div></a>
            <a style="text-decoration: none; color:white"  href=""><div>Hotel Epikk</div></a>
          </div> 
        
          <div class="col-md-4" style="font-size: smaller;">
            <h6>Blog Post</h6>
            <div>The Ultimate Packing List For Female Travelers</div>
            <div>How These 5 People Found The Path to Their Dream Trip</div>
            <div>A Definitive Guide to the Best Dining and Drinking Venues in the City</div>
          </div>
        
          <div class="col-md-3" style="font-size: smaller;">
            <h6>Contact Information</h6>
            <div>Address: Mumbai</div>
            <div><a href="mailto:mrsculture.offical@gmail.com" style="text-decoration: none; color: white;">mrsculture.offical@gmail.com</a></div>
            <div><a href="tel:+919310521020"></a>+919310521020</div>
            <div class="footer-copyright text-center " style="margin-left: -190px">@ 2023 copyright:
              <a href="home">mrsculture</a>
              <p style="text-align: center;">| All rights reserved I</p> 
            </div>
          
          </div>
        </div>
      </div>
      
      
    
    </footer>



@endsection