<?php
    //require("../db/conecta.php");
    require("../db/acciones.php");

    $nombre = $_POST['nombre'];
    $codigo = $_POST['codigo'];
    $descripcion = $_POST['descripcion'];
    $costo = $_POST['costo'];
    $stock = $_POST['stock'];
    $id = numElementos("productos");

    $imagen = "producto" . $id . ".jpg";
    $dir = "images/" . $imagen;

    if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $dir)) {
        echo "Se guardo la imagen";
    } else {
        echo "No se pudo guardar";
    }

    $con = conecta();
    $query = "INSERT INTO productos(nombre, codigo, descripcion, costo, stock, imagen) VALUES('$nombre', '$codigo', '$descripcion', $costo, $stock, '$imagen')";
    
    if($result = $con->query($query))
    {
         header('Location: listaProd.php');
    }else{
        echo '<script language="JavaScript"> 
                    alert("Problema al insertar");
                    location.href="listaProd.php";
        </script>';
    }    
?>