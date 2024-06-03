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
            width: 380px;
            height: 50px;
            box-shadow: rgba(137, 131, 131, 0.08) 3px 0 0 0, rgba(0, 0, 0, 0.1) 0 3px 4px 0;
            border: 2px solid white;
        }

        #A1 {
            box-shadow: rgba(137, 131, 131, 0.08) 3px 0 0 0, rgba(0, 0, 0, 0.1) 0 3px 4px 0;
            border: 2px solid white;
        }

        #main {
            background-color: rgb(212, 109, 7);
            width: 500px;
            height: 80px;
            border-radius: 15px 15px 0px 0px;
            font-size: 30px;
            font-weight: bold;
            color: white;

        }

        #AA {
            height: 550px;
            width: 500px;
            background-color: whitesmoke;
            border-radius: 15px;
            border: 2px solid rgb(219, 213, 213);
        }
    </style>
</head>

<body>
    <center>
        <div id="AA">
            <div id="main"> Quick Enquiry</div>

            <br><br>

            <form action="task2code.php" method="post">
                <input type="text" name="name" required placeholder="Enter Your Name" id="A"><br><br>
                <input type="email" name="email" required placeholder="Enter Your E-mail" id="A"><br><br>
                <input type="text" name="subject" required placeholder="Enter Your Mobile" id="A"><br><br>
                <textarea name="msg" cols="50" rows="6" placeholder="Enter Your Message" id="A1"></textarea><br><br><br>
                <button name="btn">Submit</button>
            </form>
        </div>
    </center>
</body>

</html>