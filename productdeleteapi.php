<?php

if(isset($_POST['id']))
{
  $id=$_POST['id'];
     
$servrnm="localhost";
$usernm="root";
$password="";
$dbname="product";

$con= new mysqli($servrnm,$usernm,$password,$dbname);
$sql="DELETE FROM `prdct_dtls` WHERE `id`=$id";
$result=$con->query($sql);

if($result===TRUE){
    $r["status"]= "success";
 }
 else{
     $r["status"]= $con->error;
 }
 echo json_encode($r);
 }
 


}

?>