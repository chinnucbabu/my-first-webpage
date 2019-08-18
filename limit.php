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
<form method="POST">




                    <table class="table">
                        <tr>
                            <td>Initial value</td>
                            <td><input type="number" class="form-control" name="num1" min="1" max="10"></td>
                        </tr>
                        <tr>
                            <td>Final value</td>
                            <td><input type="number" class="form-control" name="num2" min="90" max="100"></td>
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
if(isset($_POST['but']))
{
    $fnum=$_POST['num1'];
    $snum=$_POST['num2'];
    for($i=$fnum;$i<=$snum;$i++)
    {
        $count=0;
        for($j=1;$j<=$i;$j++)
        {
            
            if(($i%$j)==0)
        
            {
                
               $count++;
            }
        }
        if($count==2)
    {
        echo $i;
        echo "<br>";
    }
    }
}

?>