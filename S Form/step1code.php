<?php
if (isset($_POST['btn'])) {

    $a = $_POST['name'];
    $b = $_POST['email'];
    $c = $_POST['password'];


    $con = mysqli_connect("localhost", "root", "", "php2024db");


    $ins = "INSERT INTO stp (name, email, password) VALUES ('$a', '$b', '$c')";
    $que = mysqli_query($con, $ins);
    if ($que) {
        $lastid = mysqli_insert_id($con);
        header("location:step2.php?idd=$lastid");
    } 
}
?>