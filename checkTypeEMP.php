<?php
        // $servername = "localhost";
        // $username = "root";
        // $password = "";
        // $dbname = "lars_database";

// Create connection
$conn = mysqli_connect("localhost", "root", "", "lars_database");


// Taking all values from the form data(input)
        $username =  $_SESSION['newsession'];
        $type = "employee";
        
        
         
        // Performing selection query execution
        
        $query = "SELECT `type`,`username` FROM `users` WHERE `username` = '$username' AND `type` = '$type'";
        
        // Connection to table and query execution on table
        $q_user = $conn->query($query) or die(mysqli_error());
        $f_userData = $q_user->fetch_array();
        
        
        try{
        if($f_userData['username'] == $username || $f_userData['type'] == $type){
            

            
                //continue

            }else{
                session_start();
                // Display the alert box
                $_SESSION['login_error_msg'] ='<script>alert("Error! -- Wrong Username or Password. Please try again.")</script>';
                
            
            // Redirect to the previous page
            header('Location: http://localhost/FYP_LARS/logout.php?redirect=index.php');             
                
                
            exit();
            }
            
            
        }
    
        
        finally{
            mysqli_close($conn);
        
        }
            
 
            
        

?>
