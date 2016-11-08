<?php

function Filtro($texto) {
  return htmlspecialchars(trim($texto), ENT_QUOTES);
}

$directorio = 'D:/xampp/htdocs/NOTFE2';
$nombre = isset($_POST['nombre']) ? Filtro($_POST['nombre']) : '';
$RUT = isset($_POST['RUT']) ? Filtro($_POST['RUT']) : '';
$direccion = isset($_POST['direccion']) ? Filtro($_POST['direccion']) : '';
$comuna = isset($_POST['comuna']) ? Filtro($_POST['comuna']) : '';
$edad = isset($_POST['edad']) ? (int) $_POST['edad'] : 0;
$sexo = isset($_POST['sexo']) ? Filtro($_POST['sexo']) : '';
$vocal = isset($_POST['vocal']) ? (int) $_POST['vocal'] : 0;
$alcalde = isset($_POST['alcalde']) ? Filtro($_POST['alcalde']) : 0;
$concejal = isset($_POST['concejal']) ? Filtro($_POST['concejal']) : 0;
$error = '';

?> 


<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Bootstrap Admin Theme</title>

  <!-- Bootstrap Core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- MetisMenu CSS -->
  <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>
  <div id="wrapper">
        <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
      </div>
          <!-- /.navbar-header -->
          <ul class="nav navbar-top-links navbar-right">
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                  <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
              <ul class="dropdown-menu dropdown-messages">
                <li>
                  <a href="#">
                    <div>
                      <strong>John Smith</strong>
                      <span class="pull-right text-muted">
                      <em>Yesterday</em>
                      </span>
                    </div>
                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                  </a>
                </li>
                <li class="divider"></li>
                  <li>
                    <a href="#">
                      <div>
                        <strong>John Smith</strong>
                        <span class="pull-right text-muted">
                        <em>Yesterday</em>
                        </span>
                      </div>
                      <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                    </a>
                  </li>
                  <li class="divider"></li>
                    <li>
                      <a href="#">
                        <div>
                          <strong>John Smith</strong>
                          <span class="pull-right text-muted">
                          <em>Yesterday</em>
                          </span>
                        </div>
                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                      </a>
                    </li>
                    <li class="divider"></li>
                      <li>
                        <a class="text-center" href="#">
                          <strong>Read All Messages</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </li>
                  </ul>
                    <!-- /.dropdown-messages -->
                  </li>
                <!-- /.dropdown -->
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Flot Charts</a>
                                </li>
                                <li>
                                    <a href="morris.html">Morris.js Charts</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">Panels and Wells</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="notifications.html">Notifications</a>
                                </li>
                                <li>
                                    <a href="typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="icons.html"> Icons</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grid</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Blank Page</a>
                                </li>
                                <li>
                                    <a href="login.html">Login Page</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <?php
        //Mostrar contenido
        if($enviado == 1 && $contenido == 1) {
          echo '<pre>';
          print_r($_POST);
          echo '</pre>';
        exit;
        } else if(empty($nombre)) {
          $error = 'Debe ingresar su Nombre.';
        } else if(empty($RUT)) {
          $error = 'Debe ingresar su RUT.';
        } else if(empty($direccion)) {
          $error = 'Debe ingresar su direccion';
        } else if(empty($comuna)) {
          $error = 'Debe ingresar su comuna.';
        } else if(empty($edad)) {
          $error = 'Debe ingresar su edad.';
        } else if(empty($sexo)) {
          $error = 'Debe ingresar su sexo';
        } else if(empty($alcalde)) {
          $error = 'Debe ingresar su alcalde.';
        } else if(empty($concejal)) {
          $error = 'Debe ingresar su concejal.';
        }
        // Vista de error
        if(!empty($error)) {
        ?>
        <div class="alert alert-info">
          <i class="glyphicon glyphicon-info-sign"></i>
          <?php echo $error; ?>
        </div>



        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Formulario</h1>
                 <form enctype="multipart/form-data" method="post" action="formulario.php" accept-charset="UTF-8">
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Datos personales:
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form enctype="multipart/form-data" method="post" action="formulario.php" accept-charset="UTF-8">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Nombre: <b><?php echo $nombre; ?></b></label>
                                        </div>
                                        <div class="form-group">
                                            <label>RUT: <b><?php echo $RUT; ?></b></label>
                                        </div>
                                        <div class="form-group">
                                            <label>Dirección</label>
                                            <input class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Comuna</label>
                                            <input class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Edad</label>
                                            <input type ="number" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Sexo</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Hombre
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Femenino
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>¿Ha sido vocal de mesa?</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>Si 
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Lista de Alcaldes</label>
                                            <select class="form-control">
                                                <option>Leopoldo Méndez Alcayaga</option>
                                                <option>Jorge Castro Muñoz</option>
                                                <option>Carlos Lemus Cid</option>
                                                <option>Jorge Esteban Sharp Fajardo</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Lista de concejales</label>
                                            <select multiple class="form-control">
                                                <option>GABRIELA HIPOLITA AZUA TORRES</option>
                                                <option>MARCELA ANDREA ESPINOZA SILVA</option>
                                                <option>GASTON LETELIER PAREDES</option>
                                                <option>JOANNA MUÑOZ JOHNSON</option>
                                                <option>PATRICIA NUÑEZ FERNANDEZ</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-default">Enviar</button>
                                        <button type="reset" class="btn btn-default">Reiniciar</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
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
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
  </form>
</body>






  
  <a href="./" class="btn btn-warning">
    <i class="glyphicon glyphicon-chevron-left"></i>
    Volver
  </a>
  <h3>¡Formulario enviado satisfactoriamente!</h3>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Datos enviados</h3>
      </div>
      <div class="panel-body">
        
        
        <p>
          Tu foto de perfil es: <br />
          <img src="./assets/<?php echo $nombre_foto; ?>" class="thumbnail">
        </p>
        <p>
          Tu descripción es: <br />
          <blockquote>
            <?php echo $descripcion; ?>
          </blockquote>
        </p>
        <p>
          Tu año de ingreso es: <b><?php echo $anio; ?></b>
        </p>
        <p>
          Tu sexo es: <b><?php 
          if ($sexo == 'm' ){
            echo 'Masculino';
          }elseif ($sexo == 'f'){
            echo 'Femenino';
          }else{
            echo 'No responde';
          } 
          ?></b>
        </p>
        <p>
          Tu <b><?php echo ($terminos == 1 ? 'sí' : 'no'); ?></b> aceptaste los términos y condiciones.</b>
        </p>
        <p>
          Tu <b><?php echo ($basura == 1 ? 'sí' : 'no'); ?></b> aceptaste recibir correos basura, eugh.</b>
        </p>
      </div>
      <div class="panel-footer">
        <div class="text-right">
          <a href="./" class="btn btn-primary">
            <i class="glyphicon glyphicon-chevron-left"></i>
            Volver
          </a>
        </div>
      </div>
    </div>
  <?php } ?>
    <!-- Pie de página -->
    <footer>
      <div class="text-center">
        <i class="glyphicon glyphicon-leaf"></i>
        Desarrollado por <a href="https://github.com/MiguelGonzalezAravena" target="_blank">Miguel González Aravena</a>
      </div>
    </footer>
    </div>

</html>