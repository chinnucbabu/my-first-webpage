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
    background : #e67e22;
}
.mytable{
    background: green;
    margin-top: 300px;
    margin-left: 200px;

}

    </style>
</head>

<body>
   
    <div class="container">

        <div class="row">

            <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 ">
                   </div>
<div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 ">
        <form method="GET">
        <table class="table"> 
                <tr>
                    <td>name</td>
                    <td><input type="text" class="form-control" name="name"></td>
                </tr>
                <tr>
                    <td>rollno</td>
                    <td><input type="text" class="form-control" name="roll"></td>
                </tr>
                <tr>
                    <td>admission number</td>
                    <td><input type="text" class="form-control" name="admsn"></td>
                </tr>
                <tr>
                    <td>college</td>
                    <td><input type="text" class="form-control" name="colg"></td>
                </tr>
               
         
               
                <tr>
                    <td>
         
                    </td>
                    <td><BUtton class="btn btn-info" name="but">SUBMIT</BUtton></td>
                </tr>
                <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 ">
                   </div>
            </table> 
</form>
</div>

        </div>
    </div>

</body>
</html>

<?php
if(isset($_GET['but']))
{
$name=$_GET['name'];
$roll=$_GET['roll'];
$admsn=$_GET['admsn'];
$col=$_GET['colg'];

$servname="localhost";
$username="root";
$password="";
$dbname="college";


$connection=new mysqli($servname,$username,$password,$dbname);


$sql="INSERT INTO `students`( `name`, `rollno`, `admissionno`, `college`) VALUES ('$name',$roll,$admsn,'$col') ";


$result= $connection->query($sql);

if($result===TRUE){
    echo "success";
}
else{
    echo $connection->error;}
}

?>