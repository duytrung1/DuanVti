<?php 
include '../connect/connect.php';
// $_SESSION["id"]=$id;
$sql="SELECT * FROM `status` WHERE iduser=4";
$reszult=mysqLi_query($conn,$sql);
?>
<?php
 while($rowi= mysqLi_fetch_array($reszult)){
    
?>

<div class="flex flex-col">
    <div class="bg-white mt-2 p-2">

        <div class="flex justify-end h-[50px]">Chờ xác nhận</div>
        <div class="flex ">
            <img class="h-[100px] w-[100px]" src="<?php echo $rowi['image']?>" class="gQuHsZ" alt tabindex="0">
            <div class="flex items-center ml-2">
                <div>
                    <div class="zWrp4w"> <?php echo $rowi['nameproduct']?></div>
                </div>

            </div>

        </div>
        <div class="flex justify-end" tabindex="0">
            <div class="YRp1mm">
                <span class="text-red-500">15.800đ</span>
            </div>
        </div>
        <div class="flex justify-end">
            <div>Thành Tiền :</div>
            <div class="text-red-500">15.800đ</div>
        </div>
        <div class="flex justify-end  "><button
                class="bg-[#F49B02] h-[30px] w-[50px] text-white font-bold ">Huỷ</button>
        </div>
    </div>
</div>
<?php }?>