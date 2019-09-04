<?php

if(isset($_POST['pname']))
{
$id=$_POST['id'];
$pname=$_POST['pname'];
$avl=$_POST['aqnt'];
$price=$_POST['price'];
$desc=$_POST['des'];
$model=$_POST['model'];
$yr=$_POST['yr'];
$dlrnm=$_POST['dname'];


$servrnm="localhost";
$usernm="root";
$password="";
$dbname="product";

$con= new mysqli($servrnm,$usernm,$password,$dbname);
 $sql= "UPDATE `prdct_dtls` SET `id`=$id,`prdctname`='$pname',`avlqty`=$avl,`price`=$price,`description`='$desc',`model`='$model',`year`='$yr',`dealernm`='$dlrnm' WHERE `id`=$id";

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