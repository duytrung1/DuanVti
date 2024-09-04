<?php 
session_start();
ob_start();
include '../connect/connect.php';
$sql= "SELECT MAX(id) FROM user;";
$reszult= mysqLi_query($conn,$sql);

$sql1="SELECT * FROM pay";
$reszult1=mysqli_query($conn,$sql1);


?>
<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>
<?php 

?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tổng quan</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Tổng số khách hàng đã đăng ký</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
              
 <?php
 
 while($row= mysqLi_fetch_array($reszult)){
  
 ?>
 
     <h4 class="h5 mb-0 font-weight-bold text-gray-800">Tổng số : <?php echo  $row['MAX(id)'];?></h4>
               <?php
              } ?>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Doanh Thu</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                </div>
                <div class="col">
                  <div class="progress progress-sm mr-2">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Yêu cầu đang chờ xử lý</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-comments fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="flex justify-center items-center">
  
  <table class=" text-center">
    <thead>
      <tr class="text-center">
      <th></th>
      <th></th>
      <th></th>
      <th></th>
      <th></th>
      <th></th>
      
      </tr>
    </thead>
    <tbody>
   <?php
    while($row1= mysqLi_fetch_array($reszult1)){
      $id=$row1['iduser'];
      $sqll= "SELECT * FROM user WHERE id='$id'";
      $reszultt= mysqli_query($conn,$sqll);
      ?>
      

      <tr class="text-center">
      <?php
        while($rowa= mysqLi_fetch_array($reszultt)){
      ?>
      
        <td class="p-3" ><i class="fa-solid fa-check rounded-full bg-[#9C6993]" style="color: white;"></i>Đơn hàng mới</td>
        <td class="p-3" ><?php echo $rowa['name'] ?></td>
        <td class="p-3" ><?php echo $rowa['sdt'] ?></td>  
        <td class="p-3" ><?php echo $rowa['address'] ?></td>
        <?php }?>
        <td class="p-3" ><?php echo $row1['nameproduct'] ?></td>
        <td class="p-3" ><a href="status.php?this_id=<?php echo $row1['id']?>">Chi tiết</a></td>
       
        
      </tr>
    <?php }?>
      </tbody>
  </table></div>

  <!-- Content Row -->








  <?php
include('includes/scripts.php');
// include('includes/footer.php');
?>