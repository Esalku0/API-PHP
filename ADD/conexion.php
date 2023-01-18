<?php
if(isset($_POST["title"])){
$title = $_POST["title"];
$nombre = "";
$servidor = "localhost:3307";
$usuario = "root";
$password = "";
$dbname = "toni";
$conexion = mysqli_connect($servidor, $usuario, $password, $dbname);
if (!$conexion) {
echo "Error en la conexion a MySQL: ".mysqli_connect_error();
exit();
}
$sql = "INSERT INTO musica (titol,album) VALUES ('".$title."','".$nombre."')";
if (mysqli_query($conexion, $sql)) {
echo "Registro insertado correctamente.";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
}
?>