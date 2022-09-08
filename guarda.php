<?php
include 'config/conexion.php';



$codigo =  ($_POST['codigo']);

$nom1 =  ($_POST['nom1']);
$nom2 =  ($_POST['nom2']);
$ape1 =  ($_POST['ape1']);
$ape2 =  ($_POST['ape2']);
$dir =  ($_POST['dir']);
$barrio =  ($_POST['barrio']);
$tel =  ($_POST['tel']);
$correo =  ($_POST['email']);
$contraseña =  ($_POST['pass']);
$sql = "INSERT INTO usuario ( codigo, nombre1, nombre2, apellido1, apellido2, contraseña, direccion, barrio, correo, telefonono)
            VALUES ( '$codigo', '$nom1', '$nom2', '$ape1', '$ape2', '$contraseña', '$dir', '$barrio', '$correo', '$tel')";


if (mysqli_query($mysqli, $sql)) {
    echo 'Registro agregado';
} else {
    echo $mysqli->error;
}


mysqli_close($mysqli);
exit();