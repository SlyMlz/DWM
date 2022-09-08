<?php 
    $hostname="localhost";
	$username="root";
	$password="root";
	$dbname="dwm";
    $_SESSION['urlin'] = '/DWM';
	$mysqli = new mysqli($hostname, $username, $password, $dbname);
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
mysqli_report(MYSQLI_REPORT_OFF);
