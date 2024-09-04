 <script src="https://cdn.tailwindcss.com"></script>
 <?php 
include '../connect/connect.php';
$sql= "SELECT * FROM newlaptop";
$reszult= mysqLi_query($conn,$sql);
?>

<section class="flex justify-center items-center text-black my-[20px]">
<div class="card__container  bg-white p-1">
<h2 class="text-xl font-semibo?idld">LAPTOP MỚI GIÁ TỐT</h2>
<div class="grid grid-cols-2 gap-1 lg:grid-cols-4">
  
  <?php
while($row= mysqLi_fetch_array($reszult)){
?>
<div class="flex flex-col p-2 hover:shadow hover:bg-white hover:rounded-lg hover:border-gray-200 hover:boderr">
  <a href="../class/detail.php?this_id=<?php echo $row['id'] ?>" >
  <img src="<?php echo $row['image'] ?>" alt="hình ảnh không tồn tại.png" srcset="">
  <h2><?php echo $row['nameproduct'] ?></h2>
  </a> 
  <div class="flex"><div class="text-red-500"><?php echo $row['price'] ?>đ</div>
  <div><div class="text-white bg-red-500"><?php echo $row['sale'] ?>%</div></div>
</div>
  <div><?php echo $row['oldprice'] ?></div>
  <div><?php echo $row['cpu'] ?></div>
  <div><?php echo $row['gb'] ?></div>
  <div><?php echo $row['ram'] ?></div>
  <div><?php echo $row['inter'] ?></div>
  
</div>

<?php
} ?>
</div>
</div>
</section>