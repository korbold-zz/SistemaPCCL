<!--<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    

        <link href="<?= base_url() ?>assets/bootstrap/css/bootstrap.min.css" 
              rel="stylesheet">
        <link href="<?= base_url() ?>assets/bootstrap/css/dataTables.bootstrap.min.css" 
              rel="stylesheet">

        <style type="text/css">
            .shadow-gris{
                box-shadow: 1px 1px 6px #333;
            }
        </style>
    </head>
    <body>-->
        
        <div class="container-fluid">      
            <div class="panel panel-default shadow-gris">
                <div class="panel-heading"> <span class="glyphicon glyphicon-check"></span> <?= $TITULO_PAGINA ?>  </div>
                <div class="panel-body">

                    <!-- +++++++++++++CODIGO INTERNO+++++++++++++++ -->



                    <table id="mi_tablita" class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>Cédula</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                
                                <th style="width: 200px">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($PERSONAS as $per) {
                                ?>
                                <tr>
                                    <td><?= $per->CEDULA ?></td>
                                    <td><?= $per->NOMBRES ?></td>
                                    <td><?= $per->APELLIDO_PATERNO . ' ' . $per->APELLIDO_MATERNO ?> </td>
                                    
                                    <td>
                                        <a href="<?= site_url() ?>/procesos/editFormulario018/<?= $per->ID_PERSONA ?>" 
                                           class="btn btn-default btn-xs"><span class="glyphicon glyphicon-edit"></span> Verificar</a>

                                        <a href="<?= site_url() ?>/reportes/reporte_f018/<?= $per->ID_PERSONA ?>" 
                                           class="btn btn-default btn-xs"
                                           target="popup" onClick="window.open(this.href, this.target, 'width=800,height=600');
                                                return false;"><span class="glyphicon glyphicon-print"></span> Imprimir</a>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>

                    <!-- +++++++++++FIN CODIGO INTERNO+++++++++++++ -->
                </div>
            </div>
        </div>
        <br/>
<!--
        <script src="<?= base_url() ?>assets/bootstrap/js/jquery.min.js"></script>
        <script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>

        <script src="<?= base_url() ?>assets/bootstrap/js/jquery.dataTables.min.js"></script>
        <script src="<?= base_url() ?>assets/bootstrap/js/dataTables.bootstrap.min.js"></script>	
        <script>
                                        $(document).ready(function () {
                                            $('#mi_tablita').DataTable();
                                        });
        </script>

    </body>
</html>-->