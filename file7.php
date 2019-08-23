<!DOCTYPE html>
<html lang="en">
<head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie List</title>
    <style>
            body{
                background-image: url('./img1.jpg');
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
              <table class="table">
                 <tr>
                   <td>Movie Name</td> 
                   <td><input type="text" class="form-control" name="mname"></td>
                 </tr>
                 <tr>
                        <td>Director</td> 
                        <td><input type="text" class="form-control" name="dirct"></td>
                 </tr>
                 <tr>
                        <td>Actress</td> 
                        <td><input type="text" class="form-control" name="actrs"></td>
                 </tr>
                 <tr>
                        <td>Actor</td> 
                        <td><input type="text" class="form-control" name="actr"></td>
                 </tr>
                 <tr>
                        <td>Camera</td> 
                        <td><input type="text" class="form-control" name="cmra"></td>
                 </tr>
                 <tr>
                        <td>Producer</td> 
                        <td><input type="text" class="form-control" name="prdcr"></td>
                 </tr>
                 <tr>
                        <td>Editing</td> 
                        <td><input type="text" class="form-control" name="edtng"></td>
                 </tr>
                 <tr>
                        <td>Released Year</td> 
                        <td><input type="date" class="form-control" name="ryr"></td>
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

if(isset($_GET['but']))
{
$mname=$_GET['mname'];
$dirct=$_GET['dirct'];
$actress=$_GET['actrs'];
$actor=$_GET['actr'];
$camera=$_GET['cmra'];
$producer=$_GET['prdcr'];
$editing=$_GET['edtng'];
$ryear=$_GET['ryr'];

$servrnm="localhost";
$usernm="root";
$password="";
$dbname="movie";

$con= new mysqli($servrnm,$usernm,$password,$dbname);
$sql="INSERT INTO `movie`( `movie_nm`, `director`, `actress`, `actor`, `camera`, `producer`, `editing`, `relesing_yr`) VALUES ('$mname','$dirct','$actress','$actor','$camera','$producer','$editing','$ryear')";
$result=$con->query($sql);

if($result===TRUE)
  {
       echo "success";
   }
   else 
   {
       echo $con->error;
   
   }
   
/*echo "<table class='table'>";
echo "<tr> <td> Movie Name </td> <td> $mname </td> </tr>";
echo "<tr> <td> Director </td> <td> $dirct</td> </tr>";
echo "<tr> <td> Actress </td> <td> $actress </td> </tr>";
echo "<tr> <td> Actor </td> <td> $actor </td> </tr>";
echo "<tr> <td> Camera</td> <td> $camera </td> </tr>";
echo "<tr> <td> Producer </td> <td> $producer </td> </tr>";
echo "<tr> <td> Editing </td> <td> $editing </td> </tr>";
echo "<tr> <td> Released year </td> <td> $ryear </td> </tr>";
echo "</table>";*/

}

?>

