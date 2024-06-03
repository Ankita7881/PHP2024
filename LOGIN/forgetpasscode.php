<?php

session_start();

$a = $_POST['email'];

$con = mysqli_connect("localhost", "root", "", "php2024db");

$sel = "select * from register where email='$a'";
$r = mysqli_query($con, $sel);
$k = mysqli_fetch_array($r, MYSQLI_BOTH);

$otp = rand(1000, 9999);

if ($k['2'] == $a) {

    $up = "update register set otp='$otp' where email='$a'";

    if (mysqli_query($con, $up)) {

        $_SESSION['user']=$a;
        header("location:otp.php");
    } else {
        echo "OTP not Send";
    }

} else {
    echo "Email ID not Matched";
}
?>