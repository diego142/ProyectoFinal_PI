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
    <title>Agregar</title>
</head>
<body>
<?php include("../includes/navbar_admin.php"); ?>

    <div class="container bg-light p-5 col-sm-10 mt-3" style="font-size: 20px;">
        <form action="inserta.php" method="POST" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="nombre" class="col-sm-1 col-form-label offset-sm-1">Nombre: </label>
                <div class="col-sm-6">
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="apellidos" class="col-sm-1 col-form-label offset-sm-1">Apellidos: </label>
                <div class="col-sm-6">
                <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="correo" class="col-sm-1 col-form-label offset-sm-1">Correo: </label>
                <div class="col-sm-6">
                <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="pass" class="col-sm-1 col-form-label offset-sm-1">Contraseña: </label>
                <div class="col-sm-6">
                <input type="password" class="form-control" id="pass" name="pass" placeholder="Contraseña" required>
                </div>
            </div>
            
            <div class="form-group row">
                <label for="imagen" class="col-sm-1 col-form-label offset-sm-1">Imagen: </label>
                <div class="col-sm-6">
                <input type="file" class="form-control-file" id="imagen" name="imagen" required>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-2 offset-sm-4">
                <input type="submit" value="Agregar" class="btn btn-primary btn-block">
                </div>
            </div>
        </form>
    </div>
</body>
</html>