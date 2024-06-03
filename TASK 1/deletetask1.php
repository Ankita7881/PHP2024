<?php

$con = mysqli_connect("localhost", "root", "", "php2024db");


$delid = $_REQUEST['idd'];

$sel = "select * from task1 where id=$delid";
$r = mysqli_query($con, $sel);
$k = mysqli_fetch_array($r, MYSQLI_BOTH);

$path = "img/" . $k['10'];
$path1 = "img/" . $k['11'];
$path2 = "img/" . $k['12'];

$del = "delete from task1 where id=$delid";

if (mysqli_query($con, $del)) {
    unlink($path);
    unlink($path1);
    unlink($path2);
    echo "<script>window.location.href='showtask1.php';alert('data delete')</script>";
    // header("location:showreg.php");
} else {
    echo "<script>window.location.href='showtask1.php';alert('data not delete')</script>";
    // header("location:showreg.php");
}

?>