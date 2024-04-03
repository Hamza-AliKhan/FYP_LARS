<?php
        // $servername = "localhost";
        // $username = "root";
        // $password = "";
        // $dbname = "lars_database";

// Create connection
$conn = mysqli_connect("localhost", "root", "", "lars_database");

session_start();
// Taking all values from the form data(input)
        $username =  $_SESSION['newsession'];
        $type_of_leave = $_REQUEST['type_of_leave'];
        $description_of_leave =  $_REQUEST['description_of_leave'];
        $reason_of_leave = $_REQUEST['reason_of_leave'];
        $from_date = $_REQUEST['from_date'];
        $to_date = $_REQUEST['to_date'];
        $status_def = "waiting for approval";
        $uid = uniqid(False);

        try{

        $frmonth = new DateTime($from_date);
        $frommonth = $frmonth->format('m');
        $fryear = new DateTime($from_date);
        $fromyear = $fryear->format('Y');
        
        $earlier = new DateTime($from_date);
        $later = new DateTime($to_date);
        $days = $later->diff($earlier)->format("%a");

        //print_r($days);
        
        $query = "SELECT `uid` FROM `leaveapplications`";
        
        // Connection to table and query execution on table
        $q_user = $conn->query($query) or die(mysqli_error());
        $f_userData = $q_user->fetch_array();
        while($uid === $f_userData['uid']){
            $uid = uniqid(False);
        }

        
        if($days >> 0 && $type_of_leave == 'Half'){
        $_SESSION['login_error_msg'] ='<script>alert("Error! -- When Type of Leave is Half number of days should be less than 0")</script>';
 
                // Redirect to the previous page
                header('Location: http://localhost/FYP_LARS/employee/Leaveapplication.php');
        }
        if($days >> 0 && $type_of_leave == 'Full'){

                $query = "SELECT SUM(days) AS TotalDays FROM leaveapplications WHERE username='$username' AND status ='Accepted' AND description_of_leave = 'Earned';";       
                // Connection to table and query execution on table
                $q_user = $conn->query($query) or die(mysqli_error());
                $row = mysqli_fetch_assoc($q_user); 
                $sum = $row['TotalDays'];
                //print_r($sum);
                if($sum >= 48)
                {$_SESSION['login_error_msg'] ='<script>alert("Error! -- Leave Submission Failed -- Yearly Earned Leaves Reached.")</script>';
            // Redirect to the previous page
                header('Location: http://localhost/FYP_LARS/employee/Leaveapplication.php');
                }else{

                // Performing insert query execution                
            $query = "INSERT INTO `leaveapplications`(`uid`,`username`, `type_of_leave`, `description_of_leave`, `reason_of_leave`, `from_date`, `to_date`,`status`,`days`,`year`,`month`) VALUES ('$uid','$username',
            '$type_of_leave','$description_of_leave','$reason_of_leave','$from_date','$to_date','$status_def','$days','$fromyear','$frommonth')";
            $res_ult = $conn->query($query) or die(mysqli_error());
         
        
            if(null!==$res_ult){
            
            
                // Display the alert box
                $_SESSION['login_error_msg'] ='<script>alert("Leave Submitted Successfully.")</script>';
 
                // Redirect to the previous page
                header('Location: http://localhost/FYP_LARS/employee/Leaveapplication.php');             
                
                
            exit();

        } else{
                
                // Display the alert box
                $_SESSION['login_error_msg'] ='<script>alert("Error! -- Leave Submission Failed -- Please try again.")</script>';
                
            
                // Redirect to the previous page
                header('Location: http://localhost/FYP_LARS/employee/Leaveapplication.php');             
                
                
            exit();
            }
        }
    }
        if($days <= 0 && $type_of_leave == 'Full'){
            $_SESSION['login_error_msg'] ='<script>alert Error! -- When Type of Leave is Full number of days should be greater than 0</script>';
                // Redirect to the previous page
                header('Location: http://localhost/FYP_LARS/employee/Leaveapplication.php');}
         

        if($days == 0 && $type_of_leave == 'Half'){ 
        
         $query = "SELECT SUM(days) AS TotalDays FROM leaveapplications WHERE username='$username' AND status ='Accepted' AND description_of_leave = 'Earned';";       
                // Connection to table and query execution on table
                $q_user = $conn->query($query) or die(mysqli_error());
                $row = mysqli_fetch_assoc($q_user); 
                $sum = $row['TotalDays'];
                //print_r($sum);
                if($sum >= 20)
                {$_SESSION['login_error_msg'] ='<script>alert("Error! -- Leave Submission Failed -- Yearly Earned Leaves Reached.")</script>';
            // Redirect to the previous page
                header('Location: http://localhost/FYP_LARS/employee/Leaveapplication.php');
                }else{

                // Performing insert query execution                
            $query = "INSERT INTO `leaveapplications`(`uid`,`username`, `type_of_leave`, `description_of_leave`, `reason_of_leave`, `from_date`, `to_date`,`status`,`days`,`year`,`month`) VALUES ('$uid','$username',
            '$type_of_leave','$description_of_leave','$reason_of_leave','$from_date','$to_date','$status_def','$days','$fromyear','$frommonth')";
            $res_ult = $conn->query($query) or die(mysqli_error());}
        
            if(null!==$res_ult){
            
            
                // Display the alert box
                $_SESSION['login_error_msg'] ='<script>alert("Leave Submitted Successfully.")</script>';
 
                // Redirect to the previous page
                header('Location: http://localhost/FYP_LARS/employee/Leaveapplication.php');             
                
                
            exit();

        } else{
                
                // Display the alert box
                $_SESSION['login_error_msg'] ='<script>alert("Error! -- Leave Submission Failed -- Please try again.")</script>';
                
            
                // Redirect to the previous page
                header('Location: http://localhost/FYP_LARS/employee/Leaveapplication.php');             
                
                
            exit();
            }
            
          } 
        }
    
        
        finally{
            mysqli_close($conn);
        
        }

?>
