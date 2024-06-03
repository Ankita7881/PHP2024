<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    
</head>

<body style=" background-color: plum;">
    <div class="container">
        <div class="row column-bg mt-2">
            <div class="col-lg-6"><img src="girl-login.jpg" alt="img" height="600px" class="w-100 px-4 py-5">
            </div>
            <div class="col-lg-6 mt-5">
                 <h6 style="text-align: right;" class="mt-5">Not A Member? <a href="#">Register Now</a></h6>
                 <h3 style="text-align: center;" class="mt-5">Hello Again!!!</h3>   
                 <p style="text-align: center;color: black;">Welcome back you have been missed!</p>
                 
                 <center><form action="prac2code.php" method="post">
                    <center><input type="text" name="name" placeholder="Enter Name" required style=" border: grey; border-radius: 10px; height: 50px; text-align: center;" class="mt-2 w-75"></center>
                    <center><input type="email" name="email" placeholder="Enter Username" required style=" border: grey;  border-radius: 10px; height: 50px;text-align: center;" class="mt-2 w-75"></center> 
                    <center><input type="password" name="password" placeholder="Enter Password" required style=" border: grey; border-radius: 10px; height: 50px; text-align: center;" class="mt-2 w-75"></center>
                    <p style="text-align: right;" class="mt-1 px-5"><a href="" style="color: black;">Recovery Password</a></p>
                    <center><button name="button" class="btn btn-danger">Sign In</button></center>

                    <!-- <input type="text" name="name" placeholder="Enter Name" required style=" border: grey; border-radius: 10px; height: 50px; text-align: center;" class="mt-2 w-75"><br><br>
                    <input type="email" name="email" placeholder="Enter Email" required style=" border: grey; border-radius: 10px; height: 50px; text-align: center;" class="mt-2 w-75"><br><br>
                    <input type="password" name="password" placeholder="Enter password" required style=" border: grey; border-radius: 10px; height: 50px; text-align: center;" class="mt-2 w-75"><br><br> 
                    <button name="button" class="btn btn-danger">Submit</button> -->
                 </form></center>
            </div>
        </div>
    </div>  
</body>


</html>