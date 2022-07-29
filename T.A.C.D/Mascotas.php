<?php
include("conexion_tacd.php");
$consulta = "SELECT * FROM mascotas ";
?>
<!DOCTYPE html>
<html>
   <head>
       <title>T.A.C.D</title>
       <meta charset="utf-8">
	   <link rel="stylesheet" type="text/css" href="C:\Users\Lucas\Desktop\T.A.C.D\phpcss.css"/>
   </head>

   <body>
       <h1>T.A.C.D</h1>
       <h2>Mostrando tus Mascotas</h2>
       <br>
       <div id="main_tabla">
        <table border="1">
            <tr>
                <td>id</td>
                <td>nombre</td>
                <td>fecha nacimiento</td>
                <td>especie</td>
            </tr>
            <?php
            $consulta="SELECT * FROM mascotas ";
            $datos= mysqli_query ($conn,$consulta);
            
            while ($fila=mysqli_fetch_array($datos)){
             ?>
            <tr>
                <td><?php echo $fila['id'] ?></td>
                <td><?php echo $fila['nombre'] ?></td>
                <td><?php echo $fila['fecha_nac'] ?></td>
                <td><?php echo $fila['especie'] ?></td>
            </tr>
        <?php
        } 
        ?>
        </table>
        </div> 
   </body>
</html>
