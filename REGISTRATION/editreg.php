<?php

$con = mysqli_connect("localhost", "root", "", "php2024db");

$id = $_REQUEST['idd'];

$sel = "select * from register where id=$id";
$r=mysqli_query($con,$sel);
$k=mysqli_fetch_array($r,MYSQLI_BOTH);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Edit Page</h1>
    <form action="updatereg.php" method="post">

    <input type="hidden" name="id"  value="<?php echo $id ?>"/>
        Name : <input type="text" name="name" value="<?php echo $k['1'] ?>"/><br><br>
        Email : <input type="email" name="email"  value="<?php echo $k['2'] ?>"/><br><br>
        Password : <input type="password" name="password"  value="<?php echo $k['3'] ?>"/><br><br>
        City : <input type="text" name="city"  value="<?php echo $k['4'] ?>"/><br><br>

        <button name="btn">Update</button>

    </form>
</body>
</html>