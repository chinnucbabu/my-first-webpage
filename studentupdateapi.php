<?php

if(isset($_POST['adno']))
{
    $id=$_POST['id'];
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
$sql="UPDATE `student` SET `id`=$id,`studentname`='$sname',`admissionno`=$adno,`college`='$college',`sem`='$sem',`branch`='$branch',`dob`='$dob' WHERE `admissionno`=$adno";

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