<?php 

ob_start();
include '../connect/connectdb.php';
// include '../admin/user.php';
$previous = "window.history.back();";
if(isset($_SERVER['HTTP_REFERER'])) {
    $previous = $_SERVER['HTTP_REFERER'];
}

?>
<?php 
include '../page/header.php'

?>

<section>
    <div class="text-black">
        <?php
								if(isset($_POST["login"])){
	
									$user=$_POST["user"];
									$pass=$_POST["pass"];
									$result=mysqli_query($conn,"SELECT * FROM user WHERE username='$user' AND password='$pass'");
									$row=mysqli_fetch_assoc($result);
                                    if (mysqli_num_rows($result) > 0) {
                                        if ($pass==$row["password"]) {
                                            $_SESSION["login"]=true;
                                        $_SESSION["id"]=$row["id"];
                                        $_SESSION["username"]=$row["username"];
                                        header('Location:../inf/index.php');
                                        
                                        }
                                    }else {
                                    echo 'loiox';
                                    }
									//var_dump($row);
									//die;
									// if($row){
									//   
									// }else{
									// 	echo '<p style="color:red">Tên đăng nhập hoặc mật khẩu không đúng!</p>';
									// }
									}
									?>
        <form class="space-y-6 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" action="<?php echo $_SERVER['PHP_SELF'];?>"
            method="post">
            <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                Đăng Nhập
            </h3>
            <div>
                <label for="email" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Email của
                    bạn</label>
                <input type="text" name="user"
                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    placeholder="trung123" required="" />
            </div>
            <div>
                <label for="password" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Mật khẩu
                    của bạn</label>
                <input type="password" name="pass" placeholder="••••••••"
                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    required="" />
            </div>
            <div class="flex justify-between">
                <div class="flex items-start">
                    <!-- <div class="flex items-center h-5">
                        <input id="remember" aria-describedby="remember" type="checkbox"
                            class="bg-gray-50 border border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800"
                            required="" />
                    </div> -->
                    <!-- <div class="text-sm ml-3">
                        <label for="remember" class="font-medium text-gray-900 dark:text-gray-300">Ghi nhớ mật
                            khẩu</label>
                    </div> -->
                </div>
                <a href="#" class="text-sm text-black hover:underline dark:text-blue-500">Quên mật khẩu?</a>
            </div>

            <input type="submit" name="login"
                class="w-full text-white bg-[#F49B02] hover:bg-[#f49N02] focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 "
                value=" Đăng nhập">

            <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                Chưa có tài khoản?
                <a href="Registration.html" class="text-black hover:underline dark:text-blue-500">Đăng kí tài khoản</a>
            </div>
        </form>
    </div>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>

    <script src="./js/main.js" type="text/javascript"></script>
    <script src="./js/sweetalert.js"></script>
    <script src="./js/login.js" type="text/javascript"></script>
    </body>

    </html>