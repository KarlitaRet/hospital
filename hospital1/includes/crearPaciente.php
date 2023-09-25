<?php
$conexion= mysqli_connect("localhost", "root", "", "hospital");

if(isset($_POST['registrar'])){

    if(strlen($_POST['DNI']) >=1 && strlen($_POST['nombre'])  >=1 && strlen($_POST['apellido'])  >=1 
    && strlen($_POST['contraseña'])  >=1 && strlen($_POST['descripcion']) >= 1 ){

    $DNI = trim($_POST ['DNI']);
    $contraseña = trim($_POST['contraseña']);
    $nombre = trim($_POST['nombre']);
    $apellido = trim($_POST['apellido']);
    $rol = trim($_POST['descripcion']);
    $enfermero = trim($_POST['enfermero']);

    $consulta= "INSERT INTO pacientes (DNI, nombre, apellido, contraseña, descripcion, enfermero)
    VALUES ('$DNI,'$contraseña', '$nombre','$apellido', '$descripcion', '$enfermero' )";

    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);

    header('Location: ../pacientes.php');
    }
}