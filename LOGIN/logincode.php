<?php
session_start();

$a = $_POST['email'];
$b = $_POST['pass'];

$con = mysqli_connect("localhost", "root", "", "php2024db");

$sel = "select * from register  where email='$a'";
$r = mysqli_query($con, $sel);
$k = mysqli_fetch_array($r, MYSQLI_BOTH);

if(!empty($k))
{

if ($k['email'] == $a) {
    if ($k['password'] == $b) {
        
        $_SESSION['user']=$a;
        header("location:dashboard.php");
    } else
        echo "Password not matched";
} else {
    echo "EmailID wrong";
}
}
else{
    echo "Data not fetch";
}
?>