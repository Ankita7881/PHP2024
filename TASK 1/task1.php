<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        #A {
            width: 500px;
        }

        #A1{
            width: 200px;
        }

        #main {
            background-color: whitesmoke;
            width: 700px;
        }
    </style>
</head>

<center>

    <body>
        <div id="main">
            <br>
            <h1><u>Register Page</u></h1>
            <form action="taskcode1.php" method="post" enctype="multipart/form-data">
                Name : <input type="text" name="name" id="A"><br><br>
                Email : <input type="email" name="email" id="A"><br><br>
                Password : <input type="password" name="password" id="A"><br><br><br>

                Gender :
                Male<input type="radio" name="gender" value="Male">
                Female<input type="radio" name="gender" value="Female"> 

                <br><br>

                Hobby : 
                <input type="checkbox" name="hobby[]" value="Singing">Singing,
                <input type="checkbox" name="hobby[]" value="Dancing">Dancing,
                <input type="checkbox" name="hobby[]" value="Cricket">Cricket

                <br><br><br>

                City :
                <select name="city" id="A">
                    <option>----Select----</option>
                    <option>Lucknow</option>
                    <option>Kanpur</option>
                    <option>Sultanpur</option>
                </select>

                <br><br>

                State :
                <select name="state" id="A">
                    <option>----Select----</option>
                    <option>Uttar Pradesh</option>
                    <option>Bhopal</option>
                    <option>Mumbai</option>
                </select>

                <br><br>

                Pin Code :
                <input type="number" name="pincode" id="A">

                <br><br>

                Address :<br>
                <textarea name="address" id="A"></textarea>

                <br><br>

                Picture :
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
            <br><br>
        </div>
    </body>
</center>

</html>