<?php
include_once 'includes/_bd.php';
session_start(); 

$dni = $_POST['dni'];
$contraseña = $_POST['contraseña'];
$_SESSION['dni'] = $dni;

$conexion = mysqli_connect("localhost", "root", "", "hospital");
$consulta = "SELECT * FROM usuarios WHERE dni='$dni' AND contraseña='$contraseña'";
$resultado = mysqli_query($conexion, $consulta);
$filas = mysqli_fetch_array($resultado);

if ($filas !== null && isset($filas['rol'])) {
    if ($filas['rol'] == 1) {
        header('Location: administrador.php');
    } elseif ($filas['rol'] == 2) {
        header('Location: generico.php');
    } else {
        include("index.html");
        echo "<h1 class='bad'>USTED NO ESTÁ EN NUESTRO PERSONAL</h1>";
    }
} else {
    include("index.html");
    echo "<h1 class='bad'>USTED NO ESTÁ EN NUESTRO PERSONAL</h1>";
}
?>

