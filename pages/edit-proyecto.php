<?php
include('../config/DbFunction.php');
$cid = isset($_GET['cid']) ? $_GET['cid'] : $_POST['cid'];
$obj = new DbFunction();
$rs = $obj->showproyecto1($cid);
$res = $rs->fetch_object();
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
										<input type="hidden" id="cid" value="<?php echo isset($_GET['cid']) ? $_GET['cid'] : $_POST['cid'] ?>">
										<input type="hidden" id="nombre" value="<?php echo  $res->nombre ?>">

										<div class="form-group">
											<div class="col-lg-4">
												<label>Título<span id="" style="font-size:11px;color:red">*</span> </label>
											</div>
											<div class="col-lg-6">

												<input class="form-control" id="cshort" value="<?php echo $res->cshort; ?>">
												<span id="proyecto-availability-status" style="font-size:12px;"></span>
											</div>
										</div>
										<br><br>

										<div class="form-group">
											<div class="col-lg-4">
												<label>Modalidad<span id="" style="font-size:11px;color:red">*</span></label>
											</div>
											<div class="col-lg-6">
												<input class="form-control" id="cfull" value="<?php echo $res->cfull; ?>">
												<span id="proyecto-status" style="font-size:12px;"></span>
											</div>
										</div>

										<br><br>


										<div class="form-group">
											<div class="col-lg-4">
												<label>Fecha de registro</label>
											</div>
											<div class="col-lg-6">
												<input class="form-control" value="<?php echo date('d-m-Y'); ?>" readonly="readonly" id="cdate" name="cdate">

											</div>
										</div>


										<br><br>

										<div class="form-group">
											<div class="col-lg-4">
												<label>Anexo</label>
											</div>
											<div class="col-lg-6">
												<input type="file" class="form-control" name="fileAnexo" id="fileAnexo" value="<?php echo $res->ruta; ?>">
											</div>
										</div>







										<div class="form-group">
											<div class="col-lg-6"><br><br>
												<button type="button" class="btn btn-primary" id='btnEditProyect'>Editar </button>
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
			$('#btnEditProyect').on('click', function() {
				let datos = new FormData();
				datos.append('cshort', $('#cshort').val());
				datos.append('cid', $('#cid').val());
				datos.append('cfull', $('#cfull').val());
				datos.append('cdate', $('#cdate').val());
				datos.append('fileAnexo', $('#fileAnexo')[0].files[0]);
				$.ajax({
					type: 'POST',
					url: 'act_proyecto.php',
					contentType: false,
					data: datos,
					processData: false,
					cache: false,
					success: function(r) {
						alert(r);
					}
				});
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