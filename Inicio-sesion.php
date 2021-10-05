<?php include("db.php")?>
<?php include("include/header.php")?>
<?php include("include/footer.php")?>

 <br>
 <center>  <h2>Inicio de sesion</h2>  </center>

<!-- Inicio de Sesion -->

<div class="container">

    <div class="row">

                <?php if(isset($_SESSION['mensaje'])) { ?>

            <div class="alert alert-<?= $_SESSION['masaje_color']?> warning alert-dismissible fade show" role="alert">
            <?= $_SESSION['mensaje']?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            <?php session_unset(); }  ?>

        <div class="col-md">

            <div class="card card-body">
                    <form action="val-sesion.php" method="POST">
                            <div class="form-group">
                                <input type="text" name="ci" values="ci" class="form-control" placeholder="Cedula de Identidad" autofocus> <br>
                                <input type="text" name="clave" values="clave" class="form-control" placeholder="Clave" autofocus> <br>
                                        <button type="submit" name="registrar" value="ingrsar" class="btn btn-dark"> Ingresar</button>
                                        <button type="submit" name="cancelar" value="cancelar" class="btn btn-danger"> Cancelar</button>
                            </div>
                            

                            </div>
                    </form>
            </div>

        </div>

    </div>

</div>


