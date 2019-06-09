<?php
    require("../db/conecta.php");
    
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['correo'];
    $pass = $_POST['pass'];

    $con = conecta();
    
    if($_FILES['imagen']['tmp_name'] == null){
       
        $query = "UPDATE administradores SET nombre='$nombre', apellidos='$apellidos', correo='$correo', pass='$pass' WHERE id=$id";
        
        if($result = $con->query($query)){

            header('Location: listaAdmin.php');
            exit;
        }else{
            echo "Problema en la query";
        }
    
    }else{
        $imagen = "user" . $id . ".jpg";
        $dir = "images/" . $imagen;
        unlink($dir); 
        
        if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $dir)) {

            $query = "UPDATE administradores SET nombre='$nombre', apellidos='$apellidos', correo='$correo', pass='$pass', imagen='$imagen' WHERE id=$id";
                 
            if($result = $con->query($query)){
                header('Location: listaAdmin.php');
                exit;
            }else{
                echo "Problema en la query";
            }

        } else {
            echo "No se pudo actualizar la imagen";
        }

    }
?>