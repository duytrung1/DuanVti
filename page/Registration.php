<?php 
include '../connect/connect.php';

if (isset($_POST['ress'])) {
    $name=$_POST['name'];
    $sdt=$_POST['sdt'];
    $address=$_POST['address'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $duplicate=mysqLi_query($conn, "SELECT * FROM user WHERE   username='$username' AND email='$email'");
    if (mysqli_num_rows($duplicate)>0) {
        echo 'sai';
    }else{
        $query="INSERT INTO user VALUES('','$name','$sdt','$address','$username','$email','$pass','0')";
        mysqli_query($conn,$query);
        header('location:../inf/login.php');
    }
}
?>
<?php 
include '../page/header.php'

?>
<section class="my-2 text-black">
    <div class="  bg-white flex p-[20px]  flex-col">
        <div class="">
            <form class="space-y-6 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" action="#" method="post">
                <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                    Đăng kí
                </h3>
                <div>
                    <label for="email" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Họ và tên</label>
                    <input type="text" name="name" id="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="Phạm Duy Trung" required="" />
                </div>
                <div>
                    <label for="text" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Số điện thoại</label>
                    <input type="number" name="sdt" id="sdt"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="0943424589" required="" />
                </div>
                <div>
                    <label for="email" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Địa chỉ</label>
                    <input type="text" name="address" id="address"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="18 Võ Văn Kiệt,Phước Mỹ, Sơn Trà" required="" />
                </div>
                <div>
                    <label for="text" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Tên tài khoản</label>
                    <input type="text" name="username" 
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="0943424589" required="" />
                </div>
                <div>
                    <label for="email" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Email của
                        bạn</label>
                    <input type="email" name="email" id="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="name@company.com" required="" />
                </div>
                <div>
                    <label for="password" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Mật
                        khẩu của bạn</label>
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
                <input type="submit" name="ress" onclick=""
                    class="w-full text-white bg-[#F49B02] hover:bg-[#f49N02] focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 " value="Đăng kí">
            </form>
        </div>
    </div>
</section>
<script src="./js/Register.js" type="text/javascript"></script>
<script src="./js/sweetalert.js" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
</body>

</html>