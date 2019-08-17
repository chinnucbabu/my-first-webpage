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
                background-image: url('./img3.jpg');
            }
        </style>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
            <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
<form method="GET">




                    <table class="table">
                        <tr>
                            <td>Number1</td>
                            <td><input type="text" class="form-control" name="num1"></td>
                        </tr>
                        <tr>
                            <td>Number2 </td>
                            <td><input type="text" class="form-control" name="num2"></td>
                        </tr>
                        <tr>
                            <td>Number3 </td>
                            <td><input type="text" class="form-control" name="num3"></td>
                        </tr>
                        <tr>
                                 <td><Button type="submit" class="btn btn-info" name="but">Submit</Button></td>
                        </tr>
                        </table>

                    </form>
        </div>
        <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">

            </div>
    </div>
</body>
</html>

<?php
if(isset($_GET['but']))
{
    $no1=$_GET['num1'];
    $no2=$_GET['num2'];
    $no3=$_GET['num3'];
    if($no1>$no2)
    {
        if($no1>$no3)
        {
            echo $no1. " is the largest number ";
        }
        else
    {
        echo $no3. " is the largest number";
    }
    }
    else if($no2>$no3)
    {
        echo $no2. " is the largest number";
    }
    else
    {
        echo $no3. " is the largest number";
    }
}
?>