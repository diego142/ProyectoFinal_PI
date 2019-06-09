<nav class="navbar navbar-expand-lg navbar-dark bg-dark navBG">
        <a class="navbar-brand font-weight-bold " style="font-size:36px" href="../menu.php">| MENÚ |</a>
        <i style="font-size: 30px; margin-left: 200px; color: white;">Productos</i>
        <a class="text-dark" style="font-size: 15px; margin-left: 10px; font-weight: bold;" href="../administradores/listaAdmin.php" ><i>/ Administradores</i></a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link ml-4 mr-5" href="../productos/listaProd.php">Listado <i class="far fa-list-alt"></i> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-4" href="../productos/agregar.php">Agregar <i class="fas fa-user-plus mr-5"></i> </a>
                </li>

            </ul>
        </div>

    <span class="navbar-text">
        <i class="mr-5"> - Bievenid@: <?= $_SESSION['user'] ?> </i>
        <a class="mr-5 text-success" href="../index.php">Salir <i class="fas fa-sign-out-alt fa-1x "></i></a>
    </span>  
</nav>