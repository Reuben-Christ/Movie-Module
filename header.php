<html>
 <link rel="stylesheet" type="text/css" href="style1.css"> 
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}
function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

function openForm1() {
  document.getElementById("myForm1").style.display = "block";
}
function closeForm1() {
  document.getElementById("myForm1").style.display = "none";
}
</script>
<style>
 button:hover {
  background-color:red;
  color: white;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
a:hover
{
  color:red; 
}
</style>

<body>
  <div style="width:100vw;height:8.3vw; margin-top:-1vw;margin-left:-1vw;background-color:#000000;">
  	<a href="index.php"><img class="logoimg" src="images/logo.png"></img></a>
  	<p class="name"><font color:black;></font></p>

    <div class="s_header_btn">
  	<a onclick="openForm1()" class="buttons" style="margin-left: 74vw;">SignUp</a>
<div class="s_form-popup" id="myForm1">
        <form action="signup.php" class="s_form-container" method="POST">
        <button type="button" class="cancel" onclick="closeForm1()">X</button>
        <h2>Sign up</h2>
        <input type="text" placeholder="Name" name="name" id="name"required>
        <input type="text" placeholder="Enter Phone Number" name="phno" id="phno" required>
        <input type="text" placeholder="Address" name="add" id="add" required>
        <input type="email" placeholder="Enter Email" name="email1" id="email1" required >
        <input type="password" placeholder="Enter Password" name="psw1" id="psw1" required>
        <button type="submit" id="submit" name="submit">Submit</button>
        </form>
        </div>
    </div>

<div class="header_btn">
  	<a onclick="openForm()" class="buttons" style="margin-left:90vw;">Login</a>
    <div class="form-popup" id="myForm">
            <form action="check.php" class="form-container" method="POST">
            <button type="button" class="cancel" onclick="closeForm()">X</button>
            <h2>Login</h2>

            <input type="email" placeholder="Enter Email" name="email" id="email" required>
            <br>
            <input type="password" placeholder="Enter Password" name="pass" id="pass" required>

            <button type="submit" name="submit" id="submit">Submit</button><br>
            <br><br><br><p style="margin-left:15vw;"><a href="forgot.php">Forgot password?</a></p>
            </form>
        </div>
</div>
  	<a href="about.php" style="margin-left: 42vw;" class="buttons">About</a>
    <a href="connect.php" style="margin-left: 58vw;" class="buttons">Connect</a>
  	<a href="index.php" style="margin-left: 26vw;" class="buttons">Home</a>
    </div>
  </body>
  </html>
