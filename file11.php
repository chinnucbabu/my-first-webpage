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
            <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
 <form method="POST">
 <table class="table">
 <tr>
                        <td>Enter Admission number</td>
                        <td><input type="text" class="form-control" name="adno"></td>
                    </tr>
                    <tr>
                            
                            <td><Button class="btn btn-info" type="submit" name="but">Submit</Button></td>
                    </tr>
 </table>
 </form>
 <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">

            </div>
            </div>

</body>
</html>



<?php

if(isset($_POST['but']))
{
$admsn=$_POST['adno'];

$servname="localhost";
$username="root";
$password="";
$dbname="college";


$connection=new mysqli($servname,$username,$password,$dbname);
$sql="SELECT  `name`, `rollno`, `admissionno`, `college` FROM `students` WHERE `admissionno`=$admsn";
$result=$connection->query($sql);
if($result->num_rows>0)
{

while($row=$result->fetch_assoc() ){

    $name=$row['name'];
    $rollnum=$row['rollno'];
    $admsnnum=$row['admissionno'];
    $college=$row['college'];

    echo "<table class='table'>";
echo "<tr> <td> Name </td> <td> $name </td> </tr>";
echo "<tr> <td> Rollnumber </td> <td> $rollnum</td> </tr>";
echo "<tr> <td> Admission nuber </td> <td> $admsnnum</td> </tr>";
echo "<tr> <td> College </td> <td> $college </td> </tr>";
echo "</table>";

}

}
else{
    echo "Invalid Admission  number";
}


}
?>
