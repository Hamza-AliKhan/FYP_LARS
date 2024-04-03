<div class="row">
<table >
<thead>
<tr>
<th><strong>Username</strong></th>
<th><strong>Full Day</strong></th>
<th><strong>Half Day</strong></th>
<th><strong>Earned</strong></th>
<th><strong>Casual</strong></th>
<th><strong>Accepted</strong></th>
<th><strong>Rejected</strong></th>
</tr>
</thead>
<tbody>

<?php
$conn = mysqli_connect("localhost", "root", "", "lars_database");

$sel_query="SELECT DISTINCT `username` FROM `leaveapplications`";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php $tmpuser = $row["username"]; echo $tmpuser; ?></td>

<?php $sel_query2="SELECT COUNT(*) FROM `leaveapplications` WHERE `username`='$tmpuser' AND `type_of_leave`='Full'";
      $count = $conn->query($sel_query2);
      $countFull = $count->fetch_array(); ?>
<td align="center"><?php print_r($countFull["COUNT(*)"]); ?></td>

<?php $sel_query3="SELECT COUNT(*) FROM `leaveapplications` WHERE `username`='$tmpuser' AND `type_of_leave`='Half'";
      $count = $conn->query($sel_query3);
      $countHalf = $count->fetch_array(); ?>
<td align="center"><?php print_r($countHalf["COUNT(*)"]); ?></td>

<?php $sel_query4="SELECT COUNT(*) FROM `leaveapplications` WHERE `username`='$tmpuser' AND `description_of_leave`='Earned'";
      $count = $conn->query($sel_query4);
      $countEarned = $count->fetch_array(); ?>
<td align="center"><?php print_r($countEarned["COUNT(*)"]); ?></td>

<?php $sel_query5="SELECT COUNT(description_of_leave) FROM `leaveapplications` WHERE `username`='$tmpuser' AND `description_of_leave`='Casual'";
      $count = $conn->query($sel_query5);
      $countCasual = $count->fetch_array(); ?>
<td align="center"><?php print_r($countCasual["COUNT(description_of_leave)"]); ?></td>

<?php $sel_query6="SELECT COUNT(status) FROM `leaveapplications` WHERE `username`='$tmpuser' AND `status`='Accepted'";
      $count = $conn->query($sel_query6);
      $countAcc = $count->fetch_array(); ?>
<td align="center"><?php print_r($countAcc["COUNT(status)"]); ?></td>

<?php $tpdate = date("Y"); 
      $sel_query7="SELECT COUNT(status) FROM `leaveapplications` WHERE `username`='$tmpuser' AND `status`='Rejected' AND `year`='$tpdate'";
      $count = $conn->query($sel_query7);
      $countRej = $count->fetch_array(); ?>
<td align="center"><?php print_r($countRej["COUNT(status)"]); ?></td>


<?php 
}
?>
</tr>



</tbody>
</table>
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
<th><strong><label>Year Total (Out of 249 Days) :<label><div class="user-box"><input style="width:60px;" type="number" name="setYEAR"  placeholder="  <?php echo date("Y");?>"></div></input></strong></th>
</tr>
</thead>
<tbody>
<tr>
<?php
$sel_query="SELECT DISTINCT username FROM attendance  WHERE Attendance='Present'";
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

      <td><?php 
       if(empty($_REQUEST['setYEAR'])){
       $tmpYear=date("Y");
      $sqql = "SELECT COUNT(*) FROM `attendance` WHERE `username`= '$username' AND `year`='$tmpYear'";
      $count = $conn->query($sqql);
      $f_userData = $count->fetch_array();
      print_r($f_userData["COUNT(*)"]); 
    
      }else{

      $tmpYear=$_REQUEST['setYEAR'];
      $sqql = "SELECT COUNT(*) FROM `attendance` WHERE `username`= '$username' AND `year`='$tmpYear'";
      $count = $conn->query($sqql);
      $f_userData = $count->fetch_array();
       print_r($f_userData["COUNT(*)"]); }?></td> 

            
       
      
      


</tr>
<?php
}
?>
</tbody>
    </table>
  </div>
