<?php
    $nombre = "jose";
    // comillas simples no toma la variable como valor si no literal
    // Se puede bindear(concatenar) con punto
    //echo 'Hola      $nombre';
    $edad = 20;
    $sueldo = 8500.20;
    //printf("edad $edad");
    //printf("sueldo%f:",$sueldo);
    //echo "<br>" . strtoupper($nombre);
    $arr1 = array(1,3,5,7);
    //var_dump($arr1);
    // puede cambiar de tipo las var de array?
    $arr2["nombre"] = 1;
    $arr2[22] = 3;
    $arr2[] = 5;
    echo "algo";
    //var_dump($arr2);
    /*foreach($arr2 as $valor)
    echo "<br>$valor <br>";

    foreach($arr2 as $id => $valor)
    echo "$id => $valor<br>";*/

    /* sort
        ksort
        asort  
        arsort 
        krsort
        rsort
    */

    //$booleano = sort($arr2)
    //$otro = arsort($arr1); 
    //var_dump($arr1);
    

?>