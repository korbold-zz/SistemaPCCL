<div class="table-responsive">

    <div  class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"></h3>
            <h4>2.Solicitud</h4>
        </div>
        <div class="panel-body">
            <h5>2.1. En concordancia con la Norma Técnica de Reconocimiento de Organismos Evaluadores de Conformidad para la Certificación de Personas, la entidad solicita:														

            </h5>

            <table class="table table-striped table-hover"  width="50%" border="1">
                <tbody>
                    <tr>
                        <td>TIPO DE SOLICITUD					</td>
                        <td>MARCAR</td>
                    </tr>
                    <tr>
                        <?php
                        foreach ($TIPO as $p) {
                            ?>
                            <td><?= $m->ID_PERSONA ?><?php echo ' '; ?>                          
                                <?= $m->NOMBRES ?> <?php echo ' '; ?> <?= $m->APELLIDO_PATERNO ?> <?php echo ' '; ?><?= $m->APELLIDO_MATERNO ?> <?php echo ' '; ?>

                            </td>
                            <td><?= $p->MARCAR ?> <input type="checkbox" name="marcar" value="<?= $p->MARCAR ?> "> </td>
                            <?php
                        }
                        ?>
                    </tr>
                </tbody>
            </table>



            <hr> 




            <h5>2.2. Alcance para el que solicita el reconocimiento: (Revisar anexo)														


            </h5>
            <table class="table table-striped table-hover" width="200" border="1">
                <tbody>
                    <tr>
                        <th>SECTOR	</th>
                        <th>PERFIL PROFESIONAL</th>
                        <th>UNIDAD DE COMPETENCIA	</th>
                        <th>FAMILIA                    </th>
                        <th>ESQUEMA DE CERTIFICACIÓN</th>
                    </tr>
                    <?php
                    foreach ($RECO as $p) {
                        ?>
                        <tr>
                            <td><?= $p->NOMBRE_SECTOR_CIUU_PERF_PRO ?></td>

                            <td><?= $p->NOMBRE_DENOMINACION_CATALOGO_PERF_PRO ?></td>
                            <td><?= $p->UNIDAD_COMPETENCIA ?></td>

                            <td><?= $p->NOMBRE_FAMILIA_PROFESIONAL_PERF_PRO ?></td>
                            <td><?= $p->NOMBRE_DENOMINACION_CATALOGO_PERF_PRO ?></td>

                        </tr>
                        <?php
                    }
                    ?>

                </tbody>
            </table>

        </div>
    </div>

</div>