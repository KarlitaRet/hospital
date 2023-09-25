<?php
$conexion= mysqli_connect("localhost", "root", "", "hospital");

if(isset($_POST['registrar'])){

    if(strlen($_POST['DNI']) >=1 && strlen($_POST['nombre'])  >=1 && strlen($_POST['apellido'])  >=1 ){

    $DNI = trim($_POST['DNI']);
    $nombre = trim($_POST['nombre']);
    $apellido = trim($_POST['apellido']);

    $consulta= "INSERT INTO enfermeros (DNI, nombre, apellido)
    VALUES ('$DNI,'$nombre','$apellido')";

    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);

    header('Location: ../pacientes.php');
    }
}