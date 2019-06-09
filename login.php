<?php
    session_start();

    if(isset($_POST['correo']) and isset($_POST['pass']))
    {
        require ("db/conecta.php");

        $email = $_POST['correo'];
        $pass = $_POST['pass'];

        $con = conecta();
        $query = "SELECT * FROM administradores WHERE correo='$email' AND pass='$pass' ";
        
        if($res = $con->query($query)){
            if($obj = $res->fetch_object()){
                $_SESSION['id'] = $obj->id;
                $_SESSION['user'] = $obj->nombre;
                $_SESSION['pass'] = $obj->pass;
                $_SESSION['img'] = $obj->imagen;

                $json[] = array(
                    'error' => false,
                    'msg' => 'Bievenido '. $obj->nombre,
                );
                echo json_encode($json);
                exit;
            }else{
                $json[] = array(
                    'error' => true,
                    'msg' => 'Campos incorrectos',
                );
                echo json_encode($json);                
                exit;
            }
        }    
    }else{
        $json[] = array(
            'error' => true,
            'msg' => 'Por favor llene todos los campos',
        );
        echo json_encode($json);                
        exit;    
    }

?>