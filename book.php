<!DOCTYPE html>
<html lang="en">
<head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book List</title>
    <style>
            body{
                background-image: url('./img5.jpg');
            }
        </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">

            </div>
            <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                   <form method="POST">
              <table class="table">
                 <tr>
                   <td>Book Name</td> 
                   <td><input type="text" class="form-control" name="bname"></td>
                 </tr>
                 <tr>
                        <td>Price</td> 
                        <td><input type="text" class="form-control" name="price"></td>
                 </tr>
                 <tr>
                        <td>Description</td> 
                        <td><textarea class="form-control" cols="30" rows="3" name="descp"></textarea></td>
                 </tr>
                 <tr>
                        <td>Author</td> 
                        <td><input type="text" class="form-control" name="athr"></td>
                 </tr>
                 <tr>
                        <td>Distributor</td> 
                        <td><input type="text" class="form-control" name="dis"></td>
                 </tr>
                 
                 <tr>
                     <td></td>
                     <td><button class="btn btn-primary" type="submit" name="but">Submit</button></td>
                 </tr>
</table>
</form>
            </div>
            <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">

                </div>

        </div>
    </div>
</body>
</html>


<?php

if(isset($_POST['but']))
{
$bname=$_POST['bname'];
$price=$_POST['price'];
$descp=$_POST['descp'];
$athr=$_POST['athr'];
$dis=$_POST['dis'];

$servrnm="localhost";
$usernm="root";
$password="";
$dbname="book";

$con= new mysqli($servrnm,$usernm,$password,$dbname);
$sql="INSERT INTO `book_info`(`bookname`, `price`, `description`, `author`, `distributor`) VALUES ('$bname',$price,'$descp','$athr','$dis')";
$result=$con->query($sql);

if($result===TRUE)
{
    echo "Success";
}
else
{
    echo $con->error;
}
}
?>