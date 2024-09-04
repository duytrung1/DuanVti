<?php 
include '../connect/connect.php';

include '../page/header.php';
$_SESSION["id"]=$id;
$sql="SELECT * FROM cart WHERE iduser=$id";
$reszult=mysqLi_query($conn,$sql);
?>


<title>Giỏ Hàng của bạn</title>
<section class="flex justify-center items-center text-black my-[5px] bg-white ">
    <div class="container">
        <div class="flex flex-col bg-white h-[100px] justify-center ">
            <div class="flex  ">
                <div class=" flex ml-2 items-baseline">
                    <div class="my-2 ml-2"><svg height="13" viewBox="0 0 12 16" width="12"
                            class="shopee-svg-icon icon-location-marker">
                            <path
                                d="M6 3.2c1.506 0 2.727 1.195 2.727 2.667 0 1.473-1.22 2.666-2.727 2.666S3.273 7.34 3.273 5.867C3.273 4.395 4.493 3.2 6 3.2zM0 6c0-3.315 2.686-6 6-6s6 2.685 6 6c0 2.498-1.964 5.742-6 9.933C1.613 11.743 0 8.498 0 6z"
                                fill-rule="evenodd"></path>
                        </svg></div>
                    <h2 class="text-xl ml-2">Địa chỉ nhận hàng</h2>
                </div>
            </div>
            <div class="flex">
                <div>

                    <div class="flex ml-2">
                        <?php 
                        $sqli="SELECT * FROM user WHERE id=$id";
                        $reszulti=mysqLi_query($conn,$sqli);
                        while($rowi= mysqLi_fetch_array($reszulti)){
                        ?>
                        <div class="PzGLCh"><?php echo $rowi['name']; echo '(+84)'; echo $rowi['sdt'];?></div>
                        <div class="text-center ml-5"><?php echo $rowi['address'] ?></div>
                        <?php } ?>
                        <div class="ml-2 boderr border-red-600 text-red-600 text-xs text-center p-[2px]">Mặc Định</div>
                    </div>
                </div><button class="text-[#4080ef] ml-2">Thay đổi</button>
            </div>

        </div>


        <div class="bg-white my-2">
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Sản phẩm
                            </th>

                            <th scope="col" class="px-6 py-3 text-center">
                                Đơn giá
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Số lượng
                            </th>
                        </tr>
                    </thead>
                    <?php
      $subtotal=0;
while($row= mysqLi_fetch_array($reszult)){
    if (isset($_POST['pay'])) {
        $iduser= $_SESSION["id"];
        $nameproduct=$row['nameproduct'];
        $image=$row['image'];
        $price=$row['price'];
        $query="INSERT INTO pay VALUES('','$iduser','$nameproduct','$image','$price')";
        mysqli_query($conn,$query);
        $sqll="DELETE FROM cart WHERE iduser='$id'";
        mysqli_query($conn,$sqll);
    }
?>

                    <form action="" method="post">
                        <table class="flex flex-nowrap bg-white">
                            <tbody>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <div class="flex ">
                                            <input class="w-[70px] " name="image" type="image"
                                                src="<?php echo $row['image'] ?>" alt="">
                                            <div>
                                                <input class="w-[300px] ml-2 bg-white" type="name" disabled="disabled"
                                                    name="name" value="<?php echo $row['nameproduct']?>">
                                                <div class="attribute" data-field="attrname"><span
                                                        class="btn text-white bg-[#f49b02] ml-2 w-[560px] text-wrap"><?php echo $row['cpu'], $row['gb'], $row['ram'], $row['inter'] ?></span>
                                                </div>
                                                <div data-field="delete "><i class="fa fa-times-circle ml-2"></i><a
                                                        href="delete.php?this_id=<?php echo $row['id']?>">Xoá</a></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="grid grid-cols-2 justify-content-between">
                                            <div class="price-number ">
                                                <div class="">
                                                    <input class="bg-white" type="name" disabled="disabled" name="name"
                                                        value="<?php echo number_format( $row['price']) ?>đ">
                                                    <p class="old-price" data-field="oldprice">25,800,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="input-group spinner w-[200px] ml-[60px]" data-field="quantity">
                                            <button class="btn" type="button">-</button>
                                            <input type="text" class="form-control"
                                                value="<?php echo $row['Quantity'] ?>">
                                            <button class="btn" type="button">+</button>
                                        </div>
                                    </td>

                                </tr>
                        </table>
                        </br>

                        <?php 
           $subtotal += $row['total'];   
    }
       ?>
                        <div class="total-price flex justify-between"><strong>Tổng giá sản phẩm : </strong><strong
                                class="flex justify-end"
                                data-field="total"><?php ;echo number_format($subtotal);?>đ</strong></div>

                        <div class="form-group" data-field="PaymentMethodId">
                            <label class="form-check-label"><input type="radio" name="radPayment" value="1"
                                    checked="checked" data-target=".cart-bank">Thanh toán tiền mặt (COD)</label>
                            <label class="form-check-label"><input type="radio" name="radPayment" value="2"
                                    data-target=".cart-bank">Chuyển khoản ngân hàng</label>

                        </div>

                        <div class="form-group">
                            <button class="btn text-white bg-[#f49b02] btn-order"><input type="submit" name="pay"
                                    value="ĐẶT HÀNG NGAY" title="Đặt hàng ngay"></button>
                        </div>
                    </form>
            </div>
        </div>

        </<section>