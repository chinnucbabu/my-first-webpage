<!DOCTYPE html>
<html lang="en">
<head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            background:  #e67e22;
        }
        </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">

            </div>
            <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
            <form method="GET">
    <table>
<tr> 
<td>NAME</td>    
<td>  <input type="text" name="name"> </td>
</tr>


<tr>
    <td>Roll Number</td>
    <td> <input type="text" name="roll"> </td>
</tr>

<tr>
    <td> </td>
    <td><Button type="submit" class="btn btn-info" name="but">SUBMIT</Button> </td>
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
$num=$_GET['name'];
$roll=$_GET['roll'];

echo "<table class='table'>";
echo "<tr> <td> NAME </td> <td> $num </td> </tr>";
echo "<tr> <td> Rollno </td> <td> $roll </td> </tr>";
echo "</table>";

}

?>