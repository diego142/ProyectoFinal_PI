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
    require("../db/conecta.php");

        $id = $_GET['id'];
        $con = conecta();
        $query = "SELECT * FROM productos WHERE id = $id";
    ?>

    <title>Actualizar</title>
</head>
<body>

    <?php
        include("../includes/navbar_prod.php");

        if($result = $con->query($query)){
            $obj = $result->fetch_object();
    ?>

    <div class="container bg-light p-5 col-sm-10 mt-3" style="font-size: 20px;">
        <form action="update.php" method="POST" enctype="multipart/form-data">

            <input type="text" style="display:none" name="id" value=<?= $obj->id ?>>

            <div class="form-group row">
                <label for="nombre" class="col-sm-1 col-form-label offset-sm-1">Nombre: </label>
                <div class="col-sm-6">
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?= $obj->nombre ?>" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="codigo" class="col-sm-1 col-form-label offset-sm-1">Codigo: </label>
                <div class="col-sm-6">
                <input type="text" class="form-control" id="codigo" name="codigo" placeholder="######" value="<?= $obj->codigo ?>" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="descripcion" class="col-sm-1 col-form-label offset-sm-1">Descripcion: </label>
                <div class="col-sm-6">
                <textarea class="form-control" rows="3" id="descripcion" name="descripcion" required><?= $obj->descripcion ?></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="costo" class="col-sm-1 col-form-label offset-sm-1">Costo: </label>
                <div class="col-sm-6">
                <input type="text" class="form-control" id="costo" name="costo" placeholder="Costo" value="<?= $obj->costo ?>" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="stock" class="col-sm-1 col-form-label offset-sm-1">Stock: </label>
                <div class="col-sm-6">
                <input type="text" class="form-control" id="stock" name="stock" value="<?= $obj->stock ?>" placeholder="Stock" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="imagen" class="col-sm-1 col-form-label offset-sm-1">Imagen: </label>

                <img src="images/<?=$obj->imagen ?>" alt="" height="20%" width="15%">
            </div>
            
            <div class="form-group row">
                <div class="col-sm-6 offset-2">
                <input type="file" class="form-control-file" id="imagen" name="imagen">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-2 offset-sm-4">
                <input type="submit" value="Actualizar" class="btn btn-primary btn-block">
                </div>
            </div>
        </form>
    </div>

    <?php
        }else{
            echo "A ocurrido un error con la consulta";
        }
    ?>
    
</body>
</html>