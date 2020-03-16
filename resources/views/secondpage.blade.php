<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
  body{
  margin: 0;                        
  background-image: url(image/giphy.gif);
  background-repeat: no-repeat;
  background-size: cover;
  background-color: black;
  }

  * {box-sizing: border-box;}
  body {font-family: Verdana, sans-serif;}
  .mySlides {display: none;}
  img {vertical-align: middle;}

  /* Slideshow container */
  .slideshow-container {
  max-width: 900px;
  position: relative;
  margin: auto;
  }

  /* Caption text */
  .text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
  }

  /* Number text (1/3 etc) */
  .numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
  }

  /* The dots/bullets/indicators */
  .dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
  }

  .active {
  background-color: #717171;
  }

  /* Fading animation */
  .fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
  }

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

  </style>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark justify-content-center">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="{{ route('NSS_all.Nike') }}">NIKE&nbsp;&nbsp;&nbsp;<img src="{{ asset('logo\nike.png') }}" width="60px"></a>
    </li>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <li class="nav-item">
      <a class="nav-link" href="{{ route('NSS_all.Adidas') }}">ADIDAS&nbsp;&nbsp;&nbsp;<img src="{{ asset('logo\adidas1.png') }}" width="50px"></a>
    </li>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <li class="nav-item">
      <a class="nav-link" href="{{ route('NSS_all.Reebok') }}">REEBOK&nbsp;&nbsp;&nbsp;<img src="{{ asset('logo\reebook.png') }}" width="60px"></a>
    </li>
  </ul>
</nav>
<br>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <a href="{{ url('NSS_all') }}"><img src="{{ asset('image/adidas.jpg') }}" alt="Los Angeles" style="width:100%"></a>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <a href="{{ url('NSS_all') }}"><img src="{{ asset('image/nike.png') }}" alt="Chicago" style="width:100%"></a>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <a href="{{ url('NSS_all') }}"><img src="{{ asset('image/reebok.png') }}" alt="New York" style="width:100%"></a>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
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
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

</body>
</html>
