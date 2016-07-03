<?php
//Se Agrega el archivo que contine la conexion a la BD
include "conexion.php";

$Id=$_POST["id"];
$nombre=$_POST["Nom"];
$marca=$_POST["Marc"];
$precio=$_POST["Precio"];
$cantidad=$_POST["Cant"];

$sql="UPDATE equipos SET Id='$id', nombre='$Nom', marca='$Marc', precio='$Precio', cantidad='$Cant', WHERE Id=$id";
$res=mysqli_query($conexion,$sql);
if($res){
	echo "Los datos se actualizaron de manera exitosa";
	echo "nombre:".$Nom." marca:".$Marc." precio:".$Precio." cantidad:".$Cant;
	}else{
		  echo "Se produjo un error al momento de Actualizar los datos:".mysqli_error();
		}
mysqli_close($conexion);
?>
