<?php

    define("HOST", 'localhost');
    define("BD", 'catalogo');
    define("USER_BD", 'root');
    define("PASS_BD", '');

    function conecta ()
    {
        $con = new mysqli(HOST, USER_BD, PASS_BD, BD);

        if($con->connect_error)
        {
            echo "Error conectado al servidor de BBDD";
            exit();
        }
        return $con;
    }
?>