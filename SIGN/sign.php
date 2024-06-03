<?php
if(isset($_REQUEST['msg']))
{
    if($_REQUEST['msg']=='success')
    {
        echo "Data Store";
    }

    if($_REQUEST['msg']=='failed')
    {
        echo "Data not Store";
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
    <h1>Sign Up</h1>
<form action="signcode.php" method="post">
        Name : <input type="text" name="name"><br><br>
        Email : <input type="email" name="email"><br><br>
        Password : <input type="password" name="pass"><br><br><br>
        City : <input type="text" name="city"><br><br><br>
        <button>Submit</button>
    </form>
</body>
</html>