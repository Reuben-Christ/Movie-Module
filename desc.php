<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
</head>
<style>
.book {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin-left:49vw;
  margin-top:-3.5vw;
  cursor: pointer;
  background-color: #4CAF50;
}
</style>
<body>
<?php
include"header.php";
?>
<div style="color:red; font-size:1.4vw;">
  <marquee>30% off on snacks if payment done via paytm. Buy 2 popcorns, get 1 large coke free. Buy 1 large chicken hotdog, get one chicken popcorn at 10% off!!!. Buy margeritta pizza at 89/- only!!!</marquee>
  </div>
<div class="w3-container" style="margin-top: 2vw;height:20vw;width:40vw;margin-left:1.5vw;">
  <img src="images/spider.jpg" class="w3-border" style="padding:4px;width:50%">
</div>
<div style="margin-left:22vw;margin-top:-22vw;">
<h1 style="font-size: 3vw;">Description of movie:-</h1>
<p style="font-size: 1.2vw;">For the first time in the cinematic history of Spider-Man, our friendly neighborhood hero is unmasked and no longer able to separate his normal life from the high-stakes of being a Super Hero.
    When he asks for help from Doctor Strange the stakes become even more dangerous, forcing him to discover what it truly means to be Spider-Man.</p>
 <h1 style="font-size:3vw;margin-top:-2vw;">Trailer:-</h1>
     <iframe width="400vw" height="200vw" src="https://www.youtube.com/embed/JfVOs4VSpmA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<button class="book" onclick="window.location.href = 'date.php'">Book Now</button>
<?php
include"footer.php";
?>
</body>
</html>
