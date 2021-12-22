<html>
<head>
	<link rel="stylesheet" type="text/css" href="style1.css"> 
	</head>
 <?php
include 'header.php';
?>
<body>
	<center>
<div  style="width:60vw;height:40vw; margin-top:2vw;margin-left:3.5vw;background-color:#dbdeca; border:0.3vw double #06390d;">
	<h2 style="font-size: 4vw;">Have Queries?</h2>
	<h2 style=" margin-left:1vw";>Call Us At:- +91 9823080277 / +91 74481 99489 </h2>
	<h2>Email:-movieshub@gmail.com</h2>

	<form action="contact.php" method="POST" class="main" style="width:50vw; margin-left: 2vw; height:23vw; margin-top:1vw;">
		<div class="connect">
		<h1>Drop Queries If Any!</h1><br>
			<input type="text" name="email" id="email" style="width:38vw;height:2vw; margin-top:0vw;" placeholder="Enter your Email-ID">
		<input type="text" name="subject" id="subject" style="width:38vw;height:2vw;" placeholder="Enter the subject"><br>
		<input type="textarea" name="problem" style="width:38vw;height:5vw;"placeholder="Enter the body of the message"><br>
		<input type="submit" name="submit" id="submit" style="margin-left:-5vw;">
		</div>
	</form>

</div>
</center>
	</body>
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
include 'footer.php';
?>
</body>
</html>
