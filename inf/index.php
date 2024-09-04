<?php 
// session_start();
// ob_start();
include '../connect/connect.php';
include '../page/header.php';
$id=$_SESSION["id"];
$sql= "SELECT * FROM user WHERE id='$id'";
$reszult= mysqli_query($conn,$sql);
?>
<?php 


// switch ($_GET['act']) {
//   case 'login':
//     if (isset($_POST['login'])&&($_POST['login'])){
//     $user=$_POST['user'];
//     $pass=$_POST['pass'];
//     $kq=getuserinfo($user,$pass);
//     $role=$kq[0]['role'];
//     if ($role==1) {
//       $_SESSION['role']=$role;
//       header('location:index.php');

//     }else{
//       $_SESSION['role']=$role;
//       $_SESSION['iduser']=$kq[0]['id'];
//       $_SESSION['user']=$kq[0]['user'];
//       header('location:index.php');
//       break;
//     }
//     }
//     break;
  
//   default:
//     # code...
//     break;
// }
  

include '../page/slider.php';
include '../page/slide.php';
?>


    <?php 
    //  <!-- new laptop -->
    include '../body/newlaptop.php';
    // <!-- old laptop -->
    include '../body/oldlaptop.php';
    // <!-- Macbook -->
    include '../body/macbook.php';
    // <!-- Mobile -->
    include '../body/mobile.php';
   
    ?>
     // <!-- service mobile -->
    <section class="flex justify-center items-center text-black">
      <div class="card__container bg-white p-2">
        <div class="text-xl font-bold my-[10px]">DỊCH VỤ ĐIỆN THOẠI</div>

        <div class="grid grid-cols-2 gap-1 lg:grid-cols-4">
          <div
            class="flex flex-col hover:shadow hover:bg-white hover:rounded-lg hover:border-gray-200 hover:boderr"
          >
            <img
              alt="Dịch vụ sửa chữa Vivo"
              class="h-full"
              data-src="https://techcare.vn/image/dich-vu-sua-chua-vivo-92bh188.jpg?s=3"
              src="https://techcare.vn/image/dich-vu-sua-chua-vivo-92bh188.jpg?s=3"
            />

            <div class="product-body">
              <h3 class="product-item-title">
                <a
                  href="/san-pham/dich-vu-sua-chua-vivo/"
                  title="Dịch vụ sửa chữa Vivo"
                  >Dịch vụ sửa chữa Vivo</a
                >
              </h3>
              <div class="product-item-price">
                <p class="price">150,000 đ</p>
                <gh:else>
                  <p class="price"></p>
                </gh:else>
              </div>
            </div>
          </div>
          <div
            class="flex flex-col p-2 hover:shadow hover:bg-white hover:rounded-lg hover:border-gray-200 hover:boderr"
          >
            <img
              alt="Dịch vụ sửa chữa iPhone"
              class="h-full"
              data-src="https://techcare.vn/image/dich-vu-sua-chua-iphone-da-nang-br8mdsx.jpg?s=3"
              src="https://techcare.vn/image/dich-vu-sua-chua-iphone-da-nang-br8mdsx.jpg?s=3"
            />

            <div class="product-body">
              <h3 class="product-item-title">
                <a
                  href="/san-pham/dich-vu-sua-chua-iphone-da-nang/"
                  title="Dịch vụ sửa chữa iPhone"
                  >Dịch vụ sửa chữa iPhone</a
                >
              </h3>
              <div class="product-item-price">
                <p class="price">
                  150,000 đ<span class="bg-red-600 text-white">-57%</span>
                </p>
                <gh:else>
                  <p class="price"></p>
                </gh:else>
                <span class="line-through">350,000 đ</span>
              </div>
            </div>
          </div>
          <div
            class="flex flex-col p-2 hover:shadow hover:bg-white hover:rounded-lg hover:border-gray-200 hover:boderr"
          >
            <img
              alt="Dịch vụ sửa chữa Samsung"
              class="h-full"
              data-src="https://techcare.vn/image/bao-hanh-dien-thoai-samsung-tai-da-nang-o75vdsv.jpg?s=3"
              src="https://techcare.vn/image/bao-hanh-dien-thoai-samsung-tai-da-nang-o75vdsv.jpg?s=3"
            />

            <div class="product-body">
              <h3 class="product-item-title">
                <a
                  href="/san-pham/bao-hanh-dien-thoai-samsung-tai-da-nang/"
                  title="Dịch vụ sửa chữa Samsung"
                  >Dịch vụ sửa chữa Samsung</a
                >
              </h3>
              <div class="product-item-price">
                <p class="price">150,000 đ</p>
                <gh:else>
                  <p class="price"></p>
                </gh:else>
              </div>
            </div>
          </div>
          <div
            class="flex flex-col p-2 hover:shadow hover:bg-white hover:rounded-lg hover:border-gray-200 hover:boderr"
          >
            <img
              alt="Dịch vụ sửa chữa OPPO"
              class="h-full"
              data-src="https://techcare.vn/image/bao-hanh-dien-thoai-oppo-tai-da-nang-o2uddsu.jpg?s=3"
              src="https://techcare.vn/image/bao-hanh-dien-thoai-oppo-tai-da-nang-o2uddsu.jpg?s=3"
            />

            <div class="product-body">
              <h3 class="product-item-title">
                <a
                  href="/san-pham/bao-hanh-dien-thoai-oppo-tai-da-nang/"
                  title="Dịch vụ sửa chữa OPPO"
                  >Dịch vụ sửa chữa OPPO</a
                >
              </h3>
              <div class="product-item-price">
                <p class="price">100,000 đ</p>
                <gh:else>
                  <p class="price"></p>
                </gh:else>
              </div>
            </div>
          </div>
          <div
            class="flex flex-col p-2 hover:shadow hover:bg-white hover:rounded-lg hover:border-gray-200 hover:boderr"
          >
            <img
              alt="Dịch Vụ Sửa Chữa Sony"
              class="h-full"
              data-src="https://techcare.vn/image/bao-hanh-dien-thoai-sony-tai-da-nang-ouibdss.jpg?s=3"
              src="https://techcare.vn/image/bao-hanh-dien-thoai-sony-tai-da-nang-ouibdss.jpg?s=3"
            />

            <div class="product-body">
              <h3 class="product-item-title">
                <a
                  href="/san-pham/bao-hanh-dien-thoai-sony-tai-da-nang/"
                  title="Dịch Vụ Sửa Chữa Sony"
                  >Dịch Vụ Sửa Chữa Sony</a
                >
              </h3>
              <div class="product-item-price">
                <p class="price">100,000 đ</p>
                <gh:else>
                  <p class="price"></p>
                </gh:else>
              </div>
            </div>
          </div>
          <div
            class="flex flex-col p-2 hover:shadow hover:bg-white hover:rounded-lg hover:border-gray-200 hover:boderr"
          >
            <img
              alt="Dịch vụ sửa chữa Xiaomi"
              class="h-full"
              data-src="https://techcare.vn/image/bao-hanh-dien-thoai-xiaomi-tai-da-nang-rfo7dst.jpg?s=3"
              src="https://techcare.vn/image/bao-hanh-dien-thoai-xiaomi-tai-da-nang-rfo7dst.jpg?s=3"
            />

            <div class="product-body">
              <h3 class="product-item-title">
                <a
                  href="/san-pham/bao-hanh-dien-thoai-xiaomi-tai-da-nang/"
                  title="Dịch vụ sửa chữa Xiaomi"
                  >Dịch vụ sửa chữa Xiaomi</a
                >
              </h3>
              <div class="product-item-price">
                <p class="price">150,000 đ</p>
                <gh:else>
                  <p class="price"></p>
                </gh:else>
              </div>
            </div>
          </div>
          <div
            class="flex flex-col p-2 hover:shadow hover:bg-white hover:rounded-lg hover:border-gray-200 hover:boderr"
          >
            <img
              alt="Dịch vụ sửa chữa Realme"
              class="h-full"
              data-src="https://techcare.vn/image/dich-vu-sua-chua-realme-da-nang-9ofkdsr.jpg?s=3"
              src="https://techcare.vn/image/dich-vu-sua-chua-realme-da-nang-9ofkdsr.jpg?s=3"
            />

            <div class="product-body">
              <h3 class="product-item-title">
                <a
                  href="/san-pham/dich-vu-sua-chua-realme-da-nang/"
                  title="Dịch vụ sửa chữa Realme"
                  >Dịch vụ sửa chữa Realme</a
                >
              </h3>
              <div class="product-item-price">
                <p class="price">400,000 đ</p>
                <gh:else>
                  <p class="price"></p>
                </gh:else>
              </div>
            </div>
          </div>
          <div
            class="flex flex-col p-2 hover:shadow hover:bg-white hover:rounded-lg hover:border-gray-200 hover:boderr"
          >
            <img
              alt="Dịch vụ sửa chữa Vsmart"
              class="h-full"
              data-src="https://techcare.vn/image/sua-chua-dien-thoai-vsmart-2xx2dsq.jpg?s=3"
              src="https://techcare.vn/image/sua-chua-dien-thoai-vsmart-2xx2dsq.jpg?s=3"
            />

            <div class="product-body">
              <h3 class="product-item-title">
                <a
                  href="/san-pham/sua-chua-dien-thoai-vsmart/"
                  title="Dịch vụ sửa chữa Vsmart"
                  >Dịch vụ sửa chữa Vsmart</a
                >
              </h3>
              <div class="product-item-price">
                <p class="price">350,000 đ</p>
                <gh:else>
                  <p class="price"></p>
                </gh:else>
              </div>
            </div>
          </div>
          <div
            class="flex flex-col p-2 hover:shadow hover:bg-white hover:rounded-lg hover:border-gray-200 hover:boderr"
          >
            <img
              alt="Thay mặt kính iPhone"
              class="h-full"
              data-src="https://techcare.vn/image/thay-mat-kinh-iphone-tai-da-nang-b2l0dsp.jpg?s=3"
              src="https://techcare.vn/image/thay-mat-kinh-iphone-tai-da-nang-b2l0dsp.jpg?s=3"
            />

            <div class="product-body">
              <h3 class="product-item-title">
                <a
                  href="/san-pham/thay-mat-kinh-iphone-tai-da-nang/"
                  title="Thay mặt kính iPhone"
                  >Thay mặt kính iPhone</a
                >
              </h3>
              <div class="product-item-price">
                <p class="price">150,000 đ<span class="discount">-57%</span></p>
                <gh:else>
                  <p class="price"></p>
                </gh:else>
                <p class="old-price"><span>350,000 đ</span></p>
              </div>
            </div>
          </div>
          <div
            class="flex flex-col p-2 hover:shadow hover:bg-white hover:rounded-lg hover:border-gray-200 hover:boderr"
          >
            <img
              alt="Thay màn hình iPhone"
              class="h-full"
              data-src="https://techcare.vn/image/dich-vu-thay-man-hinh-iphone-tai-da-nang-obzddso.jpg?s=3"
              src="https://techcare.vn/image/dich-vu-thay-man-hinh-iphone-tai-da-nang-obzddso.jpg?s=3"
            />

            <div class="product-body">
              <h3 class="product-item-title">
                <a
                  href="/san-pham/dich-vu-thay-man-hinh-iphone-tai-da-nang/"
                  title="Thay màn hình iPhone"
                  >Thay màn hình iPhone</a
                >
              </h3>
              <div class="product-item-price">
                <p class="price">350,000 đ<span class="discount">-30%</span></p>
                <gh:else>
                  <p class="price"></p>
                </gh:else>
                <p class="old-price"><span>500,000 đ</span></p>
              </div>
            </div>
          </div>
          <div
            class="flex flex-col p-2 hover:shadow hover:bg-white hover:rounded-lg hover:border-gray-200 hover:boderr"
          >
            <img
              alt="Thay Pin iPhone"
              class="h-full"
              data-src="https://techcare.vn/image/thay-pin-iphone-chinh-hang-tai-da-nang-2ba5dsn.jpg?s=3"
              src="https://techcare.vn/image/thay-pin-iphone-chinh-hang-tai-da-nang-2ba5dsn.jpg?s=3"
            />

            <div class="product-body">
              <h3 class="product-item-title">
                <a
                  href="/san-pham/thay-pin-iphone-chinh-hang-tai-da-nang/"
                  title="Thay Pin iPhone"
                  >Thay Pin iPhone</a
                >
              </h3>
              <div class="product-item-price">
                <p class="price">190,000 đ<span class="discount">-36%</span></p>
                <gh:else>
                  <p class="price"></p>
                </gh:else>
                <p class="old-price"><span>300,000 đ</span></p>
              </div>
            </div>
          </div>
          <div
            class="flex flex-col p-2 hover:shadow hover:bg-white hover:rounded-lg hover:border-gray-200 hover:boderr"
          >
            <img
              alt="Thay kính nắp lưng và thay vỏ iPhone Đà Nẵng"
              class="h-full"
              data-src="https://techcare.vn/image/thay-vo-iphone-tai-da-nang-b4f1dsm.jpg?s=3"
              src="https://techcare.vn/image/thay-vo-iphone-tai-da-nang-b4f1dsm.jpg?s=3"
            />

            <div class="product-body">
              <h3 class="product-item-title">
                <a
                  href="/san-pham/thay-vo-iphone-tai-da-nang/"
                  title="Thay kính nắp lưng và thay vỏ iPhone Đà Nẵng"
                  >Thay kính nắp lưng và thay vỏ iPhone Đà Nẵng</a
                >
              </h3>
              <div class="product-item-price">
                <p class="price">300,000 đ</p>
                <gh:else>
                  <p class="price"></p>
                </gh:else>
              </div>
            </div>
          </div>
          <div
            class="flex flex-col p-2 hover:shadow hover:bg-white hover:rounded-lg hover:border-gray-200 hover:boderr"
          >
            <img
              alt="Thay camera iPhone"
              class="h-full"
              data-src="https://techcare.vn/image/thay-camera-iphone-tai-da-nang-bhtmdsl.jpg?s=3"
              src="https://techcare.vn/image/thay-camera-iphone-tai-da-nang-bhtmdsl.jpg?s=3"
            />

            <div class="product-body">
              <h3 class="product-item-title">
                <a
                  href="/san-pham/thay-camera-iphone-tai-da-nang/"
                  title="Thay camera iPhone"
                  >Thay camera iPhone</a
                >
              </h3>
              <div class="product-item-price">
                <p class="price">200,000 đ<span class="discount">-60%</span></p>
                <gh:else>
                  <p class="price"></p>
                </gh:else>
                <p class="old-price"><span>500,000 đ</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    

<div class="fixed md:hidden bottom-0 left-0 z-50 w-full h-16 bg-white border-t border-gray-200 dark:bg-gray-700 dark:border-gray-600">
    <div class="grid h-full max-w-lg grid-cols-4 mx-auto font-medium">
        <button type="button" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
            <svg class="w-5 h-5 mb-2 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
            </svg>
            <span class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">Home</span>
        </button>
        <button type="button" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
            <svg class="w-5 h-5 mb-2 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M11.074 4 8.442.408A.95.95 0 0 0 7.014.254L2.926 4h8.148ZM9 13v-1a4 4 0 0 1 4-4h6V6a1 1 0 0 0-1-1H1a1 1 0 0 0-1 1v13a1 1 0 0 0 1 1h17a1 1 0 0 0 1-1v-2h-6a4 4 0 0 1-4-4Z"/>
                <path d="M19 10h-6a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1Zm-4.5 3.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM12.62 4h2.78L12.539.41a1.086 1.086 0 1 0-1.7 1.352L12.62 4Z"/>
            </svg>
            <span class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">Wallet</span>
        </button>
        <button type="button" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
            <svg class="w-5 h-5 mb-2 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12.25V1m0 11.25a2.25 2.25 0 0 0 0 4.5m0-4.5a2.25 2.25 0 0 1 0 4.5M4 19v-2.25m6-13.5V1m0 2.25a2.25 2.25 0 0 0 0 4.5m0-4.5a2.25 2.25 0 0 1 0 4.5M10 19V7.75m6 4.5V1m0 11.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5ZM16 19v-2"/>
            </svg>
            <span class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">Settings</span>
        </button>
        <button type="button" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
            <svg class="w-5 h-5 mb-2 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
            </svg>
            <span class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">
            <?php 
                if (isset($_SESSION["username"])&&($_SESSION["username"]!="")) {
                    echo $_SESSION["username"];
                };
                ?>
            </span>
        </button>
    </div>
</div>

   <?php
   include '../page/footer.php'
   ?>
  