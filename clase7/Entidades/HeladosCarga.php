<?php

require_once "Entidades/AccesoDatos.php";

class HeladosCarga
{
    public static function Cargar($sabor, $precio, $tipo, $cantidad)
    {        
        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
        
        $consulta =$objetoAccesoDato->RetornarConsulta("INSERT INTO helados (sabor, precio, tipo, cantidad)"
                                                    . "VALUES(:sabor, :precio, :tipo, :cantidad)");
        
        $consulta->bindValue(':sabor', $sabor, PDO::PARAM_STR);
        $consulta->bindValue(':precio', $precio, PDO::PARAM_INT);
        $consulta->bindValue(':tipo', $tipo, PDO::PARAM_STR);
        $consulta->bindValue(':cantidad', $cantidad, PDO::PARAM_INT);

        $consulta->execute();
    }
}

?>