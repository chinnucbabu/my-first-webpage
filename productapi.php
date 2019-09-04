<?php

if(isset($_POST['pname']))
{
 
     $productname=$_POST['pname'];

$servrnm="localhost";
$usernm="root";
$password="";
$dbname="product";

$con= new mysqli($servrnm,$usernm,$password,$dbname);
$sql="SELECT `id`, `prdctname`, `avlqty`, `price`, `description`, `model`, `year`, `dealernm` FROM `prdct_dtls` WHERE `prdctname`like '%$productname%'";
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