<?php 
session_start();
$_POST['user'];
$_POST['password'];

if($_POST['user']=='supakorn' && $_POST['password']==123){
    $_SESSION['user']=$_POST['user'];
    $_SESSION['password']=$_POST['password'];
    header('location:zo_de.php');
    exit(0);
}




?>