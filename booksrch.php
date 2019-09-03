<!DOCTYPE html>
<html lang="en">
<head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book search</title>
    <style>
            body{
                background-image: url('./img3.jpg');
            }
    </style>
</head>
<body>
   <div class="container">
       <div class="row">
           <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">

           </div>
           <div class="col">
               <form method="POST">
                <table class="table">
                    
                    <tr>
                        <td>Book name</td>
                        <td><input type="text" class="form-control" name="bname"></td>
                    </tr>
                    
                    <tr>
                              <td><Button class="btn btn-info" type="submit" name="but">Submit</Button></td>
                    </tr>

                </table>
                </form>
            </div>
            <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">

                </div>
       </div>
   </div> 
</body>
</html>


<?php

if(isset($_POST['but']))
{

$bname=$_POST['bname'];



$servrnm="localhost";
$usernm="root";
$password="";
$dbname="book";

$con= new mysqli($servrnm,$usernm,$password,$dbname);
$sql="SELECT `id`, `bookname`, `price`, `description`, `author`, `distributor` FROM `book_info` WHERE `bookname` like '%$bname%'";
$result=$con->query($sql);

if($result->num_rows>0)
{

while($row=$result->fetch_assoc() )
{
    $id=$row['id'];
    $bkname=$row['bookname'];
    $price=$row['price'];
    $descp=$row['description'];
    $author=$row['author'];
    $dist=$row['distributor'];
    

    echo "<form method='POST'> <table class='table'>";
 
echo "<tr> <td> Book Name </td> <td> <input type='text' value='$bkname' class='form-control' name='bkname' />  </td> </tr>";
echo "<tr> <td> Price</td> <td> <input type='text' value='$price' class='form-control' name='price' /></td> </tr>";
echo "<tr> <td> Description</td> <td> <input type='text' value='$descp' class='form-control' name='descp' /></td> </tr>";
echo "<tr> <td> Author </td> <td> <input type='text' value='$author' class='form-control' name='author' /></td> </tr>";
echo "<tr> <td> Distributor </td> <td> <input type='text' value='$dist' class='form-control' name='dist' /></td> </tr>";
echo "<tr>  <td> <Button class='btn btn-info' type='submit' name='btn' value='$id'>Submit</Button></td> <td> <Button class='btn btn-info' type='submit' name='butn' value='$id'>Delete</Button></td></tr>";
echo "</table> </form>";

}

}
else{
    echo "Invalid Name";
}


}

if(isset($_POST['btn']))
{

    $id=$_POST['btn'];
     $bname=$_POST['bkname'];
     $prc=$_POST['price'];
    $dscp=$_POST['descp'];
    $athr=$_POST['author'];
    $dtsb=$_POST['dist'];
    


    $servrnm="localhost";
    $usernm="root";
    $password="";
    $dbname="book";

   $con= new mysqli($servrnm,$usernm,$password,$dbname);
   $sql="UPDATE `book_info` SET `bookname`='$bname',`price`=$prc,`description`='$dscp',`author`='$athr',`distributor`='$dist' WHERE `id`=$id";
   if($result===TRUE)
   {
      echo "success";
   }
 else
  {
     echo $con->error;

  }
}

if(isset($_POST['butn']))
{
   $ide=$_POST['butn'];

   $servrnm="localhost";
   $usernm="root";
   $password="";
   $dbname="book";

   $con= new mysqli($servrnm,$usernm,$password,$dbname);
   $sql="DELETE FROM `book_info` WHERE `id`=$ide";
   $result=$con->query($sql);


    if($result===TRUE)
     {
        echo "Deleted book info";
     }
   else
    {
       echo $con->error;

    }

}
?>