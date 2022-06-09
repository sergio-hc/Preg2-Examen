<?php
session_start();

$nombrefrente=$_GET["nombrefrente"];
$nombre=$_GET["nombre"];
$cidentidad=$_GET["cidentidad"];
$fecha=$_GET["fecha"];


$sql="insert into bd_elecciones.registrados values('$nombrefrente', '$nombre', $fecha) ";


$resultado=mysqli_query($con, $sql);

?>