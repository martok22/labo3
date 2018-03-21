<?php

/*saludar("Alana");

function saludar($nombre, $apellido="zarasa")
{
    return "hola $nombre $apellido";
}*/
/*$fmt = new NumberFormatter( 'it', NumberFormatter::SPELLOUT );
echo $fmt->format(1142)."\n";*/
$fmt = numfmt_create( 'it', NumberFormatter::SPELLOUT );
echo numfmt_format($fmt, 1142)."\n";
?>