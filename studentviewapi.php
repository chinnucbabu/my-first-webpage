
<?php



if(isset($_POST['adno']))
{



$adno=$_POST['adno'];



$servrnm="localhost";
$usernm="root";
$password="";
$dbname="student";

$con= new mysqli($servrnm,$usernm,$password,$dbname);
$sql="SELECT * FROM `student` WHERE `admissionno`=$adno";
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
    echo "Invalid admission number";
}




}

?>