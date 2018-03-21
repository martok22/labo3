<?php
    $arr1 = array(rand(0,5),rand(0,5),rand(0,5),rand(0,5),rand(0,5));
    $promedio = 0;
    $suma = 0;
    foreach($arr1 as $valor)
    {
        echo "$valor <br>";
        $suma = $suma + $valor;
        $promedio = $suma/5;
    }
    echo $promedio;
?>