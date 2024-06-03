<?php

$con = mysqli_connect("localhost", "root", "", "php2024db");


$delid = $_REQUEST['idd'];

$ins = "insert into register1(name,email,password,city)
select name,email,password,city from register where id=$delid";

if(mysqli_query($con,$ins))
{

$del = "delete from register where id=$delid";

if (mysqli_query($con, $del)){
    // echo "<script>window.location.href='showreg.php';alert('data delete')</script>";                                       
    header("location:showreg.php");
}
else{
    // echo "<script>window.location.href='showreg.php';alert('data not delete')</script>";
    header("location:showreg.php");
}
}

?>