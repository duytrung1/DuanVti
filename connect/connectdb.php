<?php
connectdb();
function connectdb(){
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=localhost;dbname=techcare", 'root', '');
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
}
?>