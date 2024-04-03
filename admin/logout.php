<?php    
session_start();
//to destroy cookie
//setcookie("newssion", "$f_userData", time() - 1);

session_destroy();
header('Location: http://localhost/FYP_LARS/index.php');  
exit;  
?>