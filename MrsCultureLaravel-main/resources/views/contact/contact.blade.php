@extends('layouts.app')

@section('content')



    <div class="container-fluid" id="main-top">

      @if (session('status'))
      <div class="alert alert-success" role="alert">
          {{ session('status') }}
      </div>
  @endif
    <!-- form -->
    <div class="bg-background" style></div>
    <div class="container py-5">
        <div class="row py-5 g-3">

            <div class="col-md-6 first_col ">
                <h1 class="text-center mt-3">Contact Us</h1>
                <form class="p-4 mt-5" action="contact" method="POST">
                  @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Enter your Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="fullname">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email ID</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Enter your massage</label>
                        <textarea  type="text" class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" id="submit">Send Now</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6 sec_col">
                <img src="images/contact.jpg"
                    class="img-fluid">
            </div>
        </div>
        <div class="row-last">
            <div class="row row-cols-1 row-cols-md-3  p-3 text-white">
                <div class="col">
                    <h4>CALL US</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, doloribus!</p>
                </div>
                <div class="col">
                    <h4>LOCATION</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, doloribus!</p>
                </div>
                <div class="col">
                    <h4>Email</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, doloribus!</p>
                </div>
            </div>
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
      <script> 
        const submitButton = document.getElementById('submit'); 
               submitButton.addEventListener('click', function() { 
         alert('I will keep you updated'); 
        });
     </script>

@endsection