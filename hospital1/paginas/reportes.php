<?php include_once '../vista/parte_superior' ?>
    <title>Reportes</title>
<?php include_once '../vista/parte_inferior' ?>
<br>
<div class="container is-fluid">
<div class="col-xs-12">
    <br>
		<div>
        <a class="btn btn-primary" href="../includes/excel.php">Excel
            <i class="fa fa-table" aria-hidden="true"></i>
        </a>
    <br>



    <div class="container-fluid">
    <form class="d-flex">
			<form action="" method="GET">
			<input class="form-control me-2" type="search" placeholder="Buscar reportes" 
			name="busqueda"> <br>
			<button class="btn btn-outline-info" type="submit" name="enviar"> <b>Buscar</b> </button> 
			</form>
    </div>
<?php
$conexion=mysqli_connect("localhost","root","","hospital"); 
$where="";

if(isset($_GET['enviar'])){
    $busqueda = $_GET['busqueda'];


	if (isset($_GET['busqueda']))
	{
		$where="WHERE reportes.pacientes LIKE'%".$busqueda."%' OR nombre  LIKE'%".$busqueda."%'
    OR DNI  LIKE'%".$busqueda."%' OR area" ;
	}
}