<?php
session_start();

?>
<?php
include'header.php';
?>
<body>
<?php
require_once '../check.php';
require_once '../checkTypeAD.php';
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
  <li style="float:left"><a href="../index.php">Home</a></li>
  <li><a href="../adminPage.php">Admin</a></li>
  <li><a href="RegisterNew.php">Register New Employee</a></li>
  <li><a class="active" href="Accept_Reject_Leave.php">Accept / Reject Leave</a></li>
  <li><a href="Total_Records.php">Total Attendance / Leave</a></li>
  <li><a href="Update_Delete_Records.php">Update / Delete Records</a></li>
  <li style="float:right"><a href="logout.php?redirect=index.php">Logout</a></li>
</ul>



  
<br>

<div class="login-box" style="width:auto; margin-top:250px;">
<form method="post">
<div class="appName" ><h1> L.A.R.S </h1><br><br>
<h2>Accept / Reject Leaves</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
  <th><strong>Leave ID</strong></th>
<th><strong>Username</strong></th>
<th><strong>Type of Leave</strong></th>
<th><strong>Description of Leave</strong></th>
<th><strong>Reason of Leave</strong></th>
<th><strong>From</strong></th>
<th><strong>Till</strong></th>
<th><strong>Status</strong></th>
<th><strong>Leave Count</strong></th>
<th><strong>View</strong></th>
<th><strong>Approve</strong></th>
<th><strong>Reject</strong></th>
</tr>
</thead>
<tbody>
  <style>
  .login-box form a.Rejbutton {
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  color: red;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: .5s;
  margin-top: 40px;
  letter-spacing: 4px
}
.login-box form a.Acceptbutton {
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  color: green;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: .5s;
  margin-top: 40px;
  letter-spacing: 4px
}
  .login-box form a.Rejbutton:hover {
      background: #cc0000;
      color: white;
  border-radius: 5px;
  box-shadow: 0 0 5px #cc0000,
              0 0 20px #fff,
              0 0 40px #fff,
              0 0 80px #cc0000;
    }
    .login-box form a.Acceptbutton:hover {
      background: #00aa00;
      color: white;
  border-radius: 5px;
  box-shadow: 0 0 5px #00aa00,
              0 0 20px #fff,
              0 0 40px #fff,
              0 0 80px #00aa00;
    }
  .login-box form table tr td.ellipsis {
    max-width: 500px;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
}
  </style>
<?php
require_once 'getLeaves.php';
?>
</tbody>
</table>
</form>
</div>
</div>
</body>
</html>