<?php
$proyecto_short = $_POST['cshort'];
$proyecto_full = $_POST['cfull'];
$cal1 = $_POST['cal1'];
$cal2 = $_POST['cal2'];
$cal3 = $_POST['cal3'];
$cal4 = $_POST['cal4'];
$cal5 = $_POST['cal5'];
$cal6 = $_POST['cal6'];
$cal7 = $_POST['cal7'];
$cal8 = $_POST['cal8'];
$cal9 = $_POST['cal9'];
$cal10 = $_POST['cal10'];
$cal11 = $_POST['cal11'];
$nombre = 'Anexo' . '_' . date('YmdGis') . '_' . $_FILES['fileAnexoCal']['name'];
$nombrecal = strlen($nombre) >= 101 ? substr($nombre, 0, 100) : $nombre;
$nombrecal = $nombre . '.pdf';
$rutacal = 'anexos_calificacion/';
$temporal = $_FILES['fileAnexoCal']['tmp_name'];
if (!file_exists($rutacal)) {
    $rutacal = mkdir($rutacal, 0777, true);
    $rutacal = 'anexos_calificacion/';
}
if (!(move_uploaded_file($temporal, $rutacal . $nombrecal))) {
    echo 'No se pudo adjuntar el archivo';
    exit();
} else {
    include('../config/DbFunction.php');
    $obj = new DbFunction();
    $obj->create_calificacion($_POST['cshort'], $_POST['cfull'], $_POST['cal1'], $_POST['cal2'], $_POST['cal3'], $_POST['cal4'], $_POST['cal5'], $_POST['cal6'], $_POST['cal7'], $_POST['cal8'], $_POST['cal9'], $_POST['cal10'], $_POST['cal11'],$nombrecal,$rutacal);
}

/*
include('../config/DbFunction.php');
$obj = new DbFunction();
$obj->create_calificacion($_POST['proyecto_short'], $_POST['proyecto_full'], $_POST['cal1'], $_POST['cal2'], $_POST['cal3'], $_POST['cal4'], $_POST['cal5'], $_POST['cal6'], $_POST['cal7'], $_POST['cal8'], $_POST['cal9'], $_POST['cal10'], $_POST['cal11']);
*/