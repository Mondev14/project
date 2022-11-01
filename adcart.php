<?php 
session_start();
$connect=mysqli_connect("localhost","root","","data");
$id_member=$_SESSION['member_name_login'];
$code=$_POST['adcart'];
$amount=$_POST['amount'];
echo $code,$amount;
// $sql="SELECT*FROM product_phone where product_code=$code";
// $query=mysqli_query($connect,$sql);
// $row=mysqli_fetch_array($query,MYSQLI_BOTH);
// $code1=$row['product_code'];
// $name=$row['pname'];
// $price=$row['price'];
// $img=$row['img'];
// $record="INSERT INTO adcart(code,product_name,price,img,id_member,amount) VALUES($code1,'$name',$price,'$img','$id_member',$amount)";
// $total=mysqli_query($connect,$record);
// if($total){
 
//   header('location:member.php');
//   exit(0);
// }

?>