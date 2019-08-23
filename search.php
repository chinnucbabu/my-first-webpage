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
            background-image: url('./img5.jpg');
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
    <h2>Marklist</h2>
    <table class="table">
    <tr> 
    <td> Enter Register number</td>
    <td><input type="text" class="form control" name="regno"></td>
    </tr>
    <tr>
                            
     <td><Button class="btn btn-info" type="submit" name="but">Submit</Button></td>
     </tr>
     <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
    </div>
    </table>
    </form>
    </div>
    </div>
    </div>
</body>
</html>

<?php
if(isset($_POST['but']))
{
$regno=$_POST['regno'];

$servname="localhost";
$username="root";
$password="";
$dbname="marklist";


$connection=new mysqli($servname,$username,$password,$dbname);
$sql="SELECT  `name`, `registerno`, `college`, `sem`, `sub1_nm`, `mrk1`, `tot1`, `sub2_nm`, `mrk2`, `tot2`, `sub3_nm`, `mrk3`, `tot3`, `sub4_nm`, `mrk4`, `tot4` FROM `marksheet` WHERE `registerno`=$regno";
$result=$connection->query($sql);
if($result->num_rows>0)
{

while($row=$result->fetch_assoc() ){

    $name=$row['name'];
    $regnum=$row['registerno'];
    $college=$row['college'];
    $sem=$row['sem'];
    $sub1=$row['sub1_nm'];
    $m1=$row['mrk1'];
    $t1=$row['tot1'];
    $sub2=$row['sub2_nm'];
    $m2=$row['mrk2'];
    $t2=$row['tot2'];
    $sub3=$row['sub3_nm'];
    $m3=$row['mrk3'];
    $t3=$row['tot3'];
    $sub4=$row['sub4_nm'];
    $m4=$row['mrk4'];
    $t4=$row['tot4'];

    echo "<table class='table'>";
echo "<tr> <td> Name </td> <td> $name </td> </tr>";
echo "<tr> <td> Register number </td> <td> $regnum</td> </tr>";
echo "<tr> <td> College </td> <td> $college </td> </tr>";
echo "<tr> <td>Semester</td> <td> $sem</td> </tr>";
echo "<tr> <td> Sub1 Name </td> <td> $sub1</td> </tr>";
echo "<tr> <td> Sub1 mark obtained</td> <td> $m1</td> </tr>";
echo "<tr> <td> Total mark</td> <td> $t1</td> </tr>";
echo "<tr> <td> Sub2 Name </td> <td> $sub2</td> </tr>";
echo "<tr> <td> Sub2 mark obtained</td> <td> $m2</td> </tr>";
echo "<tr> <td> Total mark</td> <td> $t2</td> </tr>";
echo "<tr> <td> Sub3 Name </td> <td> $sub3</td> </tr>";
echo "<tr> <td> Sub3 mark obtained</td> <td> $m3</td> </tr>";
echo "<tr> <td> Total mark</td> <td> $t3</td> </tr>";
echo "<tr> <td> Sub4 Name </td> <td> $sub4</td> </tr>";
echo "<tr> <td> Sub4 mark obtained</td> <td> $m4</td> </tr>";
echo "<tr> <td> Total mark</td> <td> $t4</td> </tr>";
echo "</table>";

}

}
else{
    echo "Invalid  Register number";
}


}
?>

