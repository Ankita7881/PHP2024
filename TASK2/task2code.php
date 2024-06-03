<?php

if (isset($_POST['btn'])) {

$a = $_POST['name'];
$b = $_POST['email'];
$c = $_POST['subject'];
$d = $_POST['msg'];

$con = mysqli_connect("localhost", "root", "", "php2024db");

$ins = "INSERT INTO `task2`(`name`, `email`, `subject`, `message`) VALUES ('$a','$b','$c','$d')";

if (mysqli_query($con, $ins)) {
    // echo "Success";
    echo "<script>window.location.href='task2.php';alert('data store')</script>";
}
else {
echo "<script>window.location.href='task2.php';alert('data not store')</script>";
}

}
?>