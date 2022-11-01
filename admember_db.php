<?php 
$connect=mysqli_connect("localhost","root","","data");
$user=$_POST["a"];
$password=$_POST["b"];
$name=$_POST["c"];
$tel=$_POST["d"];
echo $user,$password,$name,$tel;
$sql="INSERT INTO admember(user,passwords,names,tel) VALUES('$user',$password,'$name',$tel)";
$query=mysqli_query($connect,$sql);
if($query){
    echo"<script>alert('บันทึกข้อมูลสำเร็จ')</script>";
    header('refresh:0; url=login.php');
}else{
    echo"<script>alert('บันทึกข้อมูลไม่สำเร็จ')</script>";
    header('refresh:0; url=registmember.php');
}
?>