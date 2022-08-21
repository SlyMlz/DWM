<?php
$proyecto_short = $_POST['proyecto_short'];
$proyecto_full = $_POST['proyecto_full'];
$sub1 = $_POST['sub1'];
$sub2 = $_POST['sub2'];
$sub3 = $_POST['sub3'];
$sub4 = $_POST['sub4'];
$sub5 = $_POST['sub5'];
$sub6 = $_POST['sub6'];
$sub7 = $_POST['sub7'];


include('../config/DbFunction.php');
$obj = new DbFunction();
$obj->create_contenido($_POST['proyecto_short'], $_POST['proyecto_full'], $_POST['sub1'], $_POST['sub2'], $_POST['sub3'], $_POST['sub4'], $_POST['sub5'], $_POST['sub6'], $_POST['sub7']);
