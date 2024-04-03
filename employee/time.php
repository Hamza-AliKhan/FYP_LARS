<?php
session_start();
date_default_timezone_set("ASIA/Karachi");
$conn = mysqli_connect("localhost", "root", "", "lars_database");
    $username =  $_SESSION['newsession'];
    $time_IN = date("h:i:sa");
    $day = date('d');
    $month = date('m');
    $year = date('Y');
    $selector = $_REQUEST['selector'];
    
    
    if($selector === 'INtime'){
      $newDATE = date('Y-m-d');
    $sqlselect = "SELECT `timeIn` FROM `attendance` WHERE `username` = '$username' AND `date` = '$newDATE'";
    $exqry = mysqli_query($conn, $sqlselect);
    $cnt = mysqli_fetch_assoc($exqry);
    if(empty($cnt['timeIn'])){
      $sqlInsert = "INSERT INTO `attendance`(`username`, `timeIn`,`date`,`day`,`month`,`year`) VALUES ('$username','$time_IN','$newDATE','$day','$month','$year')";

      if(mysqli_query($conn, $sqlInsert)) {
        $_SESSION['login_error_msg'] ='<script>alert("Time IN successfully set for Today")</script>';
        header('Location: http://localhost/FYP_LARS/employee/Time_in_out.php');
        exit();
       } else {
         $_SESSION['login_error_msg'] ='<script>alert("Error")</script>';
         header('Location: http://localhost/FYP_LARS/employee/Time_in_out.php');
         exit();
       }  
     }else{
         $_SESSION['login_error_msg'] ='<script>alert("Error -- Time IN already set for Today")</script>';
         header('Location: http://localhost/FYP_LARS/employee/Time_in_out.php');
         exit();
  }
  }
   if($selector === 'OUTtime'){
    $newDATE = date('Y-m-d');
       $attendance = 'Present';
       $time_OUT = date("h:i:sa");
       $sqlselect = "SELECT `timeOut` FROM `attendance` WHERE `username` = '$username' AND `date` = '$newDATE'";
      $exqry = $conn->query($sqlselect)  or die(mysqli_error());;
      $cnt = mysqli_fetch_assoc($exqry);
      print_r($cnt);
      if(empty($cnt['timeOut'])){

         $sqlInsert = "UPDATE `attendance` SET `timeOut` = '$time_OUT' ,`Attendance` = '$attendance',`day`='$day',`month`='$month',`year`='$year' WHERE `username` = '$username' AND `date` = '$newDATE'";

         if(mysqli_query($conn,$sqlInsert)) {
           $_SESSION['login_error_msg'] ='<script>alert("Time OUT successfully set for Today")</script>';
           header('Location: http://localhost/FYP_LARS/employee/Time_in_out.php');
           exit();
        
         } else {
           echo "Error: " . $sqlInsert . "<br>" . $mysqli_error($conn);
           exit();
         }  
         } else {
         $_SESSION['login_error_msg'] ='<script>alert("Error -- Time OUT already set for Today")</script>';
         header('Location: http://localhost/FYP_LARS/employee/Time_in_out.php');
         exit();
        }
    }
    ?>