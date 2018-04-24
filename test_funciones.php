<?php
    $array1 = array(4,1,5,3);
    $array_strings = array("Jorge","Sergio","Alana");
    $array_mix = array(2,"Bueno",false,3.5);

function mifuncion(){
    echo "hola";
}


    var_dump($array1);
    echo '<br>';
    var_dump($array_strings);
    echo '<br>';
    var_dump($array_mix);
    echo '<br>';

    $ordeno = sort($array1,SORT_NATURAL);   
    echo "Array1 sorteado con sort, SORT_NATURAL<br>";
    var_dump($array1);
    echo "<br>";
    $array1 = array(4,1,5,3);

    $ordeno = sort($array1,SORT_STRING);
    echo "Array1 sorteado con sort, SORT_NATURAL<br>";
    var_dump($array1);
    echo "<br>";
    $array1 = array(4,1,5,3);

    $ordeno = sort($array1,SORT_ASC);   
    echo "Array1 sorteado con sort, SORT_NATURAL<br>";
    var_dump($array1);
    echo "<br>";
    $array1 = array(4,1,5,3);

    $ordeno = sort($array1,SORT_LOCALE_STRING);   
    echo "Array1 sorteado con sort, SORT_NATURAL<br>";
    var_dump($array1);
    echo "<br>";
    $array1 = array(4,1,5,3);

    $ordeno = sort($array1,SORT_REGULAR);   
    echo "Array1 sorteado con sort, SORT_NATURAL<br>";
    var_dump($array1);
    echo "<br>";
    $array1 = array(4,1,5,3);

    $ordeno = sort($array_strings,SORT_NATURAL);   
    echo "Array2 sorteado con sort, SORT_NATURAL<br>";
    var_dump($array_strings);
    echo "<br>";
    $array_strings = array("Jorge","Sergio","Alana");

    $ordeno = sort($array_strings,SORT_STRING);   
    echo "Array2 sorteado con sort, SORT_NATURAL<br>";
    var_dump($array_strings);
    echo "<br>";
    $array_strings = array("Jorge","Sergio","Alana");

    $ordeno = sort($array_strings,SORT_ASC);   
    echo "Array2 sorteado con sort, SORT_NATURAL<br>";
    var_dump($array_strings);
    echo "<br>";
    $array_strings = array("Jorge","Sergio","Alana");

    $ordeno = sort($array_strings,SORT_LOCALE_STRING);   
    echo "Array2 sorteado con sort, SORT_NATURAL<br>";
    var_dump($array_strings);
    echo "<br>";
    $array_strings = array("Jorge","Sergio","Alana");
    
    $ordeno = sort($array_strings,SORT_REGULAR);   
    echo "Array2 sorteado con sort, SORT_NATURAL<br>";
    var_dump($array_strings);
    echo "<br>";
    $array_strings = array("Jorge","Sergio","Alana");
?>