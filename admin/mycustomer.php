<?php 
include '../connect/connect.php';
$sql="SELECT * FROM user where role=0";
$reszult=mysqli_query($conn,$sql);
?>
<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>
<div class="flex justify-center items-center">
  
  <table class=" text-center">
    <thead>
      <tr class="text-center">
      <th>Tên</th>
      <th>Email</th>
      <th>Số điện thoại </th>
      <th>Địa chỉ </th>
      <th class="w-[100px]">Xem chi tiết </th>
      </tr>
    </thead>
    <tbody>
    <?php
  while($row= mysqLi_fetch_array($reszult)){
      
          // $query="DELETE FROM newlaptop WHERE id='$ida'"; 
          // mysqli_query($conn,$query);
      
  ?>
  
      <tr class="text-center">
        <td class="p-3" ><?php echo $row['name'] ?></td>
        <td class="p-3" > <?php echo $row['email'] ?></td>
        <td class="p-3" > <?php echo $row['sdt'] ?></td>
        <td class="p-3" ><?php echo $row['address'] ?></td>
        <td class="p-3" ><a href="delete.php?this_id=<?php echo $row['id']?>">Chi tiết</a></td>
      </tr>
      
      <?php 
      
  }?>
  
    </tbody>
  </table></div>


  <?php
include('includes/scripts.php');
// include('includes/footer.php');
?>