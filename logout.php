<?php 
session_start();
session_destroy();

echo"<script>alert('ออกจากระบบเรียบร้อยแล้ว')</script>";
header('refresh:0; url=index.php');

?>