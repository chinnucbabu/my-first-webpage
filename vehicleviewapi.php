
<?php



if(isset($_POST['vno']))
{



$vno=$_POST['vno'];



$servrnm="localhost";
$usernm="root";
$password="";
$dbname="vehicle";

$con= new mysqli($servrnm,$usernm,$password,$dbname);
$sql="SELECT `id`, `vehicleno`, `model`, `yr_reg`, `ownername`, `reg_date`, `taxamount` FROM `vehicle` WHERE `vehicleno` like '%$vno%'";
$result=$con->query($sql);

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
    echo "Invalid Name";
}




}

?>