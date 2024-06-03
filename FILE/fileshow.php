<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>File Show Page</h1>
    <table border="2">
        <tr>
            <th>ID</th>
            <th>File Name</th>
            <th>Date</th>
            <th>Time</th>
            <th>Edit</th>
        </tr>

        <?php
        $con = mysqli_connect("localhost", "root", "", "php2024db");

        $sel = "select *from filetbl";
        $r = mysqli_query($con, $sel);
        while ($k = mysqli_fetch_array($r, MYSQLI_BOTH)) {
            ?>

            <tr>
                <td><?php echo $k['0'] ?> </td>
                <td><img src="fileimage/<?php echo $k['1'] ?>" height = "100px" width="100px" /></td>
                <td><?php echo $k['2'] ?> </td>
                <td><?php echo $k['3'] ?> </td>
                <td><a href="fileedit.php?idd=<?php echo $k['0'] ?>">Edit</a></td>
            </tr>

            <?php
        }
        ?>
    </table>
</body>

</html>