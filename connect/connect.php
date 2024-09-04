<?php 
$server= 'localhost';
$user = 'root';
$pass= '';
$database= 'techcare';
  
$conn =new mysqLi($server, $user ,$pass,$database);
if($conn){
    mysqLi_query($conn, "SET NAMES 'utf8' ");
    

}else{
    echo 'Ket noi that bai';
}

?>