@extends('layouts.app')

@section('content')

<!--background image-->
<div class="container">
  <div class="part1">
      <div class="background-image">
          <img class="slide" src="" style="background-image: url(images/service.jpg) ; margin-top: -50px;"alt="">
       <div class="carousel-caption d-none d-md-block">
          <h2 class="nav-heading"> Services</h2>
      </div>    
      </div>
  </div>
</div>
   
<!-- <div class="container">
    <div class="part1">
        <div class="background-image">
            <img class="slide" src="" style="background-image: url(images/pxfuel.jpg);"alt="">
        <div class="carousel-caption d-none d-md-block">
            <h2 style="font: size 50px;">Service</h2>
        </div>    
        </div>
    </div> -->

<!--background image-->



   

    <!-- ========== Start Services ========== -->

    <div class="container-fluid row flex-wrap bg-none"style="margin-top: 200px">
        <div class="col-md-3 text-center p-5">

          <img class="service-img m-3 service-img-flight" src="Logo/flight1.png" alt="" srcset="">

          <p style="font-size: x-large;">Amazing Travel</p>
          <p style="text-align: justify;">Separated they live in Bookmarksgrove right at the coast of the Semantics, a
            large language ocean. A small river named Duden flows by their place and supplies</p>
        </div>

        <div class="col-md-3 text-center  p-5     ">
          <div class="col">
            <img class="service-img m-3" src="Logo/ship (1).png" alt="" srcset="">
          </div>
          <p style="font-size: x-large;">Our Cruises</p>
          <p style="text-align: justify;">Separated they live in Bookmarksgrove right at the coast of the Semantics, a
            large language ocean. A small river named Duden flows by their place and supplies</p>
        </div>

        <div class="col-md-3 text-center  p-5     ">
          <div class="col">
            <img class="service-img m-3" src="Logo/business-trip.png" alt="" srcset="">
          </div>
          <p style="font-size: x-large;">Book Your Trip</p>
          <p style="text-align: justify;">Separated they live in Bookmarksgrove right at the coast of the Semantics, a
            large language ocean. A small river named Duden flows by their place and supplies</p>
        </div>

        <div class="col-md-3 text-center   p-5    ">
          <div class="col">
            <img class="service-img m-3" src="Logo/technical-support.png" alt="" srcset="">
          </div>
          <p style="font-size: x-large;">Nice Support</p>
          <p style="text-align: justify;">Separated they live in Bookmarksgrove right at the coast of the Semantics, a
            large language ocean. A small river named Duden flows by their place and supplies</p>
        </div>
      </div>


      <!-- ========== End Services ========== -->



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