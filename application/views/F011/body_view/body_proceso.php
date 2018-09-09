<div class="container-fluid">      
    <div class="panel panel-default ">
        <div class="panel-heading"> <span class="glyphicon glyphicon-check"></span> Proceso de Calificación </div>  
        <div class="panel-body">

          



            <table id="mi_tablita" class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Cédula</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                       
                        <th style="width: 160px">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($PERSONAS as $per) {
                        ?>
                        <tr>
                            <td><?= $per->CEDULA ?></td>
                            <td><?= $per->NOMBRES ?></td>
                            <td><?= $per->APELLIDO_PATERNO.' '. $per->APELLIDO_MATERNO ?> </td>
                           
                            <td>
                                <a href="<?= site_url() ?>/f011/calificar/<?= $per->ID_PERSONA ?>" 
                                   class="btn btn-default btn-xs"><span class="glyphicon glyphicon-edit"></span> Calificar</a>

                                
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>

            
        </div>
    </div>
</div>