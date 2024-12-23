@extends('layouts.app')

@section('content')


<link rel="stylesheet" href="cssfile/about.css">

<style>

  .profile{
    margin: 20px;
    text-align: center;
    width: 300px;
    background-color: rgb(255, 255, 255);
    border: 1px solid black;
    border-radius: 10px;
  }
  .profile:hover{
    box-shadow: 0px 10px 10px black;
    transform: scale(1.05);
  }

  
  .title {
    color: grey;
    font-size: 18px;
  }
  
  button {
    border: none;
    outline: 0;
    display: inline-block;
  width: 100%;
    color: white;
    background-color: #000;
    text-align: center;
    
 margin-bottom: 10px;
    font-size: 18px;
  }
  button:hover{
    border: 1px solid red;
  }
  
  a {
    text-decoration: none;
    font-size: 22px;
    color: black;
  }
  

  </style>

    <div class="container-fluid" id="main-top">




        <div class="container">
          <div class="row">
            <div class="about-flex">
              <div class="col-one-forth aside-stretch animate-box">
                <div class="row">
                  <div class="col-md-12 about">
                    <h2>About</h2>
  
                    <ul>
                      <li><a href="#history">History</a></li>
                      <li><a href="#staff">Staff</a></li>
                      <li><a href="#connect">Connect with us</a></li>
                  
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-three-forth animate-box">
                <h2 id="history">History</h2>
                <div class="row">
                  <div class="col-md-12">
                    <p>We all travel and have been a tourist, perhaps many times in our life. Tourism and tourist are so common words that they find mention in newspapers and magazines almost on a daily basis. In spite of its popularity, have you ever deliberated what the definition of travel and tourism is? What components constitute the tourism industry</p>
  
                    <p>What is the meaning of travel and how it converted into a full-time industry? What are the fundamental concepts pertaining to tourism and what are the characteristics of tourism as an industry? What are the different forms of tourism? In this article, we will explore answers to these basic questions on the travel and tourism industry.</p>
  
                    <p>The term travel originates from the Old French word ‘travail’ which meant heavy labor. Travel refers to the movement of people or objects such as airplanes, boats, trains, and other conveyances between various distant geographical locations.</p>
  
                    <div class="row row-pb-sm">
                      <div class="col-md-6">
                        <img class="img-responsive" src="images/hotel-7.jpg" alt="">
                      </div>
                     
                    </div>
  
  
                    <p>Tourism in our minds is connected with vacation, holidays, pleasure, tours and travels, attractions, historic or scenic places, and going or arriving somewhere. Tourism is prevalent from the pre-industrial age and some common examples are cruises on the Nile River, tours made by wealthy Egyptians, Greeks, and Romans, and the grand tour.</p>
  
                    <p>There has been an up-trend in tourism over the last few decades. People have a wide range of budgets and tastes, and a wide variety of resorts and hotels have developed to cater for them. As per the reports of the World Tourism Organization, in 2010, there were 940 million international tourist arrivals, with a growth of 6.6% as compared to the year 2009. </p>
  
                    <p>Top challenges confronting tourism are taxation, travel marketing, infrastructure issues, and security and cross border regulations. Too many tourism destinations are not prepared for visitors. Tourists or travelers can at times deem travel marketing to be exaggerated. </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


<!-- profile -->



<div id="staff"  class="container-fluid" style="display: flex;">

  
<div class="profile">
  <img src="" class="user-container-image " alt="" style="background-image: url(images/padam.jpeg); background-size: cover; margin-bottom: 0px; margin-top: 10px;">
  <h1>Padam Singh</h1>
  <p class="title">ADIT STUDENT</p>
  <p>National Skill Training Institute Mumbai</p>
  <div style="margin: 24px 0;">
    <a href="https://mrpglu.github.io/Portfolio/"><i class="fa fa-dribbble"></i></a> 
    <a href="https://twitter.com/PadamSi42039687"><i class="fa fa-twitter"></i></a>  
    <a href="https://www.linkedin.com/in/padam-singh-015164257/"><i class="fa fa-linkedin"></i></a>  
    <a href="https://www.facebook.com/padam.singh.984991"><i class="fa fa-facebook"></i></a> 
  </div>
  <button id="connect"><a href="mailto:padam4030@gmail.com" style="color: white;">Contact</a></button>
</div>


<div class="profile">
 
  <img src="" class="user-container-image " alt="" style="background-image: url(images/manjeet.jpeg); background-size: cover; margin-bottom: 0px; margin-top: 10px;">
  <h1>Manjeet Jangra</h1>
  <p class="title">ADIT Student</p>
  <p>National Skill Training Institute Mumbai</p>
  <div style="margin: 24px 0;">
    <a href="https://jmanjeet76.github.io/Portfolio/C%20Portfolio.html"><i class="fa fa-dribbble"></i></a> 
    <a href="https://twitter.com/i/flow/login"><i class="fa fa-twitter"></i></a>  
    <a href="https://in.linkedin.com/?src=go-pa&trk=sem-ga_campid.14650114788_asid.151761418307_crid.657403558721_kw.linkedin%20login_d.c_tid.kwd-12704335873_n.g_mt.e_geo.9040245&mcid=6844056167778418689&cid=&gclid=EAIaIQobChMI0szghaPZ_wIVYJhmAh308gV9EAAYASAAEgJNlfD_BwE&gclsrc=aw.ds"><i class="fa fa-linkedin"></i></a>  
    <a href="https://www.facebook.com/login/"><i class="fa fa-facebook"></i></a> 
  </div>
  <button><a href="mailto:padam4030@gmail.com" style="color: white;">Contact</a></button>
</div>



<div class="profile">
  <img src="" class="user-container-image " alt="" style="background-image: url(images/sahil.jpeg); background-size: cover; margin-bottom: 0px; margin-top: 10px;">
  <h1>Sahil Mandewar</h1>
  <p class="title">ADIT Student</p>
  <p>National Skill Training Institute Mumbai</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="https://twitter.com/i/flow/login"><i class="fa fa-twitter"></i></a>  
    <a href="https://in.linkedin.com/?src=go-pa&trk=sem-ga_campid.14650114788_asid.151761418307_crid.657403558721_kw.linkedin%20login_d.c_tid.kwd-12704335873_n.g_mt.e_geo.9040245&mcid=6844056167778418689&cid=&gclid=EAIaIQobChMI0szghaPZ_wIVYJhmAh308gV9EAAYASAAEgJNlfD_BwE&gclsrc=aw.ds"><i class="fa fa-linkedin"></i></a>  
    <a href="https://www.facebook.com/login/"><i class="fa fa-facebook"></i></a> 
  </div>
  <button><a href="mailto:padam4030@gmail.com" style="color: white;">Contact</a></button>
</div>



<div class="profile">
  <img src="" class="user-container-image " alt="" style="background-image: url(images/parveen.jpeg); background-size: cover; margin-bottom: 0px; margin-top: 10px;">
  <h1>Parveen Kumar</h1>
  <p class="title">ADIT Student</p>
  <p>National Skill Training Institute Mumbai</p>   
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="https://twitter.com/i/flow/login"><i class="fa fa-twitter"></i></a>  
    <a href="https://in.linkedin.com/?src=go-pa&trk=sem-ga_campid.14650114788_asid.151761418307_crid.657403558721_kw.linkedin%20login_d.c_tid.kwd-12704335873_n.g_mt.e_geo.9040245&mcid=6844056167778418689&cid=&gclid=EAIaIQobChMI0szghaPZ_wIVYJhmAh308gV9EAAYASAAEgJNlfD_BwE&gclsrc=aw.ds"><i class="fa fa-linkedin"></i></a>  
    <a href="https://www.facebook.com/login/"><i class="fa fa-facebook"></i></a> 
  </div>
  <button><a href="mailto:padam4030@gmail.com" style="color: white;">Contact</a></button>
</div>



</div>

<!-- end profile -->


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