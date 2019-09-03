<?php
if(isset($_GET['nm']))
{
$name=$_GET['nm'];

$servname="localhost";
$username="root";
$password="";
$dbname="marklist";


$connection=new mysqli($servname,$username,$password,$dbname);
$sql="SELECT  `name`, `registerno`, `college`, `sem`, `sub1_nm`, `mrk1`, `tot1`, `sub2_nm`, `mrk2`, `tot2`, `sub3_nm`, `mrk3`, `tot3`, `sub4_nm`, `mrk4`, `tot4` FROM `marksheet` WHERE `name`like '%$name%'";
$result=$connection->query($sql);
$r=array();
if($result->num_rows>0)
{
   
while($row=$result->fetch_assoc() )
{
     $r[]=$row;

    
}
  echo json_encode($r);
}
else{
    echo "Invalid  Name";
}


}
?>
