<?php
session_start();
$usuario = $_POST['user'];
$contraseña = $_POST['pass'];

include 'conexion.php';

$sql = "SELECT codigo,contraseña,id_rol FROM usuario WHERE codigo = '$usuario'";
$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $password = $row["contraseña"];
        $rol = $row['id_rol'];
    }
    if ($contraseña == $password) {
        $_SESSION['rol'] = $rol; //aqui asigna el rol de manera global
        echo 1; //xD  
    } else {
        echo 'Contraseña incorrecta';
    }
} else {
    echo "Usuario no registrado en el sistema";
}
$mysqli->close();