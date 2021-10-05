<?php 
include("include/header.php");
include("include/footer.php");

include('db.php');

?>
<br>
<center> <h2>Formulario de inscripcion</h2> </center> <br>

<!-- formulario de inscripcion-->

<div class="container">

    <div class="row">

        <div class="col-md">

    
            <div class="card card-body">
                    <form action="val-inscripcion.php" method="POST">
                            <div class="form-group">
                                <input type="text" name="nombre" values="nombre" class="form-control" placeholder="Nombre" autofocus> <br>

                                <input type="text" name="apellido" values="apellido" class="form-control" placeholder="Apellido" autofocus> <br>

                                <input type="text" name="ci" values="ci" class="form-control" placeholder="Cedula de identidad" autofocus> <br>

                                <input type="password" name="clave" values="clave" class="form-control" placeholder="Clave" autofocus> <br>

                                <input type="text" name="email" values="email" class="form-control" placeholder="Email" autofocus> <br>

                                <input type="text" name="telefono" values="telefono" class="form-control" placeholder="Telefono" autofocus> <br>

                                        <button type="submit" name="registrar" value="registrar" class="btn btn-dark"> Registrar</button>

                                        <button type="submit" name="limpiar" value="limpiar" class="btn btn-danger"> Limpiar</button>
                            </div>
                            

                            </div>
                    </form>
            </div>

        </div>

    </div>

</div>
