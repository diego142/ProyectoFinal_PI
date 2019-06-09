<?php 
    require("../db/conecta.php");

    $id = $_GET['id'];
    
    $con = conecta();
    $query = "SELECT * FROM productos WHERE id=$id";
?>

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
    <title>Detalles</title>
</head>
<body>
    <?php include("../includes/navbar_prod.php");  ?>

    <div class="container col-md-6 mt-2">
        <table class="table col-md-12" style="font-size: 20px;">
            <thead class="thead-light">
                <tr>
                    <th>INFORMACION</th>
                    <th>DETALLES</th>
                </tr>
            </thead>
            <tbody class="bg-light">
                <?php
                    if($result = $con->query($query))
                    {
                        $obj = $result->fetch_object();
                ?>

                    <tr>
                        <th>Folio:</th>
                        <td><?= $obj->id ?></td>
                    </tr>
                    
                    <tr>
                        <th>Nombre:</th>
                        <td><?= $obj->nombre ?></td>
                    </tr>

                    <tr>
                        <th>Codigo: </th>
                        <td><?= $obj->codigo ?></td>
                    </tr>

                    <tr>
                        <th>Descripcion: </th>
                        <td><?= $obj->descripcion ?></td>
                    </tr>

                    <tr>
                        <th>Costo: </th>
                        <td><?= "$".$obj->costo ?></td>
                    </tr>

                    <tr>
                        <th>Stock: </th>
                        <td><?= $obj->stock ?></td>
                    </tr>

                    <tr>
                        <th>Imagen: </th>
                        <td> <img src=<?= "images/".$obj->imagen ?> alt="" height="20%" width="20%"> </td>
                    </tr>

                <?php
                    }else
                    {
                        die("Error en la consulta");
                    }
                    $con->close();
                ?>
            </tbody>
        </table>
    </div>
    <?php include("../includes/footer.php") ?>

</body>
</html>
