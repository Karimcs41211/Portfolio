<?php 
 include 'config.php';
 session_start();
 $_SESSION["err0"] = FALSE;
 $_SESSION["error0"] = "";
 $_SESSION["err"] = FALSE;
 $_SESSION["error"] = "";
 $_SESSION["err2"] = FALSE;
 $_SESSION["error2"] = "";

if(strlen($_POST["psw"]) < 8){
    $_SESSION["err"] = TRUE;
    $_SESSION["error"] = "password must be at 8 characters";
   /* die('<script>alert("password must be at 8 characters")</script> <?php header("Location:../Sign_up.php "); ?>');*/
    header("Location:../Sign_up.php ");
    die();
}

if( ! preg_match("/[a-z]/i",$_POST["psw"])){
    $_SESSION["err"] = TRUE;
    $_SESSION["error"] = "password must have at least one letter ";
    header("Location:../Sign_up.php ");
    die();
}
if( ! preg_match("/[0-9]/i",$_POST["psw"])){
    $_SESSION["err"] = TRUE;
    $_SESSION["error"] = "password must have at least one number ";
    header("Location:../Sign_up.php ");
    die();
}

if($_POST["psw"] != $_POST["psw-repeat"]){
    $_SESSION["err2"] = TRUE;
    $_SESSION["error2"] = "Password must much ";
    header("Location:../Sign_up.php ");
    die("Password must much");
}

$password_hash = password_hash($_POST["psw"], PASSWORD_DEFAULT);

$mysql = require __DIR__  . "/config.php";

$sql = "INSERT INTO user (username, password_hash)
        VALUES ( ?,?)";

$stmt =  $mysql->stmt_init();

if (! $stmt->prepare($sql)){
    die ("SQL error: " . $mysql->error);
}

$stmt->bind_param("ss",
                $_POST["Username"],
                $password_hash
);
try{
if($stmt->execute()){
    $mysql2 = require __DIR__  . "/config.php";

    $sql2 = sprintf("SELECT * FROM user
                    WHERE username = '%s'",
                    $mysql->real_escape_string($_POST["Username"])
);
    $result = $mysql2->query($sql2);

    $user = $result->fetch_assoc();
    session_start();

    $_SESSION["user_id"] = $user["id"];
    header("Location:../index.php ");
}
}catch(Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
    $_SESSION["err0"] = TRUE;
 $_SESSION["error0"] = "name already taken";
    header("Location:../Sign_up.php ");
}
print_r($_POST);

echo "sign up success"

?>