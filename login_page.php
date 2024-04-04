<?php
        // $servername = "localhost";
        // $username = "root";
        // $password = "";
        // $dbname = "lars_database";

// Create connection
$conn = mysqli_connect("localhost", "root", "", "lars_database");


// Taking all values from the form data(input)
        $username =  $_REQUEST['uname'];
        $passw = $_REQUEST['psw'];
        
         
        // Performing selection query execution
        
        $query = "SELECT `type`,`username`,`password` FROM `users` WHERE `username` = '$username' AND `password` = '$passw'";
        
        // Connection to table and query execution on table
        $q_user = $conn->query($query) or die(mysqli_error());
        $f_userData = $q_user->fetch_array();
        
        
        try{
        if($f_userData != null){
            

            if($f_userData['password'] == $passw){
       
                session_start();

                //session parameters
                session_set_cookie_params([
                'lifetime' => 1800,
                'domain' => 'localhost',
                'path' => '/',
                'secure' => true,
                'httponly' => true,
                ]);

                
                $_SESSION['newsession'] = $f_userData['username'];
               

                if ($f_userData['type'] === 'admin') {
                header('Location: http://localhost/FYP_LARS/adminPage.php');
                }elseif($f_userData['type'] === 'employee'){
                header('Location: http://localhost/FYP_LARS/employeePage.php');        
                }

            }}else{
                session_start();
                // Display the alert box
                $_SESSION['login_error_msg'] ='<script>alert("Error! -- Wrong Username or Password. Please try again.")</script>';
                
            
            // Redirect to the previous page
            header('Location: http://localhost/FYP_LARS/index.php');             
                
                
            exit();
            }
            
            
        }
    
        
        finally{
            mysqli_close($conn);
        
        }
            
 
            
        

?>
