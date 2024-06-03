<?php

$a = $_FILES['img'] ['name'];
echo $a;
echo "<br>";

$b = $_FILES['img'] ['tmp_name'];
echo $b;
echo "<br>";

$c = $_FILES['img'] ['type'];
echo $c;
echo "<br>";

$d = $_FILES['img'] ['size'];
echo $d;


$con = mysqli_connect("localhost","root","","php2024db");

$date = date("d/m/Y");
date_default_timezone_set("asia/kolkata");
$time = date("h:i:sa");

$loc  = "fileimage/";

$ins = "insert into filetbl (name, date, time)
values('$a', '$date', '$time')";

if(mysqli_query($con,$ins)){
    move_uploaded_file($b, $loc.$a);
    header("location:fileshow.php");
    }
    else{
    echo "data not save";
    }

?>