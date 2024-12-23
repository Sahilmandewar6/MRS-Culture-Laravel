<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="icon" type="image/png" href="Logo/Mrs web icon .PNG"/>
    <title>mrs culture</title>
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Link -->
  
    <!-- Font Awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Font Awesome cdn -->
  
    <!-- jQuery Link -->
  
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="jquery.js"></script>
    <!-- javascript Link -->
    <script src="javaScript.js"></script>
  <link rel="stylesheet" href="spinner.css">
  <style>
    body{
      background-image: url(flight-bg.jpg);
      background-position: center;
      background-size: cover;
      
    }
    #flight-form-id:hover{
      transform: scale(1.05);
      box-shadow: 0px 0px 550px black;
    }
  </style>

</head>
<body>
  

    <div class="container-fluid">

      <div id="flight-form-id" style="padding: 20px; width: 650px; margin: 40px; margin-left: 400px; background-color: rgba(255, 255, 255, 0.756); border-radius: 10px; ">
        <form action="flightdata" method="post">
          @csrf
          <h3><strong>only admin have access to add flight</strong></h3>
          <hr style="color: red;">
          
          <div class="form-group" style="display: flex;" style="margin-bottom: 20px;">
            <label style="width: 130px;" for="form" style="padding-right: 20px;">From</label>
            <select required="" style="margin-bottom: 10px;"  class="form-control" name="from" id="form">
              <option value="">-Select from-</option>
              <option value="New Delhi DEL">New Delhi DEL</option>
              <option value="Mumbai">Mumbai BOM</option>
              <option value="Chennai">Chennai MAA</option>
          </select>
          </div>
      
          <div class="form-group" style="display: flex;" style="margin-bottom: 20px;">
            <label style="width: 130px;" for="to" style="padding-right: 20px;">To</label>
            <select required="" style="margin-bottom: 10px;"  class="form-control" name="to" id="to">
              <option value="">-Select form-</option>
              <option value="New Delhi DEL">New Delhi DEL</option>
              <option value="Mumbai">Mumbai BOM</option>
              <option value="Chennai">Chennai MAA</option>
          </select>
          </div>
      
        
          <div class="form-group" style="display: flex;" style="margin-bottom: 20px;">
            <label style="width: 130px;" for="departuredate" style="padding-right: 20px;">Departure On</label>
            <input required="" type="date" class="form-control" style="margin-bottom: 10px;" name="departuredate">
        
          </div>
          <div class="form-group" style="display: flex;" style="margin-bottom: 20px;">
            <label style="width: 130px;" for="departuredate" style="padding-right: 20px;">Time</label>
            <input required="" type="time" class="form-control" style="margin-bottom: 10px;" name="time">
        
          </div>
      
          <div class="form-group" style="display: flex;" style="margin-bottom: 20px;">
            <label style="width: 130px;" for="amount" style="padding-right: 20px; padding-top: 10px;">Amount</label>
            <input required="" type="amount" class="form-control" style="margin-bottom: 10px;" name="amount">
        
          </div>
      
         
        <button type="submit" id="reg-submit" class="btn btn-info">Add Flight</button>
        </form>
      </div>
      </div>

    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>

</body>
</html>