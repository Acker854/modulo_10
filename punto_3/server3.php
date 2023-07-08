<?php
include "index3.html";

$edad = 0;

if (isset($_GET['verificar'])) {
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $cedula = $_GET['cc'];

    echo "El Nombre registrado es : ".$nombre."<br>";
    echo "El Apellido registrado es: ".$apellido."<br>";
    echo "El numero de Cédula registrado es : ".$cedula."<br>";

}

?>