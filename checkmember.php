<?php 
if( !$_SESSION['member_name_login']){
    session_destroy();
    header('location:index.php');
}

?>