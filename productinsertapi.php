<?php

if(isset($_GET['pname']))
{
$pname=$_GET['pname'];
$avl=$_GET['aqnt'];
$price=$_GET['price'];
$desc=$_GET['des'];
$model=$_GET['model'];
$yr=$_GET['yr'];
$dlrnm=$_GET['dname'];


$servrnm="localhost";
$usernm="root";
$password="";
$dbname="product";

$con= new mysqli($servrnm,$usernm,$password,$dbname);
 $sql= "INSERT INTO `prdct_dtls`( `prdctname`, `avlqty`, `price`, `description`, `model`, `year`, `dealernm`) VALUES('$pname',$avl,$price,'$desc','$model','$yr','$dlrnm')";

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