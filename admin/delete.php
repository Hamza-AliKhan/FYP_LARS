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
    
    <form action="deleteform.php" method="post">
        
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
        <label for="uname"><b>Username :&nbsp&nbsp</b></label>
        &nbsp<b name="uname" value="<?php echo $f_userData['username']; ?>"> &nbsp&nbsp <?php echo $f_userData['username']; ?></b><br>
        </div>
        </td>
        <td>
        <div class="user-box">
        <label for="psw"><b>Password :&nbsp&nbsp</b></label>
        &nbsp<b name="psw" value="<?php echo $f_userData['password']; ?>"> &nbsp&nbsp <?php echo $f_userData['password']; ?></b><br>
        </div>
        </td></tr>
        
        <tr><td>
        <div class="user-box">
        <label for="actype"><b>Account Type :&nbsp&nbsp</b></label>
        &nbsp<b name="actype" value="<?php echo $f_userData['type']; ?>"> &nbsp&nbsp <?php echo $f_userData['type']; ?></b><br>
        </div>
        </td>
        </tr>        

        <tr><td>
        <div class="user-box">
        <label for="fname"><b>First Name :&nbsp&nbsp</b></label>
        &nbsp<b name="fname" value="<?php echo $f_userData['first_name']; ?>"> &nbsp&nbsp <?php echo $f_userData['first_name']; ?></b><br>
        </div>
        </td>
        <td>
        <div class="user-box">
        <label for="lname"><b>Last Name :&nbsp&nbsp</b></label>
        <b name="lname" value="<?php echo $f_userData['last_name']; ?>"> &nbsp&nbsp <?php echo $f_userData['last_name']; ?></b><br>
        </div>
        </td></tr>

        <tr><td>
        <div class="user-box">
        <label for="address"><b>Address :&nbsp&nbsp</b></label>
        &nbsp<b name="address" value="<?php echo $f_userData['home_address']; ?>"> &nbsp&nbsp <?php echo $f_userData['home_address']; ?></b><br>
        </div>
        </td>
        <td>
        <div class="user-box">        
        <label for="phone"><b>Phone Number :&nbsp&nbsp<b></label>
        &nbsp<b name="phone" value="<?php echo $f_userData['phone']; ?>"> &nbsp&nbsp <?php echo $f_userData['phone']; ?></b><br>
        </div>
        </td></tr>

        <tr><td>
        <div class="user-box">
        <label for="email"><b>Email :&nbsp&nbsp</b></label>
        &nbsp<b name="email" value="<?php echo $f_userData['email_address']; ?>"> &nbsp&nbsp <?php echo $f_userData['email_address']; ?></b><br>
        </div>
        </td>
        <td>
        <div class="user-box">
        <label for="gender"><b>Gender :&nbsp&nbsp</b></label>
        &nbsp<b name="gender" value="<?php echo $f_userData['gender']; ?>"> &nbsp&nbsp <?php echo $f_userData['gender']; ?></b><br> 
        </div>
        </td></tr>

        <tr><td>
        <div class="user-box">
        <label for="age"><b>Age :&nbsp&nbsp</b></label>
        &nbsp<b name="age" value="<?php echo $f_userData['age']; ?>"> &nbsp&nbsp <?php echo $f_userData['gender']; ?></b><br>
        </div>
        </td><td>
        <div class="user-box">
        <label for="dob_date" ><b>Date Of Birth :&nbsp&nbsp</b></label>
        &nbsp<b name="dob_date" value="<?php echo $f_userData['date_of_birth']; ?>"> &nbsp&nbsp <?php echo $f_userData['date_of_birth']; ?></b><br>
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
