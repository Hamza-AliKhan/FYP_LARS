<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "lars_database");

		$user_name =  $_REQUEST['uname'];
        $passw = $_REQUEST['psw'];
        $type =  $_REQUEST['actype'];
        $fname = $_REQUEST['fname'];
        $lname =  $_REQUEST['lname'];
        $address = $_REQUEST['address'];
        $phone =  $_REQUEST['phone'];
        $email = $_REQUEST['email'];
        $gender =  $_REQUEST['gender'];
        $age = $_REQUEST['age'];
        $dob =  $_REQUEST['dob_date'];

        $id= $_SESSION['newsession'];
		
		$query = "UPDATE `users` SET `username`='$user_name', `type`='$type', `password`= '$passw', `phone`='$phone', `first_name`='$fname', `last_name`='$lname', `home_address`='$address', `email_address`='$email', `gender`='$gender', `date_of_birth`='$dob', `age`='$age' WHERE `username` = '$id'";
        
            // Connection to table and query execution on table
            $res_ult = $conn->query($query) or die(mysqli_error());
        	
        	
        	if(null!==$res_ult){          

            // Display the alert box
            $_SESSION['login_error_msg'] ='<script>alert("Congrats! -- Account Updated Successfully.")</script>';
            // Redirect to the previous page
            header('Location: http://localhost/FYP_LARS/employee/Update_Profile.php');
            
            }else{
            	
            // Display the alert box
            $_SESSION['login_error_msg'] ='<script>alert("Error! -- Account Could-not be Updated. Try Again !!")</script>';
            // Redirect to the previous page
            header('Location: http://localhost/FYP_LARS/employee/Update_Profile.php');
            }
            $conn->close();
        
?>