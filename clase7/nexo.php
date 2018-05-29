<?php

    require_once "./Entidades/AccesoDatos.php";
    require_once "./Entidades/HeladosCarga.php";
    require_once "./Entidades/ConsultarHelado.php";

    $cases = isset($_POST) ? isset($_GET) : null;
    switch($_REQUEST['submit'])
    {
        case "Cargar_GET":
            HeladosCarga::Cargar($_GET['sabor'],$_GET['precio'],$_GET['tipo'],$_GET['cantidad']);
            break;

        case "Consultar_POST":    
            var_dump(ConsultarHelado::Consultar($_POST['sabor'],$_POST['tipo']));
            break;

        case "3":
            break;
        case "4":
            break;
        case "5":
            break;
        case "6":
            break;
        case" 7":
            break;
        case "8":
            break;
    }
?>