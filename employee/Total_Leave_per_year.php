<?php
session_start();
$id =  $_SESSION['newsession'];
?>
<?php
include_once'header.php';
?>
<body>
<?php
require_once '../check.php';
require_once '../checkTypeEMP.php';
?>
<?php 
if(!empty($_SESSION['login_error_msg']))
{
    //display the error message
    echo $_SESSION['login_error_msg'];

    unset($_SESSION['login_error_msg']);
}


?>
<ul class="navbar" style="z-index:1;">
  <li style="float:left"><a href="..\index.php">Home</a></li>
  <li><a href="..\employeePage.php">Employee</a></li>
  <li><a href="Time_in_out.php">Time IN / OUT</a></li>
  <li><a href="Leaveapplication.php">Apply Leave Application</a></li>
  <li><a class="active" href="Total_Leave_per_year.php">Total Number of Leaves Per Year</a></li>
  <li><a href="Update_Profile.php">Update Profile</a></li>
  <li style="float:right"><a href="logout.php?redirect=index.php">Logout</a></li>
</ul>
    <style>
      table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
  }
  th{
    text-align: center;
    padding: 16px;
    border: 1px solid #ddd;
  }
  td {
    text-align: center;
    padding: 16px;
  }
  tr:nth-child(even) {
    background-color: none;
  }
    </style>

  <div class="login-box" style="width:auto; margin-top:150px">
    <div class="appName" ><h1> L.A.R.S </h1><br><br>
    <h2>Total Number of Attendance / Leaves Per Year</h2>
    
    <h2 style="margin-top:50px;">Total Attendance</h2>
  <div class="row">
    
    <table>
      <thead>
<tr>
<th><strong>Username</strong></th>
<th><strong>Jan</strong></th>
<th><strong>Feb</strong></th>
<th><strong>Mar</strong></th>
<th><strong>Apr</strong></th>
<th><strong>May</strong></th>
<th><strong>Jun</strong></th>
<th><strong>July</strong></th>
<th><strong>Aug</strong></th>
<th><strong>Sep</strong></th>
<th><strong>Oct</strong></th>
<th><strong>Nov</strong></th>
<th><strong>Dec</strong></th>

</tr>
</thead>
<tbody>
<tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "lars_database");
$sel_query="SELECT DISTINCT username FROM attendance  WHERE Attendance='Present' AND username='$id'";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<td align="center"><?php $username = $row["username"]; echo $username; ?></td>
      
      <?php        
      $tmpMonth=1;
      $sqql = "SELECT COUNT(*) FROM `attendance` WHERE `username`= '$username' AND `month`='$tmpMonth'";
      $count = $conn->query($sqql);
      $f_userData = $count->fetch_array(); ?>
      <td><?php print_r($f_userData["COUNT(*)"]); ?></td>
      
      <?php        
      $tmpMonth=2;
      $sqql = "SELECT COUNT(*) FROM `attendance` WHERE `username`= '$username' AND `month`='$tmpMonth'";
      $count = $conn->query($sqql);
      $f_userData = $count->fetch_array(); ?>
      <td><?php print_r($f_userData["COUNT(*)"]); ?></td>

      <?php        
      $tmpMonth=3;
      $sqql = "SELECT COUNT(*) FROM `attendance` WHERE `username`= '$username' AND `month`='$tmpMonth'";
      $count = $conn->query($sqql);
      $f_userData = $count->fetch_array(); ?>
      <td><?php print_r($f_userData["COUNT(*)"]); ?></td>

      <?php        
      $tmpMonth=4;
      $sqql = "SELECT COUNT(*) FROM `attendance` WHERE `username`= '$username' AND `month`='$tmpMonth'";
      $count = $conn->query($sqql);
      $f_userData = $count->fetch_array(); ?>
      <td><?php print_r($f_userData["COUNT(*)"]); ?></td>

      <?php        
      $tmpMonth=5;
      $sqql = "SELECT COUNT(*) FROM `attendance` WHERE `username`= '$username' AND `month`='$tmpMonth'";
      $count = $conn->query($sqql);
      $f_userData = $count->fetch_array(); ?>
      <td><?php print_r($f_userData["COUNT(*)"]); ?></td>

      <?php        
      $tmpMonth=6;
      $sqql = "SELECT COUNT(*) FROM `attendance` WHERE `username`= '$username' AND `month`='$tmpMonth'";
      $count = $conn->query($sqql);
      $f_userData = $count->fetch_array(); ?>
      <td><?php print_r($f_userData["COUNT(*)"]); ?></td>

      <?php        
      $tmpMonth=7;
      $sqql = "SELECT COUNT(*) FROM `attendance` WHERE `username`= '$username' AND `month`='$tmpMonth'";
      $count = $conn->query($sqql);
      $f_userData = $count->fetch_array(); ?>
      <td><?php print_r($f_userData["COUNT(*)"]); ?></td>

      <?php        
      $tmpMonth=8;
      $sqql = "SELECT COUNT(*) FROM `attendance` WHERE `username`= '$username' AND `month`='$tmpMonth'";
      $count = $conn->query($sqql);
      $f_userData = $count->fetch_array(); ?>
      <td><?php print_r($f_userData["COUNT(*)"]); ?></td>

      <?php        
      $tmpMonth=9;
      $sqql = "SELECT COUNT(*) FROM `attendance` WHERE `username`= '$username' AND `month`='$tmpMonth'";
      $count = $conn->query($sqql);
      $f_userData = $count->fetch_array(); ?>
      <td><?php print_r($f_userData["COUNT(*)"]); ?></td>

      <?php        
      $tmpMonth=10;
      $sqql = "SELECT COUNT(*) FROM `attendance` WHERE `username`= '$username' AND `month`='$tmpMonth'";
      $count = $conn->query($sqql);
      $f_userData = $count->fetch_array(); ?>
      <td><?php print_r($f_userData["COUNT(*)"]); ?></td>

      <?php        
      $tmpMonth=11;
      $sqql = "SELECT COUNT(*) FROM `attendance` WHERE `username`= '$username' AND `month`='$tmpMonth'";
      $count = $conn->query($sqql);
      $f_userData = $count->fetch_array(); ?>
      <td><?php print_r($f_userData["COUNT(*)"]); ?></td>

      <?php        
      $tmpMonth=12;
      $sqql = "SELECT COUNT(*) FROM `attendance` WHERE `username`= '$username' AND `month`='$tmpMonth'";
      $count = $conn->query($sqql);
      $f_userData = $count->fetch_array(); ?>
      <td><?php print_r($f_userData["COUNT(*)"]); ?></td>

      

            
       
      
      


</tr>
<?php
}
?>

      
<?php
    function getMonth($tmpDate) {
        $count1=1;
        $date = DateTime::createFromFormat("Y-m-d", $tmpDate);
        return $date->format("m");
    }

    function getDay($tmpDate) {
        
      $now = time(); // or your date as well
      $your_date = strtotime($tmpDate);
      $datediff = $now - $your_date;

      echo round($datediff / (60 * 60 * 24));
      
    }
?>




</tbody>
    </table>    
  <h2 style="margin-top:50px;">Total Leaves</h2>
  <h5>Max Earned Leaves Per Year = 48 days</h5>
    <h5>Max Casual Leaves Per Year = 20 days</h5>
    <h5>Max Leaves Per Year = 68 days</h5>
  <div class="row">
    
    <table>
      <thead>
<tr>
<th><strong>Username</strong></th>
<th><strong>Jan</strong></th>
<th><strong>Feb</strong></th>
<th><strong>Mar</strong></th>
<th><strong>Apr</strong></th>
<th><strong>May</strong></th>
<th><strong>Jun</strong></th>
<th><strong>July</strong></th>
<th><strong>Aug</strong></th>
<th><strong>Sep</strong></th>
<th><strong>Oct</strong></th>
<th><strong>Nov</strong></th>
<th><strong>Dec</strong></th>
</th>
</tr>
</thead>
<tbody>
<tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "lars_database");
$ssel_query="SELECT DISTINCT username FROM leaveapplications WHERE status='Accepted' AND username='$id'";
$lresult = mysqli_query($conn,$ssel_query);
while($row = mysqli_fetch_assoc($lresult)) { ?>
<td align="center"><?php $username = $row["username"]; echo $username; ?></td>
      
      <?php        
      $tmpMonth=1;
      $query = "SELECT SUM(days) AS TotalDays FROM leaveapplications WHERE username='$username' AND status ='Accepted' AND month = '$tmpMonth';";       
                // Connection to table and query execution on table
                $q_user = $conn->query($query) or die(mysqli_error());
                $row = mysqli_fetch_assoc($q_user); 
                $sum = $row['TotalDays'];
      ?><td><?php print_r($sum); ?></td>
      
      <?php        
      $tmpMonth=2;
      $query = "SELECT SUM(days) AS TotalDays FROM leaveapplications WHERE username='$username' AND status ='Accepted' AND month = '$tmpMonth';";       
                // Connection to table and query execution on table
                $q_user = $conn->query($query) or die(mysqli_error());
                $row = mysqli_fetch_assoc($q_user); 
                $sum = $row['TotalDays'];
      ?><td><?php print_r($sum); ?></td>

      <?php        
      $tmpMonth=3;
      $query = "SELECT SUM(days) AS TotalDays FROM leaveapplications WHERE username='$username' AND status ='Accepted' AND month = '$tmpMonth';";       
                // Connection to table and query execution on table
                $q_user = $conn->query($query) or die(mysqli_error());
                $row = mysqli_fetch_assoc($q_user); 
                $sum = $row['TotalDays'];
      ?><td><?php print_r($sum); ?></td>

      <?php        
      $tmpMonth=4;
      $query = "SELECT SUM(days) AS TotalDays FROM leaveapplications WHERE username='$username' AND status ='Accepted' AND month = '$tmpMonth';";       
                // Connection to table and query execution on table
                $q_user = $conn->query($query) or die(mysqli_error());
                $row = mysqli_fetch_assoc($q_user); 
                $sum = $row['TotalDays'];
      ?><td><?php print_r($sum); ?></td>

      <?php        
      $tmpMonth=5;
      $query = "SELECT SUM(days) AS TotalDays FROM leaveapplications WHERE username='$username' AND status ='Accepted' AND month = '$tmpMonth';";       
                // Connection to table and query execution on table
                $q_user = $conn->query($query) or die(mysqli_error());
                $row = mysqli_fetch_assoc($q_user); 
                $sum = $row['TotalDays'];
      ?><td><?php print_r($sum); ?></td>

      <?php        
      $tmpMonth=6;
      $query = "SELECT SUM(days) AS TotalDays FROM leaveapplications WHERE username='$username' AND status ='Accepted' AND month = '$tmpMonth';";       
                // Connection to table and query execution on table
                $q_user = $conn->query($query) or die(mysqli_error());
                $row = mysqli_fetch_assoc($q_user); 
                $sum = $row['TotalDays'];
      ?><td><?php print_r($sum); ?></td>

      <?php        
      $tmpMonth=7;
      $query = "SELECT SUM(days) AS TotalDays FROM leaveapplications WHERE username='$username' AND status ='Accepted' AND month = '$tmpMonth';";     
                // Connection to table and query execution on table
                $q_user = $conn->query($query) or die(mysqli_error());
                $row = mysqli_fetch_assoc($q_user); 
                $sum = $row['TotalDays'];
      ?><td><?php print_r($sum); ?></td>

      <?php        
      $tmpMonth=8;
      $query = "SELECT SUM(days) AS TotalDays FROM leaveapplications WHERE username='$username' AND status ='Accepted' AND month = '$tmpMonth';";       
                // Connection to table and query execution on table
                $q_user = $conn->query($query) or die(mysqli_error());
                $row = mysqli_fetch_assoc($q_user); 
                $sum = $row['TotalDays'];
      ?><td><?php print_r($sum); ?></td>

      <?php        
      $tmpMonth=9;
      $query = "SELECT SUM(days) AS TotalDays FROM leaveapplications WHERE username='$username' AND status ='Accepted' AND month = '$tmpMonth';";       
                // Connection to table and query execution on table
                $q_user = $conn->query($query) or die(mysqli_error());
                $row = mysqli_fetch_assoc($q_user); 
                $sum = $row['TotalDays'];
      ?><td><?php print_r($sum); ?></td>

      <?php        
      $tmpMonth=10;
      $query = "SELECT SUM(days) AS TotalDays FROM leaveapplications WHERE username='$username' AND status ='Accepted' AND month = '$tmpMonth';";       
                // Connection to table and query execution on table
                $q_user = $conn->query($query) or die(mysqli_error());
                $row = mysqli_fetch_assoc($q_user); 
                $sum = $row['TotalDays'];
      ?><td><?php print_r($sum); ?></td>

      <?php        
      $tmpMonth=11;
      $query = "SELECT SUM(days) AS TotalDays FROM leaveapplications WHERE username='$username' AND status ='Accepted' AND month = '$tmpMonth';";       
                // Connection to table and query execution on table
                $q_user = $conn->query($query) or die(mysqli_error());
                $row = mysqli_fetch_assoc($q_user); 
                $sum = $row['TotalDays'];
      ?><td><?php print_r($sum); ?></td>

      <?php        
      $tmpMonth=12;
      $query = "SELECT SUM(days) AS TotalDays FROM leaveapplications WHERE username='$username' AND status ='Accepted' AND month = '$tmpMonth';";       
                // Connection to table and query execution on table
                $q_user = $conn->query($query) or die(mysqli_error());
                $row = mysqli_fetch_assoc($q_user); 
                $sum = $row['TotalDays'];
      ?><td><?php print_r($sum); ?></td>

       

            
       
      
      


</tr>
<?php
}
?>

      




</tbody>
    </table>
  </div>
</div>
</body>
</html>