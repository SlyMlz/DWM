<?php
session_start();
$id_rol = $_SESSION['rol'];
?>
<!DOCTYPE html>
<html lang="es">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="stylesheet" href="css/style.css">


	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Fascinate&family=Fascinate+Inline&family=Lobster+Two&family=Oswald:wght@300;400;500&family=Pacifico&family=Yanone+Kaffeesatz:wght@300&display=swap" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Fascinate&family=Fascinate+Inline&family=Lobster+Two&family=Oswald:wght@300;400;500&family=Pacifico&family=Yanone+Kaffeesatz:wght@300&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Fascinate&family=Fascinate+Inline&family=Lobster+Two&family=Oswald:wght@300;400;500&family=Pacifico&family=Roboto+Condensed&family=Yanone+Kaffeesatz:wght@300&display=swap" rel="stylesheet">



	<title>CONTENIDO</title>

	<!-- Bootstrap Core CSS -->
	<link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- MetisMenu CSS -->
	<link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="../dist/css/sb-admin-2.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>





	<form method="post">
		<div id="wrapper">

			<!-- Navigation -->

			<header class="container-fluid bg-success d-flex justify-content-center">
				<div class="container">
					<table>
						<tr>
							<td rowspan="2"><img src="img/logo.png" width="200" height="100"></td>
							<td> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;

							</td>
							<td>
								<h1 class="lead display-4 fs-6 px-6  pt-64">
									<center> DWM_UDENAR<center>
								</h1>
							</td>
							<td> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
							</td>
							<td rowspan="2"><img src="img/libros.png" width="100" height="100"></td>
						</tr>
						<tr>
							<td> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;


							</td>
							<td>
								<h1 class="lead display-4 fs-6 px-6  pt-64">
									<center> GESTIÓN DE TRABAJOS DE GRADO<center>
								</h1>
							</td>

						</tr>

					</table>
				</div>
				<title>Calificacion Proyectos</title>
				<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

				<!-- =========================== LLAMAR STYLE=========================== -->

				<link rel="stylesheet" href="css/style.css">

				<!-- =========================== FUENTES =========================== -->

				<link rel="preconnect" href="https://fonts.googleapis.com">
				<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
				<link href="https://fonts.googleapis.com/css2?family=Fascinate&family=Fascinate+Inline&family=Lobster+Two&family=Oswald:wght@300;400;500&family=Pacifico&family=Yanone+Kaffeesatz:wght@300&display=swap" rel="stylesheet">

				<link rel="preconnect" href="https://fonts.googleapis.com">
				<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
				<link href="https://fonts.googleapis.com/css2?family=Fascinate&family=Fascinate+Inline&family=Lobster+Two&family=Oswald:wght@300;400;500&family=Pacifico&family=Yanone+Kaffeesatz:wght@300&display=swap" rel="stylesheet">
				<link rel="preconnect" href="https://fonts.googleapis.com">
				<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
				<link href="https://fonts.googleapis.com/css2?family=Fascinate&family=Fascinate+Inline&family=Lobster+Two&family=Oswald:wght@300;400;500&family=Pacifico&family=Roboto+Condensed&family=Yanone+Kaffeesatz:wght@300&display=swap" rel="stylesheet">
				<link rel="stylesheet" href="css/jquery.dataTables.min.css">
				<script src="js/jquery.min.js"></script>
				<script src="js/popper.min.js"></script>
				<script src="js/bootstrap.min.js"></script>
				<script src="js/jquery.datatable.min.js"></script>
			</header>


			<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
				<div class="navbar-default sidebar" role="navigation">
					<div class="sidebar-nav navbar-collapse">
						<ul class="nav" id="side-menu">

							<li>
								<a href="?"><i class="fa fa-dashboard fa-fw"></i> Menú</a>
							</li>
							<?php if ($id_rol == 3 || $id_rol == 1) { ?>
							<li>
								<a href="#"><i class="fa fa-archive fa-fw"></i> Información básica<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level">
									<li>
										<a href="add-proyecto.php">Añadir proyecto</a>
									</li>
									<li>
										<a href="view-proyecto.php">Mirar proyecto</a>
									</li>
									<li>
										<a href="../requisitos.php">Consultar requisitos</a>
									</li>
								</ul>
							</li>
							<?php } ?>
							<?php if ($id_rol == 3 || $id_rol == 1 || $id_rol == 2) { ?>

							<li>
								<a href="#"><i class="fa fa-archive fa-fw"></i>Contenido<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level">
								<?php if ($id_rol != 2 ) { ?>
									<li>
										<a href="add-contenido.php">Añadir Contenido</a>
									</li>
									<?php } ?>
									<li>
										<a href="view-contenido.php">Mirar Contenido</a>
									</li>
									
									
								</ul>

							</li>
							<?php } ?>
							<?php if ($id_rol == 3 || $id_rol == 1) { ?>

							<li>
								<a href="#"><i class="fa fa-archive fa-fw"></i> Autores<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level">
									<li>
										<a href="add-autores.php">Añadir autor</a>
									</li>
									<li>
										<a href="view-autores.php">Mirar autor</a>
									</li>

								</ul>
							</li>
							<?php } ?>
							<?php if ($id_rol == 3 || $id_rol == 1 || $id_rol == 2) { ?>
							<li>
								<a href="#"><i class="fa fa-archive fa-fw"></i>Calificación<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level">
									<?php if ($id_rol == 1 || $id_rol == 2) { ?>
										<li>
											<a href="add-calificacion.php">Añadir Calificación</a>
										</li>
									<?php } ?>
									<li>
										<a href="view-calificacion.php">Visualizar Calificación</a>
									</li>
								</ul>
							</li>
							<?php } ?>
							<?php if ($id_rol == 1) { ?>
								<li>
									<a href="#"><i class="fa fa-archive fa-fw"></i>Gestión<span class="fa arrow"></span></a>
									<ul class="nav nav-second-level">
										<li>
											<a href="../estud.php">Registrar</a>
										</li>
										<li>
											<a href="mirar_registro.php">Mirar Registro</a>
										</li>
									</ul>
								</li>
							<?php } ?>
							<li>
								<a href="../index.php"><i class="fa fa-bar-chart-o fa-fw"></i>Cerrar sesión<span class="fa arrow"></span></a>
							</li>
						</ul>
					</div>

				</div>

			</nav>
		</div>

		</div>
		<script src="../bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>
		<script src="js/popper.min.js"></script>

		<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>

		<!-- Metis Menu Plugin JavaScript -->
		<script src="../bower_components/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>

		<!-- Custom Theme JavaScript -->
		<script src="../dist/js/sb-admin-2.js" type="text/javascript"></script>

		<script>
			function proyectoAvailability() {
				$("#loaderIcon").show();
				jQuery.ajax({
					url: "proyecto_availability.php",
					data: 'cshort=' + $("#cshort").val(),
					type: "POST",
					success: function(data) {
						$("#proyecto-availability-status").html(data);
						$("#loaderIcon").hide();
					},
					error: function() {}
				});
			}

			function proyectofullAvail() {
				$("#loaderIcon").show();
				jQuery.ajax({
					url: "proyecto_availability.php",
					data: 'cfull=' + $("#cfull").val(),
					type: "POST",
					success: function(data) {
						$("#proyecto-status").html(data);
						$("#loaderIcon").hide();
					},
					error: function() {}
				});
			}
		</script>
	</form>
</body>

</html>