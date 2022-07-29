<?php
include("conexion_tacd.php");
$consulta = "SELECT * FROM temperaturas ";
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
       <h2>Mostrando temperaturas</h2>
        <br>
        <div id="main_tabla">
        <table border="1">
            <tr>
                <td>id</td>
                <td>fecha</td>
                <td>hora</td>
                <td>temperatura</td>
            </tr>
            <?php
            $consulta="SELECT * FROM temperaturas ";
            $datos= mysqli_query ($conn,$consulta);
            
            while ($fila=mysqli_fetch_array($datos)){
             ?>
            <tr>
                <td><?php echo $fila['id_medicion'] ?></td>
                <td><?php echo $fila['fecha'] ?></td>
                <td><?php echo $fila['hora'] ?></td>
                <td><?php echo $fila['temperatura'] ?></td>
            </tr>
        <?php
        } 
        ?>
        </table>
        </div>
   </body>
</html>
