<?php 
session_start();
include_once 'class.user.php';

$user = new User();

if (isset($_POST['submit'])) { 
    extract($_POST);   
    $login = $user->check_login($mobile_no, $password);
    if ($login) {
        header("refresh: 3;");
        header( "location: ../" );
    } else {
        // Registration Failed
        echo 'Wrong username or password';
    }
} 
    
?>