<nav class="navbar navbar-dark bg-dark navBG">
    <a style="font-size:36px" class="navbar-brand font-weight-bold ml-5" href="#">MENÚ PRINCIPAL</a>
    <span class="navbar-text">
        <i class="mr-2">Bievenid@: <?= $_SESSION['user'] ?> </i>
        <i class="mr-5"><a href="administradores/ver_detalle.php?id=<?= $_SESSION['id'] ?>"><img src="administradores/images/<?= $_SESSION['img'] ?>" alt="" style="width: 60px; heigth: 60px; border-radius:10px "></a></i>
        <a class="mr-5 text-success" href="index.php">Salir <i class="fas fa-sign-out-alt fa-1x "></i></a>
    </span>        
</nav>
