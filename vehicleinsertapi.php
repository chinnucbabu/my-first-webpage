<?php

if(isset($_POST['vno']))
{
$vno=$_POST['vno'];
$model=$_POST['model'];
$yrreg=$_POST['yrreg'];
$oname=$_POST['oname'];
$regdt=$_POST['regdt'];
$tax=$_POST['tax'];


$servrnm="localhost";
$usernm="root";
$password="";
$dbname="vehicle";

$con= new mysqli($servrnm,$usernm,$password,$dbname);
 $sql= "INSERT INTO `vehicle`(`vehicleno`, `model`, `yr_reg`, `ownername`, `reg_date`, `taxamount`) VALUES('$vno','$model',$yrreg,'$oname','$regdt',$tax)";

$result=$con->query($sql);


if($result===TRUE){
   $r["status"]= "success";
}
else{
    $r["status"]= $con->error;
}
echo json_encode($r);
}

?>