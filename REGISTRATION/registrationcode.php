<?php

if (isset($_POST['btn']));

$a = $_POST['name'];
$b = $_POST['email'];
$c = $_POST['password'];
$d = $_POST['city'];

$con = mysqli_connect("localhost", "root", "", "php2024db");

$sel = "select * from register where email='$b'";
$r = mysqli_query($con, $sel);
$k = mysqli_fetch_array($r, MYSQLI_BOTH);

if ($k['2'] != $b) {


    $ins = "insert into register (name,email,password,city) values ('$a', '$b', '$c', '$d')";

    if (mysqli_query($con, $ins)) {
        // echo "Success";
        echo "<script>window.location.href='registration.php';alert('data store')</script>";
    } else {
        // echo "Failed";
        echo "<script>window.location.href='registration.php';alert('data not store')</script>";
    }

} else {
    echo "Email already exit";
}
?>