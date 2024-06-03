<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>File Edit Page</h1>
    <?php
    $id = $_REQUEST['idd'];

    $con = mysqli_connect("localhost", "root", "", "php2024db");

    $sel = "select *from filetbl where id=$id";
    $r = mysqli_query($con, $sel);
    $k= mysqli_fetch_array($r,MYSQLI_BOTH);
    ?>
    <form action="fileupdate.php" method="post" enctype="multipart/form-data">
       <img src="fileimage/<?php echo $k['1'] ?>" height = "100px" width="100px" /><br>
       <input type="hidden" name="id" value="<?php echo $k['0'] ?>"/> <br>
       Choose New File <input type="file" name="file"/><br>
       <button>Update</button>
    </form>
</body>
</html>