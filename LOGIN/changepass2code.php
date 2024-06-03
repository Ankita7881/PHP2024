<?php

$a = $_POST['npass'];
$b = $_POST['cpass'];

session_start();
$sesid = $_SESSION['user'];
$con = mysqli_connect("localhost", "root", "", "php2024db");

if($a==$b){

    $up = "update register set password='$a' where email='$sesid'";

    if (mysqli_query($con, $up)) {

        header("location:login.php");

    } else {
        echo "Password not Change";
    }
}
else{
    echo "New and Confirm Password not matched";
}
?>