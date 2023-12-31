<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
<?php if(!(isset($_SESSION["user_id"]))){
      header("Location:Log-in.php ");
}
?>

<h1>you are logged in</h1>
  
</body>
</html>