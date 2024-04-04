<?php    
session_start();
//to destroy cookie
//setcookie("newssion", "$f_userData", time() - 1);
unset($_SESSION['newsession']); 
session_destroy();
header('Location: http://localhost/FYP_LARS/index.php');  
exit;  
?>