<?php


$con = mysqli_connect("localhost","sergio","123456");
mysqli_select_db($con, "frente");

if(isset($_POST['login'])) {
$usuario = $_POST['usuario'];
$pass = $_POST["pass"];

$sql = mysqli_query($con,"SELECT * from acceso where usuario = '".$usuario."'and pass ='".$pass."'");
$nr = mysqli_num_rows($sql);

    if($nr == 1){
    echo "bienvenido ".$usuario;
    header("Location: bandeja_in.php?usuario=$usuario");
    }else if($nr==0){
    echo "No ingreso...Usuario o Contraseña Incorrectos";
    //header("Location: acceso.php");
    }
}
 ?>
<html>
    <body style="background-color: #CCF5F7;">
    <h2>INICIO DE SESIÓN</h2>
             
        <form method="POST" action="ingresar.php">
           
         <label class="form-control-label">USUARIO:</label>
            <input type="text" class="form-control" name='usuario'>
           
             <div class="form-group">
                 <label class="form-control-label">PASSWORD:</label>
                     <input type="password" class="form-control" name="pass">
                  </div>                      
                               
                <button type="submit" class="btn btn-outline-primary" name="login">LOGIN</button>
                                    
                                
                            </div>
                        </form>
                    
    </body>
</html>