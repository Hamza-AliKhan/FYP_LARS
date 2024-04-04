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

        $id= $_SESSION['id'];
		
		$query = "DELETE FROM `users` WHERE `username` = '$id'";
        
            // Connection to table and query execution on table
            $res_ult = $conn->query($query) or die(mysqli_error());
        	/*$f_userData = $res_ult->fetch_array();*/
        	
        	if(null!==$res_ult){
           
            // Display the alert box
            $_SESSION['login_error_msg'] ='<script>alert("Congrats! -- Account Deleted Successfully.")</script>';
            // Redirect to the previous page
            header('Location: http://localhost/FYP_LARS/admin/Update_Delete_Accounts.php');
            
            }else{
            	
            // Display the alert box
            $_SESSION['login_error_msg'] ='<script>alert("Error! -- Account Could-not be Deleted. Try Again !!")</script>';
            // Redirect to the previous page
            header('Location: http://localhost/FYP_LARS/admin/Update_Delete_Accounts.php');
            }
            $conn->close();
        
?>