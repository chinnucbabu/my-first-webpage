<?php

if(isset($_GET['sname']))
{
 
     $studentname=$_GET['sname'];

$servrnm="localhost";
$usernm="root";
$password="";
$dbname="college";

$con= new mysqli($servrnm,$usernm,$password,$dbname);
$sql="SELECT `id`, `name`, `rollno`, `admissionno`, `college` FROM `students` WHERE `name`= '$studentname'";
$result=$con->query($sql);
if($result->num_rows>0)
{
  $r=array();
while($row=$result->fetch_assoc() )
{
    $r["result"][]=$row;
}
 echo json_encode($r);
}
else{
    echo "Invalid Name";
}


}

?>