<?php
    var_dump($_FILES['archivo']);
    echo "<br>";
    //ECHO $_FILES['archivo']['name'];
    $nombre = $_POST['nombre'];
    $extension = explode('.',$_FILES['archivo']['name']);
    $extension = array_reverse($extension)[0];
    //var_dump($extension);
    echo $extension;
    //$extension2 = substr($_FILES['archivo']['name'],strpos($_FILES['archivo']['name'],'.'));
    //echo $extension2;
    $nombreYextension = "$nombre" . '.' . "$extension";
    //echo filetype($_FILES['archivo']['name']);
    if($_FILES['archivo']['size'] <= 10000000){
        if(move_uploaded_file($_FILES['archivo']['tmp_name'],"$nombreYextension")) echo "<br>Se movio satisfactoriamente";
        else
            echo "No se pudo mover";
    }
        
    

    //copy($_FILES['archivo']['tmp_name'],"c:/xampp/htdocs/clase4/$nombreYextension");

?>