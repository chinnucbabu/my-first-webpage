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
           <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">

           </div>
           <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
               <form method="POST">
                <table class="table">
                    <tr>
                        <td>Enter a number</td>
                        <td><input type="text" class="form-control" name="num"></td>
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
</body>
</html>

<?php
if(isset($_POST['but']))
{

$i=$_POST['num'];
$r=0;
while($i>1)
{
    $s=$i%10;
    $r=($r*10)+$s;
    $i=($i/10);
}
echo "The reverse of the number is " . $r;
}
?>