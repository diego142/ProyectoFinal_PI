<?php
    require("conecta.php");

    function numElementos($tabla){
        $con = conecta();
        //$query = "SELECT COUNT(*) as total FROM $tabla";
        //$query = "SELECT MAX(id) as total FROM $tabla";
        //$query = "SELECT * FROM $tabla order by id desc LIMIT 1";
        $query = "SELECT `AUTO_INCREMENT` AS total
        FROM  INFORMATION_SCHEMA.TABLES
        WHERE TABLE_SCHEMA = 'catalogo'
        AND   TABLE_NAME   = '$tabla'";

        if($result = $con->query($query)){
            $obj = $result->fetch_object();
        
            return $obj->total;
        }else{
            return -1;
        }
    }

?>