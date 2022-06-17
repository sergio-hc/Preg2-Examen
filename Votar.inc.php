<h3>VOTAR</h3><br>
<h4> Selecione el Frente a Elegir</h4>

<?php $sql="select * from frente.datos ";
$resultado=mysqli_query($con, $sql);

$nu = 1;
while ($fila=mysqli_fetch_array($resultado))
{
    echo ($nu." ");
    $nu++;
    echo($fila["nombre"]." - ");
    echo($fila["descr"]." - ");
    echo($fila["nomDir"]." ");
    
    echo ("<input type='checkbox' name='frentes' value=" .$fila["nombre"]."</input><br>");
    echo ("<br>");

}
?>
<a href="ingresar.php">SALIR FLUJO</a><br>