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
            background-image: url('./img2.jpg');
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">

            </div>
            <div class="col">
                <form method="GET">
                <table class="table">
                    <tr>
                        <td>Product Name</td>
                        <td><input type="text" class="form-control" name="pname"></td>
                    </tr>
                    <tr>
                        <td>Available Quantity</td>
                        <td><input type="number" class="form-control" name="aqnt"></td>
                    </tr>
                    <tr>
                        <td>Price</td>
                        <td><input type="text" class="form-control" name="price"></td>
                    </tr>
                    <tr>
                        <td>Description</td>
                        <td><textarea class="form-control" cols="30" rows="3" name="des"></textarea></td>
                    </tr>
                    <tr>
                        <td>Model</td>
                        <td><input type="text" class="form-control" name="model"></td>
                    </tr>
                    <tr>
                        <td>Year</td>
                        <td><input type="date" class="form-control" name="yr"></td>
                    </tr>
                    <tr>
                        <td>Dealer Name</td>
                        <td><input type="text" class="form-control" name="dname"></td>
                    </tr>
                    <tr>
                            <td><Button class="btn btn-success" type="reset">Reset</Button></td>
                            <td><Button class="btn btn-info" type="submit" name="but">Submit</Button></td>
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

if(isset($_GET['but']))
{
$pname=$_GET['pname'];
$avl=$_GET['aqnt'];
$price=$_GET['price'];
$desc=$_GET['des'];
$model=$_GET['model'];
$yr=$_GET['yr'];
$dlrnm=$_GET['dname'];


$servrnm="localhost";
$usernm="root";
$password="";
$dbname="product";

$con= new mysqli($servrnm,$usernm,$password,$dbname);
 $sql= "INSERT INTO `prdct_dtls`( `prdctname`, `avlqty`, `price`, `description`, `model`, `year`, `dealernm`) VALUES('$pname',$avl,$price,'$desc','$model','$yr','$dlrnm')";

$result=$con->query($sql);


if($result===TRUE){
    echo "success";
}
else{
    echo $con->error;}

}

?>