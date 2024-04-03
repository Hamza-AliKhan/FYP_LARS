<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">
    <head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
        
    <title>L.A.R.S</title>
    <script src="js/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/theme.css"/>
    <link rel="stylesheet" href="css/nav.css"/>   
</head>

<body>
<?php
require_once 'check.php';
require_once 'checkTypeEMP.php';
?>

<ul class="navbar" style="z-index:1;">
  <li style="float:left"><a href="index.php">Home</a></li>
  <li><a class="active" href="employeePage.php">Employee</a></li>
  <li><a href="employee\Time_in_out.php">Time IN / OUT</a></li>
  <li><a href="employee\Leaveapplication.php">Apply Leave Application</a></li>
  <li><a href="employee\Total_Leave_per_year.php">Total Number of Leaves Per Year</a></li>
  <li><a href="employee\Update_Profile.php">Update Profile</a></li>
  <li style="float:right"><a href="logout.php?redirect=index.php">Logout</a></li>
</ul>
    

  <div class="login-box" style="width:60%;">
    <div class="appName" ><h1> L.A.R.S </h1><br><br>
    <h2>Employee Page</h2>
    <h2>
        <form>
        <table>
        <tr>
        <td><a href="employee\Time_in_out.php">Time IN / OUT</a></td>
        <td><a href="employee\Leaveapplication.php">Apply Leave Application</a></td>
        </tr>
        <tr>
        <td><a href="employee\Total_Leave_per_year.php">Total Number of Leaves Per Year</a></td>       
        <td><a href="employee\Update_Profile.php">Update Profile</a></td>
        </tr>    
    </table>
     
    <br><br>
    </h2>
  </form>
</div>
</div>
<?php
include 'footer.php';
?>
