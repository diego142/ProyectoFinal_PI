<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        include("../includes/header.php");

        if(!isset($_SESSION['user'])){
            $_SESSION['mensaje'] = 2;
            header('Location: ../index.php');
            exit;
        }
    ?>    
    <title>Administradores</title>
</head>
<body>
    <?php 
        include("../includes/navbar_admin.php");
        require("../db/conecta.php");

        $con = conecta();
        $query = "SELECT * FROM administradores WHERE activo = 1 AND eliminado = 0";
        $result = $con->query($query);
    ?>
    <div class="container col-md-12 mt-2" style="overflow:scroll; height: 800px;">
        <h1> Administradores (<?= $result->num_rows ?>) </h1>

        <table class="table" style="font-size: 20px; ">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Correo</th>
                    <th class="text-center" scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody class="bg-light">
            <?php
                while($obj = $result->fetch_object())
                {
                    $id = $obj->id;
                    $nombre = $obj->nombre;
                    $apellidos = $obj->apellidos;       
                    $correo = $obj->correo;       
            ?>
                <tr>
                    <td> <?= $nombre ?> </td>
                    <td> <?= $apellidos ?> </td>
                    <td> <?= $correo ?> </td>
                    <td class="text-center"> 
                        <input type="button" value="Ver Detalles" class="btn btn-info col-md-3 btn-lg" onclick="location.href='ver_detalle.php?id=<?= $id ?>'"> 
                        <input type="button" value="Actualizar" class="btn btn-success col-md-3 btn-lg" onclick="location.href='actualiza.php?id=<?= $id ?>'">
                        <input type="button" value="Eliminar" class="btn btn-danger col-md-3 btn-lg" onclick="location.href='elimina.php?id=<?= $id ?>'">
                    </td>
                </tr>
            <?php
                }
                $con->close();
            ?>               

            </tbody>
        </table>
    </div>
    
    <?php include("../includes/footer.php") ?>

</body>
</html>