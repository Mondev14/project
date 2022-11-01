<?php 
session_start();
require('link.php');
$id_member=$_SESSION['member_name_login'];
$code=$_GET['delete_pd'];

$sql="DELETE FROM adcart WHERE id_member='$id_member' AND code =$code";
$query=mysqli_query($connect,$sql);
if($query){
    header('location:member.php');
    exit(0);
}else{
    echo"<script>alert('ลบข้อมูลไม่สำเร็จ')</script>";
    header('refresh:0; url=member.php');
}




?>