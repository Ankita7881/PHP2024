<?php

if (isset($_POST['btn'])) {

    $a = $_POST['name'];
    // echo $a;
// echo "<br>";
    $b = $_POST['email'];
    // echo $b;
// echo "<br>";
    $c = $_POST['password'];
    // echo $c;
// echo "<br>";
    $d = $_POST['gender'];
    // echo $d;
// echo "<br>";
    $e = implode(',', $_POST['hobby']);
    // echo $e;
// echo "<br>";
    $f = $_POST['city'];
    // echo $f;
// echo "<br>";
    $g = $_POST['state'];
    // echo $g;
// echo "<br>";
    $h = $_POST['pincode'];
    // echo $h;
// echo "<br>";
    $i = $_POST['address'];
    // echo $i;
// echo "<br>";
    $j = $_FILES['picture']['name'];
    $j1 = $_FILES['picture']['tmp_name'];
    // echo $j;
// echo "<br>";
    $k = $_FILES['thumbimpression']['name'];
    $k1 = $_FILES['thumbimpression']['tmp_name'];
    // echo $k;
// echo "<br>";
    $l = $_FILES['certificate']['name'];
    $l1 = $_FILES['certificate']['tmp_name'];

    // echo $l;
// echo "<br>";



    $con = mysqli_connect("localhost", "root", "", "php2024db");

    $loc = "img/";

    $ins = "INSERT INTO `task1`(`name`, `email`, `password`, `gender`, `hobby`, `city`, `state`, `pincode`, 
`address`, `picture`, `thumbimpression`, `certificate`) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l')";

    if (mysqli_query($con, $ins)) {
        // echo "Success";
        move_uploaded_file($j1, $loc . $j);
        move_uploaded_file($k1, $loc . $k);
        move_uploaded_file($l1, $loc . $l);
        echo "<script>window.location.href='task1.php';alert('data store')</script>";
    }
} else {
    echo "<script>window.location.href='task1.php';alert('data not store')</script>";
}
?>