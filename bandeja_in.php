<?php
include "conexion.inc.php";
session_start();
$usuario = $_GET["usuario"];
echo "Usuario: ".$usuario."</br>"; 
$_SESSION["cod_usuario"]=$usuario;

$sql="select * from FlujoProcesoSeguimiento ";
$sql.="where usuario='".$_SESSION["cod_usuario"]."' ";
$sql.="and HoraFin is null ";
$resultado=mysqli_query($con, $sql);
?>
<br>
<table style="border-collapse: separate;">
<tr style="font-weight:bold ; font-size: 20px;">
  <td>Nro Tramite</td>
  <td>Flujo</td>
  <td>Proceso</td>
  <td>Operacion</td>
</tr>
<?php 
while ($fila=mysqli_fetch_array($resultado))
{
  echo "<tr>";
  echo "<td>".$fila["Tramite"]."</td>";
  echo "<td>".$fila["flujo"]."</td>";
  echo "<td>".$fila["Proceso"]."</td>";
  echo "<td><a href='principal.php?flujo=".$fila["flujo"]."&proceso=".$fila["Proceso"]."'>Editar</a></td>";
  echo "</tr>";
}
?>

</table>
<br><a href="ingresar.php">SALIR</a>