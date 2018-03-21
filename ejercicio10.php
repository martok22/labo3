<?php
    $arr1 = array(0,0,0,0,0,0,0,0,0,0);
    for($contador=1;$contador<11;$contador++)
    {
        if($contador==1) 
        {
           $arr1[$contador-1] = 1;
        }
        else
            $arr1[$contador-1] = -1 + ($contador * 2);
    }
    foreach($arr1 as $valor)
    {
        echo "$valor <br>";
    }
?>
    