<?php

if (!(isset($_SESSION['login']))) {

	header('../add-proyecto.php');
}
/*
if (isset($_POST['submit'])) {

	include('../config/DbFunction.php');
	$obj = new DbFunction();
	$obj->create_proyecto($_POST['proyecto-short'], $_POST['proyecto-full'], $_POST['cdate']);
} else {
	exit('Acción no permitida');
}*/
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
			<?php include('leftbar.php') ?>;

			<!--nav-->
			<div id="page-wrapper">
				<div class="row">
					<div class="col-lg-12">
					</div>
					<!-- /.col-lg-12 -->
				</div>
				<!-- /.row -->
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading">Información básica</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-lg-10">
										<form id="formdataproyect">
											<div class="form-group">
												<div class="col-lg-4">
													<label>Título<span id="" style="font-size:11px;color:red">*</span> </label>
												</div>
												<div class="col-lg-6">

													<input class="form-control" name="proyecto-short" id="cshort" required="required">
													<span id="proyecto-availability-status" style="font-size:12px;"></span>
												</div>
											</div>
											<br><br>

											<div class="form-group">
												<div class="col-lg-4">
													<label>Modalidad<span id="" style="font-size:11px;color:red">*</span></label>
												</div>
												<div class="col-lg-6">
													<input class="form-control" name="proyecto-full" id="cfull" required="required">
													<span id="proyecto-status" style="font-size:12px;"></span>
												</div>
											</div>

											<br><br>


											<div class="form-group">
												<div class="col-lg-4">
													<label>Fecha de registro</label>
												</div>
												<div class="col-lg-6">
													<input class="form-control" value="<?php echo date('d-m-Y'); ?>" readonly="readonly" id="cdate">

												</div>
											</div>


											<br><br>

											<div class="form-group">
												<div class="col-lg-4">
													<label>Anexo</label>
												</div>
												<div class="col-lg-6">
													<input type="file" class="form-control" name="fileAnexo" id="fileAnexo">
												</div>
											</div>

											<br><br>

											<div class="form-group">
												<div class="col-lg-4">

												</div>
												<div class="col-lg-6"><br><br>
													<button class="btn btn-primary" id="btnSave">Guardar</button>
												</div>

											</div>
										</form>
									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

		<footer class="w-100 bg-success d-flex  align-items-center justify-content-center flex-wrap">
			<h4 class="display-4 fs-6 px-6  pt-6">
				<center>Universidad de Nariño Telefono (+57) 7244309-7311449 ext 2393 - email : DWM_UDENAR@udenar.edu.co</center>
			</h4>
			<h4 class="lead display-4 fs-6 px-6  pt-64">
				<center>© 2022- DWM_UDENAR</center>
			</h4>
		</footer>



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
			$('#btnSave').on('click', function() {
				if ($('#cshort').val() == '') {
					alert('Título no puede estar vacio');
				} else if ($('#cfull').val() == '') {
					alert('Modalidad no puede estar vacio');
				} else if ($('#fileAnexo').val() == '') {
					alert('Debe seleccionar un archivo');
				} else {
					let datos = new FormData();
					datos.append('cshort', $('#cshort').val());
					datos.append('cfull', $('#cfull').val());
					datos.append('cdate', $('#cdate').val());
					datos.append('fileAnexo', $('#fileAnexo')[0].files[0]);
					$.ajax({
						type: 'POST',
						url: 'reg_proyecto.php',
						contentType: false,
						data: datos,
						processData: false,
						cache: false,
						success: function(r) {
							alert(r);
						}
					});

				}
				return false;
			});
		</script>
	</form>
</body>

</html>