<?php
session_start();
$connect=mysqli_connect("localhost","root","","data");
$user=$_POST['user'];
$password=$_POST['passwords'];

if(isset($_POST['login']) && $user && $password){
   $query="SELECT*FROM admember WHERE user = '$user' AND passwords = '$password' ";
   $result=mysqli_query($connect,$query);

   if(mysqli_num_rows($result)==1){
$row=mysqli_fetch_array($result);
$name=$row['user'];
$level=$row['level'];

// switch($level){
//     case "header" :
//         $_SESSION['header_name_login']=$name;
//         header('location:admin.php');
//         break;
//         case "admin" :
//             $_SESSION['admin_name_login']=$name;
//             header('location:dashboard.php');
//             break;
//             case "member" :
//                 $_SESSION['admin_name_login']=$name;
//                 header('location:dashboard.php');
//                 break;
//                 default:
//                 echo"<script>alert('สถานะของคุณถูกแก้ไข')</script>";
//                 header('refresh:0; url=index.php');

// }
if($level =='header'){
    $_SESSION['header_name_login']=$name;
           header('location:header.php');
}elseif($level=='admin'){
    $_SESSION['member_name_login']=$name;
    header('location:member.php');
}elseif($level=='member'){
    $_SESSION['membe_name_login']=$name;
    header('location:dashboard.php');
}else{
    echo"<script>alert('สถานะของคุณถูกแก้ไข')</script>";
                   header('refresh:0; url=index.php');
}


   }else{

    echo"<script>alert('ซื่อผู้ใช้')</script>";
    header('refresh:0; url=index.php');
   }

}else{ 
    echo"<script>alert('รหัสผ่านไม่ถูกต้อง')</script>";
    header('refresh:0; url=index.php');
};
?>