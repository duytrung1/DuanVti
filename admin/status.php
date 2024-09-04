<?php 

include '../connect/connect.php';
$id1=$_GET['this_id'];
$sqlli="SELECT * FROM pay WHERE id=$id1";
$reszult=mysqli_query($conn,$sqlli);

?>
<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>
<?php
while($row= mysqLi_fetch_array($reszult)){
 
  ?>
<?php
        $id=$row['iduser'];
        $sqll= "SELECT * FROM user WHERE id='$id'";
        $reszultt= mysqli_query($conn,$sqll);
      ?>
<?php
        while($rowa= mysqLi_fetch_array($reszultt)){
          if (isset($_POST['add'])) {
            $this_id=$_GET['this_id'];
            $sqll="DELETE FROM pay WHERE id='$this_id'";
            mysqli_query($conn,$sqll);
          }
          if (isset($_POST['add'])) {
            
            $nameproduct=$row['nameproduct'];
            $image=$row['image'];
            $price=$row['price'];
            $name=$rowa['name'];
            $sdt=$rowa['sdt'];
            $address=$rowa['address'];
            $status=$_POST['status'];
            $query="INSERT INTO status VALUES('',$id,'$nameproduct','$image','$price','$name','$sdt','$address','$status')";
            mysqli_query($conn,$query); 
           echo' <script> location.replace("index1.php"); </script>';
            // header('');
        }
      ?>

<div class="p-4 md:p-5">
    <form class="space-y-4" action="" method="post">
        <div class="flex items-center justify-center">
            <img name="image" type="image" src="<?php echo $row['image']?>" alt="" srcset="">
        </div>
        <div>
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tên sản phẩm</label>
            <input type="text" name="nameproduct"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                required disabled value="<?php echo $row['nameproduct'] ?>" />
        </div>
        <div>
            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Giá</label>
            <input type="text" name="price"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                required disabled value="<?php echo $row['price']?>" />
        </div>

        <div>
            <label for="oldprice" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tên khách
                hàng</label>
            <input type="text" name="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                required disabled value="<?php echo $rowa['name']?>" />
        </div>
        <div>
            <label for="sale" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Số điện thoại</label>
            <input type="text" name="sdt"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                required disabled value="<?php echo $rowa['sdt']?>" />
        </div>
        <div>
            <label for="sale" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Địa chỉ</label>
            <input type="text" name="address"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                required disabled value="<?php echo $rowa['address']?>" />
        </div>
        <div>
            <label for="sale" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Trạng thái</label>
            <input type="text" name="status"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                required value="" />
        </div>

        <div class="flex justify-between">
            <input type="submit" name="add"
                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                value="Xác nhận đơn hàng"></button>

    </form>
    <?php
    
  }
  ?>
    <?php
  }
  ?>