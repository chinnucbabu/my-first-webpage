<?php

if(isset($_GET['ename']))
{

$ename=$_GET['ename'];



$servrnm="localhost";
$usernm="root";
$password="";
$dbname="employee";

$con= new mysqli($servrnm,$usernm,$password,$dbname);
$sql="SELECT `id`, `empname`, `description`, `salary`, `place`, `mobile`, `anninc` FROM `empinfo` WHERE `empname`like'%$ename%'";
$result=$con->query($sql);
if($result->num_rows>0)
{
  $r=array();
while($row=$result->fetch_assoc() )
{
    $r[]=$row;
}
echo json_encode($r);
}
else{
    echo "Invalid Name";
}


}
?>