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
      background-image: url(images/flight-bookingimg.jpg);
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

      <div id="flight-form-id" style="padding: 20px; width: 650px; margin: 40px; margin-left: 100px; background-color: rgba(255, 255, 255, 0.756); border-radius: 10px; ">
        <form action="fetch" method="POST">
          @csrf
          <h3><strong>Flight Booking</strong></h3>
          <hr style="color: red;">
          <div class="form-group" style="margin-bottom: 20px;">
            <label style="width: 130px;" for="fullname">Full Name</label>
            <input required="" type="text" class="form-control" name="name" placeholder="Enter you full name" >
          </div>
          <div class="form-group" style="margin-bottom: 20px;">
            <label style="width: 130px;" for="email">Email Address</label>
            <input required="" type="email" class="form-control" name="email" id="email" placeholder="Enter your email address"
             >
          </div>
          <div class="form-group" style="display: flex;" style="margin-bottom: 20px;">
            <label style="width: 130px;" for="form" style="padding-right: 20px;">Form</label>
            <select required="" style="margin-bottom: 10px;"  class="form-control" name="start" id="form" >
              <option value="">-Select form-</option>
              <option value="New Delhi DEL">New Delhi DEL</option>
              <option value="Mumbai">Mumbai BOM</option>
              <option value="Chennai">Chennai MAA</option>
          </select>
          </div>
      
          <div class="form-group" style="display: flex;" style="margin-bottom: 20px;">
            <label style="width: 130px;" for="to" style="padding-right: 20px;">To</label>
            <select required="" style="margin-bottom: 10px;"  class="form-control" name="end" id="to">
              <option value="">-Select form-</option>
              <option value="New Delhi DEL">New Delhi DEL</option>
              <option value="Mumbai">Mumbai BOM</option>
              <option value="Chennai">Chennai MAA</option>
          </select>
          </div>
         
          <div class="form-group" style="display: flex;" style="margin-bottom: 20px;">
            <label style="width: 130px;" for="adults" style="padding-right: 20px;">Adults</label>
            <input required="" style="margin-bottom: 10px;"  class="form-control" name="adults" id="adults" min="1" value="1" onchange="calculateAmount()" >
             
          </div>
      
          <div class="form-group" style="display: flex;" style="margin-bottom: 20px;">
            <label style="width: 130px;" for="childrens" style="padding-right: 20px;">Childrens</label>
            <input required="" style="margin-bottom: 10px;"  class="form-control" name="childrens" id="childrens" min="0" value="0" onchange="calculateAmount()">
          </div>
      
          <div class="form-group" style="display: flex;" style="margin-bottom: 20px;">
            <label style="width: 130px;" for="travelclass" style="padding-right: 20px;">Travel Class</label>
            <select required="" style="margin-bottom: 10px;"  class="form-control" name="travelclass" id="class" onchange="calculateAmount()">
              <option value="">-Select form-</option>
              <option value="Economy Class">Economy Class</option>
              <option value="Premium Economy">Premium Economy</option>
              <option value="Business Class">Business Class</option>
              <option value="First Class">First Class</option>
      
          </select>
          </div>

          
          <div class="form-group" style="display: flex;" style="margin-bottom: 20px;">
            <label style="width: 130px;" for="departuredate" style="padding-right: 20px;">Departure On</label>
            <input required="" type="date" class="form-control" style="margin-bottom: 10px;" name="departuredate">
        
          </div>

          {{-- <div class="form-group" style="display: flex;" style="margin-bottom: 20px;">
            <label style="width: 130px;" for="departuredate" style="padding-right: 20px;">Time</label>
            <input required="" type="time" class="form-control" style="margin-bottom: 10px;" name="time">
        
          </div> --}}
      
          <div class="form-group" style="display: flex;" style="margin-bottom: 20px;">
            <label style="width: 130px;" for="journeytype" style="padding-right: 20px; padding-top: 10px;">Journeytype</label>
            <select required="" style="margin-bottom: 10px;"  class="form-control" name="journeytype" id="journeytype">
              <option value="">-Select form-</option>
              <option value="One Way">One Way</option>
          </select>
          </div>
          <div class="form-group" style="display: flex;" style="margin-bottom: 20px;">
            <label style="width: 130px;" style="padding-right: 20px;" id="amount">Total Amount</label>
            <input required="" type="hidden" class="form-control"id="amountInput" name="amount" readonly>
         
          </div>

         
        <button type="submit" id="submit" id="reg-submit" class="btn btn-info" value="Book Now">Book Now</button>
        </form>
      </div>
      </div>

    </div>
    
 

  <script>
        function calculateAmount() {
            var baseAdultPrice = 5900; // Base price per adult
            var baseChildPrice = 1550; // Base price per child
            var numAdults = parseInt(document.getElementById("adults").value);
            var numChildren = parseInt(document.getElementById("childrens").value);
            var flightClass = document.getElementById("class").value;
            var classMultiplier = 1; // Default multiplier for Economy class

            // Adjust class multiplier based on selected flight class
            if (flightClass === "Premium Economy") {
                classMultiplier = 1.2;
            } else if (flightClass === "Business Class") {
                classMultiplier = 1.5;
            } else if (flightClass === "First Class") {
                classMultiplier = 2;
            }

            var amount = (baseAdultPrice * numAdults + baseChildPrice * numChildren) * classMultiplier;

            document.getElementById("amount").innerHTML = "Total Amount: ₹" + amount.toFixed(2);
            document.getElementById("amountInput").value = amount.toFixed(2);
        }



        const submitButton = document.getElementById('submit');
        submitButton.addEventListener('click', function(){
          alert('Your Booking Successfully');
        });
    </script>

</body>
</html>