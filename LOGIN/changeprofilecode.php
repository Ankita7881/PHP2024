<?php

session_start();
$sesid = $_SESSION['user'];

$con = mysqli_connect("localhost", "root", "", "php2024db");

$a = $_POST['name'];
$b = $_POST['email'];
$c = $_POST['password'];
$d = $_POST['city'];

$up = "update register set name='$a', email='$b', password='$c', city='$d' where email='$sesid'";

if(mysqli_query($con,$up))
{
    header("location:profile.php");
}
else{
    echo "profile not update";
}

?>