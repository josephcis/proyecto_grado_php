<?php 

include("db.php"); 

$ci=$_POST['ci'];
$clave=$_POST['clave'];


$query = "SELECT * FROM alumnos where ci='$ci' and clave='$clave'";

$result = mysqli_query($conn, $query);

$filas = mysqli_num_rows($result);

if ($filas > 0) {

    header("Location: dashboard.php");

} else {
    echo "error de conexion"; 
}

$_SESSION['mensaje'] = 'Ingreso Satisfactorio';
$_SESSION ['masaje_color'] = 'info';



