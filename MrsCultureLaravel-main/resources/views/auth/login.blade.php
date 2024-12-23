@extends('layouts.app')
  
@section('content')

<style>
  body{
      background-image: url(images/login-bg.jpg);
      background-size: cover;
      overflow-x: hidden;
      
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
    
      <h3> <strong>Sign in</strong> <hr style="color: rgb(255, 1, 1)"></h3>
      
    
    <div class="form-body">
      <form method="POST" action="{{ route('login') }}">
        @csrf
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
          <label for="password" class="col-md-4 col-form-label text-md-start">Password</label>
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
        </div>

        <div class="form-group" style="margin-bottom: 20px;">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

            <label class="form-check-label" for="remember">
                Remember Me
            </label>
          </div>
        </div>
      

      <div class="mb-3 login-signup social-main">
        <div style="margin-bottom: 15px">__________Or__________</div>
          <a style="text-decoration: none;" href="https://www.facebook.com/login.php" target="_blank" rel="noopener noreferrer">
            
            <div class="social-tab" style="border: 2px rgba(0, 0, 0, 0.500) solid;" >
              
                <img class="ss" id="logo" src="Logo/facebook (1).png" alt="">
              Connect with Facebook
            </div>

          </a>


          <a style="text-decoration: none;" href="https://accounts.google.com/v3/signin/identifier?dsh=S1979752111%3A1687789335513299&continue=https%3A%2F%2Fads.google.com%2Fnav%2Flogin%3Fsubid%3Din-en-adon-awa-sch-c-bbb%21o3%7E13ada7984da217669613c301d2aefd26%7Ep71078840948%7E&followup=https%3A%2F%2Fads.google.com%2Fnav%2Flogin%3Fsubid%3Din-en-adon-awa-sch-c-bbb%21o3%7E13ada7984da217669613c301d2aefd26%7Ep71078840948%7E&ifkv=Af_xneHYH_D8Mr7v4l5-kJXc3MniY858IF1UmsEa-pRK1soNBV23tHGAuvBO27TBw19t7sJso4kdRQ&osid=1&passive=1209600&service=adwords&flowName=GlifWebSignIn&flowEntry=ServiceLogin" target="_blank" rel="noopener noreferrer">
            
            <div class="social-tab"  style="border: 2px rgba(0, 0, 0, 0.500)solid">
              
              <img class="ss" id="logo"  src="Logo/google.png" alt="">
              Connect with Google
            </div>

          </a>



          <a style="text-decoration: none;" href="https://twitter.com/i/flow/login" target="_blank" rel="noopener noreferrer">
            
            <div class="social-tab"  style="border: 2px rgba(0, 0, 0, 0.500)solid">
              
              <img class="ss" id="logo" src="Logo/twitter.png" alt="">
              Connect with Twitter
            </div>

          </a>

     
                        


        <div class="form-group" style="margin-bottom: 20px;">
          <div class="col-md-8 offset-md-0">
            <button type="submit" class="btn btn-warning">
               Login
            </button>

            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
          </div>
        </div>
      </form>
    </div>
    
    



@endsection
   