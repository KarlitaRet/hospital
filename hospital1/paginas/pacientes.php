<?php include_once '../vista/parte_superior' ?>
    <title>Usuarios</title>
<?php include_once '../vista/parte_inferior' ?>
<br>
<div class="container is-fluid">
<div class="col-xs-12">
    <br>
		<div>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create">
    <a href="../includes/crearUsuario.php" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i>Registrar</a>
    </button>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create">
				<span class="glyphicon glyphicon-plus"></span> Registar enfermero+ <i class="fa fa-plus"></i> </a>
    </button>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create">
		<span class="glyphicon glyphicon-plus"></span> Agregar Area+ <i class="fa fa-plus"></i> </a>
    </button>
    <table class="table table-bordered table-hover col-12">
    <thead>
        <tr>
            <th scope="col">DNI</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Enfermero Asignado</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
<tbody>
<?php
    $conexion=mysqli_connect("localhost","root","","hospital");               
    $SQL="SELECT pacientes.DNI, pacientes.nombre, pacientes.apellido, pacientes.descripcion, enfermeros.nombre FROM pacientes
    LEFT JOIN enfermeros ON pacientes.enfermeros = enfermeros.DNI $where";
    $dato = mysqli_query($conexion, $SQL);

    if($dato -> num_rows >0){
        while($fila=mysqli_fetch_array($dato)){
?>
<tr>
    <td><?php echo $fila['DNI']; ?></td>
    <td><?php echo $fila['nombre']; ?></td>
    <td><?php echo $fila['apellido']; ?></td>
    <td><?php echo $fila['descripcion']; ?></td>
    <td><?php echo $fila['enfermeros']; ?></td>
    <td>
        <a class="btn btn-warning" href="editar_paciente.php?id=<?php echo $fila['DNI']?> ">
            <i class="fa fa-edit"></i> 
        </a>
        <a class="btn btn-danger"  href="eliminar_paciente.php?id=<?php echo $fila['DNI']?>">
            <i class="fa fa-trash"></i>
        </a>
    </td>
</tr>

<?php
}
}else{

    ?>
    <tr class="text-center">
    <td colspan="16">No existen registros</td>
    </tr>

    
    <?php
    
}

?>

<?php include_once '../vista/parte_inferior.php' ?>