<?php

if(isset($_POST['ename']))
{
    $id=$_POST['id'];
$ename=$_POST['ename'];
$des=$_POST['desg'];
$slry=$_POST['slry'];
$plc=$_POST['plc'];
$mobile=$_POST['mob'];
$aninc=$_POST['ainc'];


$servrnm="localhost";
$usernm="root";
$password="";
$dbname="employee";

$con= new mysqli($servrnm,$usernm,$password,$dbname);
$sql="UPDATE `empinfo` SET `id`=$id,`empname`='$ename',`description`='$des',`salary`=$slry,`place`='$plc',`mobile`=$mobile,`anninc`=$aninc WHERE `id`=$id";

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