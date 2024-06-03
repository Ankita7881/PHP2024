<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        h1 {
            font-size: 45px;
            color: blue;
            font-style: normal;

        }

        button {
            background-color: rgb(212, 109, 7);
            color: white;
            border: 2px solid rgb(213, 153, 42);
            height: 50px;
            width: 90px;
            border-radius: 4px;

        }

        #A {
            width: 800px;
            height: 50px;
            box-shadow: rgba(137, 131, 131, 0.08) 3px 0 0 0, rgba(0, 0, 0, 0.1) 0 3px 4px 0;
            border: 2px solid white;
        }
    </style>
</head>

<body>
    <center>
        <h1>Write to Us</h1>
        <h3>For any Queries or Feedback</h3>

        <br>

        <form action="task2code.php" method="post">
            <input type="text" name="name" required placeholder="Name" id="A"><br><br>
            <input type="email" name="email" required placeholder="E-mail" id="A"><br><br>
            <input type="text" name="subject" required placeholder="Subject" id="A"><br><br>
            <textarea name="msg" cols="20" rows="3" required placeholder="Message" id="A"></textarea><br><br>
            <button name="btn">Send</button>
        </form>
    </center>
</body>

</html>