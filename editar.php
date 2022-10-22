<?php
include'db.php';
session_start();

$dire = $_POST['direccion'];
$tel = $_POST['telefono'];
$mail = $_POST['email'];
$nom = $_POST['nombre'];
$prof = $_POST['profecion'];
$exp = $_POST['exp'];
$info = $_POST['info'];

$veruno = $_SESSION['primero'];
$verdos = $_SESSION['segundo'];

$resultado = mysqli_query($conect,"select * from registrar where Usuario = '$veruno' and Pass = '$verdos'");

$valores = mysqli_fetch_array($resultado);
$valuar = $valores['Codigo'];

mysqli_query($conect,"UPDATE datos SET direccion = '$dire', telefono = '$tel', email = '$mail', nombre = '$nom', profesion = '$prof', experiencia = '$exp', informacion = '$info' WHERE codigo = '$valuar'");
mysqli_close($conect);
header("Location: perfil.php");
?>