<?php
include('../config/DbFunction.php');
$idusuario = isset($_GET['cid']) ? $_GET['cid'] : $_POST['cid'];
$obj = new DbFunction();

if (isset($_POST['submit'])) {
    $cid = $_POST['cid'];
    $obj->edit_registro($_POST['nom1'], $_POST['nom2'], $_POST['ape1'], $_POST['ape2'], $_POST['dir'], $_POST['barrio'], $_POST['tel'], $_POST['email'], $cid);
}
$rs = $obj->showregistro1($idusuario);
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
            <!-- /.row -->
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Editar Registro</div>
                            <div class="panel-body">
                                <form method="post">
                                    <div class="row">
                                        <br><br>
                                        <input type="hidden" name="cid" value="<?php echo isset($_GET['cid']) ? $_GET['cid'] : $_POST['cid'] ?>">

                                        <h1>&nbsp; Registro </h1>

                                        <div class="col-6 form-group">
                                            <label for="nom1" class="form-label">Primer Nombre</label>
                                            <input type="text" class="form-control" id="nom1" name="nom1" value="<?php echo $res->nombre1; ?>">

                                        </div>

                                        <div class="col-6 form-group">
                                            <label for="nom2" class="form-label">Segundo Nombre</label>
                                            <input type="text" class="form-control" id="nom2" name="nom2" value="<?php echo $res->nombre2; ?>">
                                        </div>

                                        <div class="col-6 form-group">
                                            <label for="ape1" class="form-label">Primer Apellido</label>
                                            <input type="text" class="form-control" id="ape1" name="ape1" value="<?php echo $res->apellido1; ?>">
                                        </div>

                                        <div class="col-6 form-group">
                                            <label for="ape2" class="form-label">Segundo Apellido</label>
                                            <input type="text" class="form-control" id="ape2" name="ape2" value="<?php echo $res->apellido2; ?>">
                                        </div>

                                        <div class="col-6 form-group">
                                            <label for="dir" class="form-label">Dirección </label><br>
                                            <input type="text" class="form-control" id="dir" name="dir" value="<?php echo $res->direccion; ?>">
                                        </div>

                                        <div class="col-6 form-group">
                                            <label for="barrio" class="form-label">Barrio </label><br>
                                            <input type="text" class="form-control" id="barrio" name="barrio" value="<?php echo $res->barrio; ?>">
                                        </div>

                                        <div class="col-6 form-group">
                                            <label for="tel" class="form-label">Télefono</label><br>
                                            <input type="numero" class="form-control" id="tel" name="tel" value="<?php echo $res->telefonono; ?>">
                                        </div>

                                        <div class="col-6 form-group">
                                            <label for="email" class="form-label">Correo eletrónico</label><br>
                                            <input type="email" class="form-control" id="email" name="email" value="<?php echo $res->correo; ?>">
                                        </div>


                                        <div class="form-group">
                                            <div class="col-lg-6"><br><br>
                                                <button type="submit" class="btn btn-primary" name="submit">Editar </button>

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

        <script src="../bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>


        <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../bower_components/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../dist/js/sb-admin-2.js" type="text/javascript"></script>


    </form>
</body>

</html>