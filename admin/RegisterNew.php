<?php
session_start();
?>
<?php
include_once'header.php';
?>


<body>
<?php
require_once '../check.php';
require_once '../checkTypeAD.php';
?>
<ul class="navbar" style="z-index:1;">
  <li style="float:left"><a href="../index.php">Home</a></li>
  <li><a href="../adminPage.php">Admin</a></li>
  <li><a class="active" href="RegisterNew.php">Register New Employee</a></li>
  <li><a href="Accept_Reject_Leave.php">Accept / Reject Leave</a></li>
  <li><a href="Total_Records.php">Total Attendance / Leave</a></li>
  <li><a href="Update_Delete_Records.php">Update / Delete Records</a></li>
  <li style="float:right"><a href="logout.php?redirect=index.php">Logout</a></li>
</ul>

<?php 
if(!empty($_SESSION['login_error_msg']))
{
    //display the error message
    echo $_SESSION['login_error_msg'];

    unset($_SESSION['login_error_msg']);
}
?>

    
<br>

  <div class="login-box" style="width:800px; margin-top:250px;">
    <div class="appName" ><h1> L.A.R.S </h1><br><br>
    <h2>Register New Employee</h2>
    
    <form action="register.php" method="post">
        
    	<table>
        <tr><td>
        <div class="user-box">
        <label for="uname"><b>Username :</b></label><br>
        <input type="text" name="uname" required>
        </div>
        </td>
        <td>
        <div class="user-box">
        <label for="psw"><b>Password :</b></label><br>
        <input type="password" name="psw" minlength="8" maxlength="16" size="16" required>
        </div>
        </td></tr>
        
        <tr><td>
        <div class="user-box">
        <label for="actype"><b>Account Type :</b></label>       
        </div>
        </td>
        </tr>

        <tr><td>
        <div class="user-box">
        <input style="width:5%" type="radio" name="actype" value="admin" required> admin
        </div>
        </td><td>
        <div class="user-box">
        <input style="width:5%"type="radio" name="actype" value="employee" required> employee
        </div>
        </td></tr>        

        <tr><td>
        <div class="user-box">
        <label for="fname"><b>First Name :</b></label><br>
        <input style="width: 100%;" type="text" name="fname" required>
        </div>
        </td>
        <td>
        <div class="user-box">
        <label for="lname"><b>Last Name :</b></label><br>
        <input style="width: 100%;" type="text" name="lname" required>
        </div>
        </td></tr>

        <tr><td>
        <div class="user-box">
        <label for="address"><b>Address :</b></label><br>
        <input style="width: 100%;" type="text" name="address" required>
        </div>
        </td>
        <td>
        <div class="user-box">        
        <label for="phone"><b>Enter Phone Number :<b></label><br>
        <input style="width: 100%;" type="tel" id="phone" name="phone" placeholder="0123-4567891" pattern="[0-9]{4}-[0-9]{7}">
        </div>
        </td></tr>

        <tr><td>
        <div class="user-box">
        <label for="email"><b>Email :</b></label><br>
        <input style="width: 100%;" type="email" name="email" required>
        </div>
        </td>
        <td>
        <div class="user-box">
        <label for="gender"><b>Gender :</b></label>
        <input style="width:5%" type="radio" name="gender" value="male" required> Male 
        <input style="width:5%" type="radio" name="gender" value="female" required> Female 
        </div>
        </td></tr>

        <tr><td>
        <div class="user-box">
        <label for="age"><b>Age :</b></label><br>
        <input type="number" name="age" required>
        </div>
        </td><td>
        <div class="user-box">
        <label for="dob_date"><b>Date Of Birth</b></label><br> 
        <input type="date" name="dob_date" required>
        </div>
        </td></tr>
<!-- <tr><td></td></tr> -->
</table>

<br><br>
    <a>
    <button style="background-color: transparent; color: white; border: none;" class="button" type="submit" name="submit">
    <span></span>
      <span></span>
      <span></span>
      <span></span>
      Submit
    </button>
    
    </a>
</form>
<br>
</div>
</div>


<?php
//../footer.php to root folder and access footer.php file
include_once '../footer.php';
?>