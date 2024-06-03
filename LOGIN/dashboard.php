<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Dashboard Page</h1>

    <?php

    session_start();
    $sesid = $_SESSION['user'];

    $con = mysqli_connect("localhost", "root", "", "php2024db");

    $sel = "select * from register  where email='$sesid'";
    $r = mysqli_query($con, $sel);
    $k = mysqli_fetch_array($r, MYSQLI_BOTH);

    ?>

    <h2>Welcome <?php echo $k['name']; ?> </h2>
    <a href="changepassword.php">Change Password</a><br><br>
    <a href="logout.php">Logout</a><br><br>
    <a href="profile.php">Profile</a><br><br>

</body>

</html>