<?php 
session_start();
ob_start();
include '../connect/connect.php';
 $id=$_SESSION["id"];
 $sql= "SELECT * FROM user WHERE id='$id'";
 $reszult= mysqLi_query($conn,$sql);
 $sql1= "SELECT COUNT(id) FROM cart where iduser='$id'";
 $reszult1= mysqLi_query($conn,$sql1);
 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries">
    </script>

    <!-- <link href="./src/output.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />


    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.0.2/css/glide.core.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" /> 
    <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css" /> -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../inf/style.css">
    <script src="../scrips/scrips.js"></script>


</head>
<?php 
while($row= mysqLi_fetch_array($reszult)){


?>


<body class="bg-[#F2F2F2]  data-bs-spy=" scroll" data-bs-target="#navbar" data-bs-root-margin="0px 0px -40%"
    data-bs-smooth-scroll="true">
    <section class="header">
        <div class="flex flex-grow justify-center items-center">
            <div class="lg:flex items-center">
                <div class="grid grid-cols-3 lg:flex items-center">
                    <div class="w-[30px]">
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </button>
                    </div>
                    <div class="justify-end items-end">
                        <a href="../inf/index.php"><img
                                class="w-[180px] h-[37px] lg:h-auto items-center ml-[10px] mr-[10px]"
                                src="https://techcare.vn/image/logo-wzyjo4b.jpg" alt /></a>
                    </div>
                    <div class="ml-[10px] items-end lg:hidden flex justify-end">
                        <i class="fa-solid fa-cart-plus fa-xl my-[10px] mt-[12px] text-white"></i>
                    </div>
                </div>
                <div class="w-auto items-center sm:items-center md:items-center">
                    <div class="relative flex bg-white h-auto lg:h-[37px] lg:w-[350px] ml-[10px] lg:ml-[50px] my-3"
                        data-twe-input-wrapper-init data-twe-input-group-ref>
                        <input
                            class="peer text-black block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[twe-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-white dark:placeholder:text-neutral-300 dark:autofill:shadow-autofill dark:peer-focus:text-primary [&:not([data-twe-input-placeholder-active])]:placeholder:opacity-0"
                            placeholder="sadasdasd" id="search-input" />
                        <button
                            class="relative z-[2] -ms-0.5 bg-black flex items-center rounded-e bg-primary px-5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong"
                            type="button" id="search-button" data-twe-ripple-init data-twe-ripple-color="light">
                            <span class="[&>svg]:h-5 [&>svg]:w-5">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div
                class="lg:flex lg:flex-col hidden items-center text-white hover:bg-[#DD8C01] rounded-lg ml-[20px] mr-[20px]">
                <i class="fa-solid fa-percent fa-xl my-[10px] mt-[12px]"></i>
                <div>
                    <a class="flex flex-col justify-center items-center" title="Khuyến mãi" href="#">
                        <span class="text-center">Khuyến mãi</span></a>
                </div>
            </div>
            <div
                class="lg:flex lg:flex-col hidden items-center text-white hover:bg-[#DD8C01] p-1 rounded-lg ml-[20 px] mr-[20px]">
                <i class="fa-regular fa-file fa-xl my-[10px] mt-[12px]"></i>
                <div class="text-center">
                    <a class="header-item" title="Tin tức" href="/khuyen-mai/">
                        <span class="text-center">Tin tức</span></a>
                </div>
            </div>
            <div
                class="lg:flex lg:flex-col hidden items-center hover:shadow-md  text-white hover:bg-[#DD8C01] p-1 rounded-lg ml-[20 px] mr-[20px]">
                <div class="relative inline-flex">

                    <i class="fa-solid fa-cart-plus fa-xl my-[10px] mt-[12px]"></i>



                    <?php
 
         while($row1= mysqLi_fetch_array($reszult1)){
  
        ?>
                    <span
                        class="absolute rounded-full py-1 px-1 text-xs font-medium content-[''] leading-none grid place-items-center top-[4%] right-[2%] translate-x-2/4 -translate-y-2/4 bg-red-500 text-white min-w-[24px] min-h-[24px]">
                        <?php echo  $row1['COUNT(id)'];?>
                    </span>
                    <?php }?>
                </div>

                <div class="text-center">
                    <a class="header-item" title="Giỏ hàng" href="../class/cart.php">
                        <span class="text-center">Giỏ Hàng</span></a>
                </div>
            </div>
            <div class="lg:flex lg:flex-col hidden">
                <div
                    class="flex hover:bg-[#DD8C01] p-1 rounded-lg text-white items-center justify-center right-1 ml-[20 px] mr-[20px]">
                    <i class="fa-solid fa-phone fa-2xl"></i>

                    <div class="flex flex-col items-center ml-2">
                        <span class="header-label">Gọi mua hàng</span>
                        <a class="header-desc" title="Gọi ngay" href="tel:02363663333" rel="nofollow">0236.366.3333</a>
                    </div>
                </div>

            </div>
            <div class="flex lg:flex hidden justify-center items-center">
                <?php 
                if (isset($_SESSION["username"])&&($_SESSION["username"]!="")) {
                    echo '<div class="">
                    <div class="dropdown dropdown-hover">
                         <div tabindex="0" role="button" class="bg-[#F49B02] hover:bg-[#dd8c01] m-1">'.$_SESSION["username"].'</div>
                        <ul tabindex="0" class="dropdown-content menu bg-[#F49B02] rounded-box z-[1] w-52 p-2 shadow">
                         <li>
                           <a href="#" class="block px-4 py-2 hover:bg-[#dd8c01] dark:hover:bg-[#dd8c01] dark:hover:text-white">Tài khoản</a>
                            </li><li>
                           <a href="#" class="block px-4 py-2 hover:bg-[#dd8c01] dark:hover:bg-[#dd8c01] dark:hover:text-white">Đơn hàng</a>
                            </li>
                              <li>
                                      <a href="../page/logout.php" class="block px-4 py-2 hover:bg-[#dd8c01] dark:hover:bg-[#dd8c01] dark:hover:text-white">Đăng xuất</a>
                                 </li>
                         </ul>
                        </div>
               ';
                }else{
                  ?>
                <div>
                    <button
                        class="text-white hover:bg-[#DD8C01] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center"
                        type="button"><a class="" href="../inf/login.php">Đăng nhập</a>

                    </button>
                </div>


                <?php  }?>

            </div>
        </div>
    </section>


    <!-- <div id="dropdownDelay"
        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDelayButton">
            <li>
                <a href="#"
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Tài khoản</a>
            </li>
            <li>
                <a href="../page/logout.php" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Đăng xuất</a>
            </li>
        </ul>
    </div> -->
    <?php
} ?>