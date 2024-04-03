<?php
session_start(); 
$usrname =  $_REQUEST['id'];
$_SESSION['id'] = $usrname;


$uid =  $_REQUEST['uid'];
$_SESSION['uid'] = $uid;

$acceptleave = "Accepted";
 

$conn = mysqli_connect("localhost", "root", "", "lars_database");

try{
$query = "SELECT * FROM `leaveapplications` WHERE `username` = '$usrname' AND `uid` = '$uid'";
        
        // Connection to table and query execution on table
        $q_user = $conn->query($query) or die(mysqli_error());
        $f_userData = $q_user->fetch_array();
        $dbuid = $f_userData['uid'];
        $dbusrname = $f_userData['username'];
        $dbtype = $f_userData['type_of_leave'];

        if(null!==$q_user){
                if($dbtype == "Half"){
            
                $query = "UPDATE `leaveapplications` SET `status` = '$acceptleave' , `days`='0.5' WHERE `uid` = '$dbuid' AND `username` = '$dbusrname'";
                        $res_ult = $conn->query($query) or die(mysqli_error());
                // Display the alert box
                $_SESSION['login_error_msg'] ='<script>alert("Leave Accepted Successfully.")</script>';
 }
 if($dbtype == "Full"){
            
                $query = "UPDATE `leaveapplications` SET `status` = '$acceptleave' WHERE `uid` = '$dbuid' AND `username` = '$dbusrname'";
                        $res_ult = $conn->query($query) or die(mysqli_error());
                // Display the alert box
                $_SESSION['login_error_msg'] ='<script>alert("Leave Accepted Successfully.")</script>';
 }

            // Redirect to the previous page
            header('Location: http://localhost/FYP_LARS/admin/Accept_Reject_Leave.php');             
                
                
            exit();

        } else{
                
                // Display the alert box
                $_SESSION['login_error_msg'] ='<script>alert("Error! -- Please try again.")</script>';
                
            
            // Redirect to the previous page
            header('Location: http://localhost/FYP_LARS/admin/Accept_Reject_Leave.php');             
                
                
            exit();
            }

}
finally{
unset($_SESSION['id']);
unset($_SESSION['uid']);
mysqli_close($conn);
}

?>