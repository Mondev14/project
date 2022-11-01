<?php 
session_start();
session_destroy();

header('location:zo_ad.php');
exit(0);


?>