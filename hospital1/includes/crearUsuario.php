<?php
$conexion= mysqli_connect("localhost", "root", "", "hospital");

if(isset($_POST['registrar'])){

    if(strlen($_POST['DNI']) >=1 && strlen($_POST['nombre'])  >=1 && strlen($_POST['apellido'])  >=1 
    && strlen($_POST['contraseña'])  >=1 && strlen($_POST['rol']) >= 1 ){

    $DNI = trim($_POST['DNI']);
    $contraseña = trim($_POST['contraseña']);
    $nombre = trim($_POST['nombre']);
    $apellido = trim($_POST['apellido']);
    $rol = trim($_POST['rol']);

    $consulta= "INSERT INTO usuarios (DNI, nombre, apellido, contraseña, rol)
    VALUES ('$DNI,'$contraseña', '$nombre','$apellido', '$rol' )";

    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);

    header('Location: ../usuarios.php');
    }
}