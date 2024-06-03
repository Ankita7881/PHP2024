<?php

$id = $_POST['id'];

$a = $_POST['name'];
$b = $_POST['email'];
$c = $_POST['password'];
$d = $_POST['city'];

$con = mysqli_connect("localhost", "root", "", "php2024db");

$upd = "update register set name='$a', email='$b', password='$c', city='$d' where id=$id";

if (mysqli_query($con, $upd)) {
    header("location:showreg.php");
}



?>