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
  <li><a href="Accept_Reject_Leave.php">Accept / Reject Leave</a></li>
  <li><a class="active" href="Total_Records.php">Total Attendance / Leave</a></li>
  <li><a href="Update_Delete_Accounts.php">Update / Delete Accounts</a></li>
  <li style="float:right"><a href="logout.php?redirect=index.php">Logout</a></li>
</ul>

    
<br>
<div class="login-box" style="width:80%; margin-top:10%;">
<form method="post">
  <div class="appName" ><h1> L.A.R.S </h1><br><br>
<h2>Total Leaves</h2>

  <style>
  .row {
    display: flex;
    margin-left:-5px;
    margin-right:-5px;
    padding:5px;
  }
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
  .overlay {
  position: fixed;
  top: 200px;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
  </style>
<?php
require_once 'getRecords.php';
?>



</form>
</div>
</div>
</body>
</html>


