<?php 
if( !$_SESSION['header_name_login']){
    session_destroy();
    header('location:index.php');
}

?>