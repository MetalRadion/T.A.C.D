<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kit_mascotas";

$conn = mysqli_connect($servername, $username, $password,$dbname);

if (!$conn) {
  die("ERROR EN LA CONEXION: " . mysqli_connect_error());
}
echo "Contectado con la BD !! ";
echo $dbname;
?>