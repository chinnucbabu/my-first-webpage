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
                        <td>Employee Id</td>
                        <td><input type="number" class="form-control" name="id"></td>
                    </tr>
                    <tr>
                        <td>Employee name</td>
                        <td><input type="text" class="form-control" name="ename"></td>
                    </tr>
                    <tr>
                        <td>Designation</td>
                        <td><input type="text" class="form-control" name="desg"></td>
                    </tr>
                    <tr>
                            <td>Salary</td>
                            <td><input type="text" class="form-control" name="slry"></td>
                    </tr>
                    <tr>
                        <td>Place</td>
                        <td><input type="text" class="form-control" name="plc"></td>
                    </tr>
                    <tr>
                        <td>Mobile</td>
                        <td><input type="text" class="form-control" name="mob"></td>
                    </tr>
                    <tr>
                        <td>Annual Income</td>
                        <td><input type="text" class="form-control" name="ainc"></td>
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
$mname=$_GET['id'];
$dirct=$_GET['ename'];
$actress=$_GET['desg'];
$actor=$_GET['slry'];
$camera=$_GET['plc'];
$producer=$_GET['mob'];
$editing=$_GET['ainc'];


echo "<table class='table'>";
echo "<tr> <td> Employee ID </td> <td> $mname </td> </tr>";
echo "<tr> <td> Employee Name </td> <td> $dirct</td> </tr>";
echo "<tr> <td> Designation </td> <td> $actress </td> </tr>";
echo "<tr> <td> Salary </td> <td> $actor </td> </tr>";
echo "<tr> <td> Place</td> <td> $camera </td> </tr>";
echo "<tr> <td> Mobile </td> <td> $producer </td> </tr>";
echo "<tr> <td> Annual Income </td> <td> $editing </td> </tr>";
echo "</table>";

}

?>