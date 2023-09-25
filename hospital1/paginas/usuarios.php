<?php include_once '../vista/parte_superior' ?>
    <title>Usuarios</title>
<?php include_once '../vista/parte_inferior' ?>
<br>
<div class="container is-fluid">
<div class="col-xs-12">
    <br>
		<div>
    <a href="../includes/crearUsuario.php" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i>Registrar</a>
    </button>
      <table class="table table-bordered table-hover col-12">
      <thead>
        <tr>
            <th scope="col">DNI</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Rol</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
<tbody>
<?php
  $conexion=mysqli_connect("localhost","root","","hospital");               
  $SQL="SELECT usuarios.DNI, usuarios.nombre, usuarios.apellido, rol.rol FROM usuarios
  LEFT JOIN usuarios ON usuarios.rol = rol.id $where";
  $dato = mysqli_query($conexion, $SQL);

  if($dato -> num_rows >0){
    while($fila=mysqli_fetch_array($dato)){
?>
<tr>
  <td><?php echo $fila['DNI']; ?></td>
  <td><?php echo $fila['nombre']; ?></td>
  <td><?php echo $fila['apellido']; ?></td>
  <td><?php echo $fila['rol']; ?></td>
  <td>
    <a class="btn btn-warning" href="editar_user.php?id=<?php echo $fila['DNI']?> ">
      <i class="fa fa-edit"></i> 
    </a>
    <a class="btn btn-danger"  href="eliminar_user.php?id=<?php echo $fila['DNI']?>">
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