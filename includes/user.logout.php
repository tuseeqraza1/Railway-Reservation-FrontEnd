<?php 
session_start();
include_once 'class.user.php';

$user = new User();

if (isset($_SESSION['login'])) {  

    if($user->user_logout()) {
        echo '<script type="text/javascript"> window.location.assign("index.php"); </script>';
    }
}
?>