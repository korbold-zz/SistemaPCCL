<div class="container-fluid">      
    <div class="panel panel-default shadow-gris">
        <div class="panel-heading"> <span class="glyphicon glyphicon-check"></span>CALIFICACIÓN  </div>
        <div class="panel-body">

            <!-- +++++++++++++CODIGO INTERNO+++++++++++++++ -->



            <table id="mi_tablita" class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Descripción</th>
                        

                        <th style="width: 160px">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($RESULTADO as $res) {
                        ?>
                    <?php
                    foreach ($PERSONAS as $per) {
                        ?>
                        <tr>
                            <td>"EVALUACIÓN DEL EXAMINADOR PARA SELECCIÓN"</td>
                            <td>
                                <a href="<?= site_url() ?>/reportes/reporte_f011/<?= $per->ID_PERSONA ?>" 
                                   class="btn btn-default btn-xs"
                                   target="popup" onClick="window.open(this.href, this.target, 'width=800,height=600');
                                           return false;"><span class="glyphicon glyphicon-print"></span> Imprimir</a>


                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                        <?php
                    }
                    ?>
                </tbody>
            </table>

            <!-- +++++++++++FIN CODIGO INTERNO+++++++++++++ -->
        </div>
    </div>
</div>