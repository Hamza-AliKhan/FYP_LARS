<?php
session_start();
?>

<!DOCTYPE html>

<html lang="en">
    <head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
        
    <title>L.A.R.S</title>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    
    <link rel="stylesheet" href="css/theme.css"/>
    <link rel="stylesheet" href="css/nav.css"/>

</head>

<body>
<ul class="navbar" style="z-index:1;">
  <li style="float:left"><a class="active" href="index.php">Home</a></li>
  <?php
  if(!empty($_SESSION['newsession'])){
  echo file_get_contents('logut_btn.php');
  }
  ?>

</ul>
  <?php 
if(!empty($_SESSION['login_error_msg']))
{
    //display the error message
    echo $_SESSION['login_error_msg'];

    unset($_SESSION['login_error_msg']);
}

?>

    <div class="appName"><h1 style="color:white; text-align: center;"> L.A.R.S </h1></div>
    
    <br>


<div class="login-box">
  <h2>Login</h2>
  <form action="login_page.php" method="post">
    <div class="user-box">
      <input type="text" name="uname" required>
      <label for="uname"><b>Username</b></label>
    </div>
    <div class="user-box">
      <input type="password" name="psw" required>
      <label for="psw"><b>Password</b></label>
    </div>
  <a>
    <button style="background-color: transparent; color: white; border: none;" class="button" type="submit">
    <span></span>
      <span></span>
      <span></span>
      <span></span>Login</button>
  </a>
</form>
</div>
<?php
include 'footer.php';
?>