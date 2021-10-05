<?php

include('db.php');

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $ci = $_POST['ci'];
    $clave = $_POST['clave'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    $query = "INSERT INTO alumnos(nombre, apellido, ci, clave, email, telefono) VALUES ('$nombre', '$apellido','$ci', '$clave','$email', '$telefono')";

    $result = mysqli_query($conn, $query);

    if (!$result) {
        die ("falla de conxion");
    }

    
    $_SESSION['mensaje'] = 'Guardado Satisfactoriamente';
    $_SESSION ['masaje_color'] = 'success';


    

    header("Location: Inicio-sesion.php");

?>