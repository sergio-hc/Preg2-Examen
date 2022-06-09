<?php
session_start();
$nombrefrente=$_GET["nombrefrente"];
$nombre=$_GET["nombre"];
$cidentidad=$_GET["cidentidad"];
$fecha=$_GET["fecha"];

$sql="update frente.datos set ";
$sql.="descr='$nombrefrente', nomDir ='$nombre', ci=$cidentidad ";
$sql.="where nombre='".$_SESSION["frente"]."'";
$resultado=mysqli_query($con, $sql);
?>