<?php
session_start();

?>
<!DOCTYPE html>
<html>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background: url('View/img/mont-blanc.jpeg') no-repeat center center fixed;
  background-size: cover;
  color: white;
  margin: 0;
}
* {
  box-sizing: border-box
}

h2 {
  display: flex;
  justify-content: center;
  margin-top: 2px;
}


input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
  border-radius: 10px;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}


button {
  background-color: rgba(0,0,0,0.50);
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  cursor: pointer;
  font-size:18px;
  opacity: 0.9;
  border-radius: 15px;
  border-color: white;
}

button:hover {
  opacity:1;
  background-color: #4B9CD3;}


.cancelbtn {
  padding: 14px 20px;
  background-color: rgba(0,0,0,0.50);
}


.cancelbtn, .signupbtn {
  float: none;
  width: 48%;
  margin: 0px 1px;
}

.cancelbtn a {
  text-decoration: none;
  color: white;
}


.container {
  padding: 16px;
  width: 35%;
  margin: 4% 0% 10% 10%;
  background-color: rgba(0,0,0,0.50);
  border-radius: 10%;}


.clearfix::after {
  content: "";
  clear: both;
  display: table;
}


@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <script>
function validateForm() {
  let x = document.forms["myForm"]["Username"].value;
  let y = document.forms["myForm"]["psw"].value;
  let z = document.forms["myForm"]["psw-repet"].value;

  if (x == "") {
    alert("Name must be filled out");
    return false;
  }

  if (y == "") {
    alert("password must be filled out");
    return false;
  }
  if (z == "") {
    alert("password must be filled out");
    return false;
  }
  if(y.length <= 8){
    alert("password must be 8 charchter or more");
    return false;
  }
 

}
</script>
</head>
<body>

<form action="include/authentication.php"   method="post" style="border:1px solid #ccc;" class="container">
    <h2>Sign Up</h2>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="Username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="Username" required  >
    <?php if(isset($_SESSION["err0"])){if($_SESSION["err0"] == TRUE){
      echo    "<font color='red'>". $_SESSION["error0"] . "</font>" ;
      echo "<br>";
      
      $_SESSION["err0"] = FALSE;
    }} ?>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required >
    <?php if(isset($_SESSION["err"])){if($_SESSION["err"] == TRUE){
      echo    "<font color='red'>".$_SESSION["error"]. "</font>" ;
      echo "<br>";
      
      $_SESSION["err"] = FALSE;
    }} ?>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required >
    <?php if(isset($_SESSION["err2"])){if($_SESSION["err2"] == TRUE){
      echo     "<font color='red'>". $_SESSION["error2"] . "</font>" ;
      $_SESSION["err2"] = FALSE;
    }} ?>
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn"><a href="Log-in.php">Log-in</a></button>
      <button type="submit" class="signupbtn" value="Submit">Sign Up</button>
    </div>
</form>

</body>
</html>
