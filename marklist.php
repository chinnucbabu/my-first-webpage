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
            background-image: url('./img5.jpg');
        }
    </style>
</head>
<body>
    
    <div class="container">
    <div class="row">
    <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
    </div>
    <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
    <form method="POST">
    <h2>Marklist</h2>
    <table class="table">
    <tr> 
    <td> Name</td>
    <td><input type="text" class="form control" name="name"></td>
    </tr>
    <tr> 
    <td> Register number</td>
    <td><input type="text" class="form control" name="rnum"></td>
    </tr>
    <tr> 
    <td> College</td>
    <td><input type="text" class="form control" name="colg"></td>
    </tr>
    <tr> 
    <td> Semester</td>
    <td><input type="text" class="form control" name="sem"></td>
    </tr>
    <tr> 
    <td> Subject 1 name</td>
    <td><input type="text" class="form control" name="s1nm"></td>
    </tr>
    <tr> 
    <td> Sub1 mark obtained</td>
    <td><input type="text" class="form control" name="m1"></td>
    </tr>
    <tr> 
    <td> Sub1 total mark</td>
    <td><input type="text" class="form control" name="t1"></td>
    </tr>
    <tr> 
    <td> Subject 2 name</td>
    <td><input type="text" class="form control" name="s2nm"></td>
    </tr>
    <tr> 
    <td> Sub2 mark obtained</td>
    <td><input type="text" class="form control" name="m2"></td>
    </tr>
    <tr> 
    <td> Sub2 total mark</td>
    <td><input type="text" class="form control" name="t2"></td>
    </tr>
    <tr> 
    <td> Subject 3 name</td>
    <td><input type="text" class="form control" name="s3nm"></td>
    </tr>
    <tr> 
    <td> Sub3 mark obtained</td>
    <td><input type="text" class="form control" name="m3"></td>
    </tr>
    <tr> 
    <td> Sub3 total mark</td>
    <td><input type="text" class="form control" name="t3"></td>
    </tr>
    <tr> 
    <td> Subject 4 name</td>
    <td><input type="text" class="form control" name="s4nm"></td>
    </tr>
    <tr> 
    <td> Sub4 mark obtained</td>
    <td><input type="text" class="form control" name="m4"></td>
    </tr>
    <tr> 
    <td> Sub4 total mark</td>
    <td><input type="text" class="form control" name="t4"></td>
    </tr>
    <tr>
                            <td><Button class="btn btn-success" type="reset">Reset</Button></td>
                            <td><Button class="btn btn-info" type="submit" name="but">Submit</Button></td>
                    </tr>
    </table>
    </form>
    </div>
    </div>
    </div>
</body>
</html>

<?php
if(isset($_POST['but']))
{
    $nm=$_POST['name'];
    $rno=$_POST['rnum'];
    $col=$_POST['colg'];
    $sem=$_POST['sem'];
    $s1nm=$_POST['s1nm'];
    $m1=$_POST['m1'];
    $t1=$_POST['t1'];
    $s2nm=$_POST['s2nm'];
    $m2=$_POST['m2'];
    $t2=$_POST['t2'];
    $s3nm=$_POST['s3nm'];
    $m3=$_POST['m3'];
    $t3=$_POST['t3'];
    $s4nm=$_POST['s4nm'];
    $m4=$_POST['m4'];
    $t4=$_POST['t4'];

    //Percentage
    
    $p1=($m1/$t1)*100;
    $p2=($m2/$t2)*100;
    $p3=($m3/$t3)*100;
    $p4=($m4/$t4)*100;
    //Grade1
    if($p1>=95)
    {
        $g1="S";
    }
    else if($p1>=90)
    {
        $g1= "A+";
    }
    else if($p1>=85)
    {
        $g1= "A";
    }
    else if($p1>=80)
    {
        $g1="B+";
    }
    else if($p1>=75)
    {
        $g1="B";
    }
    else if($p1>=70)
    {
        $g1="C+";
    }
    else if($p1>=65)
    {
        $g1="C";
    }
    else if($p1>=60)
    {
        $g1="D+";
    }
    else if($p1>=55)
    {
        $g1="D";
    }
    else if($p1>=50)
    {
        $g1="E";
    }
    else
    {
        $g1="F";
    }
    
    //Grade2
    if($p2>=95)
    {
        $g2="S";
    }
    else if($p2>=90)
    {
        $g2= "A+";
    }
    else if($p2>=85)
    {
        $g2= "A";
    }
    else if($p2>=80)
    {
        $g2="B+";
    }
    else if($p2>=75)
    {
        $g2="B";
    }
    else if($p2>=70)
    {
        $g2="C+";
    }
    else if($p2>=65)
    {
        $g2="C";
    }
    else if($p2>=60)
    {
        $g2="D+";
    }
    else if($p2>=55)
    {
        $g2="D";
    }
    else if($p2>=50)
    {
        $g2="E";
    }
    else
    {
        $g2="F";
    }

    //Grade3
    if($p3>=95)
    {
        $g3="S";
    }
    else if($p3>=90)
    {
        $g3= "A+";
    }
    else if($p3>=85)
    {
        $g3= "A";
    }
    else if($p3>=80)
    {
        $g3="B+";
    }
    else if($p3>=75)
    {
        $g3="B";
    }
    else if($p3>=70)
    {
        $g3="C+";
    }
    else if($p3>=65)
    {
        $g3="C";
    }
    else if($p3>=60)
    {
        $g3="D+";
    }
    else if($p3>=55)
    {
        $g3="D";
    }
    else if($p3>=50)
    {
        $g3="E";
    }
    else
    {
        $g3="F";
    }

    //Grade4
    if($p4>=95)
    {
        $g4="S";
    }
    else if($p4>=90)
    {
        $g4= "A+";
    }
    else if($p4>=85)
    {
        $g4= "A";
    }
    else if($p4>=80)
    {
        $g4="B+";
    }
    else if($p4>=75)
    {
        $g4="B";
    }
    else if($p4>=70)
    {
        $g4="C+";
    }
    else if($p4>=65)
    {
        $g4="C";
    }
    else if($p4>=60)
    {
        $g4="D+";
    }
    else if($p4>=55)
    {
        $g4="D";
    }
    else if($p4>=50)
    {
        $g4="E";
    }
    else
    {
        $g4="F";
    }

    //status
    if($g1=='F'||$g2=='F'||$g3=='F'||$g4=='F')
    {
        $st="Failed";
    
    }
    else
    {
        $st="Passed";
    }


    echo "<table class='table'>";
    echo "<tr> <td> Name </td> <td> $nm </td> </tr>";
    echo "<tr> <td> Register Number </td> <td> $rno </td> </tr>";
    echo "<tr> <td> College </td> <td> $col </td> </tr>";
    echo "<tr> <td> Semester </td> <td> $sem </td> </tr>";
     echo "</table>";

    
    echo "<table class='table'>";
    echo "<thead> <tr> <th> Sub Name </th> <th> Mark Obtained</th> <th> Total Mark </th> <th> Grade</th></tr>   </thead>";
    echo "<tr> <td>$s1nm </td> <td> $m1</td> <td> $t1 </td> <td> $g1 </td> </tr>";
    echo "<tr> <td>$s2nm </td> <td> $m2</td> <td> $t2 </td> <td> $g2 </td> </tr>";
    echo "<tr> <td>$s3nm </td> <td> $m3</td> <td> $t3 </td> <td> $g3 </td> </tr>";
    echo "<tr> <td>$s4nm </td> <td> $m4</td> <td> $t4 </td> <td> $g4 </td> </tr>";
    echo "</table>";

   echo "<table class='table'";
   echo "<tr> <td> Status </td> <td> $st </td> </tr>";
   echo "</table>";

}





?>