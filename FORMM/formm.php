<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="formmcode.php" method="post">
        Gender : 
        <input type="radio" name="gnd" value="Male"> Male 
        <input type="radio" name="gnd" value="Female"> Female 

        <br><br>

        City :
        <select name="city">
            <option>Lucknow</option>
            <option>Delhi</option>
            <option>Mumbai</option>
        </select>

        <br><br>

        Course :
        <input type="checkbox" name="chk[]" value="C">C,
        <input type="checkbox" name="chk[]" value="C++">C++,
        <input type="checkbox" name="chk[]" value="Java">Java

        <br><br>

        Address :<br>
        <textarea name="adds"></textarea>

        <br><br>

        <button>Save</button>

    </form>
</body>
</html>