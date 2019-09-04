<?php

if(isset($_POST['id']))
{
  $id=$_POST['id'];
     
$servrnm="localhost";
$usernm="root";
$password="";
$dbname="vehicle";

$con= new mysqli($servrnm,$usernm,$password,$dbname);

$checksql="SELECT * FROM vehicle WHERE id=$id";
$res=$con->query($checksql);

if($res->num_rows>0)
{

$sql="DELETE FROM `vehicle` WHERE `id`=$id";
$result=$con->query($sql);

if($result===TRUE){
    $r["status"]= "success";
 }
 else{
    $r["status"]= $con->error;
}
}
 else{
     $r["status"]= "invalid vehicle no";
 }
 echo json_encode($r);
 }
 




?>