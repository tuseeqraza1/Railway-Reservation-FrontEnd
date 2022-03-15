<?php 
include_once '../includes/class.user.php';
$user = new User();
// Checking for user logged in or not
    /*if (!$user->get_session())
    {
       header("location:index.php");
    }*/
if (isset($_POST['submit']))
{
    extract($_POST);
    $register = $user->reg_user($full_name,$mobile_no,$emial_id,$cnic_no,$city,$password);
    if ($register) 
    {
        // Registration Success
        //echo "<div style='text-align:center'>Registration successful <a href='login.php'>Click here</a> to login</div>";
        alert("Registration Successful");
        header("location : ../")
    } else {
        // Registration Failed
        //echo "<div style='text-align:center'>Registration failed. Email or Username already exits please try again.</div>";
        alert("Registration failed. Email or Username already exits please try again.");
    }
}
?>