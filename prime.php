<?php
$n=500;
for($i=2;$i<=$n;$i++)
{
    for($j=2;$j<$i;$j++)
    {
        if(($i%$j)==0)
        
        {
            
            break;
        }
    }
    if($j==$i)
    {
        echo $i;
        echo "<br>";
    }
}

?>