<?php 
include '../connect/connect.php';
session_start();
if (isset($_SESSION["username"])&&($_SESSION["username"]!="")) {
    unset($_SESSION["username"]);
   
    
}


?>
<!-- (isset($_SESSION["id"])&&($_SESSION["id"]!="")) {
    unset($_SESSION['username']) -->