<?php
session_start();
$id =  $_REQUEST['id'];
$_SESSION['id'] = $id;
?>
<?php
include_once'header.php';
?>
<body>
<?php
require_once '../check.php';
?>
<ul class="navbar">
  <li style="float:left"><a href="../index.php">Home</a></li>
  <li><a href="../adminPage.php">Admin</a></li>
  <li><a href="RegisterNew.php">Register New Employee</a></li>
  <li><a href="Accept_Reject_Leave.php">Accept / Reject Leave</a></li>
  <li><a href="Total_Records.php">Total Attendance / Leave</a></li>
  <li><a class="active" href="Update_Delete_Records.php">Update / Delete Records</a></li>
  <li style="float:right"><a href="logout.php?redirect=index.php">Logout</a></li>
</ul>

<div class="appName"><h1> L.A.R.S </h1></div>
<div class="login-box" style="width:800px; margin-top:250px;">
    <h2>Update / Delete Records</h2>
    
    <form action="editform.php" method="post">
        
    	<table>
    		<?php
    		$conn = mysqli_connect("localhost", "root", "", "lars_database");
    		$sel_query="Select * from users where username = '$id'";
			$result = mysqli_query($conn,$sel_query);
    		$f_userData = $result->fetch_array();
			if(!empty($f_userData)){
            
    		?>
        <tr><td>
        <div class="user-box">
        <label for="uname"><b>Username :</b></label><br>
        <input type="text" name="uname" placeholder="<?php echo $f_userData['username']; ?>"required>
        </div>
        </td>
        <td>
        <div class="user-box">
        <label for="psw"><b>Password :</b></label><br>
        <input type="password" name="psw" minlength="8" maxlength="16" size="16" placeholder="<?php echo $f_userData['password']; ?>" required>
        </div>
        </td></tr>
        
        <tr><td>
        <div class="user-box">
        <label for="actype"><b>Account Type :</b><h7> Old --Value-- <?php echo $f_userData['type']; ?></h7></label>
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
        <input style="width: 100%;" type="text" name="fname" placeholder="<?php echo $f_userData['first_name']; ?>" required>
        </div>
        </td>
        <td>
        <div class="user-box">
        <label for="lname"><b>Last Name :</b></label><br>
        <input style="width: 100%;" type="text" name="lname" placeholder="<?php echo $f_userData['last_name']; ?>" required>
        </div>
        </td></tr>

        <tr><td>
        <div class="user-box">
        <label for="address"><b>Address :</b></label><br>
        <input style="width: 100%;" type="text" name="address" placeholder="<?php echo $f_userData['home_address']; ?>" required>
        </div>
        </td>
        <td>
        <div class="user-box">        
        <label for="phone"><b>Enter Phone Number :<b></label><br>
        <input style="width: 100%;" type="tel" id="phone" name="phone" placeholder="<?php echo $f_userData['phone']; ?>" pattern="[0-9]{4}-[0-9]{7}">
        </div>
        </td></tr>

        <tr><td>
        <div class="user-box">
        <label for="email"><b>Email :</b></label><br>
        <input style="width: 100%;" type="email" name="email" placeholder="<?php echo $f_userData['email_address']; ?>" required>
        </div>
        </td>
        <td>
        <div class="user-box">
        <label for="gender"><b>Gender : </b><h7>Old --Value-- <?php echo $f_userData['gender']; ?></h7></label><br><br>
        <input style="width:5%" type="radio" name="gender" value="male" required> Male 
        <input style="width:5%" type="radio" name="gender" value="female" required> Female 
        </div>
        </td></tr>

        <tr><td>
        <div class="user-box">
        <label for="age"><b>Age :</b></label><br>
        <input type="number" name="age" placeholder="<?php echo $f_userData['age']; ?>" required>
        </div>
        </td><td>
        <div class="user-box">
        <label for="dob_date" ><b>Date Of Birth :</b></label><h7><?php echo $f_userData['date_of_birth']; ?><h7><br> 
        <input type="date" name="dob_date" required>
        </div>
        </td></tr>
<?php 
}
?>
</table>

<br><br>
    <a>
    <button style="background-color: transparent; color: white; border: none;" class="button" type="submit" >
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
