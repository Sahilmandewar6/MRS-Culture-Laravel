@extends('layouts.app')

@section('content')

 <link rel="stylesheet" href="cssfile/hotel.css">


<body>


  <div class="container-fluid" id="main-top">


        <!-- here we are insert images -->
        <div class="part1 ">
          <div class="banner1">
            <img class="slide" src="" style="background-image: url(images/h-banner1.jpg);">
            <div class="carousel-caption d-none d-md-block">
              <p class="img-text">Make yourself at home</p>
              <h6 class="img-text-h">Comfort is our business</h6>
    
            </div>
    
          </div>
    
          <div class="banner2">
            <img class="slide" src="" style="background-image: url(images/h-banner2.jpg);">
            <div class="carousel-caption d-none d-md-block">
              <p class="img-text">Excellent hotel located</p>
              <h6 class="img-text-h">at an excellent location</h6>
    
            </div>
          </div>
    
          <div class="banner3">
            <img class="slide" src="" style="background-image: url(images/h-banner3.jpg);">
            <div class="carousel-caption d-none d-md-block">
              <p class="img-text">Is one of the best destination</p>
              <h6 class="img-text-h">to stay with family</h6>
    
            </div>
          </div>
    
          <div class="banner4">
            <img class="slide" src="" style="background-image: url(images/h-banner4.jpg);">
            <div class="carousel-caption d-none d-md-block">
              <p class="img-text">Well-appointed rooms</p>
              <h6 class="img-text-h">at great place</h6>
    
            </div>
          </div>
    
        </div>
        
    <!-- Start Hotel -->
    
          <div class="container-fluid" style="display: flex;">
            
            <div class="f-hotel col-9">

                <div class="container-fluid row " style="margin-top: 150px;">
                  
                    <div class="card col-md-3 p-2 hotel-card card-div" style="width: 18rem;">
                      <img src="images/hotel10.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Hotel Vintage Manali</h5>
                      <p class="card-text"><p style="color: black;"><img class="star" src="Logo/star-full.png"><img class="star"
                        src="Logo/star-full.png"><img class="star" src="Logo/star-full.png"><img class="star"
                        src="Logo/star-full.png"><img class="star" src="Logo/star-half.png"><span> 435 Reviews</span></p>
                        3 star Hotel in Manali<br>
                        Balcony's rooms are good view wise one of the best.</p>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Book Now</button>
                      </div>
                    </div>
            
                    <div class="card col-md-3 p-2 hotel-card" style="width: 18rem;">
                      <img src="images/hotel11.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">The Anantmaya Resort</h5>
                      <p class="card-text"><p style="color: black;"><img class="star" src="Logo/star-full.png"><img class="star"
                        src="Logo/star-full.png"><img class="star" src="Logo/star-full.png"><img class="star"
                        src="Logo/star-half.png"><span> 355 Reviews</span></p>
                        2 star Hotel in Pune<br>
                        Excellent hotel located at an excellent location</p>
                      <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Book Now</button>
                     
            
                      </div>
                    </div>
            
                    <div class="card col-md-3 p-2 hotel-card" style="width: 18rem;">
                      <img src="images/hotel3.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Treebo Trend Hotel</h5>
                      <p class="card-text"><p style="color: black;"><img class="star" src="Logo/star-full.png"><img class="star"
                        src="Logo/star-full.png"><img class="star" src="Logo/star-full.png"><img class="star"
                        src="Logo/star-full.png"><span> 185 Reviews</span></p>
                        3 star Hotel in Banglore<br>
                        Is one of the best destination to stay with family</p>
                      <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Book Now</button>
                     
                      </div>
                    </div>
            
                    <div class="card col-md-3 p-2 hotel-card" style="width: 18rem;">
                      <img src="images/hotel12.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Hill County Resort</h5>
                        <p class="card-text"><p style="color: black;"><img class="star" src="Logo/star-full.png"><img class="star"
                          src="Logo/star-full.png"><img class="star" src="Logo/star-full.png"><img class="star"
                          src="Logo/star-full.png"><img class="star" src="Logo/star-full.png"><span> 605 Reviews</span></p>
                          5 star Hotel in Mumbai<br>
                          Sea view is a very good for peaceful location</p>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Book Now</button>
                     
                      </div>
                    </div>
            
                    <div class="card col-md-5 p-2 hotel-card" style="width: 18rem;">
                      <img src="images/hotel5.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Highland Park Resort</h5>
                        <p class="card-text"><p style="color: black;"><img class="star" src="Logo/star-full.png"><img class="star"
                          src="Logo/star-full.png"><img class="star" src="Logo/star-full.png"><img class="star"
                          src="Logo/star-full.png"><span> 311 Reviews</span></p>
                          4 star Hotel in Noida<br>
                          Explore top attractions & restaurants in and around area</p>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Book Now</button>
                     
                      </div>
                    </div>
            
                    <div class="card col-md-3 p-2 hotel-card" style="width: 18rem;">
                      <img src="images/hotel6.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Hotel Royal</h5>
                        <p class="card-text"><p style="color: black;"><img class="star" src="Logo/star-full.png"><img class="star"
                          src="Logo/star-full.png"><img class="star" src="Logo/star-full.png"><img class="star"
                          src="Logo/star-half.png"><span> 96 Reviews</span></p>
                          3 star Hotel in Lucknow<br>
                          Great place close to the airport, super friendly staff.</p>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Book Now</button>
                     
                      </div>
                    </div>
            
                    <div class="card col-md-3 p-2 hotel-card" style="width: 18rem;">
                      <img src="images/hotel7.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Hotel Kemps Corner</h5>
                        <p class="card-text"><p style="color: black;"><img class="star" src="Logo/star-full.png"><img class="star"
                          src="Logo/star-full.png"><img class="star" src="Logo/star-full.png"><img class="star"
                          src="Logo/star-full.png"><span> 123 Reviews</span></p>
                          4 star Hotel in Nagpur<br>
                          The Hotel provides Car rental service facilitate</p>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Book Now</button>
                     
                      </div>
                    </div>
            
                    <div class="card col-md-3 p-2 hotel-card" style="width: 18rem;">
                      <img src="images/hotel8.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Shine Blue Resort</h5>
                        <p class="card-text"><p style="color: black;"><img class="star" src="Logo/star-full.png"><img class="star"
                          src="Logo/star-full.png"><img class="star" src="Logo/star-full.png"><img class="star"
                          src="Logo/star-full.png"><span> 399 Reviews</span></p>
                          5 star Hotel in Goa<br>
                          A 5-star deluxe hotel issued by the Ministry of Tourism</p>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Book Now</button>
                     
                      </div>
                    </div>
 

                    <div class="card col-md-3 p-2 hotel-card" style="width: 18rem;">
                      <img src="images/hotel9.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Everest Hotel</h5>
                        <p class="card-text"><p style="color: black;"><img class="star" src="Logo/star-full.png"><img class="star"
                          src="Logo/star-full.png"><img class="star" src="Logo/star-full.png"><img class="star"
                          src="Logo/star-full.png"><span> 247 Reviews</span></p>
                          5 star Hotel in Jodhpur<br>
                          Comfortable and well done rooms, great buffet breakfast</p>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Book Now</button>
                     
                      </div>
                    </div>

                    <div class="card col-md-3 p-2 hotel-card" style="width: 18rem;">
                      <img src="images/hotel14.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Orchards Hotel</h5>
                        <p class="card-text"><p style="color: black;"><img class="star" src="Logo/star-full.png"><img class="star"
                          src="Logo/star-full.png"><img class="star" src="Logo/star-full.png"><img class="star"
                          src="Logo/star-full.png"><span> 149 Reviews</span></p>
                          5 star Hotel in Ranchi<br>
                          Well-appointed rooms, a great outdoor dining spot.</p>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Book Now</button>
                     
                      </div>
                    </div>

                    <div class="card col-md-3 p-2 hotel-card" style="width: 18rem;">
                      <img src="images/hotel8.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">The Meadows Hotel</h5>
                        <p class="card-text"><p style="color: black;"><img class="star" src="Logo/star-full.png"><img class="star"
                          src="Logo/star-full.png"><img class="star" src="Logo/star-full.png"><img class="star"
                          src="Logo/star-full.png"><span> 98 Reviews</span></p>
                          4 star Hotel in Nashik<br>
                          Featuring a restaurant room service and free WiFi.</p>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Book Now</button>
                     
                      </div>
                    </div>

                    <div class="card col-md-3 p-2 hotel-card" style="width: 18rem;">
                      <img src="images/hotel-9.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Galaxy Hotel Inn</h5>
                        <p class="card-text"><p style="color: black;"><img class="star" src="Logo/star-full.png"><img class="star"
                          src="Logo/star-full.png"><img class="star" src="Logo/star-full.png"><img class="star"
                          src="Logo/star-full.png"><span> 98 Reviews</span></p>
                          3 star Hotel in Bhopal<br>
                          All rooms are fitted with a wardrobe with a flat-screen TV</p>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Book Now</button>
                     
                      </div>
                    </div>


                  </div>

            </div>

            <div class="s-hotel col-3" style="color: black; margin-top: 150px;">
                <!--form start -->
                <form action="fetchdata" method="post">
                  @csrf
            
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hotel Booking</h5>  
                      </div>
            
                    <div class="mb-3"style="">
                      <label for="name" class=" col-form-label ps-1">Name:</label>
                      <input type="text" class="form-control  border-3" name="name" value="{{old('name')}}" id="name" placeholder="Enter Your Full Name"required>
                    </div>
                    <div class="color"> @error('name'){{$message}}@enderror</div>
            
            
                    <div class="mb-3"style="">
                       <label for="email" class=" col-form-label ps-1">Email:</label>
                      <input type="email" class="form-control  border-3" name="email" id="email" value="{{old('email')}}" placeholder="Enter Your  Email"required>
                    </div>
                    <div class="color"> @error('email'){{$message}}@enderror</div>
            
                    <div class="mb-3">
                      <label for="From" class=" col-form-label ps-1">Hotels:</label>
                      <select name="hotels" class="form-control  border-3" id="hotels" value="{{old('hotels')}}">
                        <option value="">Select a hotel</option>
                        <option value="Hotel Royal">Hotel Royal</option>
                        <option value="The Anantmaya Resort">The Anantmaya Resort</option>
                        <option value="Treebo Trend Hote">Treebo Trend Hotel</option>
                        <option value="Hill County Resort">Hill County Resort</option>
                        <option value="Highland Park Resort">Highland Park Resort</option>
                        <option value="Hotel Royal">Hotel Royal</option>
                        <option value="Hotel Kemps Corner">Hotel Kemps Corner</option>
                        <option value="Shine Blue Resort">Shine Blue Resort</option>
                        <option value="Everest Hotel">Everest Hotel</option>
                        <option value="Orchards Hotel">Orchards Hotel</option>
                        <option value="The Meadows Hotel">The Meadows Hotel</option>
                        <option value="Galaxy Hotel Inn">Galaxy Hotel Inn</option>
                      </select>
                    </div>
                    <div class="color"> @error('hotels'){{$message}}@enderror</div>
            
                    <div class="mb-3">
                      <label for="adults" class=" col-form-label ps-1">adults</label>
                      <select name="adults"class="form-control  border-3" id="adults" value="{{old('adults')}}">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                      </select>
                    </div>
                    <div class="color"> @error('adults'){{$message}}@enderror</div>
            
                    
                    <div class="mb-3">
                      <label for="children" class=" col-form-label ps-1">children</label>
                      <select name="children"class="form-control  border-3"id="children" value="{{old('children')}}">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                      </select>
                    </div>
                    <div class="color"> @error('children'){{$message}}@enderror</div>
            
                    <div class="mb-3">
                      <label for="checkin" class=" col-form-label ps-1">Check-in:</label>
                      <input type="date" class="form-control  border-3" name="checkin" id="checkin" value="{{old('checkin')}}" placeholder="">
                    </div>
                    <div class="color"> @error('checkin'){{$message}}@enderror</div>
            
                    <div class="mb-3">
                      <label for="checkout" class=" col-form-label ps-1">Check-out:</label>
                      <input type="date" class="form-control  border-3" name="checkout" id="checkout" value="{{old('checkout')}}" placeholder="">
                    </div>
                    <div class="color"> @error('checkout'){{$message}}@enderror</div>
            
                    <div>
                      <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                    </div>
            
                  </form>
            
      <!--form end-->
            </div>

  </div>
         

  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header ">
        <h5 class="modal-title" id="exampleModalLabel"><strong>Hotel Booking</strong></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <form action="fetchdata" method="post">
          @csrf
                
                <div class="col-md-12" style="display: flex;">
                    <div class="col-6"style="">
                  
                    <label for="name" class=" col-form-label ps-1">Name:</label>
                    <input type="text" class="form-control  border-3" name="name" value="{{old('name')}}" id="name" placeholder="Enter Your Full Name"required>
                      </div>
                      <div class="col-6"style="">
                        
                      <label for="email" class=" col-form-label ps-1">Email:</label>
                      <input type="email" class="form-control  border-3" name="email" id="email" value="{{old('email')}}" placeholder="Enter Your  Email"required>
                      </div>
                </div>
                <div class="mb-3">
                <label for="From" class=" col-form-label ps-1">Hotels:</label>
              <select name="hotels" class="form-control  border-3" id="hotels" value="{{old('hotels')}}">
                <option value="">Select a hotel</option>
                <option value="Hotel Royal">Hotel Royal</option>
                <option value="The Anantmaya Resort">The Anantmaya Resort</option>
                <option value="Treebo Trend Hote">Treebo Trend Hotel</option>
                <option value="Hill County Resort">Hill County Resort</option>
                <option value="Highland Park Resort">Highland Park Resort</option>
                <option value="Hotel Royal">Hotel Royal</option>
                <option value="Hotel Kemps Corner">Hotel Kemps Corner</option>
                <option value="Shine Blue Resort">Shine Blue Resort</option>
                <option value="Everest Hotel">Everest Hotel</option>
                <option value="Orchards Hotel">Orchards Hotel</option>
                <option value="The Meadows Hotel">The Meadows Hotel</option>
                <option value="Galaxy Hotel Inn">Galaxy Hotel Inn</option>
              </select>
                </div>
                <div class="col-md-12" style="display: flex;">
                <div class="col-6">
                <label for="adults" class=" col-form-label ps-1">adults</label>
              <select name="adults"class="form-control  border-3" id="adults" value="{{old('adults')}}">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
                </div>
        
                
                <div class="col-6">
                <label for="children" class=" col-form-label ps-1">children</label>
              <select name="children"class="form-control  border-3"id="children" value="{{old('children')}}">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
                </div>
    
                </div>
        
                <div class="mb-3">
                <label for="checkin" class=" col-form-label ps-1">Check-in:</label>
              <input type="date" class="form-control  border-3" name="checkin" id="checkin" value="{{old('checkin')}}" placeholder="">
                </div>
        
                <div class="mb-3">
                <label for="checkout" class=" col-form-label ps-1">Check-out:</label>
              <input type="date" class="form-control  border-3" name="checkout" id="checkout" value="{{old('checkout')}}" placeholder="">
                </div>
        
                <button type="submit" class="btn btn-primary" id="submit">Submit</button>
            </form>
            

        </div>

      </div>
      <div class="modal-footer">
        


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
           alert('your request is in process!'); 
          });
       </script>


</body>
</html>
@endsection