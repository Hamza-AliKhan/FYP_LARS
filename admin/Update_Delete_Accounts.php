<?php
session_start();
?>
<?php
include'header.php';
?>
<?php 
if(!empty($_SESSION['login_error_msg']))
{
    //display the error message
    echo $_SESSION['login_error_msg'];

    unset($_SESSION['login_error_msg']);
}
?>
<body>
<?php
require_once '../check.php';
require_once '../checkTypeAD.php';
?>
<ul class="navbar" style="z-index:1;">
  <li style="float:left"><a href="../index.php">Home</a></li>
  <li><a href="../adminPage.php">Admin</a></li>
  <li><a href="RegisterNew.php">Register New Employee</a></li>
  <li><a href="Accept_Reject_Leave.php">Accept / Reject Leave</a></li>
  <li><a href="Total_Records.php">Total Attendance / Leave</a></li>
  <li><a class="active" href="Update_Delete_Accounts.php">Update / Delete Accounts</a></li>
  <li style="float:right"><a href="logout.php?redirect=index.php">Logout</a></li>
</ul>

<div class="login-box" style="width:auto">
<div class="appName" ><h1> L.A.R.S </h1><br><br>
<h2>Update / Delete Records</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
  <th><strong>S.No</strong></th>
<th><strong>Username</strong></th>
<th><strong>Account Type</strong></th>
<th><strong>First Name</strong></th>
<th><strong>Last Name</strong></th>
<th><strong>Password</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
require_once 'getData.php';
?>
</tbody>
</table>
</div>
</div>
</body>
</html>