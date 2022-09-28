<?php

    include('../config/DbFunction.php');
    $subid=isset($_GET['del']) ? $_GET['del'] : $_POST['del'] ;
    $obj=new DbFunction();   
    $rs=$obj->showcalificacion1($subid);
    $res=$rs->fetch_object(); 
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Descargar Calificación</title>

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
            <?php include('leftbar.php')?>;


            <div id="page-wrapper">
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Descargar Calificación</div>
                            <div class="panel-body">
                                <form method="post">
                                    <div class="row">
                                        <br><br>
                                        <input type="hidden" name="del" value="<?php echo isset($_GET['del']) ?$_GET['del'] :$_POST['del']?>">
                                        <div class="form-group">
                                            <label>Nombre archivo.</label>
                                            <p class="form-control" name="nombrecal" id="nombrecal">
                                                <?php echo $res->nombrecal;?>
                                            </p>
                                        </div>
                                        <?php
                                            $rutaDescarga = "../pages/anexos_calificacion/".$res->nombrecal;
                                            $nombreArchivo = $res->nombrecal;
                                        ?>
                                        <div class="form-group">
                                            <a class="btn btn-primary" href="<?php echo $rutaDescarga; ?>" download="<?php echo $nombreArchivo; ?>" role="button">
                                                Descargar Archivo
                                            </a>
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

    </form>
</body>

</html>