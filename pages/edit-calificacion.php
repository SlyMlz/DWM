<?php
    include('../config/DbFunction.php');
    $subid=isset($_GET['sid']) ? $_GET['sid'] : $_POST['sid'] ;
    $obj=new DbFunction();   
    $rs=$obj->showcalificacion1($subid);
    $res=$rs->fetch_object(); 
    if(isset($_POST['submit'])){
        $sid = $_POST['sid'];
        $obj->edit_calificacion($_POST['cal1'],$_POST['cal2'],$_POST['cal3'],$_POST['cal4'],$_POST['cal5'],$_POST['cal6'],$_POST['cal7'],$_POST['cal8'],$_POST['cal9'],$_POST['cal10'],$_POST['cal11'],$sid);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Editar Calificación</title>

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
                            <div class="panel-heading">Editar Calificacion</div>
                            <div class="panel-body">
                                <form method="post">
                                    <div class="row">
                                        <br><br>
                                        <input type="hidden" name="sid" value="<?php echo isset($_GET['sid']) ?$_GET['sid'] :$_POST['sid']?>">
                                        <div class="form-group">
                                            <label>Introducción: Descripcion breve del tema de investigación.</label>
                                            <input class="form-control" name="cal1" id="cal1"
                                                value="<?php echo $res->cal1;?>">
                                        </div>
                                        <div class="form-group">
                                            <label> Planteamiento del problema: Descripcion del problema que soporta al
                                                estudio. </label>
                                            <input  class="form-control" name="cal2" id="cal2"
                                                value="<?php echo $res->cal2;?>">
                                        </div>
                                        <div class="form-group">

                                            <label>Objetivos: Los objetivos son precisos y coherentes, conducen a la
                                                resolución del problema.</label>
                                            <input class="form-control" name="cal3" id="cal3"
                                                value="<?php echo $res->cal3;?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Referentes teoricos: Explicacion breve de los principales aspectos
                                                teoricos.</label>
                                            <input class="form-control" name="cal4" id="cal4"
                                                value="<?php echo $res->cal4;?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Metodologia: presentación del tipo, diseño, población y tecnicas.</label>
                                            <input class="form-control" name="cal5" id="cal5"
                                                value="<?php echo $res->cal5;?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Resultados: los datos recolectados son acordes a los objetivos.</label>
                                            <input class="form-control" name="cal6" id="cal6"
                                                value="<?php echo $res->cal6;?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Conclusiones: Descripción preciosa de los aspectos relevantes obtenidos
                                                en la investigación.</label>
                                            <input class="form-control" name="cal7" id="cal7"
                                                value="<?php echo $res->cal7;?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Bibliografia: referencias bibliograficas pertinentes y
                                                actualizadas.</label>
                                            <input class="form-control" name="cal8" id="cal8"
                                                value="<?php echo $res->cal8;?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Nota.</label>
                                            <input class="form-control" name="cal9" id="cal9"
                                                value="<?php echo $res->cal9;?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Aprobado.</label>
                                            <input class="form-control"
                                                name="cal10" id="cal10"
                                                value="<?php echo $res->cal10;?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Laureada.</label>
                                            <input class="form-control"
                                                name="cal11" id="cal11"
                                                value="<?php echo $res->cal11;?>">
                                        </div>
                                        <div class="form-group">
                                            <div class="col-lg-6"><br><br>
                                                <button type="submit" class="btn btn-primary" name="submit" >Editar </button>
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

    </form>
</body>

</html>