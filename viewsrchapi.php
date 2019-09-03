<?php

if(isset($_GET['mname']))
{
 
     $moviename=$_GET['mname'];

$servrnm="localhost";
$usernm="root";
$password="";
$dbname="movie";

$con= new mysqli($servrnm,$usernm,$password,$dbname);
$sql="SELECT `id`, `movie_nm`, `director`, `actress`, `actor`, `camera`, `producer`, `editing`, `relesing_yr` FROM `movie` where movie_nm like '%$moviename%'";
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