<?php
         $servername = 'localhost';
         $username = 'root';
         $password = '';
         $dbname = 'lars_database';
    
    try{
    // Create connection
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    // Taking all values from the form data(input)
        $user_name =  $_POST['uname'];
        $passw = $_POST['psw'];
        $type =  $_POST['actype'];
        $fname = $_POST['fname'];
        $lname =  $_POST['lname'];
        $address = $_POST['address'];
        $phone =  $_POST['phone'];
        $email = $_POST['email'];
        $gender =  $_POST['gender'];
        $age = $_POST['age'];
        $dob =  $_POST['dob_date'];
        

        $query = "SELECT username FROM users WHERE username = :user_name";
        
        
            // check if name is taken already
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(':user_name', $user_name);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if (isset($user) && !empty($user)){
            
            session_start();
                // Display the alert box
                $_SESSION['login_error_msg'] ='<script>alert("Error! -- Username Already Taken with same Account Type. Please try again.")</script>';
                // Redirect to the previous page
            header('Location: http://localhost/FYP_LARS/admin/RegisterNew.php');           

            }
            
            else{
            $conn = mysqli_connect("localhost", "root", "", "lars_database");

            $query = "INSERT INTO `users`(`username`, `type`, `password`, `phone`, `first_name`, `last_name`, `home_address`, `email_address`, `gender`, `date_of_birth`, `age`) VALUES ('$user_name', '$type', '$passw', '$phone', '$fname', '$lname', '$address', '$email', '$gender', '$dob', '$age')";
        
            // Connection to table and query execution on table
            $q_user = $conn->query($query) or die(mysqli_error());
        
            session_start();
            // Display the alert box
            $_SESSION['login_error_msg'] ='<script>alert("Congrats! -- New Account Created Successfully.")</script>';
            // Redirect to the previous page
            header('Location: http://localhost/FYP_LARS/admin/RegisterNew.php');
            
            }
                                                                            
        
            $stmt->close();
            $conn->close();

        }catch (PDOException $e){
            die("Connection Failed: ".$e->getMessage());
        }
            
        
                

?>