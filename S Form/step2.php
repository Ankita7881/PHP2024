<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="step2code.php" method="post" enctype="multipart/form-data">
        <?php
        $getid = $_REQUEST['idd'];
        ?>

        <input type="hidden" value="<?php echo $getid ?>" name="getid" />

        City :
        <select name="city" id="A">
            <option>----Select----</option>
            <option>Lucknow</option>
            <option>Kanpur</option>
            <option>Sultanpur</option>
        </select>

        <br><br>

        Pin Code :
        <input type="number" name="pincode" id="A">

        <br><br>

        Address :<br>
        <textarea name="address" id="A"></textarea>

        <br><br>

        <button name="btn">Submit</button>

    </form>
</body>

</html>