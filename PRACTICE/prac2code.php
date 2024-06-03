<?php

if (isset($_POST['button']));

$a = $_POST['name'];
$b = $_POST['email'];
$c = $_POST['password'];


$con = mysqli_connect("localhost", "root", "", "practice");

$sel = "select * from prac2 where email='$b'";
$r = mysqli_query($con, $sel);
$k = mysqli_fetch_array($r, MYSQLI_BOTH);

if ($k['2'] != $b) {


    $ins = "insert into prac2 (name,email,password) values ('$a', '$b', '$c')";

    if (mysqli_query($con, $ins)) {
        // echo "Success";
        echo "<script>window.location.href='prac2.php';alert('data store')</script>";
    } else {
        // echo "Failed";
        echo "<script>window.location.href='prac2.php';alert('data not store')</script>";
    }

} else {
    echo "Email already exit";
}
?>