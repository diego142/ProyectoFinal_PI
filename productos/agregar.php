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
<?php include("../includes/navbar_prod.php"); ?>

    <div class="container bg-light p-5 col-sm-10 mt-3" style="font-size: 20px;">
        <form action="inserta.php" method="POST" enctype="multipart/form-data">

            <div class="form-group row">
                <label for="nombre" class="col-sm-1 col-form-label offset-sm-1">Nombre: </label>
                <div class="col-sm-6">
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="codigo" class="col-sm-1 col-form-label offset-sm-1">Codigo: </label>
                <div class="col-sm-6">
                <input type="text" class="form-control" id="codigo" name="codigo" placeholder="######" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="descripcion" class="col-sm-1 col-form-label offset-sm-1">Descripcion: </label>
                <div class="col-sm-6">
                <textarea class="form-control" rows="3" id="descripcion" name="descripcion"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="costo" class="col-sm-1 col-form-label offset-sm-1">Costo: </label>
                <div class="col-sm-6">
                <input type="text" class="form-control" id="costo" name="costo" placeholder="Costo" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="stock" class="col-sm-1 col-form-label offset-sm-1">Stock: </label>
                <div class="col-sm-6">
                <input type="number" class="form-control" id="stock" name="stock" placeholder="Stock">
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