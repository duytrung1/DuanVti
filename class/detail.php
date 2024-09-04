<script src="https://cdn.tailwindcss.com"></script>

<?php 
include '../page/header.php' ?>
<?php
include '../connect/connect.php';

$id=$_GET['this_id'];
$sql= "SELECT * FROM newlaptop WHERE id='$id'";
$reszult= mysqLi_query($conn,$sql);

?>

<?php
while($row= mysqLi_fetch_array($reszult)){
    if (isset($_POST['addcart'])) {
        $iduser= $_SESSION["id"];
        $nameproduct=$row['nameproduct'];
        $image=$row['image'];
        $price=$row['price'];
        $quality=$_POST['amount'];
        $total=$row['price'] * $quality;
        $cpu=$row['cpu'];
        $gb=$row['gb'];
        $ram=$row['ram'];
        $inter=$row['inter'];

       
        if(isset($_SESSION["username"])&&($_SESSION["username"]!="")) {
            $query="INSERT INTO cart VALUES('','$iduser','$nameproduct','$image','$price','$total','$quality','$cpu','$gb','$ram','$inter')";
            mysqli_query($conn,$query);
            $_SESSION["total"]=$total;
            header('location:../class/cart.php');
       } else {
        header('location:../inf/login.php');
       }
       

      
    }
?>

<section class="flex justify-center items-center text-black">
    <div class="card__container  bg-white p-1">
        <form action="" method="post">
            <div class="grid grid-cols-2">
                <div class="flex flex-col ">
                    <div class="w-[500px] ">
                        <input class="w-[500px]" name="image" type="image" src="<?php echo $row['image'] ?>" alt="">
                    </div>
                    <div class=" flex ">
                        <div class="f-thumbs__slide p-3 is-nav-selected" data-index="0"><button
                                class="f-thumbs__slide__button" tabindex="0" type="button" aria-label="Go to slide #1"
                                data-carousel-index="0"><img class="w-[50px]" alt=""
                                    src="https://techcare.vn/image/dell-gaming-g15-5530-2023-1-9hx3e0f.jpg?s=1"
                                    style=""></button></div>
                        <div class="f-thumbs__slide p-3 is-nav-selected" data-index="0"><button
                                class="f-thumbs__slide__button" tabindex="0" type="button" aria-label="Go to slide #1"
                                data-carousel-index="0"><img class="w-[50px]" alt=""
                                    src="https://techcare.vn/image/dell-gaming-g15-5530-2023-1-9hx3e0f.jpg?s=1"
                                    style=""></button></div>
                        <div class="f-thumbs__slide p-3 is-nav-selected" data-index="0"><button
                                class="f-thumbs__slide__button" tabindex="0" type="button" aria-label="Go to slide #1"
                                data-carousel-index="0"><img class="w-[50px]" alt=""
                                    src="https://techcare.vn/image/dell-gaming-g15-5530-2023-1-9hx3e0f.jpg?s=1"
                                    style=""></button></div>
                        <div class="f-thumbs__slide p-3 is-nav-selected" data-index="0"><button
                                class="f-thumbs__slide__button" tabindex="0" type="button" aria-label="Go to slide #1"
                                data-carousel-index="0"><img class="w-[50px]" alt=""
                                    src="https://techcare.vn/image/dell-gaming-g15-5530-2023-1-9hx3e0f.jpg?s=1"
                                    style=""></button></div>

                    </div>
                </div>

                <div>
                    <div class="">
                        <h1 class="text-xl font-semibold"><input class="bg-white" type="name" disabled="disabled"
                                name="name" value="<?php echo $row['nameproduct'] ?>"></h1>
                        <div class="product-reviews-summary">
                            <p class="rating">
                                <span class="rating-box">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star"></i>
                                    <span style="width:0.0%"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i></span>
                                </span>
                                <a class="rating-value link-scroll" title="Xem đánh giá" href="#reviewcontent"
                                    rel="nofollow">(0 đánh
                                    giá)</a>
                            </p>
                            <span class="product-code">Mã SP: </span>
                            <span class="products-sold">Đã mua: 0</span>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="product-item-price">

                            <input class="bg-white" type="name" disabled="disabled" name="test" name=""
                                value=" <?php echo $row['price'] ?> ₫"><br>
                            <input class="bg-white" type="text " disabled="disabled" name=""
                                value="<?php echo $row['oldprice'] ?>">
                            ₫</span><span class="discount">-<<input type="name" name="sale" disabled="disabled"
                                    value="<?php echo $row['sale'] ?>"></input>
                        </div>
                    </div>
                    <div> Cấu hình:</div>
                    <div class="product-option-item attribute-value active" data-parent="1" data-id="2">
                        <div class="flex">
                            <input class="w-[110px] bg-white" type="name" disabled="disabled" name="cpu" id=""
                                value="<?php echo $row['cpu'] ?>">
                            <input class="w-[40px] bg-white" type="name" disabled="disabled" name="gp" id=""
                                value="<?php echo $row['gb'] ?>">
                            <input class="w-[80px] bg-white" type="name" disabled="disabled" name="ram" id=""
                                value="<?php echo $row['ram'] ?>">
                            <input class="bg-white" type="name" disabled="disabled" name="inter" id=""
                                value="<?php echo $row['inter'] ?>">
                        </div>

                        <div class="price bg-white"><input class="w-[80px] bg-white" type="name" disabled="disabled"
                                name="price" id="" value="<?php echo $row['price'] ?> ₫">
                            <input class="bg-white" type="name" disabled="disabled" name="oldprice"
                                value="<?php echo $row['oldprice'] ?> ₫">
                        </div>
                    </div>

                    <div class="product-panel">
                        <div class="product-number">
                            <span>Số lượng: </span>
                            <div class="flex my-2">
                                <button onclick="handleminPlus()" id="tang"
                                    class=" border-solid border-2  h-[40px] w-[40px] text-[120%] border-[#ddd] hover:bg-[#ddd] "
                                    title="Giảm">-</button>
                                <input type="text" id="amount" name="amount"
                                    class="form-control text-center border-solid border-2 border-[#ddd] h-[40px] w-[60px]"
                                    data-field="quantity" maxlength="4" value="1" min="1" max="9999">
                                <button onclick="handlePlus()"
                                    class="border-solid border-2  h-[40px] w-[40px] text-[120%] border-[#ddd] hover:bg-[#ddd]"
                                    type="button" title="Tăng">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-2">
                        <div class="col-lg-3">

                            <div class=" btn-bigbuynow flex flex-col items-center"><input type="submit" name="addcart"
                                    value="MUA NGAY"><span class="label">Giao
                                    hàng
                                    miễn
                                    phí
                                    toàn quốc</span></div>
                        </div>
                        <div class="col-lg-2">
                            <div class="btn-bigaddcart flex flex-col items-center"><button><input type="submit"
                                        value="THÊM VÀO GIỎ HÀNG"><span class="label">Mua thêm sản phẩm
                                        khác</span></button></div>
                        </div>
        </form>
    </div>
    <div class="product-promotion">
        <div class="product-promotion-header">
            <i class="fas fa-gift"></i>
            <span>Ưu đãi tại TechCare</span>
        </div>
        <div class="product-promotion-body detail-content">
            <ul>
                <li>Bảo dưỡng, bảo trì máy <strong style="color:#0000ff">trọn đời</strong></li>
                <li>BH: <strong style="color:#0000ff">12 tháng</strong> tuỳ từng dòng sản phẩm <a
                        href="https://techcare.vn/chinh-sach-bao-hanh-laptop/" title="Chính sách bảo hành">(Xem
                        chi tiết)</a></li>
                <li>Mua hàng từ xa COD: Nhận hàng trước, Thanh toán sau, Miễn phí ship</li>
                <li>Dùng thử miễn phí <strong style="color:#0000ff">10 ngày</strong> – Hoàn tiền nếu
                    máy có
                    lỗi</li>
                <li>Tặng Balo/Cặp đựng laptop cao cấp trị giá <strong style="color: #ff3300;">300k</strong>,
                    chuột không dây trị giá <strong style="color: #ff3300;">200k</strong>, tấm lót
                    chuột
                    trị giá <strong style="color: #ff3300;">50k</strong>, bộ sạc cáp zin</li>
                <li>Giảm <strong style="color: #ff3300;">200k</strong> cho ngày sinh nhật của khách
                    hàng</li>
                <li>Giảm <strong style="color: #ff3300;">200k</strong> cho học sinh, sinh viên và
                    giáo
                    viên</li>
                <li>Giảm <strong style="color: #ff3300;">200k</strong> khách hàng đã mua máy hoặc được
                    khách hàng cũ giới thiệu</li>
                <li>Giảm <strong style="color: #ff3300;">20%</strong> khi mua phụ kiện điện thoại và
                    laptop
                </li>
                <li>Trả góp lãi suất <strong style="color: #ff3300;">0%</strong> qua thẻ tín dụng
                </li>
            </ul>
        </div>
    </div>
    </div>
    </div>

    </div>

    </div>
</section>
<script src="../scrips/scrips.js"></script>

<?php
} ?>

<!-- <div id="authentication-modal" aria-hidden="true"
    class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
    <div class="relative w-full max-w-md px-4 h-full md:h-auto">
        Modal content
        <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
            <div class="flex justify-end p-2">
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                    data-modal-toggle="authentication-modal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <form class="space-y-6 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" action="#">
                <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                    Đăng nhập
                </h3>
                <div>
                    <label for="email" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Email của
                        bạn</label>
                    <input type="email" name="email" id="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="name@company.com" required="" />
                </div>
                <div>
                    <label for="password" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Mật
                        khẩu của
                        bạn</label>
                    <input type="password" name="password" id="password" placeholder="••••••••"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        required="" />
                </div>
                <div class="flex justify-between">
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="remember" aria-describedby="remember" type="checkbox"
                                class="bg-gray-50 border border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800"
                                required="" />
                        </div>
                        <div class="text-sm ml-3">
                            <label for="remember" class="font-medium text-gray-900 dark:text-gray-300">Ghi nhớ mật
                                khẩu</label>
                        </div>
                    </div>
                    <a href="#" class="text-sm text-black hover:underline dark:text-blue-500">Quên mật khẩu?</a>
                </div>
                <button type="submit" id="login" onclick=""
                    class="w-full text-white bg-[#F49B02] hover:bg-[#f49N02] focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Đăng nhập
                </button>
                <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                    Chưa có tài khoản?
                    <a href="Registration.html" class="text-black hover:underline dark:text-blue-500">Tạo tài khoản</a>
                </div>
            </form>
        </div>
    </div>
</div> -->
<?php
include '../page/footerbotom.php'
?>