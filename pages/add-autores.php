<?php

include('../config/DbFunction.php');
$obj = new DbFunction();
$rs = $obj->showproyecto();
$rs1 = $obj->showproyecto();

if (isset($_POST['submit'])) {

	$obj = new DbFunction();

	
}


?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title></title>
	<link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
	<link href="../dist/css/sb-admin-2.css" rel="stylesheet">
	<link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<!-- =========================== LLAMAR STYLE=========================== -->


	<!-- =========================== FUENTES =========================== -->

</head>

<body>


	<form method="post">
		<div id="wrapper">

			<!-- Navigation -->
			<?php include('leftbar.php') ?>;


			<div id="page-wrapper">
				<div class="row">
					<!-- /.col-lg-12 -->
				</div>
				<!-- /.row -->
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading">Autores</div>
							<div class="panel-body">
								<div class="row">
									<form id="formAutores">
									<div class="col-lg-10">
										<div class="form-group">
											<div class="col-lg-4">
												<label>Título<span id="" style="font-size:11px;color:Red">*</span> </label>
											</div>
											<div class="col-lg-6">
												<select class="form-control" name="proyecto_short" id="cshort" onchange="proyectoAvailability()" required="required">
													<option VALUE="">SELECT</option>
													<?php while ($res = $rs->fetch_object()) { ?>

														<option VALUE="<?php echo htmlentities($res->cid); ?>"><?php echo htmlentities($res->cshort) ?></option>


													<?php } ?>
											</div>
											</select>
											<span id="proyecto-availability-status" style="font-size:12px;"></span>
										</div>
									</div>

									<br><br>

									<div class="form-group">
										<div class="col-lg-4">
											<label>Modalidad<span id="" style="font-size:11px;color:red">*</span></label>
										</div>
										<div class="col-lg-6">
											<select class="form-control" name="proyecto_full" id="cfull" required="required" onchange="proyectofullAvail()">
												<option VALUE="">SELECT</option>
												<?php while ($res1 = $rs1->fetch_object()) { ?>

													<option VALUE="<?php echo htmlentities($res1->cfull); ?>"><?php echo htmlentities($res1->cfull) ?></option>


												<?php } ?>

											</select>
											<span id="proyecto-status" style="font-size:12px;"></span>
										</div>
									</div>
									<br><br>

									<div class="form-group">
										<div class="col-lg-4">
											<label>Código</label>
										</div>
										<div class="col-lg-6">
											<input class="form-control" name="dat1">
										</div>
									</div>
									<br><br>

									<div class="form-group">
										<div class="col-lg-4">
											<label>Nombre</label>
										</div>
										<div class="col-lg-6">
											<input class="form-control" name="dat2">
										</div>
									</div>
									<br><br>
									<div class="form-group">
										<div class="col-lg-4">
											<label>Apellido</label>
										</div>
										<div class="col-lg-6">
											<input class="form-control" name="dat3">

										</div>
									</div>
									<br><br>

									<div class="form-group">
										<div class="col-lg-4">
											<label>Cedula</label>
										</div>
										<div class="col-lg-6">
											<input class="form-control" name="dat4">
										</div>
									</div>
									<br><br>
									<br>

									<div class="form-group">
										<div class="col-lg-4">

										</div>
										<div class="col-lg-6"><br><br>
											<button id="btnAutores" class="btn btn-primary" name="submit">Guardar </button>
										</div>

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



		</div>
		<footer class="w-100 bg-success d-flex  align-items-center justify-content-center flex-wrap">
			<h4 class="display-4 fs-6 px-6  pt-6">
				<center>Universidad de Nariño Telefono (+57) 7244309-7311449 ext 2393 - email : DWM_UDENAR@udenar.edu.co</center>
			</h4>
			<h4 class="lead display-4 fs-6 px-6  pt-64">
				<center>© 2022- DWM_UDENAR</center>
			</h4>
		</footer>

		<!-- jQuery -->
		<script src="../bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>

		<!-- Metis Menu Plugin JavaScript -->
		<script src="../bower_components/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>

		<!-- Custom Theme JavaScript -->
		<script src="../dist/js/sb-admin-2.js" type="text/javascript"></script>

		<script>
			function proyectofullAvail() {
				$("#loaderIcon").show();
				jQuery.ajax({
					url: "proyecto_availability.php",
					data: 'cfull1=' + $("#cfull").val(),
					type: "POST",
					success: function(data) {
						$("#proyecto-status").html(data);
						$("#loaderIcon").hide();
					},
					error: function() {}
				});
			}

			function proyectoAvailability() {
				$("#loaderIcon").show();
				jQuery.ajax({
					url: "proyecto_availability.php",
					data: 'cshort1=' + $("#cshort").val(),
					type: "POST",
					success: function(data) {
						$("#proyecto-availability-status").html(data);
						$("#loaderIcon").hide();
					},
					error: function() {}
				});
			}

			$('#btnAutores').on('click', function() {
				let datos = $('#formAutores').serialize();
				$.ajax({
					type: 'POST',
					url: 'reg_autores.php',
					data: datos,
					success: function(r) {
						alert(r);
					}
				});


				return false;
			});
		</script>
	</form>
</body>

</html>