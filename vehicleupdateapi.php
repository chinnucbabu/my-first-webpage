<?php

if(isset($_POST['vno']))
{
    $id=$_POST['id'];
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
$sql="UPDATE `vehicle` SET `id`=$id,`vehicleno`='$vno',`model`='$model',`yr_reg`=$yrreg,`ownername`='$oname',`reg_date`='$regdt',`taxamount`=$tax WHERE `vehicleno`='$vno'";

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