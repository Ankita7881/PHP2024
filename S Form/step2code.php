<?php
if (isset($_POST['btn'])){
    
    $d=$_POST['city'];
    $e=$_POST['pincode'];
    $f=$_POST['address'];
    
    $getid = $_POST['getid'];

    $con=mysqli_connect("localhost","root","","php2024db");
 

    $up = "UPDATE stp SET city='$d', pincode='$e', address='$f' WHERE id=$getid";

    $que=mysqli_query($con,$up);
    if($que){
    header("location:step3.php?idd=$getid");
    }
    else{
    echo "data not update";
    }
}
?>