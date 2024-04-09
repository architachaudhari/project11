<!DOCTYPE html>
<html lang="en">
<title>JioKing</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="trail.css">
<link rel="stylesheet" href="example.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
</style>
<body>

<!-- Navbar -->
<!--https://www.w3schools.com/w3css/4/w3.css-->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-right-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-white"><i class="fa fa-home" style="font-size:24px"></i> Home</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"><i class="fa fa-money" style="font-size: 24px"></i> Recharge</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"><i class="fa fa-credit-card" style="font-size:24px"></i> Pay Bills</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"><i class="fa fa-handshake-o" style="font-size:24px"></i> New Connection</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"><i class="fa fa-tablet" style="font-size:24px"></i> Devices</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"><i class="fa fa-universal-access" style="font-size:24px"></i> Customer Care</a>
    <div class= "topnav-right">
            <a href="#" class=" w3-button w3-hide-small w3-padding-large w3-hover-white"><i class="fa fa-user-circle" style="font-size:24px"></i> My Account</a>
        
    </div>
    
  </div>
  
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Recharge</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Pay Bills</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">New Connection</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Devices</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Customer Care</a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:100px 2px 2px 2px">
  

<div class="slideshow-container">

  <div class="mySlides fade">
    <img src="image.png" style="width:100%">
  </div>

  <div class="mySlides fade">
    <img src="IMG_20190313_231251.jpg" style="width:100%">
  </div>

  <div class="mySlides fade">
    <img src="IMG_20190313_234425.jpg" style="width:100%">
  </div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div> 
</header>

<!--<div class="w3-row-padding w3-red w3-container">-->
  <div class="w3-container w3-red w3-center" style="float: right; width: 100%; padding: 0px 0px 20px 0px">
    <div class="w3-content"style="float:centre">
      <div class="row1"style="float:left" >
        <div class="column1" style="padding :0px 320px 0px 0px;">
          <img src="bsnl_ftt.png" width="300" height="300">
        </div>
        <div class="column1"style="padding : 0px 320px 0px 0px">
          <img src="offers.png"  width="300" height="300">
        </div> 
        <div class="column1"style="padding : 0px 320px 0px 0px">
          <img src="dongle.jpg"  width="300" height="300">
        </div> 
 
      </div>      
    </div>
</div>

<!-- First Grid -->
<div class="w3-row-padding  w3-container">
  <div class="w3-content">
    <div class="w3-twothird w3-padding-64">
      <p class="w3-padding-12" style="font-size:20px">Great Network: Experience the network designed to give you great speeds</p>
      <p class="w3-padding-12" style="font-size:20px">Customized offers:We offer tailor made products with My Best Offers and promise more value on every recharge</p>
      <p class="w3-padding-12" style="font-size:20px">Data Carry Forward: We know you don't like to lose out on balance data at the end of the month</p>
      <p class="w3-padding-12" style="font-size:20px">Wi-Fi Access:With JioKing you could also enjoy seamless high speed</p>
    </div>

    <div class="w3-third w3-center">
      <p class="w3-text-red" style="font-size: 75px">Why JioKing?</p>
    </div>
  </div>
</div>

<!-- Second Grid -->


<!--<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">Quote of the day: live life</h1>
</div>-->

<footer>
<div class="row">
  <div class="column w3-black w3-opacity"> 
    <h3>About Us</h3>
    <a href="#" class="w3-bar-item ">Company</a><br>
    <a href="#" class="w3-bar-item ">HRD</a><br>
    <a href="#" class="w3-bar-item ">Finance</a><br>
    <a href="#" class="w3-bar-item ">RTI</a><br>
    <a href="#" class="w3-bar-item ">Gallery</a><br>
  </div>
  <div class="column w3-black w3-opacity">
    <h3>Service</h3>
    <a href="#" class="w3-bar-item ">Landline</a><br>
    <a href="#" class="w3-bar-item ">Broadband</a><br>
    <a href="#" class="w3-bar-item ">Moblie</a><br>
    <a href="#" class="w3-bar-item ">Enterprise Service</a><br>
    <a href="#" class="w3-bar-item ">Bussiness Oppurtunities</a><br>
    <a href="#" class="w3-bar-item ">Download Forms</a>
  </div>
  <div class="column w3-black w3-opacity">
    <h3>Help & Support</h3>
    <a href="#" class="w3-bar-item ">Contact Us</a><br>
    <a href="#" class="w3-bar-item ">FAQs</a><br>
    <a href="#" class="w3-bar-item ">Network TroubleShooting</a>
  </div>
  <div class="column w3-black w3-opacity">
    <h3>Connect us with</h3>
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  </div>
</div>
</footer>
<!-- Footer 
<footer class="w3-container w3-padding-64 w3-right-align w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>
</footer>-->

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>

</body>
</html>



</html>