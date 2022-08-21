<?php
$proyecto_short = $_POST['proyecto_short'];
$proyecto_full = $_POST['proyecto_full'];
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

include('../config/DbFunction.php');
$obj = new DbFunction();
$obj->create_calificacion($_POST['proyecto_short'], $_POST['proyecto_full'], $_POST['cal1'], $_POST['cal2'], $_POST['cal3'], $_POST['cal4'], $_POST['cal5'], $_POST['cal6'], $_POST['cal7'], $_POST['cal8'], $_POST['cal9'], $_POST['cal10'], $_POST['cal11']);
