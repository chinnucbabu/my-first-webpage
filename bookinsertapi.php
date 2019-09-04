<?php

if(isset($_GET['bname']))
{
$bname=$_GET['bname'];
$price=$_GET['price'];
$descp=$_GET['descp'];
$athr=$_GET['athr'];
$dis=$_GET['dis'];

$servrnm="localhost";
$usernm="root";
$password="";
$dbname="book";

$con= new mysqli($servrnm,$usernm,$password,$dbname);
$sql="INSERT INTO `book_info`(`bookname`, `price`, `description`, `author`, `distributor`) VALUES ('$bname',$price,'$descp','$athr','$dis')";
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