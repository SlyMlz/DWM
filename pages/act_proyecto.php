<?php
$cid = $_POST['cid'];
$titulo = $_POST['cshort'];
$modalidad = $_POST['cfull'];
$fecha = $_POST['cdate'];
$nombre = 'Anexo' . '_' . date('YmdGis') . '_' . $_FILES['fileAnexo']['name'];
$nombre = strlen($nombre) >= 101 ? substr($nombre, 0, 100) : $nombre;
$nombre = $nombre . '.pdf';
$temporal = $_FILES['fileAnexo']['tmp_name'];
$ruta = 'anexos/';
if (!file_exists($ruta)) {
    $ruta = mkdir($ruta, 0777, true);
    $ruta = 'anexos/';
}
if (!(move_uploaded_file($temporal, $ruta . $nombre))) {
    echo 'No se pudo adjuntar el archivo';
    exit();
} else {
    include('../config/DbFunction.php');
    $obj = new DbFunction();
    $obj->edit_proyecto($titulo, $modalidad, $fecha, $ruta, $nombre, $cid);
}