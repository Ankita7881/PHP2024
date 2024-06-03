<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            height: 40px;
        }
    </style>
</head>

<body>
    <table border=2>
        <h1>Show Data</h1>
        <tr>
            <th>Sr No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>City</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>

        <?php
        $con = mysqli_connect("localhost", "root", "", "php2024db");

        $sel = "select * from register";
        $r = mysqli_query($con, $sel);
        $i = 1;
        while ($k = mysqli_fetch_array($r, MYSQLI_BOTH)) {

            ?>

            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $k['1'] ?></td>
                <td><?php echo $k['2'] ?></td>
                <td><?php echo $k['3'] ?></td>
                <td><?php echo $k['4'] ?></td>
                <th><a href="deletereg.php?idd=<?php echo $k['0'] ?>">Delete</a></th>
                <th><a href="editreg.php?idd=<?php echo $k['0'] ?>">Edit</a></th>
            </tr>

            <?php
            $i++;
        }
        ?>

    </table>


    <table border="1">
        <tr>
            <th>Sr No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>City</th>
            <th>Recycle</th>
        </tr>
        <?php
        $sell = "select * from register1";
        $r1 = mysqli_query($con, $sell);
        while ($k1 = mysqli_fetch_array($r1, MYSQLI_BOTH)) {
            ?>
            <tr>
                <td><?php echo $k1['0'] ?></td>
                <td><?php echo $k1['1'] ?></td>
                <td><?php echo $k1['2'] ?></td>
                <td><?php echo $k1['3'] ?></td>
                <td><?php echo $k1['4'] ?></td>
                <td><a href="recycle.php?id=<?php echo $k1['0'] ?>">Re-Cycle</a></td>
            </tr>

        <?php
        }
        ?>
    </table>
</body>

</html>