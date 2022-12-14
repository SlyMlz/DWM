<?php
	include('../config/DbFunction.php');
	$obj = new DbFunction();
	$rs = $obj->showproyecto();

	if(isset($_GET['del']))
    {
		
		$obj->del_proyecto(intval($_GET['del']));
		$obj->del_contenido(intval($_GET['del']));
		
		
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

	<title>Mirar proyecto</title>
	<link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
	<link href="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
	<link href="../bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
	<link href="../dist/css/sb-admin-2.css" rel="stylesheet">
	<link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

	<div id="wrapper">

		<!-- Navigation -->

		<?php include('leftbar.php') ?>;


		<nav>
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
							<div class="panel-heading">
								Información básica
							</div>
							<!-- /.panel-heading -->
							<div class="panel-body">
								<div class="dataTable_wrapper">
									<table class="table table-striped table-bordered table-hover" id="dataTables-example">
										<thead>
											<tr>
												<th>Id</th>
												<th>Título</th>
												<th>Modalidad</th>
												<th>Fecha de registro</th>
												<th>Opciones

												</th>
											</tr>
										</thead>
										<tbody>

											<?php
											$sn = 1;
											while ($res = $rs->fetch_object()) { ?>
												<tr class="odd gradeX">
													<td><?php echo $sn ?></td>
													<td><?php echo htmlentities(strtoupper($res->cshort)); ?></td>
													<td><?php echo htmlentities(strtoupper($res->cfull)); ?></td>
													<td><?php echo htmlentities($res->cdate); ?></td>
													<td>&nbsp;&nbsp;
														<a href="edit-proyecto.php?cid=<?php echo htmlentities($res->cid); ?>">
															<p class="fa fa-edit"></p>
														</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
														<a href="view-proyecto.php?del=<?php echo htmlentities($res->cid); ?>">
															<p class="fa fa-times-circle"></p>
													</td>

												</tr>

											<?php $sn++;
											} ?>
										</tbody>
									</table>
								</div>
								<!-- /.table-responsive -->

							</div>
							<!-- /.panel-body -->
						</div>
						<!-- /.panel -->
					</div>
					<!-- /.col-lg-12 -->
				</div>
				<!-- /.row -->



			</div>
			<!-- /#page-wrapper -->

	</div>
	<footer class="w-100 bg-success d-flex  align-items-center justify-content-center flex-wrap">
		<h4 class="display-4 fs-6 px-6  pt-6">
			<center>Universidad de Nariño Telefono (+57) 7244309-7311449 ext 2393 - email : DWM_UDENAR@udenar.edu.co</center>
		</h4>
		<h4 class="lead display-4 fs-6 px-6  pt-64">
			<center>© 2022- DWM_UDENAR</center>
		</h4>
	</footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	</div>
	<!-- jQuery -->
	<script src="../bower_components/jquery/dist/jquery.min.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

	<!-- Metis Menu Plugin JavaScript -->
	<script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

	<!-- DataTables JavaScript -->
	<script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

	<!-- Custom Theme JavaScript -->
	<script src="../dist/js/sb-admin-2.js"></script>

	<!-- Page-Level Demo Scripts - Tables - Use for reference -->
	<script>
		$(document).ready(function() {
			$('#dataTables-example').DataTable({
				responsive: true
			});
		});
	</script>

</body>

</html>