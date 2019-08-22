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

$ename=$_GET['ename'];
$des=$_GET['desg'];
$slry=$_GET['slry'];
$plc=$_GET['plc'];
$mobile=$_GET['mob'];
$aninc=$_GET['ainc'];


$servrnm="localhost";
$usernm="root";
$password="";
$dbname="employee";

$con= new mysqli($servrnm,$usernm,$password,$dbname);
$sql="INSERT INTO `empinfo`(`empname`, `description`, `salary`, `place`, `mobile`, `anninc`) VALUES ('$ename','$des',$slry,'$plc',$mobile,$aninc) ";

$result=$con->query($sql);


if($result===TRUE){
    echo "success";
}
else{
    echo $con->error;

}
}

?>