<html>
<head>
	<link rel="stylesheet" type="text/css" href="style1.css"> 
	</head>
	<script>
 function imgWindow() {
  window.open("date.php") }
</script>
<?php
include 'header.php';
?>
<!--     Header over on top -->
<div style="color:red; font-size:1.4vw;">
  <marquee>30% off on snacks if payment done via paytm. Buy 2 popcorns, get 1 large coke free. Buy 1 large chicken hotdog, get one chicken popcorn at 10% off!!!. Buy margeritta pizza at 89/- only!!!</marquee>
  </div>
<br>
    <div class="content">
    <p align="center" style="margin-left: -1vw; margin-top: -1vw;">
    <div class="slideshow-container">
<div class="mySlides">
  <img src="images/jm.jpg">
</div>

<div class="mySlides">
  <img src="images/k.jpg">
</div>

<div class="mySlides">
  <img src="images/s.jpg">
</div>

<div class="mySlides">
  <img src="images/b.jpg">
</div>

<div class="mySlides">
  <img src="images/ka.jpg">
</div>

<div class="mySlides">
  <img src="images/r.jpg">
</div>

<div class="mySlides">
  <img src="images/sh.jpg">
</div>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>

</div>
</p>
</div>

<center><h1 style="margin-top: 41vw; font-size:3vw;">Also Showing:-</h1></center>
<ul class="cards">
  <li>
    <a href="date.php" class="card">
      <img src="images/spider.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <img class="card__thumb" src="images/logo.png" title="Click here to book now!!!" onclick="imgWindow()" />
          <div class="card__header-text">
            <h3 class="card__title">Spider man no way home</h3>            
            <span class="card__status">3 hour</span>
          </div>
        </div>
        <p class="card__description">Our friendly neighborhood hero is unmasked and no longer able to separate his normal life from the high-stakes of being a Super Hero.</p>
      </div>
    </a>      
  </li>
  <li>
    <a href="" class="card">
      <img src="images/godzilla.jpg" class="card__image" alt="" />
      <div class="card__overlay">        
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
          <img class="card__thumb" src="images/logo.png" title="Click here to book now!!!" />
          <div class="card__header-text">
            <h3 class="card__title">Godzilla vs Kong</h3>
            <span class="card__status">2 hours </span>
          </div>
        </div>
        <p class="card__description">Kong is on a journey to find his true home but gets in the way of an enraged Godzilla.</p>
      </div>
    </a>
  </li>
  <li>
    <a href="" class="card">
      <img src="images/nobody.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <img class="card__thumb" src="images/logo.png" title="Click here to book now!!!" />
          <div class="card__header-text">
            <h3 class="card__title">Nobody</h3>          
            <span class="card__status">2 hours</span>
          </div>
        </div>
        <p class="card__description">Sometimes the man you don`t notice is the most dangerous of all.</p>
      </div>
    </a>
  </li>
  <li>
    <a href="" class="card">
      <img src="images/antim.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
          <img class="card__thumb" src="images/logo.png" title="Click here to book now!!!" />
          <div class="card__header-text">
            <h3 class="card__title">Antim</h3>
            <span class="card__status">3 hours</span>
          </div>          
        </div>
        <p class="card__description">Rajveer Singh is all set to take on Rahuliya in a fight between right and wrong! Who will win this `Antim` fight?</p>
      </div>
    </a>
  </li>    
</ul>
</body>
<script type="text/javascript">
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
  setTimeout(showSlides, 5000); // Change image every 5 seconds
}
</script>

<style>
.footer{
  background-color:black;
  font-size: 1.3vw;
  width:100vw;
  margin-left:-1vw;
  margin-top:20vw;
  margin-bottom: -1vw;
  height: 5vw;
  text-align:center;
  color:white;
}
  </style>
  <body>
  <?php
  include'footer.php';
  ?>
</body>
</html>
