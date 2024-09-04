<?php
 session_start();
 if(!isset($_SESSION['giohang']))$_SESSION['giohang']=[];
 if(isset($_POST['addcart'])&&($_POST['addcart'])){
    $hinh=$_POST['name'];
    
    $sp=[$hinh];
    $_SESSION['giohang']=$sp;
    var_dump($_SESSION['giohang']);
 }

 

?>