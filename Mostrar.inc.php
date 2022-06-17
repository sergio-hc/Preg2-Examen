
<h4>MOSTRAR CANDIDATOS</h4><br>
<h4>Información Candidatos</h4>
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
    echo ("<br>");

}
?>