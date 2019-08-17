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
                            <td>Enter a number</td>
                            <td><input type="text" class="form-control" name="num"></td>
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
    </div>
</body>
</html>

<?php
if(isset($_GET['but']))
{
    $n=$_GET['num'];
    if($n%2!=0)
    {
        echo $n." is an odd number" ;
    }
    else
    {
        echo $n." is not an odd number";
    }
}



?>