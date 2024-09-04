<?php
include '../connect/connect.php';
  $this_id=$_GET['this_id'];
  $sqll="DELETE FROM cart WHERE id='$this_id'";
  mysqli_query($conn,$sqll);
  header('location:cart.php');
?>