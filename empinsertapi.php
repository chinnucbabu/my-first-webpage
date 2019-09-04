<?php

if(isset($_GET['ename']))
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
    $r["status"]="success";
}
else{
    $r["status"]= $con->error;

}
echo json_encode($r);
}

?>