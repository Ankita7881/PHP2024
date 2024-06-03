<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #A {
            height: 60px;
            width: 80px;
        }
    </style>
</head>

<body>
    <center>
    <table border=2>
        <h1>Show Data</h1>
        <tr>
            <th>Sr No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Gender</th>
            <th>Hobby</th>
            <th>City</th>
            <th>State</th>
            <th>Pin Code</th>
            <th>Address</th>
            <th>Picture</th>
            <th>Thumb Imp</th>
            <th>Certificate</th>
            <th>Delete</th>
        </tr>

        <?php
        $con = mysqli_connect("localhost", "root", "", "php2024db");

        $sel = "select * from task1";
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
                <td><?php echo $k['5'] ?></td>
                <td><?php echo $k['6'] ?></td>
                <td><?php echo $k['7'] ?></td>
                <td><?php echo $k['8'] ?></td>
                <td><?php echo $k['9'] ?></td>
                <td><img id="A" src="img/<?php echo $k['10'] ?>"/></td>
                <td><img id="A" src="img/<?php echo $k['11'] ?>"/></td>
                <td><img id="A" src="img/<?php echo $k['12'] ?>"/></td>
                <th><a href="deletetask1.php?idd=<?php echo $k['0'] ?>">Delete</a></th>
            </tr>

            <?php
            $i++;
        }
        ?>

    </table>
    </center>
</body>

</html>