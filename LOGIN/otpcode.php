<?php

$a = $_POST['otp'];

session_start();

$sesid = $_SESSION['user'];

$con = mysqli_connect("localhost", "root", "", "php2024db");

$sel  ="select * from register where email ='$sesid'";
$r = mysqli_query($con, $sel);
$k = mysqli_fetch_array($r, MYSQLI_BOTH);

if($k['otp']==$a){
    header("location:changepass2.php");
}
else{
    echo "OTP not matched";
}

?>