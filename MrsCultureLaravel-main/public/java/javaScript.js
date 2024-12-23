
// // Function to redirect after 10 seconds
// function redirect() {
//   window.location.href = ""; // Replace with the actual login page URL
//   //here we can replace login.html page to id 
// }

// // Call the redirect function after 10 seconds
// setTimeout(redirect, 5000);








// Start forget password

function msg(){
  // Get the input elements and their values
var password1 = document.getElementById("password1").value;
var password2 = document.getElementById("password2").value;

// Check if the passwords match
if (password1 !== password2) {
  // Display an alert if the passwords do not match
  alert("Passwords do not match. Please try again.");
  
} if(password1=="" && password2==""){
  alert("Please Insert a Valid Input.")
}

if(password1!=="" && password2!==""){
  alert("Remember You Password")
}

}


// End forget password

//start Registration popup you have successfuly registration Know you can login 

function reg(){
  var a = document.getElementById("fullname").value;
var b = document.getElementById("email").value;
var c = document.getElementById("mobile").value;
var d = document.getElementById("pass").value;
var e = document.getElementById("gender").value;
var f = document.getElementById("city").value;


if(a=="" || b=="" || c=="" || d=="" || e==""||f==""){
  alert("Please Insert a Valid Input.")
}
else{
  alert("You are Login successfully Thanks you!");

}


  
}

// End the Registration popup

// Start search bar element show and hide

function myFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("mySearch");
  filter = input.value.toUpperCase();
  ul = document.getElementById("myMenu");
  li = ul.getElementsByTagName("li");
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}


window.onload = function() {
  var myMenu = document.getElementById("myMenu");
  myMenu.style.display = "none";
  
  var mySearch = document.getElementById("mySearch");
  mySearch.onclick = function() {
    myMenu.style.display = "block";
  };
  
  document.onclick = function(event) {
    if (event.target != mySearch) {
      myMenu.style.display = "none";
    }
  };
};

// End search bar element show and hide


/*<!-- this sccript use for pop up login page -->


    
      // Function to redirect after 10 seconds
      function redirect() {
        window.location.href = "login.html"; // Replace with the actual login page URL
      }
  
      // Call the redirect function after 10 seconds
      setTimeout(redirect, 10000);
  */  