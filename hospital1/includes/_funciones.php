<?php 
require_once ("_bd.php");

if (isset($_POST['accion'])){ 
    switch ($_POST['accion']){
        //casos de registros
        case 'editar_usuario':
            editar_registro();
            break; 

            case 'eliminar_usuario';
            eliminar_registro();
            break;

            case 'editar_paciente';
            editar_paciente();
            break;
    }
}

    function editar_usuario() {
		$conexion=mysqli_connect("localhost","root","","hospital");
		extract($_POST);
		$consulta="UPDATE usuarios SET nombre = '$nombre', apellido = '$apellido',
        contraseña ='$contraseña', rol = '$rol' WHERE DNI = '$DNI' ";
		mysqli_query($conexion, $consulta);
        header('Location: ../paginas/usuarios.php');    
    }

function eliminar_usuario() {
    $conexion=mysqli_connect("localhost","root","","hospital");
    extract($_POST);
    $DNI= $_POST['DNI'];
    $consulta= "DELETE FROM usuarios WHERE DNI= $DNI";

    mysqli_query($conexion, $consulta);


    header('Location: ../paginas/usuarios.php');

}


function editar_paciente() {
    $conexion=mysqli_connect("localhost","root","","hospital");
    extract($_POST);
    $consulta="UPDATE pacientes SET nombre = '$nombre', apellido = '$apellido',
    contraseña ='$contraseña', area = '$area', cama = '$cama' enfermero = '$enfermero' WHERE DNI = '$DNI' ";
    mysqli_query($conexion, $consulta);
    header('Location: ../paginas/pacientes.php');    
}

function eliminar_paciente() {
    $conexion=mysqli_connect("localhost","root","","hospital");
    extract($_POST);
    $DNI= $_POST['DNI'];
    $consulta= "DELETE FROM pacientes WHERE DNI= $DNI";

    mysqli_query($conexion, $consulta);


    header('Location: ../paginas/pacientes.php');

}