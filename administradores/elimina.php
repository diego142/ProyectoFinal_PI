<?php

    require("../db/conecta.php");

    $id = $_GET['id'];

    $con = conecta();
    //$query = "DELETE FROM administradores WHERE id=$id";
    $query = "UPDATE administradores SET eliminado = 1 WHERE id = $id";

    if($result = $con->query($query))
    {
        //$path = "images/user" . $id . ".jpg"; 
        //unlink($path); 

        header('Location: listaAdmin.php');
    }else{
        echo '<script language="JavaScript"> 
                    alert("Problema al eliminar");
                    location.href="listaAdmin.php";
        </script>';
    }

?>