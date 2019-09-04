<?php

if(isset($_POST['adno']))
{
  $adno=$_POST['adno'];
     
$servrnm="localhost";
$usernm="root";
$password="";
$dbname="student";

$con= new mysqli($servrnm,$usernm,$password,$dbname);

$checksql="SELECT * FROM `student` WHERE `admissionno`=$adno";
$res=$con->query($checksql);

if($res->num_rows>0)
{




$sql="DELETE FROM `student` WHERE `admissionno`=$adno";
$result=$con->query($sql);

if($result===TRUE){
    $r["status"]= "success";
 }
 else{
    $r["status"]= $con->error;
}
}
 else{
     $r["status"]= "invalid admission number";
 }
 echo json_encode($r);
 }
 




?>