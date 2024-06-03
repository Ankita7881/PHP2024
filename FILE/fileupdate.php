<?php

$con = mysqli_connect("localhost", "root", "", "php2024db");

$a = $_FILES['file']['name'];
$b = $_FILES['file']['tmp_name'];

$id = $_POST['id'];

$loc = "fileimage/";

$sel = "select *from filetbl where id=$id";
$r = mysqli_query($con, $sel);
$k = mysqli_fetch_array($r, MYSQLI_BOTH);

$loc1 = "fileimage/".$k['1'];

$up = "update filetbl set name= '$a' where id=$id";

if (mysqli_query($con, $up)) {

    unlink($loc1);
    move_uploaded_file($b, $loc . $a);
    header("location:fileshow.php");
} else {
    "data not save";
}


?>