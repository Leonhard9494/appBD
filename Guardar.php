<?php

include "conexion.php";

$Id=$_POST["id"];
$nombre=$_POST["Nom"];
$marca=$_POST["Marc"];
$precio=$_POST["Precio"];
$cantidad=$_POST["Cant"];

$sql="INSERT INTO equipos VALUES ('$Id','$nombre','$marca','$precio','$cantidad')";
$result=mysqli_query($conexion, $sql);
if($result){
  echo "datos guardados exitosamente";

}else{
  echo "Error al guardar la información: ".mysqli_error();
}
mysqli_close($conexion);
?>
