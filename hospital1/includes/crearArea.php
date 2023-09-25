<?php
$conexion= mysqli_connect("localhost", "root", "", "hospital");

if(isset($_POST['registrar'])){

    if(strlen($_POST['nom_area']) >=1){

    $area = trim($_POST['nom_area']);

    $consulta= "INSERT INTO area (area)
    VALUES ('$area')";

    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);

    header('Location: ../pacientes.php');
    }
}