<?php

if(isset($_POST['sname']))
{
$sname=$_POST['sname'];
$adno=$_POST['adno'];
$college=$_POST['college'];
$sem=$_POST['sem'];
$branch=$_POST['branch'];
$dob=$_POST['dob'];



$servrnm="localhost";
$usernm="root";
$password="";
$dbname="student";

$con= new mysqli($servrnm,$usernm,$password,$dbname);
 $sql= "INSERT INTO `student`(`studentname`, `admissionno`, `college`, `sem`, `branch`, `dob`) VALUES ('$sname',$adno,'$college','$sem','$branch','$dob')";

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