<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 <form method="GET">
    <table>
<tr> 
<td>NAME</td>    
<td>  <input type="text" name="name"> </td>
</tr>


<tr>
    <td>Roll Number</td>
    <td> <input type="text" name="roll"> </td>
</tr>

<tr>
    <td> </td>
    <td><Button type="submit" class="btn btn-info" name="but">SUBMIT</Button> </td>
</tr>

    </table>
    </form>
</body>
</html>

<?php
if(isset($_GET['but']))
{
$num=$_GET['name'];
$roll=$_GET['roll'];

echo "<table class='table'>";
echo "<tr> <td> NAME </td> <td> $num </td> </tr>";
echo "<tr> <td> Rollno </td> <td> $roll </td> </tr>";
echo "</table>";

}

?>