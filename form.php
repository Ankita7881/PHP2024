<?php

if(isset($_POST['save']))
{
$a= $_POST['name'];
$b= $_POST['city'];

$con = mysqli_connect("localhost", "root", "", "php2024db");

$ins = "insert into form (name,city) values ('$a', '$b')";

if (mysqli_query($con,$ins)){
    echo "Success";
}
else{
    echo "Failed";
}

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <h1>Form Page</h1>
    <form action="" method="post">
        Enter Your Name : <input type="text" name="name"> <br><br>
        Enter Your City : <input type="text" name="city"> <br><br>
        <button name="save">Save</button>

    </form>
</body>

</html>