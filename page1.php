<html>

<head>

</head>

<body>
<form action="" method="post">
    <label for="a">
    Enter Your Details :
    <input type="text" id="a" name="name">
    </label>
    <br><br>
<button name="btn">Submit</button>
</form>    

</body>

</html>


<?php

if(isset($_POST['btn']))
{
$a = $_POST['name'];
// echo "<h1>".$a. "<h1>";
echo "<h1>$a</h1>";
}

?>