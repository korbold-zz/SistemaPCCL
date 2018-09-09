<div class="container-fluid">      
    <div class="panel panel-default shadow-gris">
        <div class="panel-heading"> <span class="glyphicon glyphicon-check"></span>EVALUACIÓN AL EXAMINADOR PARA SELECCIÓN											




        </div>
        <div class="panel-body">

            <!-- +++++++++++++CODIGO INTERNO+++++++++++++++ -->



            <table id="mi_tablita" class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Cédula</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>CORREO</th>


                        <th style="width: 250px">&nbsp;</th>
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
                            <td> <?= $per->E_MAIL ?> </td>

                            <td>
                                
                                    <a href="<?= site_url() ?>/f021/evaluar/<?= $per->ID_PERSONA ?>" 
                                       class="btn btn-default btn-xs"
                                        ><span class="glyphicon glyphicon-check"></span> Evaluar</a>

                            

                                    <a href="<?= site_url() ?>/reportes/reporte_f021/<?= $per->ID_PERSONA ?>" 
                                       class="btn btn-default btn-xs"
                                        ><span class="glyphicon glyphicon-download"></span> Descargar</a>

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