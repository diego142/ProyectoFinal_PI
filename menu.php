<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        include("includes/header.php"); 
        
        if(!isset($_SESSION['user'])){
            $_SESSION['mensaje'] = 2;
            header('Location: index.php');
            exit;
        }
    ?>

    <title>Inicio</title>
</head>
<body>
    <?php include("includes/nav_sesion.php") ?>
    
    <div class="container row col-md-10 offset-3">
        
            <div class="card m-5 text-center offset-4" style="width: 18rem;">
                <i class="fas fa-users fa-10x"></i>
                <div class="card-body">
                    <h5 class="card-title">Administradores</h5>
                    <a href="administradores/listaAdmin.php" class="btn btn-primary">Administrar</a>
                </div>
            </div>

            <div class="card m-5 text-center" style="width: 18rem;">
                <i class="fas fa-cubes fa-10x"></i>
                <div class="card-body">
                    <h5 class="card-title">Productos</h5>
                    <a href="productos/listaProd.php" class="btn btn-primary">Administrar</a>
                </div>
            </div>
    
    </div>

    <?php include("includes/footer.php") ?>

</body>
</html>