<html>
 <link rel="stylesheet" type="text/css" href="style1.css"> 
 <style>
      span
        {
            display: block;
            margin-left: 20px;
            color: red;
            font-style: italic;
        }
   </style>
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

function checknm(element){
  let textInput = element.value;
  textInput = textInput.replace(/[^A-Za-z ]*$/gm, ""); 
  element.value = textInput;
}

function checkph(element){
  let textInput = element.value;
  textInput = textInput.replace(/[^0-9]*$/gm, ""); 
  element.value = textInput;
}

function validate(){
        
        var name = document.getElementById('name')
        var email1 = document.getElementById('email1')
        var phno = document.getElementById('phno')
        var psw1 = document.getElementById('psw1')
        var add = document.getElementById('add')
        if(!name.value||!email1.value||!phno.value||!psw1.value||!add.value){
          alert("Fill all fields!");
          return
        }
            //validate
            var nameR = /^[a-zA-Z ]*$/;
            if (!nameR.test(name.value)) {
                alert("Name can contain only alphabets!!")
                return
            }
            var mob = /[0-9]{10,10}/
            if (!mob.test(phno.value)) {
                alert("Mobile Number can be of 10 numbers only!!")
                return
            }
            var emailR = /^\w+([\.-]?\w+)+@(movieshub.in|movieshub.com)$/ 
            if (!emailR.test(email1.value)) {
                alert("Invalid Email-id!! Only official mail-id allowed!!")
                return
            }

            var passR = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[~`!@#$%^_+={}|:"<>,.?])[A-Za-z\d@$!%*?&]{8,}$/
            if (!passR.test(psw1.value)) {
                alert("Password must contain atleast 1 Upper Case, 1 Lower Case, 1 Digit, 1 Special Character and It should be minimum 8 characters!!")
                return
            }
            alert("Registered Successfully")
}
function validatelogin(){
  var email = document.getElementById('email')
        var pass = document.getElementById('pass')

        if (
                email.value ||
                pass.value  ==""
            ) {
                alert("You are  to fill all the fields in this form!!")
                return
            }

        var emailR = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
            if (!emailR.test(email.value)) {
                alert("Invalid Email")
                return
            }

            var passR = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[~`!@#$%^_+={}|:"<>,.?])[A-Za-z\d@$!%*?&]{8,}$/
            if (!passR.test(pass.value)) {
                alert("Password must contain atleast 1 Upper Case, 1 Lower Case, 1 Digit, 1 Special Character and It should be minimum 8 characters.")
                return
            }
            alert("Login Successfull!")
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
        <form action="" class="s_form-container" method="POST" onsubmit="validate()">
        <button type="button" class="cancel" onclick="closeForm1()">X</button>
        <h2>Sign up</h2>
        <input type="text" placeholder="Name" name="name" id="name" oninput="checknm(this)" >
        <span></span>
        <input type="text" placeholder="Enter Phone Number" name="phno" id="phno" oninput="checkph(this)"  >
        <span></span>
        <input type="text" placeholder="Address" name="add" id="add">
        <input type="email" placeholder="Enter Email" name="email1" id="email1"   >
        <input type="password" placeholder="Enter Password" name="psw1" id="psw1"  >
        <button type="submit" id="submit" name="submit">Submit</button>
        </form>
        </div>
    </div>

<div class="header_btn">
  	<a onclick="openForm()" class="buttons" style="margin-left:90vw;">Login</a>
    <div class="form-popup" id="myForm">
            <form action="" class="form-container" method="POST"  onsubmit="validatelogin()">
            <button type="button" class="cancel" onclick="closeForm()">X</button>
            <h2>Login</h2>

            <input type="email" placeholder="Enter Email" name="email" id="email" >
            <br>
            <input type="password" placeholder="Enter Password" name="pass" id="pass" >

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
