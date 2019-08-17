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
    background : #e67e22;
}
.mytable{
    background: green;
    margin-top: 300px;
    margin-left: 200px;

}

    </style>
</head>

<body>
   
    <div class="container">

        <div class="row">

            <div class="col col-12 col-sm-6">
               Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit tempore labore natus inventore asperiores, eius maxime laboriosam animi doloremque at facere! Corporis quos non possimus temporibus distinctio perspiciatis, obcaecati perferendis!
            </div>
<div class="col col-12 col-sm-6">
        <form method="GET">
        <table class="table"> 
                <tr>
                    <td>name</td>
                    <td><input type="text" class="form-control" name="name"></td>
                </tr>
                <tr>
                    <td>rollno</td>
                    <td><input type="text" class="form-control" name="roll"></td>
                </tr>
                <tr>
                    <td>admission number</td>
                    <td><input type="text" class="form-control" name="admsn"></td>
                </tr>
                <tr>
                    <td>college</td>
                    <td><input type="text" class="form-control" name="colg"></td>
                </tr>
                <tr>
                    <td>mobile</td>
                    <td><input type="text" class="form-control" name="mob"></td>
                </tr>
         
                <tr>
         
                 <td>
                     password
                 </td>
                 <td>
                     <input type="password" class="form-control" name="pass">
                 </td>
                </tr>
         
         
                <tr>
         
                     <td>
                         dob
                     </td>
                     <td>
                         <input type="date" class="form-control" name="dob">
                     </td>
                    </tr>
         
                <tr>
                    <td>
         
                    </td>
                    <td><BUtton class="btn btn-info" name="but">SUBMIT</BUtton></td>
                </tr>
            </table> 
</form>
</div>

        </div>
    </div>

</body>
</html>

<?php
if(isset($_GET['but']))
{
$num=$_GET['name'];
$roll=$_GET['roll'];
$admsn=$_GET['admsn'];
$col=$_GET['colg'];
$mob=$_GET['mob'];
$pass=$_GET['pass'];
$dob=$_GET['dob'];
echo "<table class='table'>";
echo "<tr> <td> NAME </td> <td> $num </td> </tr>";
echo "<tr> <td> Rollno </td> <td> $roll </td> </tr>";
echo "<tr> <td> Admission no </td> <td> $admsn </td> </tr>";
echo "<tr> <td> College </td> <td> $col </td> </tr>";
echo "<tr> <td> Mobile </td> <td> $mob </td> </tr>";
echo "<tr> <td> Password </td> <td> $pass </td> </tr>";
echo "<tr> <td> DOB </td> <td> $dob </td> </tr>";
echo "</table>";

}

?>