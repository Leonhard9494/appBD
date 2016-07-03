<?php
$server="mysql.hostinger.mx";
$usuario="u586952491_leon";
$password="leonhard9494";
$baseDatos="u586952491_movil";

/*$server="localhost";
$usuario="root";
$password="";
$baseDatos="movilesbd";*/

$conexion=mysqli_connect($server, $usuario, $password, $baseDatos) or die("Error al conectarse al servidor de base de datos".mysqli_error());
//mysql_select_db($baseDatos,$conexion);
?>