<?php
$i=345;
$r=0;
while($i>1)
{
    $s=$i%10;
    $r=($r*10)+$s;
    $i=($i/10);
}
echo $r;
?>