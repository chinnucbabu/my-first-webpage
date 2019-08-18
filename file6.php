<!DOCTYPE html>
<html lang="en">
<head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            background-image: url('./back.jpg');
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <h1>LOGIN</h1>
                <form method="GET">
                    <table class="table">
                            <tr>
                                <td>Username</td>
                                <td><input type="text" class="form-control" name="usr"></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><input type="password" class="form-control" name="pass">
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><Button class="btn btn-primary" name="btn">Login</Button></td>
                            </tr>
                        </table> 
                        </form>
            </div>
            <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 ">
            <h2>Register</h2>
            <form method="GET">
            <table class="table" >
                    <tr>
                        <td>Name</td>
                        <td><input type="text" class="form-control" name="name" ></td>
                    </tr>
                    <tr>
                            <td>Address</td>
                            <td>
                           <textarea class="form-control" cols="30" rows="5" name="addrs"></textarea>
                            
                            </td>
                        </tr>
                        <tr>
                                <td>District</td>
                                <td>
                                <select class="form-control" name="dist">

                                        <option value="Pathanamthitta">Pathanamthitta</option>
                        
                                        <option value="Alappuzha">Alappuzha</option>
                        
                                      </select>
                                      </td>
                            </tr>
                            <tr>
                                    <td>Mobile</td>
                                    <td><input type="text" class="form-control" name="mob"></td>
                                </tr>
                                <tr>
                                        <td>Username</td>
                                        <td><input type="text" class="form-control" name="usrnm"></td>
                                    </tr>
                                    <tr>
                                        <td>Password</td>
                                        <td><input type="password" class="form-control" name="pswd"></td>
                                    </tr>
                                    <tr>
                                        <td>Confirm Password</td>
                                        <td><input type="password" class="form-control" name="cnfrm"></td>
                                    </tr>
                                    <tr>
                                        <td><Button class="btn btn-success" type="reset" name="rst">Clear</Button></td>
                                        <td><Button class="btn btn-secondary" type="submit" name="but">Register</Button></td>
                                    </tr>
                                    </table>
                                    </form>
            </div>
        </div>
    </div>
</body>
</html>


<?php

if(isset($_GET['btn']))
{
$usr=$_GET['usr'];
$pass=$_GET['pass'];

echo "<table class='table'>";
echo "<tr> <td> Username </td> <td> $usr </td> </tr>";

echo "</table>";

}
if(isset($_GET['but']))
{
$name=$_GET['name'];
$adrs=$_GET['addrs'];
$dist=$_GET['dist'];
$mob=$_GET['mob'];
$usr=$_GET['usrnm'];
$pass=$_GET['pswd'];

echo "<table class='table'>";
echo "<tr> <td> Name </td> <td> $name </td> </tr>";
echo "<tr> <td> Address </td> <td> $adrs </td> </tr>";
echo "<tr> <td> District </td> <td> $dist </td> </tr>";
echo "<tr> <td> Mobile </td> <td> $mob </td> </tr>";
echo "<tr> <td> Username</td> <td> $usr </td> </tr>";
echo "<tr> <td> Password </td> <td> $pass </td> </tr>";

echo "</table>";

}
?>