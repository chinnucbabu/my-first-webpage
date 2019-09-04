<?php

if(isset($_POST['bname']))
{
    $id=$_POST['id'];
$bname=$_POST['bname'];
$price=$_POST['price'];
$descp=$_POST['descp'];
$athr=$_POST['athr'];
$dis=$_POST['dis'];

$servrnm="localhost";
$usernm="root";
$password="";
$dbname="book";

$con= new mysqli($servrnm,$usernm,$password,$dbname);
$sql="UPDATE `book_info` SET `id`=$id,`bookname`='$bname',`price`=$price,`description`='$descp',`author`='$athr',`distributor`='$dis'WHERE `id`=$id";
$result=$con->query($sql);

if($result===TRUE)
{
   $r["status"]= "Success";
}
else
{
    $r["status"]= $con->error;
}
echo json_encode($r);
}
?>