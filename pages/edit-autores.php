<?php
include('../config/DbFunction.php');
$subid = isset($_GET['sid']) ? $_GET['sid'] : $_POST['sid'];
$obj = new DbFunction();
$rs = $obj->showaut($subid);
$res = $rs->fetch_object();
if (isset($_POST['submit'])) {
	$sid = $_POST['sid'];
	$obj->edit_actores($_POST['dat1'], $_POST['dat2'], $_POST['dat3'], $_POST['dat4'], $subid);
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


			<div id="page-wrapper">
				<!-- /.row -->
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading">Editar Contenido</div>
							<div class="panel-body">
								<form method="post">
									<div class="row">
										<br><br>
										<input type="hidden" name="sid" value="<?php echo isset($_GET['sid']) ? $_GET['sid'] : $_POST['sid'] ?>">

										<div class="form-group">
										<div class="col-lg-4">
											<label>Código</label>
										</div>
										<div class="col-lg-6">
											<input class="form-control" name="dat1" value="<?php echo $res->dat1; ?>">
										</div>
									</div>
									<br><br>

									<div class="form-group">
										<div class="col-lg-4">
											<label>Nombre</label>
										</div>
										<div class="col-lg-6">
											<input class="form-control" name="dat2" value="<?php echo $res->dat2; ?>">
										</div>
									</div>
									<br><br>
									<div class="form-group">
										<div class="col-lg-4">
											<label>Apellido</label>
										</div>
										<div class="col-lg-6">
											<input class="form-control" name="dat3" value="<?php echo $res->dat3; ?>">

										</div>
									</div>
									<br><br>

									<div class="form-group">
										<div class="col-lg-4">
											<label>Cedula</label>
										</div>
										<div class="col-lg-6">
											<input class="form-control" name="dat4" value="<?php echo $res->dat4; ?>" >  
										</div>
									</div>



										
										
										<div class="form-group">
											<div class="col-lg-6"><br><br>
												<button type="submit" class="btn btn-primary" name="submit">Editar </button>
												<!--
                                                    <button class="btn btn-primary" id="btneditCalificaciones"  value="Update Calificacion" >Editar </button>

                                                        <button type="submit" class="btn btn-primary" name="submit"
                                                        value="Update Course"></button>
                                                -->
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

		<script src="../bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>


		<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>

		<!-- Metis Menu Plugin JavaScript -->
		<script src="../bower_components/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>

		<!-- Custom Theme JavaScript -->
		<script src="../dist/js/sb-admin-2.js" type="text/javascript"></script>

		<script>
			$('#btneditCalificacioness').on('click', function() {
				let datos = $('#foreditmCalificacion').serialize();
				$.ajax({
					type: 'POST',
					url: 'edit-calificacion.php?',
					data: datos,
					success: function(r) {
						alert('sss');
					}
				});


				return false;
			});
		</script>
	</form>
</body>

</html>