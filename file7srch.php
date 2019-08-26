<!DOCTYPE html>
<html lang="en">
<head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
                        <td>Movie name</td>
                        <td><input type="text" class="form-control" name="mname"></td>
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

$mname=$_POST['mname'];



$servrnm="localhost";
$usernm="root";
$password="";
$dbname="movie";

$con= new mysqli($servrnm,$usernm,$password,$dbname);
$sql="SELECT `id`, `movie_nm`, `director`, `actress`, `actor`, `camera`, `producer`, `editing`, `relesing_yr` FROM `movie` WHERE `movie_nm` = '$mname ' ";
$result=$con->query($sql);
if($result->num_rows>0)
{

while($row=$result->fetch_assoc() )
{
    $id=$row['id'];
    $mvname=$row['movie_nm'];
    $dirc=$row['director'];
    $act=$row['actress'];
    $actor=$row['actor'];
    $cam=$row['camera'];
    $pro=$row['producer'];
    $edt=$row['editing'];
    $ryr=$row['relesing_yr'];

    echo "<form method='POST'> <table class='table'>";
 
echo "<tr> <td> Movie Name </td> <td> <input type='text' value='$mvname' class='form-control' name='mvname' />  </td> </tr>";
echo "<tr> <td> Director</td> <td> <input type='text' value='$dirc' class='form-control' name='dir' /></td> </tr>";
echo "<tr> <td> Actress</td> <td> <input type='text' value='$act' class='form-control' name='act' /></td> </tr>";
echo "<tr> <td> Actor </td> <td> <input type='text' value='$actor' class='form-control' name='actor' /></td> </tr>";
echo "<tr> <td> Camera </td> <td> <input type='text' value='$cam' class='form-control' name='cam' /></td> </tr>";
echo "<tr> <td> Producer </td> <td><input type='text' value='$pro' class='form-control' name='pro' /></td> </tr>";
echo "<tr> <td> Editing </td> <td><input type='text' value='$edt' class='form-control' name='edt' /></td> </tr>";
echo "<tr> <td> Releasing Year </td> <td><input type='text' value='$ryr' class='form-control' name='ryr' /></td> </tr>";
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
     $mname=$_POST['mvname'];
     $dir=$_POST['dir'];
    $act=$_POST['act'];
    $actor=$_POST['actor'];
    $cam=$_POST['cam'];
    $pro=$_POST['pro'];
    $edt=$_POST['edt'];
    $ryr=$_POST['ryr'];


    $servrnm="localhost";
    $usernm="root";
    $password="";
    $dbname="movie";

   $con= new mysqli($servrnm,$usernm,$password,$dbname);
   $sql="UPDATE `movie` SET `movie_nm`='$mname',`director`='$dir',`actress`='$act',`actor`='$actor',`camera`='$cam',`producer`='$pro',`editing`='$edt',`relesing_yr`='$ryr' WHERE `id`=$id";
   $result=$con->query($sql);


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
    $dbname="movie";

    $con= new mysqli($servrnm,$usernm,$password,$dbname);
    $sql="DELETE FROM `movie` WHERE `id`=$ide";
    $result=$con->query($sql);


    if($result===TRUE)
     {
        echo "Deleted movie info";
     }
   else
    {
       echo $con->error;

    }

}
?>