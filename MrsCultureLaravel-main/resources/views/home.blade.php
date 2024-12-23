@extends('layouts.app')

@section('content')

 <!-- partial:index.partial.html -->
 <div class="opposites">
	<div class="opposites bl"></div>
	<div class="opposites tr"></div>
	<div class="opposites br"></div>
	<div class="opposites tl"></div>
</div>
<!-- partial -->

<div class="website-content">
	<!-- Main file code -->
	<div class="container-fluid" id="main-top">


        <!-- here we are insert images -->
        <div class="part1 ">
          <div class="banner1">
            <img class="slide" src="" style="background-image: url(images/n4.jpg);">
            <div class="carousel-caption d-none d-md-block">
              <p class="img-text">2 days tour</p>
              <h6 class="img-text-h">amazing maldines tour</h6>
    
            </div>
    
          </div>
    
          <div class="banner2">
            <img class="slide" src="" style="background-image: url(images/n3.jpg);">
            <div class="carousel-caption d-none d-md-block">
              <p class="img-text">10 days curises</p>
              <h6 class="img-text-h">form delhi to goa</h6>
    
            </div>
          </div>
    
          <div class="banner3">
            <img class="slide" src="" style="background-image: url(images/n2.jpg);">
            <div class="carousel-caption d-none d-md-block">
              <p class="img-text">Explore our most travel agency</p>
              <h6 class="img-text-h">our travel agency</h6>
    
            </div>
          </div>
    
          <div class="banner4">
            <img class="slide" src="" style="background-image: url(images/n1.jpg);">
            <div class="carousel-caption d-none d-md-block">
              <p class="img-text">experice the</p>
              <h6 class="img-text-h">best trip ever</h6>
    
            </div>
          </div>
    
        </div>
        <!-- ========== Start Search bar ========== -->
        
       
        <div class="search-input">
          <div class="left">
          <form id="search-form"  class="col-md-6">
            <input class="form-control rounded-pill search-form " id="mySearch"  onkeyup="myFunction()" type="search" placeholder="Search..." aria-label="Search" title="Type in a category">
          
          <div class="search-box "  style="justify-content: center;">
          <ul id="myMenu">
          <li class="search-bar-li">
              <a href="Goa" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-1_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Goa</h2>
                  <p>Beaches · Food & Drink</p>
                </div>
              </a>
          
              </li>
              <li class="search-bar-li">  
              <a href="Agra" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-2_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Agra</h2>
                  <p>Art & Culture · Food & Drink</p>
                </div>
                </a>
        
              </li>
                <li class="search-bar-li">
                <a href="Delhi" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-3_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Delhi</h2>
                  <p>Art & Culture · Family</p>
                </div>
                </a>
          
              </li>
                <li class="search-bar-li">
                <a href="Jaipur" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-4_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Jaipur</h2>
                  <p>Family · Art & Culture</p>
                </div>
                </a>
          
              </li>
                <li class="search-bar-li">
                <a href="Mumbai" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-5_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Mumbai</h2>
                  <p>Beaches · Art & Culture</p>
                </div>
                </a>
          
              </li>
                <li class="search-bar-li">
                <a href="Chennai" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-6_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Chennai</h2>
                  <p>Art & Culture · Beaches</p>
                </div>
                </a>
          
              </li>
                <li class="search-bar-li">
                <a href="Bengaluru" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-7_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Bengaluru</h2>
                  <p>Nightlife · Art & Culture</p>
                </div>
                </a>
          
              </li>
                <li class="search-bar-li">
                <a href="Hyderabad" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-8_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Hyderabad</h2>
                  <p>Art & Culture · Food & Drink</p>
                </div>
                </a>
          
              </li>
                <li class="search-bar-li">
                <a href="Kochi" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-9_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Kochi</h2>
                  <p>Nature & Wildlife · Art & Culture</p>
                </div>
                </a>
          
              </li>
                <li class="search-bar-li">
                <a href="Udaipur" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-10_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Udaipur</h2>
                  <p>Family · Art & Culture</p>
                </div>
                </a>
          
              </li>
                <li class="search-bar-li">
                <a href="Shimla" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-11_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Shimla</h2>
                  <p>Family · Art & Culture</p>
                </div>
                </a>
          
              </li>
                <li class="search-bar-li">
                <a href="Manali" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-12_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Manali</h2>
                  <p>Family · Romantic</p>
                </div>
                </a>
          
              </li>
                <li class="search-bar-li">
                <a href="Darjeeling" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-13_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Darjeeling</h2>
                  <p>Nature & Wildlife · Romantic</p>
                </div>
                </a>
          
              </li>
                <li class="search-bar-li">
                <a href="Munnar" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-14_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Munnar</h2>
                  <p>Romantic · Nature & Wildli</p>
                </div>
                </a>
          
              </li>
                <li class="search-bar-li">
                <a href="Ooty" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-15_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Ooty</h2>
                  <p>Nature & Wildlife · Relax & Retreat</p>
                </div>
                </a>
          
              </li>
                <li class="search-bar-li">
                <a href="Varanasi" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-16_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Varanasi</h2>
                  <p>Family · Art & Culture</p>
                </div>
                </a>
          
              </li>
                <li class="search-bar-li">
                <a href="Kolkata" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-17_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Kolkata</h2>
                  <p>Art & Culture · Food & Drink</p>
                </div>
                </a>
          
              </li>
                <li class="search-bar-li">
                <a href="Amritsar" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-18_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Amritsar</h2>
                  <p>Art & Culture · Shopping</p>
                </div>
                </a>
          
              </li>
                <li class="search-bar-li">
                <a href="Pondicherry" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-19_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Pondicherry</h2>
                  <p>Art & Culture · Food & Drik</p>
                </div>
                </a>
          
              </li>
                <li class="search-bar-li">
                <a href="Jaisalmer" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-20_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Jaisalmer</h2>
                  <p>Art & Culture · Family</p>
                </div>
                </a>
          
              </li>
                <li class="search-bar-li">
                <a href="Srinagar" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-21_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Srinagar</h2>
                  <p>Nature & Wildlife · Relax & Retreat</p>
                </div>
                </a>
          
              </li>
                <li class="search-bar-li">
                <a href="Rishikesh" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-22_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Rishikesh</h2>
                  <p>Family · Art & Culture</p>
                </div>
                </a>
          
              </li>
                <li class="search-bar-li">
                <a href="Mussorie" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-23_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Mussorie</h2>
                  <p>Nature & Wildlife · Family</p>
                </div>
                </a>
          
              </li>
                <li class="search-bar-li">
                <a href="Mysore" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-24_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Mysore</h2>
                  <p>Romantic · Art & Culture</p>
                </div>
                </a>
          
              </li>
                <li class="search-bar-li">
                <a href="Lucknow" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-25_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Lucknow</h2>
                  <p>Food & Drink · Art & Culture</p>
                </div>
                </a>
          
              </li>
                <li class="search-bar-li">
                <a href="Pune" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-26_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Pune</h2>
                  <p>Art & Culture · Family</p>
                </div>
                </a>
          
              </li>
                <li class="search-bar-li">
                <a href="Ahmedabad" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-27_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Ahmedabad</h2>
                  <p>Art & Culture · Budget</p>
                </div>
                </a>
          
              </li>
                <li class="search-bar-li">
                <a href="Chandigarh" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-28_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Chandigarh</h2>
                  <p>Art & Culture · Family</p>
                </div>
                </a>
          
              </li>
                <li class="search-bar-li">
                <a href="Visakhapatnam" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-29_clipdrop-enhance.jpeg" alt="">
                <div class="p-details">
                  <h2>Visakhapatnam</h2>
                  <p>Beaches · Family</p>
                </div>
                </a>
              
          
               </li>      <li class="search-bar-li">
                <a href="Gurugram" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-30_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Gurugram</h2>
                  <p>Food & Drink · Family</p>
                </div>
                </a>
          
              </li>
                <li class="search-bar-li">
                <a href="Puri" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-31_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Puri</h2>
                  <p>Beaches · Family</p>
                </div>
                </a>
          
              </li>
                <li class="search-bar-li">
                <a href="Kodaikanal" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-32_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Kodaikanal</h2>
                  <p>Nature & Wildlife · Family</p>
                </div>
                </a>
          
              </li>
                <li class="search-bar-li">
                <a href="Indore" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-33_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Indore</h2>
                  <p>Food & Drink · Art & Culture</p>
                </div>
                </a>
          
              </li>
                <li class="search-bar-li">
                <a href="Nainital" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-34_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Nainital</h2>
                  <p>Nature & Wildlife · Relax & Retreat</p>
                </div>
                </a>
          
              </li>
                <li class="search-bar-li">
                <a href="Bhubhaneswar" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-35_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Bhubhaneswar</h2>
                  <p>Art & Culture · Family</p>
                </div>
                </a>
          
              </li>
                <li class="search-bar-li">
                <a href="Gangtok" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-36_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Gangtok</h2>
                  <p>Nature & Wildlife · Family</p>
                </div>
                </a>
          
              </li>
                <li class="search-bar-li">
                <a href="Nashik" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-37_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Nashik</h2>
                  <p>Nature & Wildlife · Art & Culture</p>
                </div>
                </a>
          
              </li>
                <li class="search-bar-li">
                <a href="Allahabad" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-38_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Allahabad</h2>
                  <p>Art & Culture · Family</p>
                </div>
                </a>
          
              </li>
                <li class="search-bar-li">
                <a href="Thiruvanathapuram" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-39_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Thiruvanathapuram</h2>
                  <p>Family · Art & Culture</p>
                </div>
                </a>
          
              </li>
                <li class="search-bar-li">
                <a href="Bhopal" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-40_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Bhopal</h2>
                  <p>Art & Culture · Food & Drink</p>
                </div>
                </a>
          
              </li>
                <li class="search-bar-li">
                <a href="Patna" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-41_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Patna</h2>
                  <p>Art & Culture · Family</p>
                </div>
                </a>
          
              </li>
                <li class="search-bar-li">
                <a href="Jodhpur" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-42_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Jodhpur</h2>
                  <p>Food & Drink · Art & Culture</p>
                </div>
                </a>
          
              </li>
                <li class="search-bar-li">
                <a href="Hampi" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-43_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Hampi</h2>
                  <p>Art & Culture · Family</p>
                </div>
                </a>
          
              </li>
                <li class="search-bar-li">
                <a href="Shaillong" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-44_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Shaillong</h2>
                  <p>Nature & Wildlife · Relax & Retreat</p>
                </div>
                </a>
          
              </li>
                <li class="search-bar-li">
                <a href="Madurai" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-45_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Madurai</h2>
                  <p>Art & Culture · Food & Drink</p>
                </div>
                </a>
          
              </li>
                <li class="search-bar-li">
                <a href="Mahabaleshwar" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-46_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Mahabaleshwar</h2>
                  <p>Nature & Wildlife · Family</p>
                </div>
                </a>
          
              </li>
                <li class="search-bar-li">
                <a href="Leh" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-47_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Leh</h2>
                  <p>Adventure · Nature & Wildlife</p>
                </div>
                </a>
          
              </li>
                <li class="search-bar-li">
                <a href="Mangalore" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-48_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Mangalore</h2>
                  <p>Food & Drink · Budget</p>
                </div>
                </a>
          
              </li>
                <li class="search-bar-li">
                <a href="Dharamsala" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-49_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Dharamsala</h2>
                  <p>Nature & Wildlife · Family</p>
                </div>
                </a>
          
              </li>
                <li class="search-bar-li">
                <a href="Kozhikode" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-50_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Kozhikode</h2>
                  <p>Relax & Retreat · Beaches</p>
                </div>
                </a>
          
              </li>
                <li class="search-bar-li">
                <a href="Gulmarg" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-51_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Gulmarg</h2>
                  <p>Ski · Nature & Wildlife</p>
                </div>
                </a>
          
              </li>
                <li class="search-bar-li">
                <a href="Gwalior" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-52_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Gwalior</h2>
                  <p>Art & Culture · Family</p>
                </div>
                </a>
          
              </li>
                <li class="search-bar-li">
                <a href="Surat" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-53_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Surat</h2>
                  <p>Shopping · Food & Drink</p>
                </div>
                </a>
          
              </li>
                <li class="search-bar-li">
                <a href="Gokarna" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-54_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Gokarna</h2>
                  <p>Nature & Wildlife · Food & Drink</p>
                </div>
                </a>
          
              </li>
                <li class="search-bar-li">
                <a href="Lonavla" style="display: flex;">
                <div>
                  <img class="img" src="Destination/des-55_clipdrop-enhance.jpeg" alt="">
                </div>
                <div class="p-details">
                  <h2>Lonavla</h2>
                  <p>Nature & Wildlife · Relax & Retreat</p>
                </div>
                </a>
          
              </li>
        
            </ul>
          </div>
        </form>
        
        </div>
        </div>
    
        <!-- ========== End search bar ========== -->
    
    
    
      <!-- ========== Start Nav tag ========== -->
          <!-- Nav tabs -->
          <div id="nav" class="">
    
    
            <ul class="nav nav-tabs flex-nowrap" id="tablist" role="tablist" style="font-weight: bold;">
              <li class="nav-item ul-click" onclick="">
                <a class="nav-link active mx-0.5  mt-2 ms-5 text-warning " data-bs-toggle="tab" href="flight"><span
                    class=""><img src="Logo/flight.png" style="width: 2rem;" alt=""></span>Flight
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-0.5  mt-2 text-warning bg-none" data-bs-toggle="tab" href="hotel"><span class=""><img
                      src="Logo/hotel.png" style="width: 2rem;" alt=""></span>Hotel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-0.5  mt-2 text-warning bg-none" data-bs-toggle="tab" href="rent"><span class=""><img
                      src="Logo/car.png" style="width: 2rem;" alt=""></span>Car Rent</a>
              </li>
            </ul>
    
            <!-- Tab panes -->
            <div class="tab-content bg-secondary ps-5 pb-5"
              style="width:auto; margin-left: -5%; width: 110%; height: fit-content;">
              <div id="flight" class="container tab-pane active"><br>
                <form class="row">
                  <div class="mb-3 row">
    
                    <div class="col-md-3">
                      <label for="inputName" class=" col-form-label ps-1">Where:</label>
    
                      <input type="text" class="form-control  border-3" name="inputName" id="inputName"
                        placeholder="Search Location" required="">
                    </div>
    
    
                    <div class="col-md-3">
                      <label for="inputName" class=" col-form-label ps-1">Check-in:</label>
    
                      <input type="date" class="form-control  border-3" name="inputdate" id="inputdate" placeholder="Name"
                        required="">
                    </div>
    
    
    
                    <div class="col-md-3">
                      <label for="inputName" class=" col-form-label ps-1">Check-out:</label>
    
                      <input type="date" class="form-control  border-3" name="inputdate" id="inputdate" placeholder="Name"
                        required="">
                    </div>
    
    
    
    
                    <div class="col-md-1">
                      <label for="inputName" class=" col-form-label ps-1">Guest:</label>
    
                      <input type="number" class="form-control border-3" name="inputName" id="inputName" placeholder="No"
                        required="">
                    </div>
    
    
    
                    <div class="col-md-2">
                      <!-- <label for="inputName" class=" col-form-label ps-1">ind</label> -->
    
                      <input type="submit" class="form-control my-4 px-2 btn-outline-warning rounded-pill"
                        value="Find Flight" placeholder="Name">
                    </div>
                  </div>
    
                </form>
    
              </div>
              <div id="hotel" class="container tab-pane fade"><br>
    
                <form class="row">
                  <div class="mb-3 row">
                    <div class="col-md-3">
                      <h3>BOOK NOW</h3>
                      <p>BEST PRICE ONLINE</p>
                    </div>
    
                    <div class="col-md-3">
                      <label for="inputName" class=" col-form-label ps-1">Check-in:</label>
    
                      <input type="date" class="form-control  border-3" name="inputdate" id="inputdate" placeholder="Name"
                        required="">
                    </div>
    
    
    
                    <div class="col-md-3">
                      <label for="inputName" class=" col-form-label ps-1">Check-out:</label>
    
                      <input type="date" class="form-control  border-3" name="inputdate" id="inputdate" placeholder="Name"
                        required="">
                    </div>
    
    
    
    
                    <div class="col-md-1">
                      <label for="inputName" class=" col-form-label ps-1">Guest:</label>
    
                      <input type="number" class="form-control border-3" name="inputName" id="inputName" placeholder="No."
                        required="">
                    </div>
    
    
    
                    <div class="col-md-2">
                      <!-- <label for="inputName" class=" col-form-label ps-1">ind</label> -->
    
                      <input type="submit" class="form-control my-4 px-2 btn-outline-warning rounded-pill"
                        value="Find Hotel" placeholder="Name">
                    </div>
                  </div>
    
                </form>
              </div>
              <div id="rent" class="container tab-pane fade"><br>
    
                <form class="row">
                  <div class="mb-3 row">
    
                    <div class="col-md-4">
                      <label for="inputName" class=" col-form-label ps-1">Where:</label>
    
                      <input type="text" class="form-control  border-3" name="inputName" id="inputName"
                        placeholder="Search Location" required="">
                    </div>
    
    
                    <div class="col-md-3">
                      <label for="inputName" class=" col-form-label ps-1">Start Date:</label>
    
                      <input type="date" class="form-control  border-3" name="inputdate" id="inputdate" placeholder="Name"
                        required="">
                    </div>
    
    
    
                    <div class="col-md-3">
                      <label for="inputName" class=" col-form-label ps-1">Return Date:</label>
    
                      <input type="date" class="form-control  border-3" placeholder="" required="" required="">
                    </div>
    
                    <div class="col-md-2">
                      <!-- <label for="inputName" class=" col-form-label ps-1">ind</label> -->
    
                      <input type="submit" class="form-control my-4 px-2 btn-outline-warning rounded-pill" value="Find Car"
                        placeholder="Name">
                    </div>
                  </div>
    
                </form>
    
              </div>
            </div>
          </div>
    
          <!-- ========== End Nav tag ========== -->
    
          <!-- ========== Start Services ========== -->
    
          <div class="container-fluid row flex-wrap bg-none ">
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
    
          <!-- ========== Start Popular Destination ========== -->
    
    
          <div class="container-fluid p-5 text-center py-5">
            <div class="row">
              <p style="font-size: x-large;">Popular Destination</p>
              <p>We love to tell our successful far far away, behind the word mountains, far from the</br> countries Vokalia
                and Consonantia, there live the blind texts.</p>
    
            </div>
          </div>
    
    
          <div class="container-fluid row flex-wrap bg-none">
    
            <div class="col-md-3 text-center">
              <a class="div-a" href="flight">
                <div class="col-md-3 px-2 div-dec">
    
                  <div class="img-dec hover-image" style="background-image: url(images/tour-1.jpg);">
    
                  </div>
    
                  <div class="div-text">
                    <p style="color: black;"><img class="star" src="Logo/star-full.png"><img class="star"
                        src="Logo/star-full.png"><img class="star" src="Logo/star-full.png"><img class="star"
                        src="Logo/star-full.png"><img class="star" src="Logo/star-full.png"><span> 1545 Reviews</span></p>
                    <p class="div-a-p-1" style="color: black;">Mumbai</p>
                    <p class="div-a-p-2" style="color: black;"> <img src="Logo/airplane.png" class="star" alt="" srcset="">
                      ₹ 5900 /-</p>
                  </div>
    
                </div>
              </a>
    
    
    
    
            </div>
    
    
            <div class="col-md-3 text-center">
              <a class="div-a" href="flight">
                <div class="col-md-3 px-2 div-dec">
    
                  <div class="img-dec hover-image" style="background-image: url(images/tour-2.jpg);">
    
                  </div>
    
                  <div class="div-text">
                    <p style="color: black;"><img class="star" src="Logo/star-full.png"><img class="star"
                        src="Logo/star-full.png"><img class="star" src="Logo/star-full.png"><img class="star"
                        src="Logo/star-full.png"><img class="star" src="Logo/star-full.png"><span> 15545 Reviews</span></p>
                    <p class="div-a-p-1" style="color: black;">Agra</p>
                    <p class="div-a-p-2" style="color: black;"> <img src="Logo/airplane.png" class="star" alt="" srcset="">
                      ₹ 5900 /-</p>
                  </div>
    
                </div>
              </a>
    
    
    
    
            </div>
    
    
    
            <div class="col-md-3 text-center">
              <a class="div-a" href="flight">
                <div class="col-md-3 px-2 div-dec">
    
                  <div class="img-dec hover-image" style="background-image: url(images/tour-3.jpg);">
    
                  </div>
    
                  <div class="div-text">
                    <p style="color: black;"><img class="star" src="Logo/star-full.png"><img class="star"
                        src="Logo/star-full.png"><img class="star" src="Logo/star-full.png"><img class="star"
                        src="Logo/star-full.png"><img class="star" src="Logo/star-half.png"><span> 5545 Reviews</span></p>
                    <p class="div-a-p-1" style="color: black;">Hampi</p>
                    <p class="div-a-p-2" style="color: black;"> <img src="Logo/airplane.png" class="star" alt="" srcset="">
                      ₹ 5900 /-</p>
                  </div>
    
                </div>
              </a>
    
    
    
    
            </div>
    
    
            <div class="col-md-3 text-center">
              <a class="div-a" href="flight">
                <div class="col-md-3 px-2 div-dec">
    
                  <div class="img-dec hover-image" style="background-image: url(images/tour-4.jpg);">
    
                  </div>
    
                  <div class="div-text">
                    <p style="color: black;"><img class="star" src="Logo/star-full.png"><img class="star"
                        src="Logo/star-full.png"><img class="star" src="Logo/star-full.png"><img class="star"
                        src="Logo/star-full.png"><img class="star" src="Logo/star-full.png"><span> 5545 Reviews</span></p>
                    <p class="div-a-p-1" style="color: black;">Goa</p>
                    <p class="div-a-p-2" style="color: black;"> <img src="Logo/airplane.png" class="star" alt="" srcset="">
                      ₹ 5900 /-</p>
                  </div>
    
                </div>
              </a>
    
    
    
    
            </div>
    
    
    
    
    
          </div>
    
          <div class="container-fluid row bg-none gride">
    
            <div class="col-md-3 text-center">
              <a class="div-a" href="flight">
                <div class="col-md-3 px-2 div-dec">
    
                  <div class="img-dec hover-image" style="background-image: url(images/tour-5.webp);">
    
                  </div>
    
                  <div class="div-text">
                    <p style="color: black;"><img class="star" src="Logo/star-full.png"><img class="star"
                        src="Logo/star-full.png"><img class="star" src="Logo/star-full.png"><img class="star"
                        src="Logo/star-full.png"><img class="star" src="Logo/star-full.png"><span> 10545 Reviews</span></p>
                    <p class="div-a-p-1" style="color: black;">Varanasi</p>
                    <p class="div-a-p-2" style="color: black;"> <img src="Logo/airplane.png" class="star" alt="" srcset="">
                      ₹ 5900 /-</p>
                  </div>
    
                </div>
              </a>
    
    
    
    
            </div>
    
    
            <div class="col-md-3 text-center">
              <a class="div-a" href="flight">
                <div class="col-md-3 px-2 div-dec">
    
                  <div class="img-dec hover-image" style="background-image: url(images/tour-6.webp);">
    
                  </div>
    
                  <div class="div-text">
                    <p style="color: black;"><img class="star" src="Logo/star-full.png"><img class="star"
                        src="Logo/star-full.png"><img class="star" src="Logo/star-full.png"><img class="star"
                        src="Logo/star-full.png"><img class="star" src="Logo/star-full.png"><span> 105545 Reviews</span></p>
                    <p class="div-a-p-1" style="color: black;">Delhi</p>
                    <p class="div-a-p-2" style="color: black;"> <img src="Logo/airplane.png" class="star" alt="" srcset="">
                      ₹ 5900 /-</p>
                  </div>
    
                </div>
              </a>
    
    
    
    
            </div>
    
    
            <div class="col-md-3 text-center">
              <a class="div-a" href="flight">
                <div class="col-md-3 px-2 div-dec">
    
                  <div class="img-dec hover-image" style="background-image: url(images/tour-7.jpg);">
    
                  </div>
    
                  <div class="div-text">
                    <p style="color: black;"><img class="star" src="Logo/star-full.png"><img class="star"
                        src="Logo/star-full.png"><img class="star" src="Logo/star-full.png"><img class="star"
                        src="Logo/star-full.png"><img class="star" src="Logo/star-full.png"><span> 16150 Reviews</span></p>
                    <p class="div-a-p-1" style="color: black;">Manali</p>
                    <p class="div-a-p-2" style="color: black;"> <img src="Logo/airplane.png" class="star" alt="" srcset="">
                      ₹ 5900 /-</p>
                  </div>
    
                </div>
              </a>
    
    
    
    
            </div>
    
    
            <div class="col-md-3 text-center">
              <a class="div-a" href="flight">
                <div class="col-md-3 px-2 div-dec">
    
                  <div class="img-dec hover-image" style="background-image: url(images/tour-8.webp);">
    
                  </div>
    
                  <div class="div-text">
                    <p style="color: black;"><img class="star" src="Logo/star-full.png"><img class="star"
                        src="Logo/star-full.png"><img class="star" src="Logo/star-full.png"><img class="star"
                        src="Logo/star-full.png"><img class="star" src="Logo/star-full.png"><span> 16518 Reviews</span></p>
                    <p class="div-a-p-1" style="color: black;">Udaipur</p>
                    <p class="div-a-p-2" style="color: black;"> <img src="Logo/airplane.png" class="star" alt="" srcset="">
                      ₹ 5900 /-</p>
                  </div>
    
                </div>
    
              </a>
    
    
    
            </div>
    
    
          </div>
    
    
    
          <!-- ========== End Popular Destination ========== -->
    
    
          <!-- ========== Start blog ========== -->
          <div class="flex-nowrap">
            <div class="container-fluid p-5 text-center py-5">
              <div class="row">
                <p style="font-size: x-large;">Recent Blog</p>
                <p>We love to tell our successful far far away, behind the word mountains, far from the</br> countries
                  Vokalia and Consonantia, there live the blind texts.</p>
    
              </div>
    
            </div>
    
            <div class="container-fluid row flex-nowrap bg-none blog-image " style="padding-left: 8%; margin-right: 0px;">
    
              <div class="col-md-3 m-5">
                <img class=" col-12" src="images/blog-1.jpg" alt="" srcset="">
              </div>
    
              <div class="col-md-6 p-5">
                <p>Feb 22, 2022</p>
                <h1>A Defibitive Guide to the Best Dining</h1>
                <p>Activities</p>
              </div>
    
    
            </div>
    
    
    
            <div class="container-fluid row flex-nowrap bg-none blog-image " style="padding-left: 20%;">
    
              <div class="col-md-6 p-5">
                <p>Feb 22, 2022</p>
                <h1>How These 5 People found The Path to Their Dream Trip</h1>
                <p>Activities</p>
              </div>
    
              <div class="col-md-6">
                <img class="col-12" src="images/blog-2.jpg" alt="" srcset="">
              </div>
    
    
    
    
            </div>
    
    
            <div class="container-fluid row flex-nowrap bg-none blog-image " style="padding-left: 8%;">
    
              <div class="col-md-3 m-5">
                <img class="col-12 img-rounded" src="images/blog-4.jpg" alt="" srcset="">
              </div>
    
              <div class="col-md-6 p-5">
                <p>Feb 22, 2022</p>
                <h1>Our secret Island Boat Tour Is Just for You</h1>
                <p>Activities</p>
              </div>
    
    
            </div>
          </div>
    
          <!-- ========== End blog ========== -->
    
    
    
    
    
    
         <!-- ========== Start Discount section ========== -->
    
    
    
         <div class="discount flex-nowrap"  style="background-image: url(images/cover-img-4.jpg);">
          <marquee class="dis-marquee" behavior="" direction="">Your biggest adventure awaits you!</marquee>
          <div id="discount-main">
            <div class="row ">
    
              <div class="col-md-6 row p-1 ">
                <div class="col-md-6 row ps-5">
                  <div>
                    <h1 class="dis-h1-45 " style="font-size: 90px;">45<span>%</span> </h1>
                  </div>
                  <div>
                    <h1 class="dis-h1-off" id="dis-h1-off"
                      style="line-height: 0px; margin-left: 60px; font-size: x-larger; margin-top:0px">OFF</h1>
                    <h1 class="dis-h1-off" style="font-size: 60px;">SALE</h1>
                  </div>
    
                </div>
    
                <div class="col-md-6">
                  <div>
                    <h4 style="color: white;">Just hurry up limited offer!</h4>
                    <p class="dis-text-p" style="color: white; text-align: justify;">Separated they live in Bookmarksgrove
                      right at the coast of the Semantics, a large language ocean.</p>
    
                    <div class="col-md-12 row pt-0" style="margin-left: 10px;">
                      <div class="col-md-6">
                        <a style="text-decoration: none; color:white;" href="hotel"><button type="button" class="btn btn-outline-warning bg-warning rounded-pill"
                          style="color: rgb(0, 0, 0);" >Book Now</button></a>
                      </div>
                      <div class="col-md-6">
                        <button type="button" class="btn btn-outline-warning rounded-pill"><a style="text-decoration: none; color:white;" href="blog">Read More</a></button>
                      </div>
                    </div>
                  </div>
                </div>
    
              </div>
    
    
    
    
              <div class="col-md-6 ps-5 flex-nowrap" id="myDiv">
                <div class="discount-part2">
                  <!-- <img class="discount-part2-image-1 image1" src="images/col-1.jpg" alt="">
                  <img class="discount-part2-image-2 image2" src="images/tour-6.webp" alt="">
                  <img class="discount-part2-image-3 image3" src="images/col-2.jpg" alt=""> -->
    
                </div>
              </div>
    
            </div>
          </div>
    
    
        </div>
    
    
    
          <!-- ========== End Discount section ========== -->
    
    <!-- ========== Start Recommended Hotels ========== -->
    
    <div class="container-fluid p-5 text-center py-5">
      <div class="row">
        <p style="font-size: x-large;">Recommended Hotels</p>
        <p>We love to tell our successful far far away, behind the word mountains, far from the<br>countries Vokalia
          and Consonantia, there live the blind texts.</p>

      </div>
    </div>


    <div class="container-fluid row ">
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
          Is one of the best destination to stay with famil</p>
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
          <h5 class="card-title"> Shine Blue Resort</h5>
          <p class="card-text"><p style="color: black;"><img class="star" src="Logo/star-full.png"><img class="star"
            src="Logo/star-full.png"><img class="star" src="Logo/star-full.png"><img class="star"
            src="Logo/star-full.png"><span> 399 Reviews</span></p>
            5 star Hotel in Goa<br>
            A 5-star deluxe hotel issued by the Ministry of Tourism</p>
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Book Now</button>
        </div>
      </div>

    </div>
    <!-- ========== End Recommended Hotels ========== -->

    
{{-- hotel booking form start --}}

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
      @error('date_field')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
  @enderror

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
{{-- hotel booking form end --}}
    
    
          <!-- ========== Start Our user ========== -->
    
    
          <div class="container-fluid p-5 text-center py-5">
            <div class="row">
              <p style="font-size: x-large;">Our Satisfied Guests says</p>
              <p>We love to tell our successful far far away, behind the word mountains, far from the<br>countries Vokalia
                and Consonantia, there live the blind texts.</p>
    
            </div>
          </div>
    
    
    
          <div class="container flex-nowrap" id="user-container" class="justify-content-center">
    
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
              <div class=" carousel-indicators">
              <button type="button" data-bs-target="carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
              <button type="button" data-bs-target="carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active text-center">
                <img src="" class="user-container-image " alt=""
                  style="background-image: url(images/person1.jpeg); background-size: cover;">
                <div class="carousel-caption d-none d-md-block">
                  <h5 style="color: black;">Priyanka</h5>
                  <h6 style="color: black;">Delhi, Indai</h6>
                  <p style="color: black;">We were so pleased with our Kedarnath trip that you organised.</p>
                </div>
              </div>
              <div class="carousel-item text-center">
                <img src="" class="user-container-image " alt=""
                  style="background-image: url(images/person2.jpeg); background-size: cover;">
                <div class="carousel-caption d-none d-md-block">
                  <h5 style="color: black;">Aniket</h5>
                  <h6 style="color: black;">Delhi, India</h6>
                  <p style="color: black;">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                </div>
              </div>
              <div class="carousel-item text-center">
                <img src="" class="user-container-image " alt=""
                  style="background-image: url(images/person3.jpg); background-size: cover;">
                <div class="carousel-caption d-none d-md-block">
                  <h5 style="color: black;">Payal</h5>
                  <h6 style="color: black;">Delhi, India</h6>
                  <p style="color: black;">Alphabet Village and the subline of her own road, the Line Lane.<br>Pityful a rethoric question ran
                    over her cheek, then she continued her way.</p>
                </div>
              </div>
    
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="carouselExampleCaptions"
              data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="carouselExampleCaptions"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
    
    
        <!-- ========== End Our user  ========== -->
    
    
    
    
        <!-- ========== Start Most popular Traval state in India ========== -->
    
    
        <div class="container-fluid p-5 text-center py-5">
          <div class="row">
            <p style="font-size: x-large;">Most Popular Travel States</p>
            <p>We love to tell our successful far far away, behind the word mountains, far from the<br>countries Vokalia and
              Consonantia, there live the blind texts.</p>
    
          </div>
        </div>
    
    
    
    
    
        <div class="container-fluid row flex-nowrap">
    
          <div class="col-md-6">
    
            <div class="col-md-12 row">
    
              <div class="col-md-6 text-center">
                <a class="div-a" href="Delhi">
                  <div class="col-md-3 px-2 div-state">
    
                    <div class="img-state-1 hover-image-1" style="background-image: url(images/delhi-1.webp);">
    
                    </div>
    
                    <div class="div-text">
                      <p style="color: black;"><img class="star" src="Logo/star-full.png"><img class="star"
                          src="Logo/star-full.png"><img class="star" src="Logo/star-full.png"><img class="star"
                          src="Logo/star-full.png"><img class="star" src="Logo/star-full.png"><span> 161550 Reviews</span>
                      </p>
                      <p class="div-a-p-1" style="color: black;">Lotus Temple</p>
                      
                     
                    </div> 
    
                  </div>
                </a>
              </div>
    
              <div class="col-md-6 text-center">
                <a class="div-a" href="Delhi">
                  <div class="col-md-3 px-2 div-state">
    
                    <div class="img-state-2 hover-image-2" style="background-image: url(images/delhi-2.jpg);">
    
                    </div>
    
                    <div class="div-text">
                      <p style="color: black;"><img class="star" src="Logo/star-full.png"><img class="star"
                          src="Logo/star-full.png"><img class="star" src="Logo/star-full.png"><img class="star"
                          src="Logo/star-full.png"><img class="star" src="Logo/star-full.png"><span> 45645 Reviews</span>
                      </p>
                      <p class="div-a-p-1" style="color: black;">India Gate</p>
                    
                    </div>
    
                  </div>
                </a>
              </div>
    
              <div class="col-md-6 text-center">
                <a class="div-a" href="Delhi">
                  <div class="col-md-3 px-2 div-state">
    
                    <div class="img-state-3 hover-image-3" style="background-image: url(images/delhi-3.jpg);">
    
                    </div>
    
                    <div class="div-text">
                      <p style="color: black;"><img class="star" src="Logo/star-full.png"><img class="star"
                          src="Logo/star-full.png"><img class="star" src="Logo/star-full.png"><img class="star"
                          src="Logo/star-full.png"><img class="star" src="Logo/star-full.png"><span> 86854 Reviews</span>
                      </p>
                      <p class="div-a-p-1" style="color: black;">Qutub Minar</p>
                      
                    </div>
    
                  </div>
                </a>
              </div>
    
              <div class="col-md-6 text-center">
                <a class="div-a" href="Delhi">
                  <div class="col-md-3 px-2 div-state">
    
                    <div class="img-state-4 hover-image-4" style="background-image: url(images/delhi-4.jpg);">
    
                    </div>
    
                    <div class="div-text">
                      <p style="color: black;"><img class="star" src="Logo/star-full.png"><img class="star"
                          src="Logo/star-full.png"><img class="star" src="Logo/star-full.png"><img class="star"
                          src="Logo/star-full.png"><img class="star" src="Logo/star-full.png"><span> 65424 Reviews</span>
                      </p>
                      <p class="div-a-p-1" style="color: black;">Humayun's Tomb</p>
                    
                    </div>
    
                  </div>
                </a>
              </div>
    
            </div>
    
    
    
          </div>
    
          <div class="col-md-6">
            <div class="col-md-12">
              <p style="padding-top: 10px;font-size: xx-large;">DELHI, INDIA</p>
              <p style="text-align: justify;">Delhi, the city that defines India, offers the perfect blend of the country's
                modern and cultural heritage. This is manifested through the different architectural marvels and museums
                that capture the rich heritage of India. The India Gate is a famous attraction because of its magnificent
                structure that brings people in awe. The bustling markets and food stalls will surely satisfy your cravings,
                especially with their cuisine and unique Indian delicacies.
              </p>
            </div>
    
            <div class="col-md-12">
              <p style="padding-top: 10px;font-size: x-large;">BEST PLACES</p>
              <ul>
                <a class="ul-delhi" href="Delhi">
                  <li>India Gate</li>
                </a>
                <a class="ul-delhi" href="Delhi">
                  <li>Lotus Temple</li>
                </a>
                <a class="ul-delhi" href="Delhi">
                  <li>Qutub Minar</li>
                </a>
                <a class="ul-delhi" href="Delhi">
                  <li>Red Fort</li>
                </a>
                <a class="ul-delhi" href="Delhi">
                  <li>Humayun's Tomb</li>
                </a>
                <a class="ul-delhi" href="Delhi">
                  <li>Jama Masjid</li>
                </a>
                
              </ul>
    
            </div>
          </div>
    
        </div>
        <!-- Second  ///////////////////////////////////////////////////////////////////////////////////////// -->
    
        <div class="container-fluid row " style="margin-top: 100px;">
    
    
    
          <div class="col-md-6">
            <div class="col-md-12">
              <p style="padding-top: 10px;font-size: xx-large;">MUMBAI, INDIA</p>
              <p style="text-align: justify;">The colorful stories and fancy music-and-dance routines of Bollywood films
                began life in this city in the 1930s. Mumbai itself is as larger-than-life as the heroes of its movies.
                Attractions like the Gateway of India bore witness to the dramatic event when British colonial troops left
                India and made it an independent country. Kala Ghoda, on the other hand, is a district adorned with art
                galleries and museums. For those who love swimming and street food, Juhu Beach serves up a healthy dose of
                clean seawater and coastal cafes.
              </p>
            </div>
    
            <div class="col-md-12">
              <p style="padding-top: 10px;font-size: x-large;">BEST PLACES</p>
              <ul>
                <a class="ul-delhi" href="Mumbai">
                  <li>Gateway of India</li>
                </a>
                <a class="ul-delhi" href="Mumbai">
                  <li>Marine Drive</li>
                </a>
                <a class="ul-delhi" href="Mumbai">
                  <li>Elephanta Caves</li>
                </a>
                <a class="ul-delhi" href="Mumbai">
                  <li>Juhu Chowpatty Beach</li>
                </a>
                <a class="ul-delhi" href="Mumbai">
                  <li>Haji Ali Dargah</li>
                </a>
                <a class="ul-delhi" href="Mumbai">
                  <li>Siddhivinayak Temple</li>
                </a>
                
              </ul>
    
            </div>
          </div>
    
          <div class="col-md-6">
    
            <div class="col-md-12 row"  style="margin-top: 50px;">
    
              <div class="col-md-6 text-center">
                <a class="div-a" href="Mumbai">
                  <div class="col-md-3 px-2 div-state">
    
                    <div class="img-state-1 hover-image-1" style="background-image: url(images/mumbai-1.jpg);">
    
                    </div>
    
                    <div class="div-text">
                      <p style="color: black;"><img class="star" src="Logo/star-full.png"><img class="star"
                          src="Logo/star-full.png"><img class="star" src="Logo/star-full.png"><img class="star"
                          src="Logo/star-full.png"><img class="star" src="Logo/star-full.png"><span>45455 Reviews</span>
                      </p>
                      <p class="div-a-p-1" style="color: black;">Taj Mumbai</p>
                    
                    </div>
    
                  </div>
                </a>
              </div>
    
              <div class="col-md-6 text-center">
                <a class="div-a" href="Mumbai">
                  <div class="col-md-3 px-2 div-state">
    
                    <div class="img-state-2 hover-image-2" style="background-image: url(images/mumbai-2.jpg);">
    
                    </div>
    
                    <div class="div-text">
                      <p style="color: black;"><img class="star" src="Logo/star-full.png"><img class="star"
                          src="Logo/star-full.png"><img class="star" src="Logo/star-full.png"><img class="star"
                          src="Logo/star-full.png"><img class="star" src="Logo/star-full.png"><span> 19840 Reviews</span>
                      </p>
                      <p class="div-a-p-1" style="color: black;">Gateway of India</p>
                 
                    </div>
    
                  </div>
                </a>
              </div>
    
              <div class="col-md-6 text-center">
                <a class="div-a" href="Mumbai">
                  <div class="col-md-3 px-2 div-state">
    
                    <div class="img-state-3 hover-image-3" style="background-image: url(images/mumbai-3.jpg);">
    
                    </div>
    
                    <div class="div-text">
                      <p style="color: black;"><img class="star" src="Logo/star-full.png"><img class="star"
                          src="Logo/star-full.png"><img class="star" src="Logo/star-full.png"><img class="star"
                          src="Logo/star-full.png"><img class="star" src="Logo/star-full.png"><span> 46550 Reviews</span>
                      </p>
                      <p class="div-a-p-1" style="color: black;">CST</p>
                      
                    </div>
    
                  </div>
                </a>
              </div>
    
              <div class="col-md-6 text-center">
                <a class="div-a" href="Mumbai">
                  <div class="col-md-3 px-2 div-state">
    
                    <div class="img-state-4 hover-image-4" style="background-image: url(images/mumbai-4.jpg);">
    
                    </div>
    
                    <div class="div-text">
                      <p style="color: black;"><img class="star" src="Logo/star-full.png"><img class="star"
                          src="Logo/star-full.png"><img class="star" src="Logo/star-full.png"><img class="star"
                          src="Logo/star-full.png"><img class="star" src="Logo/star-full.png"><span> 86150 Reviews</span>
                      </p>
                      <p class="div-a-p-1" style="color: black;">Worli Sea Link</p>
                    
                    </div>
    
                  </div>
                </a>
              </div>
    
            </div>
    
    
    
          </div>
    
        </div>
    
        <!-- ========== End Most popular Traval state in India ========== -->
    

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
            <a href=""><img class="news-logo" src="Logo/twitter.png" alt=""></a>
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


        
    
        <div class="floating-icon">
          <a href="https://www.facebook.com/mrscultureoffical/"><img class="m-1" src="Logo/facebook (1).png" style="width: 20px;" alt=""
              srcset="" data-bs-toggle="tooltip" data-bs-placement="right" title="FaceBook"></a>
          <a href="https://www.instagram.com/mrs._culture/"><img class="m-1" src="Logo/instagram (1).png" style="width: 20px;" alt=""
              srcset="" data-bs-toggle="tooltip" data-bs-placement="right" title="Instagram"></a>
          <a href="https://www.youtube.com/@m_rs_culture"><img class="m-1" src="Logo/youtube (1).png" style="width: 20px;" alt=""
              srcset="" data-bs-toggle="tooltip" data-bs-placement="right" title="Youtube"></a>
              
        </div>
        <div class="floating-icon-1 " >
    
          <a href="main-top">
            <div style="width: 30px; height: 30px; align-items: end; background-image: url(Logo/arrow-up.png); background-size: cover;"></div>
          </a>
    
    
        </div>
    
</div>


@endsection
