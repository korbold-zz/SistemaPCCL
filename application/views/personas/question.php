<div class="container-fluid">      
    <div class="panel panel-default shadow-gris">
        <div class="panel-heading"> <span class="glyphicon glyphicon-check"></span>HOJA DE VIDA  </div>
        <div class="panel-body">

            <!-- +++++++++++++CODIGO INTERNO+++++++++++++++ -->



            <table id="mi_tablita" class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Evaluacion</th>

                        <th style="width: 160px">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>



                        <td>
                            <?php
                if($PENDIENTE=="SI"){
                ?>
                <br/>
                <a href="<?=site_url()?>/evaluacion_examinador/realizar_evaluacion"
                   class="btn btn-primary">
                    <span class="glyphicon glyphicon-tasks"></span>
                    Llenar F015
                </a>
                <?php
                }
                ?>


                        </td>
                    </tr>
                   
                </tbody>
            </table>

            <!-- +++++++++++FIN CODIGO INTERNO+++++++++++++ -->
        </div>
    </div>
</div>