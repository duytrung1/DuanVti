<?php 
include '../connect/connect.php';

$sql= "SELECT * FROM newlaptop ORDER BY id DESC;";
$reszult= mysqLi_query($conn,$sql);
?>
<?php 
if(isset($_POST['plus'])){
  // $hinhanh=basename($_FILES['image']['name']);
  // $target_dir="./img/";
  // $target_file=$target_dir . $hinhanh;
  // move_uploaded_file($_FILES['image']['tmp_name'],$target_file);
  
  $image=$_POST['image'];
  $nameproduct=$_POST['nameproduct'];
  $price=$_POST['price'];
  $sale=$_POST['sale'];
  $oldprice=$_POST['oldprice'];
  $cpu=$_POST['cpu'];
  $gb=$_POST['gb'];
  $ram=$_POST['ram'];
  $inter=$_POST['inter'];
  $query="INSERT INTO newlaptop VALUES('','$image ','$nameproduct','$price','$sale','$oldprice','$cpu','$gb','$ram','$inter')";
  mysqli_query($conn,$query);
  echo ' <script type="text/javascript">
  if( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
  location.reload();</script>';
}
  


?>
<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div>

    <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
        class=" float-right text-white bg-[#F49B02] hover:bg-[#DD8C01] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center"
        type="button">Thêm</a>
    </button>
</div>
<div class="flex justify-center items-center">

    <table class=" text-center">
        <thead>
            <tr class="text-center">
                <th>Hình ảnh</th>
                <th>Tên sản phẩm</th>
                <th>Giá </th>
                <th>Giá cũ </th>
                <th>sale </th>
                <th class="w-[100px]"> Tuỳ chọn </th>
                <th>Tuỳ chọn</th>
            </tr>
        </thead>
        <tbody>
            <?php
while($row= mysqLi_fetch_array($reszult)){
    
        // $query="DELETE FROM newlaptop WHERE id='$ida'"; 
        // mysqli_query($conn,$query);
    
?>

            <tr class="text-center">
                <td class="p-3"><img class="h-[90px]" src="<?php echo $row['image'] ?>" alt="hình ảnh không tồn tại.png"
                        srcset=""></td>
                <td class="p-3"><?php echo $row['nameproduct'] ?></td>
                <td class="p-3"> <?php echo $row['price'] ?></td>
                <td class="p-3"><?php echo $row['oldprice'] ?></td>
                <td class="p-3"> <?php echo $row['sale'] ?></td>
                <td class="p-3"><a href="delete.php?this_id=<?php echo $row['id']?>"><i
                            class="fa-solid fa-trash"></i></a></td>
                <td class="p-3"><a href="fixproduct.php?id=<?php echo $row['id']?>"><i class="fa-solid fa-plus"></i></a>
                </td>
            </tr>

            <?php 
    
}?>

        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
<!-- Modal toggle -->
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
<!-- Main modal -->
<div id="authentication-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3>THÊM SẢN PHẨM MỚI </h3>
                <button type="button"
                    class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="authentication-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <form class="space-y-4" action="#" method="post" enctype="multipart/form-data">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tên sản
                            phẩm</label>
                        <input type="text" name="nameproduct"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            required />
                    </div>
                    <div>
                        <label for="price"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Giá</label>
                        <input type="text" name="price"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            required />
                    </div>
                    <div>
                        <label for="oldprice" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Giá
                            cũ</label>
                        <input type="text" name="oldprice"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            required />
                    </div>
                    <div>
                        <label for="sale"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sale</label>
                        <input type="text" name="sale"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            required />
                    </div>
                    <div>
                        <label for="hinhanh" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hình
                            ảnh</label>
                        <input type="text" name="image"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            required />
                    </div>
                    <div>
                        <label for="cpu"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CPU</label>
                        <input type="text" name="cpu"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            required />
                    </div>
                    <div>
                        <label for="gb" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">GB</label>
                        <input type="text" name="gb"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            required />
                    </div>
                    <div>
                        <label for="ram"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">RAM</label>
                        <input type="text" name="ram"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            required />
                    </div>
                    <div>
                        <label for="inter"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">INTER</label>
                        <input type="text" name="inter"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            required />
                    </div>
                    <div class="flex justify-between">
                        <button type="submit" name="plus"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Thêm
                            sản phẩm</button>

                </form>
            </div>
        </div>
    </div>
</div>