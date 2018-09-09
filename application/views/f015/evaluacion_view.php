<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title><?= NOMBRE_SISTEMA ?></title>

        <meta name="description" content="and Validation" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <!-- bootstrap & fontawesome -->
        <link rel="stylesheet" href="<?= base_url() ?>ar/assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?= base_url() ?>ar/assets/font-awesome/4.5.0/css/font-awesome.min.css" />

        <!-- page specific plugin styles -->
        <link rel="stylesheet" href="<?= base_url() ?>ar/assets/css/select2.min.css" />

        <!-- text fonts -->
        <link rel="stylesheet" href="<?= base_url() ?>ar/assets/css/fonts.googleapis.com.css" />

        <!-- ace styles -->
        <link rel="stylesheet" href="<?= base_url() ?>ar/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

        <!--[if lte IE 9]>
                <link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
        <![endif]-->
        <link rel="stylesheet" href="<?= base_url() ?>ar/assets/css/ace-skins.min.css" />
        <link rel="stylesheet" href="<?= base_url() ?>ar/assets/css/ace-rtl.min.css" />

        <!--[if lte IE 9]>
          <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
        <![endif]-->

        <!-- inline styles related to this page -->

        <!-- ace settings handler -->
        <script src="<?= base_url() ?>ar/assets/js/ace-extra.min.js"></script>

        <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->


        <script src="<?= base_url() ?>ar/assets/js/html5shiv.min.js"></script>
        <script src="<?= base_url() ?>ar/assets/js/respond.min.js"></script>


        <link rel="stylesheet" href="<?= base_url() ?>ar/assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?= base_url() ?>ar/assets/font-awesome/4.5.0/css/font-awesome.min.css" />

        <!-- page specific plugin styles -->
        <link rel="stylesheet" href="<?= base_url() ?>ar/assets/css/jquery-ui.custom.min.css" />
        <link rel="stylesheet" href="<?= base_url() ?>ar/assets/css/jquery.gritter.min.css" />
        <link rel="stylesheet" href="<?= base_url() ?>ar/assets/css/select2.min.css" />
        <link rel="stylesheet" href="<?= base_url() ?>ar/assets/css/bootstrap-datepicker3.min.css" />
        <link rel="stylesheet" href="<?= base_url() ?>ar/assets/css/bootstrap-editable.min.css" />
        <link rel="stylesheet" href="<?= base_url() ?>ar/assets/css/jquery-ui.min.css" />

        <!-- text fonts -->
        <link rel="stylesheet" href="<?= base_url() ?>ar/assets/css/fonts.googleapis.com.css" />

        <!-- ace styles -->
        <link rel="stylesheet" href="<?= base_url() ?>ar/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
        <link rel="stylesheet" href="<?= base_url() ?>ar/assets/css/ace-rtl.min.css" />

        <script src="<?= base_url() ?>ar/assets/js/ace-extra.min.js"></script>

        <link href="<?= base_url() ?>ar/assets/bootstrap/css/bootstrap.min.css" 
              rel="stylesheet">
        <link href="<?= base_url() ?>ar/assets/bootstrap/css/dataTables.bootstrap.min.css" 
              rel="stylesheet">
        <style type="text/css">
            .shadow-gris{
                box-shadow: 1px 1px 6px #333;
            }
        </style>

    </head>

    <body class="no-skin">
        <?php $this->load->view('partes/etiqueta'); ?>

        <div class="main-container ace-save-state" id="main-container">
            <script type="text/javascript">
                try {
                    ace.settings.loadState('main-container')
                } catch (e) {
                }
            </script>

            <div id="sidebar" class="sidebar                  responsive                    ace-save-state">
                <script type="text/javascript">
                    try {
                        ace.settings.loadState('sidebar')
                    } catch (e) {
                    }
                </script>

                <div class="sidebar-shortcuts" id="sidebar-shortcuts">
                    <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                        <button class="btn btn-success">
                            <i class="ace-icon fa fa-signal"></i>
                        </button>

                        <button class="btn btn-info">
                            <i class="ace-icon fa fa-pencil"></i>
                        </button>

                        <button class="btn btn-warning">
                            <i class="ace-icon fa fa-users"></i>
                        </button>

                        <button class="btn btn-danger">
                            <i class="ace-icon fa fa-cogs"></i>
                        </button>
                    </div>

                    <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                        <span class="btn btn-success"></span>

                        <span class="btn btn-info"></span>

                        <span class="btn btn-warning"></span>

                        <span class="btn btn-danger"></span>
                    </div>
                </div><!-- /.sidebar-shortcuts -->


                <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
                    <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
                </div>
            </div>

            <div class="main-content">
                <div class="main-content-inner">
                    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                        <ul class="breadcrumb">
                            <li class="active" ><span class="glyphicon glyphicon-check"></span>  <?= $TITULO_PAGINA ?> </li>
                        </ul> 
                        <div class="nav-search" id="nav-search">
                            <form class="form-search">
                                <span class="input-icon">
                                    <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                                    <i class="ace-icon fa fa-search nav-search-icon"></i>
                                </span>
                            </form>
                        </div><!-- /.nav-search -->
                    </div>

                    <div class="page-content">


                        <div class="row">
                            <div class="col-xs-12">
                                <!-- INICIO PROGRAMACION  -->


                                <form method="post"
                                      action="<?= site_url() ?>/evaluacion_examinador/actualizar_evaluacion"
                                      data-toggle="validator" role="form">


                                    <div style="margin: 20px 5px 5px 5px">

                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                A. Esquema de Certificación (50%)
                                            </div>
                                            <div class="panel-body">
                                                <?php
                                                foreach ($PREGUNTAS_ESQUEMAS as $value) {
                                                ?>
                                                <p>
                                                    <input type="hidden" value="<?=$value->ID_EVALUACION_EXAMINADOR?>" name="ID_EVALUACION"/>
                                                    <?=$value->DESCRIPCION_PREGUNTA?><br/>
                                                    Respuesta:
                                                    <select name="ESQUEMAS[P-<?=$value->ID_RESPUESTA_ESQUEMA?>-<?=$value->RESPUESTA_CORRECTA?>-<?=$value->VALOR_MAXIMO?>]" required>
                                                        <option value="" selected hidden>...</option>
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>
                                                    </select>
                                                </p>
                                                <?php
                                                }
                                                ?>
                                                
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                B. Procedimientos de los exámenes y documentos (50%)
                                            </div>
                                            <div class="panel-body">
                                                
                                                <?php
                                                foreach ($PREGUNTAS_PROCEDIMIENTOS as $value) {
                                                ?>
                                                <p>
                                                    <?=$value->DESCRIPCION_PREGUNTA?>
                                                    <textarea name="PROCEDIMIENTOS[P-<?=$value->ID_RESPUESTA_PROCEDIMIENTO?>]" 
                                                              required
                                                              style="width: 100%"></textarea>
                                                </p>
                                                <?php
                                                }
                                                ?>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Guardar Datos</button>
                                        </div>
                                    </div>

                                </form>




                                <!-- PAGE CONTENT ENDS -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.page-content -->
                </div>
            </div><!-- /.main-content -->

            <?php $this->load->view('partes/footer'); ?>


        </div><!-- /.main-container -->

    </div><!-- /.main-container -->

    <script src="<?= base_url() ?>ar/assets/bootstrap/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>ar/assets/bootstrap/js/bootstrap.min.js"></script>

    <script src="<?= base_url() ?>ar/assets/bootstrap/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>ar/assets/bootstrap/js/dataTables.bootstrap.min.js"></script>	

    <script src="<?= base_url() ?>ar/assets/js/ace.min.js"></script>

    <script type="text/javascript">
                    $(document).ready(function () {
                        $('#mi_tablita').DataTable();
                    });

    </script>




</body>
</html>
