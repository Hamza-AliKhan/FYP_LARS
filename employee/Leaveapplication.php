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
  <li><a class="active" href="Leaveapplication.php">Apply Leave Application</a></li>
  <li><a href="Total_Leave_per_year.php">Total Number of Leaves Per Year</a></li>
  <li><a href="Update_Profile.php">Update Profile</a></li>
  <li style="float:right"><a href="logout.php?redirect=index.php">Logout</a></li>
</ul>
    

  <div class="login-box" style="width:50%; margin-top:250px;">
    <div class="appName" ><h1> L.A.R.S </h1><br><br>
        <h2>Leave Application Form</h2>
        <label><b>Max Earned Leave = 48</b></label><br>
        <label><b>Max Casual Leave = 20</b></label><br>
        <table><tr><td><label><b>Availed Earned Leaves :</b></label>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "lars_database");


// Taking sum
        
        $query = "SELECT SUM(days) AS TotalDays FROM leaveapplications WHERE username='$username' AND status ='Accepted' AND description_of_leave = 'Earned' AND type_of_leave = 'Full';";       
                // Connection to table and query execution on table
                $q_user = $conn->query($query) or die(mysqli_error());
                $row = mysqli_fetch_assoc($q_user); 
                $sum = $row['TotalDays'];
                $query = "SELECT SUM(days) AS TotalDays FROM leaveapplications WHERE username='$username' AND status ='Accepted' AND description_of_leave = 'Earned' AND type_of_leave = 'Half'";       
                // Connection to table and query execution on table
                $q_user = $conn->query($query) or die(mysqli_error());
                $row = mysqli_fetch_assoc($q_user); 
                $halfsum = $row['TotalDays'];
                
                $availEarn = $sum+$halfsum;
                $fsum=48.0-$sum;
                $hsum=$fsum-$halfsum;
                ?><b><?php print_r($availEarn); ?></b></td><td><b>&nbsp &nbsp &nbsp Available : <?php echo $hsum; ?></b></td></tr>
<br>
                <tr><td><label><b>Availed Casaul Leaves :</b></label>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "lars_database");


// Taking sum
        
        $query = "SELECT SUM(days) AS TotalDays FROM leaveapplications WHERE username='$username' AND status ='Accepted' AND description_of_leave = 'Casual' AND type_of_leave = 'Full';";       
                // Connection to table and query execution on table
                $q_user = $conn->query($query) or die(mysqli_error());
                $row = mysqli_fetch_assoc($q_user); 
                $flsum = $row['TotalDays'];
                $query = "SELECT SUM(days) AS TotalDays FROM leaveapplications WHERE username='$username' AND status ='Accepted' AND description_of_leave = 'Casual' AND type_of_leave = 'Half'";       
                // Connection to table and query execution on table
                $q_user = $conn->query($query) or die(mysqli_error());
                $row = mysqli_fetch_assoc($q_user); 
                $hlfsum = $row['TotalDays'];
                
                $availCasual = $flsum+$hlfsum;
                $fssum=20.0-$flsum;
                $cssum=$fssum-$hlfsum;
                ?><b><?php print_r ($availCasual); ?></b></td><td><b>&nbsp &nbsp &nbsp Available : <?php echo $cssum; ?></b></td></tr></table>
<br>
        
        <form action="leavecheck.php" style="color:white;" method="post">  
            <table>
            <tr><td>
            <div class="user-box">
            <label for="uname" ><b>Username:</b></label>
            <input type="hidden" name="uname" value="<?php echo $id?>">
            <b><?php
            echo $id;
            ?></b>       
            </div>
            </td></tr>

            <tr><td>
            <div class="user-box">
            <label for="type_of_leave" ><b>Type of Leave:</b></label>       
            </div>
            </td>
            </tr>

            <tr><td>
            <div class="user-box">
            <input style="width:5%" type="radio" name="type_of_leave" value="Full" required> Full
            </div>
            </td><td>
            <div class="user-box">
            <input style="width:5%"type="radio" name="type_of_leave" value="Half" required> Half
            </div>
            </td></tr>

            <tr><td>
            <div class="user-box">
            <label for="type_of_leave" ><b>Description of Leave:</b></label>       
            </div>
            </td>
            </tr>

            <tr><td>
            <div class="user-box">
            <input style="width:5%" type="radio" name="description_of_leave" value="Casual" required> Casual
            </div>
            </td><td>
            <div class="user-box">
            <input style="width:5%"type="radio" name="description_of_leave" value="Earned" required> Earned
            </div>
            </td></tr>        

            <tr><td>
            <div class="user-box">
            <label for="reason_of_leave"><b>Reason of Leave: </b></label><br>
            <input style="width: 150%;" type="text" name="reason_of_leave" required>
            </div>
            </td></tr>

            <tr><td>
            <div class="user-box">
            <label for="from_date"><b>From Date:</b></label><br>
            <input style="width:50%" type="date" name="from_date" required>
            </div>
            </td></tr>

            <tr><td>
            <div class="user-box">
            <label for="to_date"><b>To Date:</b></label><br>
            <input style="width:50%" type="date" name="to_date" required>
            </div>
            </td></tr>
            </table>
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

    </div>
</div>
</body>
</html>
