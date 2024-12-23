@extends('layouts.app')

@section('content')


  <style>
    a{
      text-decoration: none;
      color: white;
    }
   
    .image-box {
      display: flex;
      align-items: center;
    }
    .image-box img {
      max-width: 400px;
      margin-right: 20px;
    }
    .text-box {
      background-color: #f8f9fa;
      padding: 20px;
      border-radius: 5px;
      margin-left: -200px;
    }
    .gap {
      margin-bottom: 20px;
    }

    .nav-bar{
      display: flex;
      justify-content: center;
      margin-top: 30px;
    }
    .nav-bar a{
      display: inline-block;
      margin-right: 20px;
      padding: 8px 15px;
      border-radius: 5px;
      text-decoration: none;
      color: #fff;
      background-color: #007bff;
    }
    .page {
       display:none;
    }
    .page:target {
      display:block;
      
    }
    #des{
    
      -webkit-text-stroke-width: 1px;
    color: rgb(255, 255, 255);
    /* -webkit-text-stroke-color: rgb(254, 254, 254); */
    
    }
    
  
  
  </style>


<body>


  <div class="container-fluid" id="main-top">



       <!--background image-->
    <div class="container">
      <div class="part1">
          <div class="background-image">
              <img class="slide" src="" style="background-image: url(images/destination.jpg) ; margin-top: -50px;"alt="">
           <div class="carousel-caption d-none d-md-block">
              <h1 id="des" style="font-size: 200px;  margin-top: -"> Destination </h1>
          </div>    
          </div>
      </div>
    </div>
      <!--background image-->
        
       
    
    
        
    
    <!-- content start -->

   
    <div class="container" style="margin-top: 150px;">



      <div id="main-content">
 
      

        <div class="row gap">
        <div class="col-md-6 image-box">
          <img src="pages/images/agra.jpg" alt="Image 1">
        </div>
        <div class="col-md-6 text-box">
          <h2>Agra</h2>
          <p>Agra, located in the state of Uttar Pradesh, India, is famous for its rich Mughal heritage and architectural marvels. It is home to the magnificent Taj Mahal, a UNESCO World Heritage Site and one of the Seven Wonders of the World.</p>
          <p>Explore the grandeur of the Mughal era by visiting Agra Fort, Itmad-ud-Daulah's Tomb, and Fatehpur Sikri. Immerse yourself in the history, culture, and beauty of this enchanting city.</p>
          <button type="button" class="btn btn-warning"><a href="Agra">Read More</a></button>
        </div>
        
      </div>

      
 
     
      

        <div class="row gap">
        <div class="col-md-6 image-box">
          <img src="pages/images/Ahmedabad.jpg" alt="Image 1">
        </div>
        <div class="col-md-6 text-box">
          <h2>Ahmedabad</h2>
          <p>Ahmedabad, the largest city in the state of Gujarat, is known for its rich cultural heritage, historical monuments, and vibrant street life. It is a perfect blend of tradition and modernity.</p>
          <p>Explore the UNESCO World Heritage Site of the historic city center, visit the Sabarmati Ashram where Mahatma Gandhi lived, and indulge in the mouthwatering local cuisine. Ahmedabad has something to offer to every traveler.</p>
          <button type="button" class="btn btn-warning"><a href="Ahmedabad">Read More</a></button>
        </div>
      </div>

     
 
 
      

        <div class="row gap">
        <div class="col-md-6 image-box">
          <img src="pages/images/Allahabad.jpg" alt="Image 1">
        </div>
        <div class="col-md-6 text-box">
          <h2>Allahabad</h2>
          <p>Allahabad, now officially known as Prayagraj, is a city located in the state of Uttar Pradesh, India. It is famous for the confluence of the three holy rivers Ganga, Yamuna, and Saraswati, known as Triveni Sangam. The city holds immense religious and historical significance.</p>
          <p>Visit the Kumbh Mela, the largest religious gathering in the world, held at the Triveni Sangam every 12 years. Explore the iconic Allahabad Fort, marvel at the magnificent architecture of the Akshayavat tree and the Anand Bhawan, and seek blessings at the historic Allahabad University.</p>
          <button type="button" class="btn btn-warning"><a href="Allahabad">Read More</a></button>
        </div>
       </div>

       
 
 
       

        <div class="row gap">
         <div class="col-md-6 image-box">
          <img src="pages/images/Amritsar.jpg" alt="Image 1">
         </div>
         <div class="col-md-6 text-box">
           <h2>Amritsar</h2>
           <p>Amritsar, the spiritual and cultural hub of Punjab, is home to the famous Golden Temple and holds significant historical importance. The city offers a blend of spirituality, history, and Punjabi hospitality.</p>
           <p>Visit the GAolden Temple, experience the grandeur of the Wagah Border ceremony, explore the historical Jallianwala Bagh, and indulge in the delicious Punjabi cuisine. Amritsar promises a memorable and enriching experience for every traveler.</p>
           <button type="button" class="btn btn-warning"><a href="Amritsar">Read More</a></button></div>
       </div>
 

       
 
       

        <div class="row gap">
         <div class="col-md-6 image-box">
           <img src="pages/images/Bangalore.jpg" alt="Image 1">
         </div>
         <div class="col-md-6 text-box">
           <h2>Bangalore</h2>
           <p>Bangalore, officially known as Bengaluru, is the capital city of the Indian state of Karnataka. It is often referred to as the Silicon Valley of India due to its thriving IT industry. Bangalore is a vibrant city with a pleasant climate, beautiful parks, and a rich cultural heritage.</p>
           <p>Explore the bustling city streets, visit historical sites, indulge in delicious local cuisine, and experience the vibrant nightlife. Bangalore is also known for its well-planned gardens, art galleries, and traditional music and dance performances.</p>
           <button type="button" class="btn btn-warning"><a href="Bangalore">Read More</a></button>
         </div>
       </div>

       
 
 
       

        <div class="row gap">
         <div class="col-md-6 image-box">
           <img src="pages/images/Bhopal.jpg" alt="Image 1">
         </div>
         <div class="col-md-6 text-box">
           <h2>Bhopal</h2>
           <p>Bhopal, the capital city of Madhya Pradesh, is known as the "City of Lakes" due to its beautiful natural and artificial lakes. It is a city with a rich history, cultural heritage, and architectural marvels.</p>
           <p>Visit the magnificent Taj-ul-Masjid, explore the enchanting history at the Bhimbetka Caves, enjoy the serene beauty of Upper Lake, and indulge in the traditional flavors of Bhopali cuisine. Bhopal offers a perfect blend of tradition, modernity, and natural beauty.</p>
           <button type="button" class="btn btn-warning"><a href="Bhopal">Read More</a></button>
         </div>
       </div>

       
 
       

        <div class="row gap">
         <div class="col-md-6 image-box">
          <img src="pages/images/Bhubaneswar.jpg" alt="Image 1">
         </div>
         <div class="col-md-6 text-box">
           <h2>Bhubaneswar</h2>
           <p>Bhubaneswar is the capital city of the Indian state of Odisha. Known as the "Temple City of India," it is renowned for its ancient temples, rich cultural heritage, and vibrant history.</p>
           <p>Visit the magnificent Lingaraj Temple, explore the architectural marvels of Khandagiri and Udayagiri Caves, and witness the spiritual aura at Dhauli Shanti Stupa. Bhubaneswar is also known for its handicrafts and traditional Odia cuisine.</p>
           <button type="button" class="btn btn-warning"><a href="Bhubaneswar">Read More</a></button>
         </div>
       </div>

       
 
 
       

        <div class="row gap">
         <div class="col-md-6 image-box">
           <img src="pages/images/Chandigarh.jpg" alt="Image 1">
         </div>
         <div class="col-md-6 text-box">
          <h2>Chandigarh</h2>
          <p>Chandigarh, the capital city of Punjab and Haryana, is known for its urban planning, modern architecture, and serene environment. It is often referred to as "The City Beautiful" due to its well-planned infrastructure and lush green spaces.</p>
          <p>Explore the famous Rock Garden, enjoy a leisurely stroll around Sukhna Lake, and admire the unique architectural marvel of the Capitol Complex. Chandigarh offers a perfect blend of natural beauty and modern amenities.</p>
          <button type="button" class="btn btn-warning"><a href="Chandigarh">Read More</a></button>
         </div>
       </div>

       
 
 
        

          <div class="row gap">
            <div class="col-md-6 image-box">
              <img src="pages/images/chennai.jpg" alt="Image 1">
             </div>
            <div class="col-md-6 text-box">
              <h2>Chennai</h2>
              <p>Chennai, the capital of Tamil Nadu, is a vibrant city located on the Bay of Bengal. It is known for its rich cultural heritage, historical landmarks, and stunning beaches. Chennai serves as the gateway to South India, offering a blend of tradition and modernity.</p>
              <p>Explore the magnificent temples, experience the vibrant local markets, savor the delicious South Indian cuisine, and relax on the pristine beaches. Chennai is also famous for its traditional arts, music, and dance forms such as Bharatanatyam.</p>
              <button type="button" class="btn btn-warning"><a href="Chennai">Read More</a></button>
            </div>
        </div>

        
    
    
        

          <div class="row gap">
            <div class="col-md-6 image-box">
              <img src="pages/images/Darjeeling.jpg" alt="Image 1">
            </div>
            <div class="col-md-6 text-box">
              <h2>Darjeeling</h2>
              <p>Darjeeling, often referred to as the "Queen of Hills," is a charming hill station located in West Bengal, India. Situated in the Lesser Himalayas at an elevation of 6,710 feet (2,045 meters), Darjeeling offers breathtaking views of the snow-capped Kanchenjunga, the third highest peak in the world.</p>
              <p>Explore the lush tea gardens, take a ride on the famous Darjeeling Himalayan Railway, visit the monasteries, and enjoy the serene ambiance of this hill town. Darjeeling is renowned for its pleasant weather, colonial architecture, and the famous Darjeeling tea, making it a popular destination for nature lovers and tea enthusiasts.</p>
              <button type="button" class="btn btn-warning"><a href="Darjeeling">Read More</a></button>
            </div>
         </div>

        
        
         
         

          <div class="row gap">
          <div class="col-md-6 image-box">
            <img src="pages/images/Delhi.jpg" alt="Image 1">
          </div>
          <div class="col-md-6 text-box">
            <h2>Delhi</h2>
            <p>Delhi, the capital city of India, is a vibrant and historical city that offers a mix of ancient and modern attractions. It is known for its rich culture, magnificent monuments, bustling markets, and delectable street food.</p>
            <p>Explore the iconic landmarks, witness the grandeur of Mughal architecture, and experience the diverse cultural heritage of this dynamic city.</p>
            <button type="button" class="btn btn-warning"><a href="Delhi">Read More</a></button>
          </div>
        </div>

         


     </div>
 
 


       
   
 
   <div id="page2" class="page">
 
    
    
    
     

      <div class="row gap">
       <div class="col-md-6 image-box">
         <img src="pages/images/dharm.jpg" alt="Image 1">
       </div>
       <div class="col-md-6 text-box">
         <h2>Dharamshala</h2>
         <p>Dharamshala, located in the picturesque Kangra Valley of Himachal Pradesh, is a renowned spiritual and natural retreat. Nestled amidst the Dhauladhar mountain range, this enchanting hill station offers a serene environment, ancient temples, and breathtaking vistas.</p>
         <p>Visit the famous Namgyal Monastery, the residence of the Dalai Lama, and experience the rich Tibetan culture and Buddhism. Explore the beautiful Bhagsunag Waterfall, indulge in adventurous activities like trekking, and savor the delectable Tibetan cuisine.</p>
         <button type="button" class="btn btn-warning"><a href="Dharamshala">Read More</a></button>
       </div>
     </div>

     
 
 
      

        <div class="row gap">
       <div class="col-md-6 image-box">
         <img src="pages/images/gangtok.jpg" alt="Image 1">
       </div>
       <div class="col-md-6 text-box">
         <h2>Gangtok</h2>
         <p>Gangtok is the capital city of the Indian state of Sikkim. Nestled in the eastern Himalayas, it is known for its breathtaking landscapes, serene monasteries, and warm hospitality.</p>
         <p>Explore the famous Rumtek Monastery, visit the beautiful Tsomgo Lake, and enjoy panoramic views from the Nathula Pass. Gangtok is also renowned for its vibrant culture, traditional handicrafts, and delicious cuisine.</p>
         <button type="button" class="btn btn-warning"><a href="Gangtok">Read More</a></button>
       </div>
      </div>

      
 
 
      

        <div class="row gap">
        <div class="col-md-6 image-box">
          <img src="pages/images/go1.jpg" alt="Image 1">
        </div>
        <div class="col-md-6 text-box">
          <h2>Goa</h2>
          <p>Goa, located on the western coast of India, is a popular tourist destination known for its stunning beaches, vibrant nightlife, Portuguese architecture, and delicious seafood.</p>
          <p>Experience the laid-back atmosphere, indulge in water sports, explore ancient churches, and immerse yourself in the rich culture and history of this coastal paradise.</p>
          <button type="button" class="btn btn-warning"><a href="Goa">Read More</a></button>
        </div>
      </div>

      
 
 
      

        <div class="row gap">
        <div class="col-md-6 image-box">
          <img src="pages/images/Gokarna.jpg" alt="Image 1">
        </div>
        <div class="col-md-6 text-box">
          <h2>Gokarna</h2>
          <p>Gokarna, located on the western coast of India in the state of Karnataka, is a tranquil town famous for its pristine beaches and religious significance. It offers a perfect blend of spirituality and natural beauty.</p>
          <p>Explore the renowned Mahabaleshwar Temple, dedicated to Lord Shiva, and witness its architectural grandeur. Enjoy the scenic beauty of Om Beach, known for its distinctive shape resembling the auspicious symbol 'Om.' Don't miss the mesmerizing sunset views at Kudle Beach and the peaceful vibes of Half Moon Beach.</p>
          <button type="button" class="btn btn-warning"><a href="Gokarna">Read More</a></button>
        </div>
      </div>

      
 
 
      

        <div class="row gap">
        <div class="col-md-6 image-box">
          <img src="pages/images/Gulmarg.jpg" alt="Image 1">
        </div>
        <div class="col-md-6 text-box">
          <h2>Gulmarg</h2>
          <p>Gulmarg, located in the Pir Panjal Range of the Himalayas, is a stunning hill station in Jammu and Kashmir, India. Famous for its breathtaking natural beauty, snow-capped peaks, and adventure sports opportunities, Gulmarg offers a paradise-like experience to its visitors.</p>
          <p>Indulge in skiing and snowboarding during winters, explore the vibrant meadows adorned with wildflowers in summers, and enjoy the majestic views from the famous Gondola cable car ride. Gulmarg is a dream destination for nature lovers and adventure enthusiasts.</p>
          <button type="button" class="btn btn-warning"><a href="Gulmarg">Read More</a></button>
        </div>
      </div>

      
 
      

        <div class="row gap">
        <div class="col-md-6 image-box">
          <img src="pages/images/gurugram.jpg" alt="Image 1">
        </div>
        <div class="col-md-6 text-box">
          <h2>Gurugram</h2>
          <p>Gurugram, also known as Gurgaon, is a bustling city located in the state of Haryana, India. It is one of the major financial and technological hubs in the country. With its modern infrastructure, shopping malls, and corporate offices, Gurugram has earned the reputation of being the "Millennium City."</p>
          <p>Explore the vibrant Cyber Hub, shop at the luxurious Ambience Mall, and experience the thrill of Kingdom of Dreams. Gurugram offers a mix of modern attractions and traditional charm, making it a popular destination for business travelers and tourists alike.</p>
          <button type="button" class="btn btn-warning"><a href="Gurugram">Read More</a></button>
        </div>
      </div>

      
 
 
      

        <div class="row gap">
        <div class="col-md-6 image-box">
          <img src="pages/images/Gwalior.jpg" alt="Image 1">
        </div>
        <div class="col-md-6 text-box">
          <h2>Gwalior</h2>
          <p>Gwalior, located in the central Indian state of Madhya Pradesh, is a city steeped in rich history and culture. It is famous for its magnificent forts, beautiful palaces, and ancient temples. Gwalior Fort, situated atop a hill, offers breathtaking views of the city.</p>
          <p>Visit the historic Jai Vilas Palace, known for its stunning architecture and art collection. Explore the intricately carved Sas-Bahu Temples and the iconic Teli Ka Mandir. Gwalior is also known for its vibrant music scene, with the Gwalior Gharana being one of the most renowned classical music traditions.</p>
          <button type="button" class="btn btn-warning"><a href="Gwalior">Read More</a></button>
        </div>
      </div>

      
 
 
       

        <div class="row gap">
           <div class="col-md-6 image-box">
             <img src="pages/images/hampi.jpg" alt="Image 1">
            </div>
           <div class="col-md-6 text-box">
             <h2>Hampi</h2>
             <p>Hampi, located in the state of Karnataka, India, is a UNESCO World Heritage Site and one of the most significant historical and archaeological sites in India. It was the capital of the Vijayanagara Empire in the 14th century.</p>
             <p>Explore the magnificent ruins, ancient temples, and stunning rock formations that dot the landscape of Hampi. The rich history, intricate carvings, and grand architecture make it a captivating destination for history enthusiasts and travelers alike.</p>
             <button type="button" class="btn btn-warning"><a href="Hampi">Read More</a></button>
           </div>
       </div>

       
   
   
       

        <div class="row gap">
           <div class="col-md-6 image-box">
             <img src="pages/images/hyderabad.jpg" alt="Image 1">
           </div>
           <div class="col-md-6 text-box">
             <h2>Hyderabad</h2>
             <p>Hyderabad, the capital city of the Indian state of Telangana, is known for its rich history, culture, and mouth-watering cuisine. The city is a perfect blend of tradition and modernity. Hyderabad is often referred to as the City of Pearls due to its historical association with the pearl trade.</p>
             <p>Explore the magnificent historical monuments, savor the famous Hyderabadi biryani, shop for traditional crafts and jewelry, and witness the charm of the old city. Hyderabad is also home to bustling markets, scenic lakes, and vibrant festivals.</p>
             <button type="button" class="btn btn-warning"><a href="Hyderabad">Read More</a></button>
           </div>
        </div>

       


        

          <div class="row gap">
          <div class="col-md-6 image-box">
            <img src="pages/images/indore.jpg" alt="Image 1">
          </div>
          <div class="col-md-6 text-box">
            <h2>Indore</h2>
            <p>Indore is a vibrant city located in the heart of Madhya Pradesh, India. Known for its rich history and cultural heritage, it is often referred to as the "City of Holkars."</p>
            <p>Explore the magnificent Rajwada Palace, visit the famous Khajrana Ganesh Temple, and enjoy the tranquility of the serene Patalpani Waterfall. Indore is also famous for its street food, bustling markets, and educational institutions.</p>
            <button type="button" class="btn btn-warning"><a href="Indore">Read More</a></button>
          </div>
        </div>

        
   

        

          <div class="row gap">
          <div class="col-md-6 image-box">
            <img src="pages/images/jaipur.jpg" alt="Image 1">
          </div>
          <div class="col-md-6 text-box">
            <h2>Jaipur</h2>
            <p>Jaipur, also known as the Pink City, is the capital of the royal state of Rajasthan in India. It is a city rich in history, culture, and architectural wonders. Jaipur is famous for its majestic palaces, vibrant markets, and traditional Rajasthani hospitality.</p>
            <p>Explore the mesmerizing beauty of Jaipur by visiting iconic landmarks such as the Hawa Mahal, Amer Fort, and Jantar Mantar. Immerse yourself in the regal atmosphere, indulge in traditional Rajasthani cuisine, and shop for exquisite handicrafts.</p>
            <button type="button" class="btn btn-warning"><a href="Jaipur">Read More</a></button>
          </div>
        </div>

        


 
     </div>
 
 



 
 
     <div id="page3" class="page">
 
       
    
  
        

          <div class="row gap">
         <div class="col-md-6 image-box">
           <img src="pages/images/jaisalmer.jpg" alt="Image 1">
         </div>
         <div class="col-md-6 text-box">
           <h2>Jaisalmer</h2>
           <p>Jaisalmer, known as "The Golden City," is a captivating destination in the state of Rajasthan, India. It is famous for its majestic forts, stunning palaces, and unique golden sandstone architecture.</p>
           <p>Explore the magnificent Jaisalmer Fort, visit the beautiful Patwon Ki Haveli, and experience the charm of the Gadisar Lake. Immerse yourself in the rich cultural heritage and warm hospitality of this desert city.</p>
           <button type="button" class="btn btn-warning"><a href="Jaisalmer">Read More</a></button>
         </div>
        </div>

        
  
  
        

          <div class="row gap">
          <div class="col-md-6 image-box">
            <img src="pages/images/jodhpur.jpg" alt="Image 1">
          </div>
          <div class="col-md-6 text-box">
            <h2>Jodhpur</h2>
            <p>Jodhpur, also known as the "Blue City," is a vibrant city in the state of Rajasthan, India. It is famous for its stunning architecture, vibrant culture, and majestic palaces.</p>
            <p>Explore the magnificent Mehrangarh Fort, get lost in the narrow lanes of the Blue City, and experience the grandeur of Umaid Bhawan Palace. Jodhpur offers a rich blend of history, art, and traditions.</p>
            <button type="button" class="btn btn-warning"><a href="Jodhpur">Read More</a></button>
          </div>
        </div>

        
  
  
        

          <div class="row gap">
          <div class="col-md-6 image-box">
            <img src="pages/images/Kochi.jpg" alt="Image 1">
          </div>
          <div class="col-md-6 text-box">
            <h2>Kochi</h2>
            <p>Kochi, also known as Cochin, is a vibrant city located on the southwest coast of India. As the "Queen of the Arabian Sea," Kochi has a rich history influenced by various cultures including Portuguese, Dutch, and British. The city is famous for its bustling seaport, breathtaking backwaters, and spice trading history.</p>
            <p>Explore the charming colonial architecture, visit ancient forts, indulge in delicious seafood, and experience the mesmerizing Kathakali dance performances. Kochi is also a gateway to the picturesque Kerala backwaters, serene beaches, and the famous hill station of Munnar.</p>
            <button type="button" class="btn btn-warning"><a href="Kochi">Read More</a></button>
          </div>
        </div>

        
  
  
        

          <div class="row gap">
          <div class="col-md-6 image-box">
            <img src="pages/images/kodai.jpg" alt="Image 1">
          </div>
          <div class="col-md-6 text-box">
            <h2>Kodaikanal</h2>
            <p>Kodaikanal is a picturesque hill station nestled in the Western Ghats of Tamil Nadu, India. Known as the "Princess of Hill Stations," it offers breathtaking views, pleasant weather, and lush green landscapes.</p>
            <p>Explore the beautiful Kodaikanal Lake, take a stroll in the serene Bryant Park, and visit attractions like Coaker's Walk and Pillar Rocks. The town is also known for its charming viewpoints, waterfalls, and tea plantations.</p>
            <button type="button" class="btn btn-warning"><a href="Kodaikanal">Read More</a></button>
          </div>
        </div>

        
  
        

          <div class="row gap">
          <div class="col-md-6 image-box">
            <img src="pages/images/kolkata.jpg" alt="Image 1">
          </div>
          <div class="col-md-6 text-box">
            <h2>Kolkata</h2>
            <p>Kolkata, also known as the City of Joy, is the capital of West Bengal and a cultural hub in India. With its rich history, vibrant festivals, literary heritage, and mouthwatering cuisine, Kolkata offers a unique blend of old-world charm and modernity.</p>
            <p>Immerse yourself in the colonial architecture, visit iconic landmarks, explore bustling markets, and indulge in the city's love for art, music, and literature. Kolkata is a city that captivates its visitors with its warmth, enthusiasm, and cultural vibrancy.</p>
            <button type="button" class="btn btn-warning"><a href="Kolkata">Read More</a></button>
          </div>
        </div>

        
  
  
        

          <div class="row gap">
          <div class="col-md-6 image-box">
            <img src="pages/images/kozi.jpg" alt="Image 1">
          </div>
          <div class="col-md-6 text-box">
            <h2>Kozhikode</h2>
            <p>Kozhikode, also known as Calicut, is a vibrant city located on the Malabar Coast of Kerala, India. Famous for its historical significance, stunning beaches, and mouth-watering cuisine, Kozhikode offers a perfect blend of culture, nature, and delectable flavors.</p>
            <p>Explore the grandeur of Kozhikode Beach, visit the iconic Mananchira Square, and indulge in shopping at the bustling SM Street. Experience the charm of Kappad Beach, where Vasco da Gama first set foot on Indian soil, and delve into the rich history at Pazhassiraja Museum.</p>
            <button type="button" class="btn btn-warning"><a href="Kozhikode">Read More</a></button>
          </div>
        </div>

        
  
  
         

          <div class="row gap">
             <div class="col-md-6 image-box">
               <img src="pages/images/leh.jpg" alt="Image 1">
              </div>
             <div class="col-md-6 text-box">
               <h2>Leh</h2>
               <p>Leh, located in the Ladakh region of Jammu and Kashmir, is a mesmerizing destination known for its stunning landscapes, serene monasteries, and adventurous activities. It is surrounded by the mighty Himalayas, making it a paradise for nature lovers and adventure enthusiasts.</p>
               <p>Explore the ancient monasteries like Thiksey Monastery and Hemis Monastery, witness the breathtaking beauty of Pangong Lake, and conquer the challenging passes like Khardung La and Chang La. Leh offers an unforgettable experience with its unique culture, picturesque views, and thrilling adventures.</p>
               <button type="button" class="btn btn-warning"><a href="Leh">Read More</a></button>
             </div>
         </div>

         
     
     
         

          <div class="row gap">
             <div class="col-md-6 image-box">
               <img src="pages/images/lonavala.jpg" alt="Image 1">
             </div>
             <div class="col-md-6 text-box">
               <h2>Lonavala</h2>
               <p>Lonavala, located in the Sahyadri range of the Western Ghats in Maharashtra, is a popular hill station known for its scenic beauty, pleasant weather, and lush green landscapes.</p>
               <p>Experience the mesmerizing views from Tiger Point, explore the ancient Karla Caves, and enjoy the thrill of trekking to the famous Lohagad Fort. Don't miss the panoramic views from Lion's Point and the serene ambiance of Bhushi Dam.</p>
               <button type="button" class="btn btn-warning"><a href="Lonavala">Read More</a></button>
             </div>
          </div>

         
  

          

            <div class="row gap">
            <div class="col-md-6 image-box">
              <img src="pages/images/lucknow.jpg" alt="Image 1">
            </div>
            <div class="col-md-6 text-box">
              <h2>Lucknow</h2>
              <p>Lucknow, the capital city of Uttar Pradesh in India, is renowned for its rich history, royal heritage, and architectural marvels. It is often referred to as the "City of Nawabs" due to its royal past.</p>
              <p>Explore the grandeur of Lucknow by visiting the majestic Bara Imambara, experiencing the tranquility of the beautiful gardens like the Ambedkar Park and Hazratganj, and indulging in the city's famous culinary delights.</p>
              <button type="button" class="btn btn-warning"><a href="Lucknow">Read More</a></button>
            </div>
          </div>

          
     
         
          

            <div class="row gap">
            <div class="col-md-6 image-box">
              <img src="pages/images/Madurai.jpg" alt="Image 1">
            </div>
            <div class="col-md-6 text-box">
              <h2>Madurai</h2>
              <p>Madurai, located in the southern state of Tamil Nadu, is known as the cultural capital of the state. It is a vibrant city with a rich history and heritage that dates back over 2,500 years. The city is famous for its magnificent temples, traditional architecture, and colorful festivals.</p>
              <p>Explore the iconic Meenakshi Amman Temple, witness the grandeur of the Thirumalai Nayakkar Palace, and immerse yourself in the bustling markets and lively streets of Madurai. With its cultural significance and architectural wonders, Madurai is a must-visit destination for history buffs and spiritual seekers.</p>
              <button type="button" class="btn btn-warning"><a href="Madurai">Read More</a></button>
            </div>
          </div>

          
     
     
           

            <div class="row gap">
            <div class="col-md-6 image-box">
              <img src="pages/images/mahabaleshwar.jpg" alt="Image 1">
            </div>
            <div class="col-md-6 text-box">
              <h2>Mahabaleshwar</h2>
              <p>Mahabaleshwar, nestled in the Western Ghats of Maharashtra, is a picturesque hill station known for its breathtaking views, pleasant climate, and lush greenery. It is a popular weekend getaway destination for nature lovers and adventure enthusiasts.</p>
              <p>Explore the stunning viewpoints like Arthur's Seat, Kate's Point, and Wilson Point, visit the ancient Mahabaleshwar Temple, and indulge in strawberry picking at the local farms. With its serene beauty and refreshing atmosphere, Mahabaleshwar offers a perfect escape from the city's hustle and bustle.</p>
              <button type="button" class="btn btn-warning"><a href="Mahabaleshwar">Read More</a></button>
            </div>
           </div>

           


       </div>
 







       <div id="page4" class="page">
 

    
          

            <div class="row gap">
            <div class="col-md-6 image-box">
              <img src="pages/images/Manali.jpg" alt="Image 1">
            </div>
            <div class="col-md-6 text-box">
              <h2>Manali</h2>
              <p>Manali, known as the "Paradise on Earth," is a mesmerizing hill station situated in the state of Himachal Pradesh, India. Nestled in the Pir Panjal and Dhauladhar ranges of the Himalayas, Manali is renowned for its scenic beauty, snow-capped mountains, lush valleys, and gushing rivers.</p>
              <p>Explore the picturesque Rohtang Pass, indulge in adventure sports like paragliding and river rafting, visit the ancient Hadimba Temple, and rejuvenate at the Vashisht Hot Water Springs. Manali offers a perfect blend of natural wonders, spirituality, and thrilling activities, making it a popular destination for tourists.</p>
              <button type="button" class="btn btn-warning"><a href="Manali">Read More</a></button>
            </div>
          </div>

          
    
    
          

            <div class="row gap">
            <div class="col-md-6 image-box">
              <img src="pages/images/manglore.jpg" alt="Image 1">
            </div>
            <div class="col-md-6 text-box">
              <h2>Mangalore</h2>
              <p>Mangalore, located on the western coast of India, is a vibrant city known for its pristine beaches, historical sites, and rich cultural heritage. It serves as the gateway to the state of Karnataka, offering a perfect blend of natural beauty and modernity.</p>
              <p>Explore the iconic Kadri Manjunath Temple, take a stroll along the scenic Panambur Beach, and taste the authentic Mangalorean cuisine known for its spicy flavors. Mangalore is also famous for its ancient churches, such as St. Aloysius Chapel, and the picturesque backwaters of Netravati and Gurupura rivers.</p>
              <button type="button" class="btn btn-warning"><a href="Mangalore">Read More</a></button>
            </div>
          </div>

          
    
    
          

            <div class="row gap">
            <div class="col-md-6 image-box">
              <img src="pages/images/mumbai.jpg" alt="Image 1">
            </div>
            <div class="col-md-6 text-box">
              <h2>Mumbai</h2>
              <p>Mumbai, also known as the City of Dreams, is the financial capital of India. It is a vibrant metropolis known for its bustling streets, diverse culture, and Bollywood film industry.</p>
              <p>Explore the charm of Mumbai by visiting iconic landmarks such as the Gateway of India, Marine Drive, and the Elephanta Caves. Immerse yourself in the energetic atmosphere, indulge in street food, and experience the fast-paced life of this cosmopolitan city.</p>
              <button type="button" class="btn btn-warning"><a href="Mumbai">Read More</a></button>
            </div>
          </div>

          
    

          

            <div class="row gap">
            <div class="col-md-6 image-box">
              <img src="pages/images/munnar.jpg" alt="Image 1">
            </div>
            <div class="col-md-6 text-box">
              <h2>Munnar</h2>
              <p>Munnar, known as the "Kashmir of South India," is a picturesque hill station located in the Western Ghats of Kerala, India. Situated at an elevation of 5,200 feet (1,600 meters), Munnar is famous for its tea plantations, misty mountains, and breathtaking landscapes.</p>
              <p>Explore the tea estates, visit the spice gardens, trek through the lush forests, and enjoy the tranquility of the serene lakes. Munnar offers a perfect blend of natural beauty and adventure, making it a popular destination for nature enthusiasts and adventure seekers.</p>
              <button type="button" class="btn btn-warning"><a href="Munnar">Read More</a></button>
            </div>
          </div>

          
    
    
          

            <div class="row gap">
            <div class="col-md-6 image-box">
              <img src="pages/images/mussoori.jpg" alt="Image 1">
            </div>
            <div class="col-md-6 text-box">
              <h2>Mussoorie</h2>
              <p>Mussoorie, known as "The Queen of Hills," is a picturesque hill station located in the state of Uttarakhand, India. It offers breathtaking views of the snow-capped Himalayan ranges and lush green valleys.</p>
              <p>Experience the charm of Mussoorie by exploring its colonial architecture, enjoying leisurely walks on the Mall Road, and visiting scenic spots like Kempty Falls and Gun Hill.</p>
              <button type="button" class="btn btn-warning"><a href="Mussoorie">Read More</a></button>
            </div>
          </div>

          
    
    
           

            <div class="row gap">
               <div class="col-md-6 image-box">
                 <img src="pages/images/mysore.jpg" alt="Image 1">
                </div>
               <div class="col-md-6 text-box">
                 <h2>Mysore</h2>
                 <p>Mysore, also known as the Cultural Capital of Karnataka, is a vibrant city located in the southern part of India. It is renowned for its rich history, royal heritage, and magnificent architecture.</p>
                 <p>Discover the opulence of Mysore by visiting the majestic Mysore Palace, exploring the serene Brindavan Gardens, and experiencing the grandeur of the Chamundi Hills.</p>
                 <button type="button" class="btn btn-warning"><a href="Mysore">Read More</a></button>
               </div>
           </div>

           
       
       
           

            <div class="row gap">
               <div class="col-md-6 image-box">
                 <img src="pages/images/nanital.jpg" alt="Image 1">
               </div>
               <div class="col-md-6 text-box">
                 <h2>Nainital</h2>
                 <p>Nainital is a picturesque hill station located in the Indian state of Uttarakhand. Known as the "Lake District of India," it is surrounded by beautiful lakes and lush green mountains.</p>
                 <p>Visit the famous Nainital Lake, enjoy a boat ride, and witness the stunning panoramic views from Naina Peak. Explore the vibrant Mall Road and indulge in local delicacies. Nainital also offers opportunities for trekking and wildlife spotting.</p>
                 <button type="button" class="btn btn-warning"><a href="Nainital">Read More</a></button>
               </div>
            </div>

           
    
            

              <div class="row gap">
              <div class="col-md-6 image-box">
                <img src="pages/images/nasik.jpg" alt="Image 1">
              </div>
              <div class="col-md-6 text-box">
                <h2>Nashik</h2>
                <p>Nashik, located in the state of Maharashtra, is known as the Wine Capital of India. It is renowned for its vineyards, ancient temples, and scenic beauty. The city has a rich history dating back to ancient times.</p>
                <p>Visit the famous Sula Vineyards and taste exquisite wines, explore the ancient Trimbakeshwar Temple, and enjoy the mesmerizing beauty of the Dudhsagar Falls. Nashik is also home to numerous festivals and cultural events throughout the year.</p>
                <button type="button" class="btn btn-warning"><a href="Nashik">Read More</a></button>
              </div>
            </div>

            
       
           
            

              <div class="row gap">
              <div class="col-md-6 image-box">
                <img src="pages/images/Nagpur.jpg" alt="Image 1">
              </div>
              <div class="col-md-6 text-box">
                <h2>Nagpur</h2>
                <p>Nagpur is situated in the central part of India.The city is surrounded by fertile agricultural land and is located near major rivers such as the Nag River and Kanhan River.</p>
                <p>Nagpur has a vibrant cultural scene. It celebrates various festivals with enthusiasm, including Ganesh Chaturthi, Diwali, Durga Puja, Holi, and Eid. The city hosts cultural events, music concerts, theater performances, and exhibitions that showcase its rich cultural heritage.</p>
                <button type="button" class="btn btn-warning"><a href="Nagpur">Read More</a></button>
              </div>
            </div>

            
       
       
             

              <div class="row gap">
              <div class="col-md-6 image-box">
                <img src="pages/images/Ooty.jpg" alt="Image 1">
              </div>
              <div class="col-md-6 text-box">
                <h2>Ooty</h2>
                <p>Ooty, also known as Udhagamandalam, is a popular hill station located in the Nilgiri Hills of Tamil Nadu, India. With its pleasant weather, scenic beauty, and colonial charm, Ooty has earned the title of "Queen of Hill Stations."</p>
                <p>Explore the lush green landscapes, picturesque valleys, and cascading waterfalls. Enjoy a ride on the Nilgiri Mountain Railway, visit the tea gardens, and indulge in adventure activities like trekking and boating. Ooty offers a perfect retreat for nature lovers and those seeking tranquility.</p>
                <button type="button" class="btn btn-warning"><a href="Ooty">Read More</a></button>
              </div>
             </div> 

             

             

              <div class="row gap">
              <div class="col-md-6 image-box">
                <img src="pages/images/patna.jpg" alt="Image 1">
              </div>
              <div class="col-md-6 text-box">
                <h2>Patna</h2>
                <p>Patna, the capital city of Bihar, is one of the oldest continuously inhabited cities in the world. With a rich historical and cultural heritage, Patna offers a glimpse into the ancient past of India.</p>
                <p>Explore the architectural marvels of Patna Sahib Gurudwara, experience the spiritual ambiance of Mahavir Mandir, and immerse yourself in the rich history at Patna Museum. Patna is a city that beautifully blends tradition and modernity.</p>
                <button type="button" class="btn btn-warning"><a href="Patna">Read More</a></button>
              </div>
            </div>

             


         </div>





 
         <div id="page5" class="page"> 
           
    
      
            

              <div class="row gap">
              <div class="col-md-6 image-box">
                <img src="pages/images/pondicherry.jpg" alt="Image 1">
              </div>
              <div class="col-md-6 text-box">
                <h2>Pondicherry</h2>
                <p>Pondicherry, also known as Puducherry, is a charming coastal town on the southeastern coast of India. It is known for its unique blend of French and Indian influences, evident in its architecture, cuisine, and culture.</p>
                <p>Explore the serene beaches, stroll through the French Quarter with its colonial buildings, visit the Aurobindo Ashram for spiritual rejuvenation, and savor the delectable French and South Indian cuisine. Pondicherry offers a perfect getaway for a peaceful and cultural experience.</p>
                <button type="button" class="btn btn-warning"><a href="Pondicherry">Read More</a></button>
              </div>
            </div>

            
      
      
            

              <div class="row gap">
              <div class="col-md-6 image-box">
                <img src="pages/images/pune.jpg" alt="Image 1">
              </div>
              <div class="col-md-6 text-box">
                <h2>Pune</h2>
                <p>Pune, the cultural capital of Maharashtra, is a vibrant city known for its historical significance, educational institutions, and diverse culture. It is a blend of tradition and modernity, offering a unique experience to visitors.</p>
                <p>Explore the rich heritage of Pune by visiting iconic landmarks like Shaniwar Wada, Aga Khan Palace, and the beautiful hill forts of Sinhagad and Rajgad. Experience the lively street markets, indulge in mouth-watering street food, and witness the city's thriving arts and music scene.</p>
                <button type="button" class="btn btn-warning"><a href="Pune">Read More</a></button>
              </div>
            </div>

            
      
            

              <div class="row gap">
              <div class="col-md-6 image-box">
                <img src="pages/images/puri.jpg" alt="Image 1">
              </div>
              <div class="col-md-6 text-box">
                <h2>Puri</h2>
                <p>Puri is a vibrant coastal city located in the eastern state of Odisha, India. It is famous for its rich cultural heritage, ancient temples, and pristine beaches. Puri is considered one of the four sacred pilgrimage sites for Hindus.</p>
                <p>Visit the world-renowned Jagannath Temple, take a holy dip in the sea during the annual Rath Yatra festival, and explore the nearby attractions like Konark Sun Temple and Chilika Lake. Puri offers a unique blend of spirituality and natural beauty, making it a popular destination for both religious and leisure travelers.</p>
                <button type="button" class="btn btn-warning"><a href="Puri">Read More</a></button>
              </div>
            </div>

            
      
      
            

              <div class="row gap">
              <div class="col-md-6 image-box">
                <img src="pages/images/rishikesh.jpg" alt="Image 1">
              </div>
              <div class="col-md-6 text-box">
                <h2>Rishikesh</h2>
                <p>Rishikesh, known as "The Yoga Capital of the World," is a spiritual and serene destination located in the state of Uttarakhand, India. It is renowned for its ashrams, yoga centers, and the holy River Ganges.</p>
                <p>Experience the tranquility of Rishikesh by participating in yoga and meditation retreats, exploring ancient temples, and enjoying adventurous activities like river rafting and hiking in the Himalayan foothills.</p>
                <button type="button" class="btn btn-warning"><a href="Rishikesh">Read More</a></button>
              </div>
            </div>

            

            

              <div class="row gap">
              <div class="col-md-6 image-box">
                <img src="pages/images/silong.jpg" alt="Image 1">
              </div>
              <div class="col-md-6 text-box">
                <h2>Shillong</h2>
                <p>Shillong, the capital city of Meghalaya in India, is known as the Scotland of the East due to its picturesque landscapes, misty hills, and pleasant climate. It is nestled amidst the Khasi and Garo hills and offers breathtaking views of waterfalls, lush green valleys, and serene lakes.</p>
                <p>Experience the unique blend of British colonial charm and Khasi culture as you explore the vibrant markets, enjoy local cuisine, and immerse yourself in the natural beauty that surrounds Shillong.</p>
                <button type="button" class="btn btn-warning"><a href="Shillong">Read More</a></button>
              </div>
            </div>

            
     
            

              <div class="row gap">
              <div class="col-md-6 image-box">
                <img src="pages/images/shimla.jpg" alt="Image 1">
              </div>
              <div class="col-md-6 text-box">
                <h2>Shimla</h2>
                <p>Shimla, often referred to as the "Queen of Hills," is a picturesque hill station located in the state of Himachal Pradesh, India. Nestled in the foothills of the Himalayas, Shimla is renowned for its stunning natural beauty, colonial architecture, and pleasant climate.</p>
                <p>Explore the bustling Mall Road, visit the iconic Christ Church, and take a ride on the Shimla-Kalka toy train, a UNESCO World Heritage Site. Shimla offers breathtaking views of the surrounding snow-capped mountains, lush valleys, and cascading waterfalls. It's an ideal destination for nature lovers and adventure enthusiasts.</p>
                <button type="button" class="btn btn-warning"><a href="Shimla">Read More</a></button>
              </div>
            </div>

            

            

              <div class="row gap">
              <div class="col-md-6 image-box">
                <img src="pages/images/srinagar.jpg" alt="Image 1">
              </div>
              <div class="col-md-6 text-box">
                <h2>Srinagar</h2>
                <p>Srinagar, the summer capital of Jammu and Kashmir, is renowned for its breathtaking natural beauty, serene lakes, and charming gardens. It is often referred to as "The Paradise on Earth" due to its picturesque landscapes.</p>
                <p>Experience the serene Dal Lake, visit the famous Mughal Gardens, and explore the old city with its vibrant markets and traditional Kashmiri crafts. Srinagar offers a perfect blend of nature, culture, and tranquility.</p>
                <button type="button" class="btn btn-warning"><a href="Srinagar">Read More</a></button>
              </div>
            </div>

            

            

              <div class="row gap">
              <div class="col-md-6 image-box">
                <img src="pages/images/surat.jpg" alt="Image 1">
              </div>
              <div class="col-md-6 text-box">
                <h2>Surat</h2>
                <p>Surat, located in the western Indian state of Gujarat, is a vibrant city known for its diamond industry, textile markets, and delicious street food. It is situated on the banks of the Tapi River and offers a mix of historical and modern attractions.</p>
                <p>Visit the iconic Surat Castle, which dates back to the 16th century and provides a glimpse into the city's rich history. Explore the beautiful Dutch Garden, a well-maintained park with colonial-era structures. Don't miss the chance to indulge in the mouth-watering street food, including the famous Surat Sweets.</p>
                <button type="button" class="btn btn-warning"><a href="Surat">Read More</a></button>
              </div>
            </div>

            

            

              <div class="row gap">
              <div class="col-md-6 image-box">
                <img src="pages/images/trivant.jpg" alt="Image 1">
              </div>
              <div class="col-md-6 text-box">
                <h2>Thiruvananthapuram</h2>
                <p>Thiruvananthapuram, commonly known as Trivandrum, is the capital city of the southern Indian state of Kerala. It is a vibrant city with a rich cultural heritage and breathtaking natural beauty. Thiruvananthapuram is known for its pristine beaches, ancient temples, and colonial architecture.</p>
                <p>Explore the magnificent Padmanabhaswamy Temple, relax on the beautiful Kovalam Beach, take a boat ride in the serene backwaters of Poovar, and visit the Napier Museum to witness the rich art and history of Kerala. Thiruvananthapuram offers a perfect blend of tradition and modernity.</p>
                <button type="button" class="btn btn-warning"><a href="Thiruvananthapuram">Read More</a></button>
              </div>
            </div>

            

            
      
             

              <div class="row gap">
                 <div class="col-md-6 image-box">
                   <img src="pages/images/varanasi.jpeg" alt="Image 1">
                  </div>
                 <div class="col-md-6 text-box">
                   <h2>Varanasi</h2>
                   <p>Varanasi, also known as Kashi or Banaras, is one of the oldest inhabited cities in the world and a sacred pilgrimage site for Hindus. Located on the banks of the holy River Ganges in Uttar Pradesh, India, Varanasi is considered the spiritual capital of India.</p>
                 
                   <button type="button" class="btn btn-warning"><a href="Varanasi">Read More</a></button>
                  </div>
             </div>
         
         

             
             

              <div class="row gap">
                 <div class="col-md-6 image-box">
                   <img src="pages/images/vishakha.jpg" alt="Image 1">
                 </div>
                 <div class="col-md-6 text-box">
                   <h2>Visakhapatnam</h2>
                    <p>Visakhapatnam, also known as Vizag, is a coastal city in the state of Andhra Pradesh, India. It is known for its pristine beaches, serene hills, and rich cultural heritage. With a perfect blend of natural beauty and modernity, Visakhapatnam offers a delightful experience to its visitors.</p>
                 
                    <button type="button" class="btn btn-warning"><a href="Visakhapatnam">Read More</a></button>
                  </div>
              </div>



             
            
           </div>
       
 </div>
 
 
 <!-- content end     -->
    
   <div class="nav-bar" style="alin">
     <a href="#">1
     <a href="#page2">2
     <a href="#page3">3
     <a href="#page4">4
     <a href="#page5">5
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

      