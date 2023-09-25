<?php include_once '../vista/parte_superior.php'?>
<tittle>Codigo Azul</title>
<?php include_once '../vista/nav.php'?>
    <style>
        /* Estilos para el botón */
        .boton-alarma {
            width: 150px;
            height: 150px;
            background-color: #007bff; /* Color de fondo azul */
            border: none;
            border-radius: 50%; /* Para hacerlo redondo */
            color: white; /* Color de texto blanco */
            font-size: 18px;
            text-align: center;
            line-height: 150px; /* Centra verticalmente el texto */
            cursor: pointer;
        }

        /* Estilos al pasar el mouse sobre el botón */
        .boton-alarma:hover {
            background-color: #0056b3; /* Cambiar color al pasar el mouse */
        }
    </style>
<button id="botonAlarma" class="alarma-button" onclick="playSound()">Codigo Azul</button>
    <audio id="alarmaSound">
<?php include_once '../vista/parte_inferior.php'?>

