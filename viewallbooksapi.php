
<?php



if(isset($_GET['bname']))
{



$bookname=$_GET['bname'];



$servrnm="localhost";
$usernm="root";
$password="";
$dbname="book";

$con= new mysqli($servrnm,$usernm,$password,$dbname);
$sql="SELECT `id`, `bookname`, `price`, `description`, `author`, `distributor` FROM `book_info` where bookname like '%$bookname%'";
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