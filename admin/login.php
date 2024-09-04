<?php 
include '../connect/connect.php';
?>
<?php
include('includes/header.php'); 
?>




<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-6 col-lg-6 col-md-6">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Login Admin</h1>

                                </div>
                                <?php 
                                if ($_POST) {
                                  $user=$_POST['user'];
                                  $pass=$_POST['pass'];
                                  $result=mysqLi_query($conn,"SELECT * FROM user WHERE username='".$user."' AND password='".$pass."'");
                                  $row=mysqli_fetch_assoc($result);
                                  if($row){
                                    $_SESSION['login']=$row['login'];
                                    header("Location:index1.php");
                                  }else{
                                    echo 'mk sai';
                                  }
                                }
?>
                                <form class="user" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

                                    <div class="form-group">
                                        <input type="text" name="user" class="form-control form-control-user"
                                            placeholder="admin">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="pass" class="form-control form-control-user"
                                            placeholder="Password">
                                    </div>

                                    <button type="submit" name="login" class="btn btn-primary btn-user btn-block">
                                        Login </button>
                                    <hr>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>


<?php
include('includes/scripts.php'); 
?>