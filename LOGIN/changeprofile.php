<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Change Profile</h1>

    <?php

    session_start();
    $sesid = $_SESSION['user'];

    $con = mysqli_connect("localhost", "root", "", "php2024db");

    $sel = "select * from register  where email='$sesid'";
    $r = mysqli_query($con, $sel);
    $k = mysqli_fetch_array($r, MYSQLI_BOTH);


    ?>

    <form action="changeprofilecode.php" method="post">
        Name : <input type="text" name="name" value="<?php echo $k['name'] ?>"/><br><br>
        Email : <input type="email" name="email" value="<?php echo $k['email'] ?>"/><br><br>
        Password : <input type="password" readonly name="password" value="<?php echo $k['password'] ?>"/><br><br>
        City : <input type="text" name="city" value="<?php echo $k['city'] ?>"/><br><br>

        <button name="btn">Submit</button>

    </form>
</body>

</html>