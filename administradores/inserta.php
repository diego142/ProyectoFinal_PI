<?php
    //require("../db/conecta.php");
    require("../db/acciones.php");

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['correo'];
    $pass = $_POST['pass'];
    $id = numElementos("administradores");

    $imagen = "user" . $id . ".jpg";
    $dir = "images/" . $imagen;

    if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $dir)) {
        echo "Se guardo la imagen";
    } else {
        echo "No se pudo guardar";
    }

    $con = conecta();
    $query = "INSERT INTO administradores(nombre, apellidos, correo, pass, imagen) VALUES('$nombre', '$apellidos', '$correo', '$pass', '$imagen')";
    
    if($result = $con->query($query))
    {
         header('Location: listaAdmin.php');
    }else{
        echo '<script language="JavaScript"> 
                    alert("Problema al insertar");
                    location.href="listaAdmin.php";
        </script>';
    }    
?>