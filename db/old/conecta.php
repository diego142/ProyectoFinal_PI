<?php

    define("HOST", 'sql307.epizy.com');
    define("BD", 'epiz_23894457_catalogo');
    define("USER_BD", 'epiz_23894457');
    define("PASS_BD", 'PUamZA9qGCirm');

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