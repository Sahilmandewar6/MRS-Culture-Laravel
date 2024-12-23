<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- Main file start  --}}

    <link rel="icon" type="image/png" href="Logo/Mrs web icon .PNG"/>
    <title>mrs culture</title>
    {{-- main --}}

    <link rel="stylesheet" href="cssfile/style.css">
    <link rel="stylesheet" href="cssfile/spinner.css">
   
    
    {{-- <link rel="stylesheet" href="cssfile/hotel.css"> --}}
    
    
    
    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Link -->
  
    <!-- Font Awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Font Awesome cdn -->
  
    <!-- jQuery Link -->
  
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="java/jquery.js"></script>
    <!-- javascript Link -->
    <script src="java/javaScript.js"></script>
  


    {{-- main file end --}}

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
 
    <div id="app">

        <nav class="navbar navbar-expand-sm navbar-dark bg-none fixed-top p-2"
          style="margin-top: 0%!important; margin-bottom: 0%!important;">
            <div class="container">
                
                  <a class="navbar-brand" href="{{ url('/') }}">
                    <img style="width: 120px;" src="Logo/web icon.png" alt="">
                  </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        
                          
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ __('/login') }}" style="color: black;">{{ __('Login') }}</a>
                                    {{-- <a class="nav-link" href="{{ route('login') }}" style="color: black;">{{ __('Login') }}</a> --}}
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}" style="color: black;">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link home text-warning" href="home">Home</a>
                          </li>
                           
                            <li class="nav-item dropdown ">
                              <a class="nav-link dropdown-toggle" style="color: black;" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">Tours</a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="destination page">Destination</a></li>
                                <li><a class="dropdown-item" href="cruises">Cruises</a></li>
                                <li><a class="dropdown-item" href="hotel">Hotels</a></li>
                                <li><a class="dropdown-item" href="flight">Flight</a></li>
                              </ul>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="hotel" style="color: black;">Hotels</a>
                            </li>
                            
                            <li class="nav-item">
                              <a class="nav-link" href="blog" style="color: black;">Blog</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="{{ __('dress') }}" style="color: black;">Dress</a>
                            </li>
                            
                            <li class="nav-item">
                              <a class="nav-link" href="photo" style="color: black;">Photo</a>
                            </li> 
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown"  style="color: black;" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    
                                <img src="Logo/login-1.png" style="width: 25px;">
                                      {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item"  style="color: black;" href="flightbooking">
                                        {{ __('Flight Booking') }}
                                    </a>

                                    <a class="dropdown-item"  style="color: black;" href="hotelbooking">
                                      {{ __('Hotels Booking') }}
                                  </a>


                                    <a class="dropdown-item"  style="color: black;" href="about">
                                      {{ __('About') }}
                                  </a>
                                  <a class="dropdown-item"  style="color: black;" href="contact">
                                    {{ __('Contact') }}
                                </a>
                                <a class="dropdown-item"  style="color: black;" href="services">
                                  {{ __('Service') }}
                              </a>
                                    <a class="dropdown-item"  style="color: black;" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    
        <main class="container-fluid">
            @yield('content')
            
        </main>
    


    </div>
    <script>
      // Show website content after spinner animation completes
      document.addEventListener("DOMContentLoaded", function () {
        var spinnerContainer = document.querySelector(".opposites");
        var websiteContent = document.querySelector(".website-content");
    
        setTimeout(function () {
          spinnerContainer.style.display = "none";
          websiteContent.style.display = "block";
        }, 2000); // Adjust the time (in milliseconds) to match your desired spinner animation duration
      });
    </script>
</body>
</html>
