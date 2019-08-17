<!DOCTYPE html>
<html lang="en">
<head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
<style>
body{
    background: red;
}
.mytable{
    background: green;
}


</style>


</head>
<body>
    <form method="GET">
    <table class="table" >
        <tr>
            <td>Name</td>
            <td><input type="text" class="form-control" name="name"></td>
        </tr>
        <tr>
            <td>Age</td>
            <td><input type="number" class="form-control" name="age"></td>
        </tr>
        
        <tr>
            <td>College</td>
            <td><input type="text" class="form-control" name="colg"></td>
        </tr>
        <tr>
            <td>Branch</td>
            <td>
              <select class="form-control" name="brnch">

                <option value="COMPUTER SCIENCE">COMPUTER SCIENCE</option>

                <option value="ELECTRONICS">ELECTRONICS</option>

              </select>
            
            </td>
        </tr>
        <tr>
            <td>Mobile</td>
            <td><input type="text" class="form-control" name="mob"></td>
        </tr>
        <tr>
            <td>E-mailid</td>
            <td><input type="email" class="form-control" name="email"></td>
        </tr>
        <tr>
            <td>Place</td>
            <td><input type="text" class="form-control" name="place"></td>
        </tr>
        <tr>
            <td>DOB</td>
            <td><input type="date" class="form-control" name="dob"></td>
        </tr>
        <tr>
            <td>Username</td>
            <td><input type="text" class="form-control" name="usr"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" class="form-control" name="pass"></td>
        </tr>
        <tr>
            <td>Confirm Password</td>
            <td><input type="password" class="form-control" name="cnfrm"></td>
        </tr>
        <tr>
            <td><Button class="btn btn-success" type="reset" name="rst">Clear</Button></td>
            <td><Button class="btn btn-secondary" type="submit" name="but">Register</Button></td>
        </tr>
    </table>
    </form>
</body>
</html>

<?php
if(isset($_GET['but']))
{
$num=$_GET['name'];
$age=$_GET['age'];
$col=$_GET['colg'];
$brch=$_GET['brnch'];
$mob=$_GET['mob'];
$email=$_GET['email'];
$place=$_GET['place'];
$dob=$_GET['dob'];
$usr=$_GET['usr'];
$pass=$_GET['pass'];

echo "<table class='table'>";
echo "<tr> <td> Name </td> <td> $num </td> </tr>";
echo "<tr> <td> Age </td> <td> $age </td> </tr>";
echo "<tr> <td> College</td> <td> $col </td> </tr>";
echo "<tr> <td> Branch </td> <td> $brch </td> </tr>";
echo "<tr> <td> Mobile </td> <td> $mob </td> </tr>";
echo "<tr> <td> E-mail </td> <td> $email </td> </tr>";
echo "<tr> <td> Place </td> <td> $place </td> </tr>";
echo "<tr> <td> DOB </td> <td> $dob </td> </tr>";
echo "<tr> <td> Username</td> <td> $usr </td> </tr>";
echo "<tr> <td> Password </td> <td> $pass </td> </tr>";

echo "</table>";

}

?>