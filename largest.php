<?php
$a=10;
$b=5;
$c=30;
if($a>$b)
{
    if($a>$c)
    {
        echo $a;
    }
    else
    {
        echo $c;
    }
}
else if($b>$c)
{
    echo $b;
}
else 
{
    echo $c;
}
?>