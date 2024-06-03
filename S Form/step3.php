<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="step3code.php" method="post" enctype="multipart/form-data">

        <?php
        $getid = $_REQUEST['idd'];
        ?>

        <input type="hidden" value="<?php echo $getid ?>" name="getid" />

        Signature :
        <input type="file" name="picture" id="A">
        <br><br>

        Thumb Impression :
        <input type="file" name="thumbimpression" id="A">
        <br><br>

        Certificate :
        <input type="file" name="certificate" id="A">
        <br><br>

        <button name="btn">Submit</button>

    </form>
</body>

</html>