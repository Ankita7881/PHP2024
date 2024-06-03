<?php


$a = rand(1, 9);
$b = rand(65, 90);
$c = chr($b);
$d = rand(97, 120);
$e = chr($d);
$f = rand(97, 120);
$g = chr($f);
$h = rand(10, 99);

// echo $a.$c.$e.$g.$h;

if (isset($_POST['submit'])) {


    $cap = $_POST['cap'];
    $cap1 = $_POST['cap1'];

    if ($cap == $cap1) {
        echo "matched";
    } else {
        echo "not matched";
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
    <form action="" method="post">
        <input type="text" readonly name="cap" value="<?php echo $a . $c . $e . $g . $h; ?>"><br><br>
        Enter Captcha <input type="text" name="cap1"><br><br>
        <button name="submit">Check</button>
    </form>
</body>

</html>