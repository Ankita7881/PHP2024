<?php

$a = $_POST['name'];
$b = $_POST['email'];
$c = $_POST['pass'];
$d = $_POST['city'];

$date = date("d/m/Y");

date_default_timezone_set("asia/kolkata");

$time = date("h:i:sa");

$datetime = $date . "  " . $time;

$con = mysqli_connect("localhost", "root", "", "php2024db");

$ins = "insert into signup(name, email, password, city,datetime)
values('$a', '$b', '$c', '$d', '$datetime')";

if (mysqli_query($con, $ins)) {

  $ins1 = "insert into signin(email, password, datetime)
  values('$b', '$c', '$datetime')";

  if(mysqli_query($con,$ins1)){

    // echo "All OK";
    header("location:sign.php?msg=success");
  }
  else{
    // echo "Data not saved";
    header("location:sign.php?msg=failed");
  }
} 
else {
    echo "Data not store";
}

?>