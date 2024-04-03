<?php
session_start(); 
$usrname =  $_REQUEST['id'];
$_SESSION['id'] = $usrname;


$uid =  $_REQUEST['uid'];
$_SESSION['uid'] = $uid;

$rejectleave = "Rejected";
 

$conn = mysqli_connect("localhost", "root", "", "lars_database");

try{
$query = "SELECT `reason_of_leave` FROM `leaveapplications` WHERE `username` = '$usrname' AND `uid` = '$uid'";
        
        // Connection to table and query execution on table
        $q_user = $conn->query($query) or die(mysqli_error());
        $f_userData = $q_user->fetch_array();       
        $dbreason = $f_userData['reason_of_leave'];

        if(null!==$q_user){
            
                $_SESSION['reason'] = $dbreason;
               
 
            // Redirect to the previous page
            header('Location: http://localhost/FYP_LARS/admin/Accept_Reject_Leave.php#reasonpopup');             
                
                
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

mysqli_close($conn);
}

?>