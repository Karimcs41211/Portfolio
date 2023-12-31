<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $mysql = require __DIR__  . "/include/config.php";

    $sql = sprintf("SELECT * FROM user
                    WHERE username = '%s'",
                    $mysql->real_escape_string($_POST["Username"])
);
    $result = $mysql->query($sql);

    $user = $result->fetch_assoc();
    if($user){

        if(password_verify($_POST["psw"], $user["password_hash"])){
            session_start();

            $_SESSION["user_id"] = $user["id"];
            header("Location:index.php ");
            exit;
        }}

    //var_dump($user);
    //exit;
}
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
  box-sizing: border-box;
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
  width: 100%;
  opacity: 0.9;
  font-size:18px;
  border-radius: 15px;
  border-color: white;
}


.cancelbtn {
  padding: 14px 20px;
  background-color: rgba(0,0,0,0.50);
}

.cancelbtn a {
  text-decoration: none;
  color: white;
}


.cancelbtn, .signupbtn {
  float: none;
  width: 48%;
  margin: 0px 1px;
}


.container {
  padding: 16px;
  width: 35%;
  margin: 6% 0% 10% 10%;
  background-color: rgba(0,0,0,0.50);
  border-radius: 10%;
}

button:hover {
  opacity:1;
  background-color: #4B9CD3;
}


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
<body>

<form method="post" style="border:1px solid #ccc;" class="container">
  <h2>Login</h2>
  <p>Please fill in this form to create an account.</p>
  <hr>

  <label for="Username"><b>Username</b></label>
  <input type="text" placeholder="Enter Username" name="Username" required >
  

  <label for="psw"><b>Password</b></label>
  <input type="password" placeholder="Enter Password" name="psw">

  <label>
    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
  </label>

  <div class="clearfix">
    <button type="button" class="cancelbtn"><a href="Sign_up.php">Sign up</a></button>
    <button type="submit" class="signupbtn">log in</button>
  </div>
</form>

</body>
</html>

