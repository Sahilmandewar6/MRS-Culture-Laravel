@extends('layouts.app')
  
@section('content')

<style>
  body{
      background-image: url(images/login3.jpg);
      background-size: cover;
      overflow-x: hidden;
      
  }
 label{
    margin-bottom: -20px;
    margin-top: -20px;
 }
  .social-tab{
    text-align: center;
     
      border-radius: 30px;
      background-color: light; width:400px; color:rgb(0, 0, 0); height:40px;
      outline-color: black;
      margin-bottom: 20px;
      margin-top: 20px
      border: black;
      padding-top: 5px;
  }
 
  .social-tab a{
    text-decoration: none
  }
  .social-main{
    align-items: center;
    padding: 35px;
  }
  #main-login:hover{
   box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.51);
    text-decoration: bol
  }
</style>

<div class="container-fluid" style="color: rgb(255, 255, 255); font-size: x-large; margin-left:-90%; margin-top:70%; ">
  <div style=" margin-left:50px; margin-top:20%">
  <div>
      <img src="Logo/Mrs web icon png.png" style="width: 60px;" alt="">
      Mrs Culture
      </div>
      <div>
          Sign in or create an account
      </div>
  </div>
  </div>
  <div style="width: 500px; margin-left: 60%; margin-top: -80%; padding:10px; background-color:white; border-radius: 10px;">
    
      <h3><strong>Create an account</strong><hr style="color: rgb(255, 1, 1)"></h3>
      
    
    <div class="form-body">
        <form method="POST" action="{{ route('register') }}">
            @csrf
         
        <div class="form-group" style="margin-bottom: 20px;">
            <label for="name" class="col-md-4 col-form-label text-md-start">{{ __('Name') }}</label>
            <input id="name" type="text" class=" form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>

        <div class="form-group" style="margin-bottom: 20px;">
            <label for="gender" class="col-md-4 col-form-label text-md-start">{{ __('Gender') }}</label>
                <select style="margin-bottom: 10px;"  class="form-control @error('gender') is-invalid @enderror" name="gender" id="gender">
                  <option value="">-Select Gender-</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Other">Other</option>
                </select>
               
             
        </div>
        
        <div class="form-group" style="margin-bottom: 20px;">
            <label for="city" class="col-md-4 col-form-label text-md-start">{{ __('City') }}</label>
            <input id="city" type="text" class=" form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city" autofocus>

                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>

        <div class="form-group" style="margin-bottom: 20px;">
          <label for="email" class="col-md-4 col-form-label text-md-start">Email Address</label>
           <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
          @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
          </div>
      

        </div>
        
        <div class="form-group" style="margin-bottom: 20px;">
            <label for="password" class="col-md-4 col-form-label text-md-start">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group" style="margin-bottom: 20px;">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-start">{{ __('Confirm Password') }}</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                     
        </div>


        <div class="form-group" style="margin-bottom: 20px;">
          <div class="col-md-8 offset-md-0">
            <button type="submit" class="btn btn-warning">
                Register
            </button>
          </div>
        </div>
      </form>
    </div>
    
    



@endsection
   