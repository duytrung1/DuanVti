<?php 
function checkuser($user,$pass){
    $conn=connectdb();
    $stmt= $conn->prepare("SELECT * FROM user WHERE user='".$user."' AND pass='".$pass."'");
    $stmt->execute();
    $result= $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    if(count($kq)>0) return $kq[0]['role'];
    else return 0;
}
// function getuserinfo($user,$pass){
//     $conn=connectdb();
//     $stmt=mysqli_query($conn,"SELECT * FROM user WHERE user='".$user."' AND pass='".$pass."'");
//     $stmt->execute();
//     $result=$stmt->setFetchMode(PDO::FETCH_ASSOC);
//     $kq=$stmt->fetchAll();
//     return $kq[0]['role'];
// }
?>