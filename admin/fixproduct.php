<?php 
include '../connect/connect.php';
$id=$_GET['id'];
$sqlli="SELECT * FROM newlaptop WHERE id=$id";
$reszult=mysqli_query($conn,$sqlli);
// $row_up=mysqli_fetch_assoc($reszult);
if(isset($_POST['plus'])){
  // if ($_FILES['image']['name']=='') {
  //     $image=$row_up['image'];
  //   }else{
  //     $image=$_FILES['image']['name'];
  //     $image_tmp=$_FILE['image']['tmp_name'];
  //     move_uploaded_file($image_tmp,'img/'.$image);
  //   }
//   $hinhanh=basename($_FILES['image']['name']);
//   $target_dir="./img/";
//   $target_file=$target_dir . $hinhanh;
//   move_uploaded_file($_FILES['image']['tmp_name'],$target_file);
$image=$_POST['image'];
  $nameproduct=$_POST['nameproduct'];
  $price=$_POST['price'];
  $sale=$_POST['sale'];
  $oldprice=$_POST['oldprice'];
  $cpu=$_POST['cpu'];
  $gb=$_POST['gb'];
  $ram=$_POST['ram'];
  $inter=$_POST['inter'];
 $query="UPDATE newlaptop SET image='$image',nameproduct='$nameproduct',price='$price',sale='$sale',oldprice='$oldprice',cpu='$cpu',gb='$gb',ram='$ram',inter='$inter' WHERE id=$id";
    mysqli_query($conn,$query);
    header('location:newlaptop.php');
}
?>
<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>
  <?php
while($row= mysqLi_fetch_array($reszult)){
   
  ?>
  <div class="p-4 md:p-5">
                <form class="space-y-4" action="#" method="post"  enctype="multipart/form-data">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tên sản phẩm</label>
                        <input type="text" name="nameproduct"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required value="<?php echo $row['nameproduct'] ?>"/>
                    </div>
                    <div>
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Giá</label>
                        <input type="text" name="price"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required value="<?php echo $row['price']?>"/>
                    </div>
                    <div>
                        <label for="oldprice" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Giá cũ</label>
                        <input type="text" name="oldprice"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required value="<?php echo $row['oldprice']?>"/>
                    </div>
                    <div>
                        <label for="sale" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sale</label>
                        <input type="text" name="sale"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required value="<?php echo $row['sale']?>"/>
                    </div>
                    <div>
                        <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hình ảnh</label>
                        <input type="text" name="image"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required value="<?php echo $row['image']?>"/>
                    </div>
                    <div>
                        <label for="cpu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CPU</label>
                        <input type="text" name="cpu"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required value="<?php echo $row['cpu']?>"/>
                    </div>
                    <div>
                        <label for="gb" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">GB</label>
                        <input type="text" name="gb"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required value="<?php echo $row['gb']?>"/>
                    </div>
                    <div>
                        <label for="ram" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">RAM</label>
                        <input type="text" name="ram"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required value="<?php echo $row['ram']?>"/>
                    </div>
                    <div>
                        <label for="inter" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">INTER</label>
                        <input type="text" name="inter"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required value="<?php echo $row['inter']?>"/>
                    </div>
                    <div class="flex justify-between">
                    <button type="submit" name="plus" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Sửa sản phẩm</button>
                    
                </form>
            </div>
        </div>
    </div>
 <?php 
    
  }?>

  <?php
include('includes/scripts.php');
include('includes/footer.php');
?>