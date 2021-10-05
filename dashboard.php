<?php

include("db.php");

include("include/footer.php");

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/master.css">
    <title>Academia de Musica Barak</title>
</head>
<body>
    

            <!--  alerta de botstrap  -->

            <?php if(isset($_SESSION['mensaje'])) { ?>

            <div class="alert alert-<?= $_SESSION['masaje_color']?> warning alert-dismissible fade show" role="alert">
            <?= $_SESSION['mensaje']?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            <?php session_unset(); }  ?>


<!-- dashboard barra superior -->

<div class="container-fluid">
        <div class="row justify-content-center align-content-center">
            <div class="col-8 barra">
                <h4 class="text-light">Logo</h4>
            </div>
            <div class="col-4 text-right barra">
                <ul class="navbar-nav mr-auto">
                    <li>
                        <a href="#" class="px-3 text-light perfil dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-circle user"></i></a>

                        <div class="dropdown-menu" aria-labelledby="navbar-dropdown">
                            <a class="dropdown-item menuperfil cerrar" href="#"><i class="fas fa-sign-out-alt m-1"></i>Salir
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="barra-lateral col-12 col-sm-auto">
                <nav class="menu d-flex d-sm-block justify-content-center flex-wrap">
                    <a href="#"><i class="fas fa-home"></i><span>Inicio</span></a>
                    <a href="#"><i class="fas fa-home"></i><span>Inicio</span></a>
                    <a href="#"><i class="fas fa-home"></i><span>Inicio</span></a>
                    <a href="#"><i class="fas fa-home"></i><span>Home</span></a>
                </nav>
            </div>
            <main class="main col">
                <div class="row justify-content-center align-content-center text-center">
                    <div class="columna col-lg-6">
                            <?php
                            
                            $query = "SELECT * FROM alumnos  WHERE id";
                            $result_alumnos = mysqli_query($conn,$query);

                            while ($row = mysqli_fetch_array($result_alumnos)) { ?>
                               
                               <h4> <?php echo $row['nombre']?>  Bienvenido </h4>
                            

                           <?php   } ?>
                            
                            
                        

                    </div>

                </div>

            </main>
        </div>
    </div>


</body>
</html>