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
               <form method="POST">
                <table class="table">
                    
                    <tr>
                        <td>Employee name</td>
                        <td><input type="text" class="form-control" name="ename"></td>
                    </tr>
                    
                    <tr>
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

if(isset($_POST['but']))
{

$ename=$_POST['ename'];



$servrnm="localhost";
$usernm="root";
$password="";
$dbname="employee";

$con= new mysqli($servrnm,$usernm,$password,$dbname);
$sql="SELECT `id`, `empname`, `description`, `salary`, `place`, `mobile`, `anninc` FROM `empinfo` WHERE `empname`='$ename'";
$result=$con->query($sql);
if($result->num_rows>0)
{

while($row=$result->fetch_assoc() )
{
    $id=$row['id'];
    $empname=$row['empname'];
    $d=$row['description'];
    $s=$row['salary'];
    $p=$row['place'];
    $m=$row['mobile'];
    $i=$row['anninc'];

    echo "<form method='POST'> <table class='table'>";
 
echo "<tr> <td> Employee Name </td> <td> <input type='text' value='$empname' class='form-control' name='empnm' />  </td> </tr>";
echo "<tr> <td> Designation</td> <td> <input type='text' value='$d' class='form-control' name='dsgn' /></td> </tr>";
echo "<tr> <td> Salary</td> <td> <input type='text' value='$s' class='form-control' name='slry' /></td> </tr>";
echo "<tr> <td> Place </td> <td> <input type='text' value='$p' class='form-control' name='plc' /></td> </tr>";
echo "<tr> <td> Mobile </td> <td> <input type='text' value='$m' class='form-control' name='mob' /></td> </tr>";
echo "<tr> <td> Annual Income </td> <td><input type='text' value='$i' class='form-control' name='inc' /></td> </tr>";
echo "<tr> <td> </td> <td> <Button class='btn btn-info' type='submit' name='btn' value='$id'>Submit</Button></td></tr>";
echo "</table> </form>";

}

}
else{
    echo "Invalid Name";
}


}

if(isset($_POST['btn']))
{

    $id=$_POST['btn'];
     $ename=$_POST['empnm'];
     $desgn=$_POST['dsgn'];
    $slry=$_POST['slry'];
    $plc=$_POST['plc'];
    $mob=$_POST['mob'];
    $inc=$_POST['inc'];

    $servrnm="localhost";
    $usernm="root";
    $password="";
    $dbname="employee";

   $con= new mysqli($servrnm,$usernm,$password,$dbname);
   $sql="UPDATE `empinfo` SET `empname`='$ename',`description`='$desgn',`salary`=$slry,`place`='$plc',`mobile`=$mob,`anninc`=$inc WHERE `id`=$id";
   $result=$con->query($sql);


    if($result===TRUE)
     {
        echo "success";
     }
   else
    {
       echo $con->error;

    }
}

?>
