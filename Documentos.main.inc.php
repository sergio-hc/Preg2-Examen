<?php
session_start();
echo "FRENTE: ".$_SESSION["frente"]; 
echo "<br>";

$sql="select * from frente.datos where nombre='".$_SESSION["frente"]."'";
$resultado=mysqli_query($con, $sql);
$fila=mysqli_fetch_array($resultado);
$nomfrente=$fila["descr"];
$nombre=$fila["nomDir"];
$ci=$fila["ci"];
$fecha=$fila["fechaC"];

?>