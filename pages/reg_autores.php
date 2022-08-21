<?php
$proyecto_short = $_POST['proyecto_short'];
$proyecto_full = $_POST['proyecto_full'];
$dat1 = $_POST['dat1'];
$dat2 = $_POST['dat2'];
$dat3 = $_POST['dat3'];
$dat4 = $_POST['dat4'];


include('../config/DbFunction.php');
$obj = new DbFunction();
$obj->create_autores($_POST['proyecto_short'], $_POST['proyecto_full'], $_POST['dat1'], $_POST['dat2'], $_POST['dat3'], $_POST['dat4']);