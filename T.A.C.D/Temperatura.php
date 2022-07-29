<?php
include("conexion_tacd.php");
$consulta = "SELECT * FROM temperaturas ";
?>
<!DOCTYPE html>
<html>
   <head>
       <title>Conexión PHP-MySQL</title>
       <meta charset="utf-8">
	   <link rel="stylesheet" type="text/css" href="Catsfiles.css"/>
   </head>

   <body>
       <h1>T.A.C.D</h1>
       <h2>Mostrando temperaturas</h2>
    <?php 
    $datos= mysqli_query ($conn,$consulta);
    while ($fila=mysqli_fetch_array($datos)){
        echo "<p>";
        echo $fila["id_medicion"];
        echo "-"; // un separador 
        echo $fila["fecha"];
        echo "-"; // un separador
        echo $fila["hora"];
        echo "-"; // un separador
        echo $fila["temperatura"];
        echo "</p>"; 
    } 
    ?>
   </body>
</html>