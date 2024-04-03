<?php
session_start();

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
}?>
<ul class="navbar" style="z-index:1;">
  <li style="float:left"><a href="..\index.php">Home</a></li>
  <li><a href="..\employeePage.php">Employee</a></li>
  <li><a class="active" href="Time_in_out.php">Time IN / OUT</a></li>
  <li><a href="Leaveapplication.php">Apply Leave Application</a></li>
  <li><a href="Total_Leave_per_year.php">Total Number of Leaves Per Year</a></li>
  <li><a href="Update_Profile.php">Update Profile</a></li>
  <li style="float:right"><a href="logout.php?redirect=index.php">Logout</a></li>
</ul>
    
<style>.attendance div {
    display: none;
}

.attendance div:target {
    display: block;
  
}</style>
  <div class="login-box" style="width:60%;">
    <div class="appName" ><h1> L.A.R.S </h1><br><br>
    <h2>Time IN / OUT</h2>
    <h2>
        <form method="POST">
        <table class="attendance">
        <tr>
          <style>
            .attendance a.INtime {
              color:goldenrod;
            }
            .attendance a.OUTtime{
              color:#03e9f4;;
            }
            .attendance a.OUTtime:hover{
            background: darkcyan;
            color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px darkcyan,
              0 0 25px darkcyan,
              0 0 50px #fff,
              0 0 100px #03e9f4;
            }
            .attendance a.INtime:hover {
            background: darkgoldenrod;
            color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px goldenrod,
              0 0 25px goldenrod,
              0 0 50px #fff,
              0 0 100px darkgoldenrod;
          }
          </style>
         <th><a href="time.php?selector=<?php echo 'INtime';?>"  class="INtime" name="INtime" >Time IN</a></th>
         <th><a href="time.php?selector=<?php echo 'OUTtime';?>"  class="OUTtime" name="OUTtime" >Time OUT</a></th>
         
    
    </table>
     
    <br><br>
    </h2>
  </form>
</div>
</div>
</body>
</html>
