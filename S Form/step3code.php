<?php
if (isset($_POST['btn'])){
    
    $g=$_FILES['picture'] ['name'];
    $g1=$_FILES['picture'] ['tmp_name'];

    $h=$_FILES['thumbimpression'] ['name'];
    $h1=$_FILES['thumbimpression'] ['tmp_name'];

    $i=$_FILES['certificate'] ['name'];
    $i1=$_FILES['certificate'] ['tmp_name'];

    
    $getid = $_POST['getid'];

    $con=mysqli_connect("localhost","root","","php2024db");
 

    $up = "UPDATE stp SET signature='$g', thumb='$h', certificate='$i' WHERE id=$getid";

    $que=mysqli_query($con,$up);
    if($que){
    header("location:step1.php");
    }
    else{
    echo "data not update";
    }
}
?>