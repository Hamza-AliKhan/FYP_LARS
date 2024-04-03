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
include 'check.php';
include 'checkTypeAD.php';
?>

<ul class="navbar">
  <li style="float:left"><a href="index.php">Home</a></li>
  <li><a class="active" href="adminPage.php">Admin</a></li>
  <li><a href="admin/RegisterNew.php">Register New Employee</a></li>
  <li><a href="admin/Accept_Reject_Leave.php">Accept / Reject Leave</a></li>
  <li><a href="admin/Total_Records.php">Total Attendance / Leave</a></li>
  <li><a href="admin/Update_Delete_Records.php">Update / Delete Records</a></li>
  <li style="float:right"><a href="logout.php?redirect=index.php">Logout</a></li>
</ul>
    
<br>

  <div class="login-box" style="width:800px;">
    <div class="appName" ><h1> L.A.R.S </h1><br><br>
    <h2>Admin Page</h2>
    <h2>
        <form>
        <table>
        <tr>
        <td><a href="admin\RegisterNew.php">Register New Employee</a></td>
        <td><a href="admin\Accept_Reject_Leave.php">Accept / Reject Leave</a></td>
        </tr>
        <tr>
        <td><a href="admin\Total_Records.php">Total Attendance / Leave</a></td>       
        <td><a href="admin\Update_Delete_Records.php">Update / Delete Records</a></td>
        </tr>    
    </table>
     
    <br><br>
    </h2>
  </form>
</div>
</div>

<?php
include_once'footer.php';
?>
