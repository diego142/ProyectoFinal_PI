<?php
    require("../db/conecta.php");
    
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $codigo = $_POST['codigo'];
    $descripcion = $_POST['descripcion'];
    $costo = $_POST['costo'];
    $stock = $_POST['stock'];

    $con = conecta();
    
    if($_FILES['imagen']['tmp_name'] == null){
       
        $query = "UPDATE productos SET nombre = '$nombre', codigo = '$codigo', descripcion = '$descripcion', costo = $costo, stock = $stock WHERE id=$id";
        
        if($result = $con->query($query)){

            header('Location: listaProd.php');
            exit;
        }else{
            echo "Problema en la query";
        }
    
    }else{
        $imagen = "producto" . $id . ".jpg";
        $dir = "images/" . $imagen;
        unlink($dir); 
        
        if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $dir)) {

            $query = "UPDATE productos SET nombre = '$nombre', codigo = '$codigo', descripcion = '$descripcion', costo = $costo, stock = $stock, imagen = '$imagen' WHERE id=$id";
                 
            if($result = $con->query($query)){
                header('Location: listaProd.php');
                exit;
            }else{
                echo "Problema en la query";
            }

        } else {
            echo "No se pudo actualizar la imagen";
        }

    }
?>