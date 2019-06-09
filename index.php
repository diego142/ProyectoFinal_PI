<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("includes/header.php") ?>
    <title>Login</title>
</head>
<body>
    <div class="container p-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card bg-card-blue">
                    <div class="card-header text-center text-white p-5">
                        <h1>Inicia Sesión</h1>
                        <i class="fas fa-user-circle fa-10x"></i>
                    </div>
                    <div class="card-body p-5">
                        <form id="formLogin">
                            <div class="form-group">
                                <input type="text" class="form-control" name="correo" id="correo" placeholder="Correo" >
                            </div>
                            <div class="form-group">
                                    <input type="password" class="form-control" name="pass" id="pass" placeholder="Contraseña" >
                            </div>
                            <div class="form-group">
                                <input type="submit" id="btn_form" value="Iniciar" class="btn btn-primary btn-block" >
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php
        if(isset($_SESSION['mensaje'])){
           $error = $_SESSION['mensaje'];

           switch($error){
               case 2:
                    echo " <script> alert('Por favor inicia sesion'); </script> "; 
               break;
           }
        }
        session_unset();
        session_destroy();
    ?>

    <?php include("includes/footer.php") ?>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="scripts/app.js"></script>
    
    
    </body>
</html>