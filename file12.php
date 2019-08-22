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
$sql="SELECT  `empname`, `description`, `salary`, `place`, `mobile`, `anninc` FROM `empinfo` WHERE `empname`='$ename'";
$result=$con->query($sql);
if($result->num_rows>0)
{

while($row=$result->fetch_assoc() )
{
    $empname=$row['empname'];
    $d=$row['description'];
    $s=$row['salary'];
    $p=$row['place'];
    $m=$row['mobile'];
    $i=$row['anninc'];

    echo "<table class='table'>";
echo "<tr> <td> Employee Name </td> <td> $empname </td> </tr>";
echo "<tr> <td> Designation</td> <td> $d</td> </tr>";
echo "<tr> <td> Salary</td> <td> $s</td> </tr>";
echo "<tr> <td> Place </td> <td> $p</td> </tr>";
echo "<tr> <td> Mobile </td> <td> $m</td> </tr>";
echo "<tr> <td> Annual Income </td> <td> $i</td> </tr>";
echo "</table>";

}

}
else{
    echo "Invalid Name";
}


}
?>
