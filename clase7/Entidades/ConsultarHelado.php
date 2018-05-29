<?php

require_once "Entidades/AccesoDatos.php";

class ConsultarHelado
{
    public static function Consultar($sabor, $tipo)
    {    
        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
        
        $consulta = $objetoAccesoDato->RetornarConsulta("SELECT sabor AS sabor, precio AS precio, "
                                                        . "tipo AS tipo FROM helados WHERE sabor = :sabor "
                                                        . "AND tipo= :tipo");
        
        $consulta->execute(array(":sabor" => $sabor, ":tipo" => $tipo));
        
        $cdBuscado = $consulta->fetchObject('ConsultarHelado');
        
        return $cdBuscado; 
    }
}

?>