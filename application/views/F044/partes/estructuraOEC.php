<div class="table-responsive">

    <div  class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"></h3>
            <h4>3.ESTRUCTURA DEL OEC														

            </h4>
        </div>
        <div class="panel-body">
            <h5>3.1. Responsable del funcionamiento del de la organización:														

            </h5>
            <table class="table table-striped table-hover" width="100%" border="1">
                <tbody>
                    <tr>
                        <th>CARGO</th>
                        <th>NOMBRES Y APELLIDOS	</th>
                        <th>CÉDULA</th>
                        <th>E-MAIL</th>
                        <th>CELULAR</th>
                        <th>TELÉFONO</thh
                    </tr>
                    <?php
                    foreach ($S1 as $m) {
                        ?>
                        <tr>

                            <td><?= $m->CARGO ?></td>
                            <td><?= $m->ID_PERSONA ?><?php echo ' '; ?>                          
                                <?= $m->NOMBRES ?> <?php echo ' '; ?> <?= $m->APELLIDO_PATERNO ?> <?php echo ' '; ?><?= $m->APELLIDO_MATERNO ?> <?php echo ' '; ?>

                            </td>
                            <td><?= $m->CEDULA ?></td>
                            <td><?= $m->E_MAIL ?></td>
                            <td><?= $m->NUMERO_CELULAR ?></td>
                            <td><?= $m->NUMERO_TELEFONO ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>


            <h5>3.2 Responsable de la gestión de los procesos de certificación 																								

            </h5>
            <table class="table table-striped table-hover" width="100%" border="1">
                <tbody>
                    <tr>
                        <th>CARGO</th>
                        <th>NOMBRES Y APELLIDOS	</th>
                        <th>CÉDULA</th>
                        <th>E-MAIL</th>
                        <th>CELULAR</th>
                        <th>TELÉFONO</th>
                    </tr>
                    <?php
                    foreach ($S2 as $m) {
                        ?>
                        <tr>

                            <td><?= $m->CARGO ?></td>
                            <td><?= $m->ID_PERSONA ?><?php echo ' '; ?>                          
                                <?= $m->NOMBRES ?> <?php echo ' '; ?> <?= $m->APELLIDO_PATERNO ?> <?php echo ' '; ?><?= $m->APELLIDO_MATERNO ?> <?php echo ' '; ?>

                            </td>
                            <td><?= $m->CEDULA ?></td>
                            <td><?= $m->E_MAIL ?></td>
                            <td><?= $m->NUMERO_CELULAR ?></td>
                            <td><?= $m->NUMERO_TELEFONO ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>


            <h5>33.3 Responsable de toma de decisión de la certificación 						


            </h5>
            <table class="table table-striped table-hover" width="100%" border="1">
                <tbody>
                    <tr>
                        <th>CARGO</th>
                        <th>NOMBRES Y APELLIDOS	</th>
                        <th>CÉDULA</th>
                        <th>E-MAIL</th>
                        <th>CELULAR</th>
                        <th>TELÉFONO</th>
                    </tr>
                    <?php
                    foreach ($S3 as $m) {
                        ?>
                        <tr>

                            <td><?= $m->CARGO ?></td>
                            <td><?= $m->ID_PERSONA ?><?php echo ' '; ?>                          
                                <?= $m->NOMBRES ?> <?php echo ' '; ?> <?= $m->APELLIDO_PATERNO ?> <?php echo ' '; ?><?= $m->APELLIDO_MATERNO ?> <?php echo ' '; ?>

                            </td>
                            <td><?= $m->CEDULA ?></td>
                            <td><?= $m->E_MAIL ?></td>
                            <td><?= $m->NUMERO_CELULAR ?></td>
                            <td><?= $m->NUMERO_TELEFONO ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>



            <h5>3.4 Responsable de procesos financiero - contable						


            </h5>
            <table class="table table-striped table-hover" width="100%" border="1">
                <tbody>
                    <tr>
                        <th>CARGO</th>
                        <th>NOMBRES Y APELLIDOS	</th>
                        <th>CÉDULA</th>
                        <th>E-MAIL</th>
                        <th>CELULAR</th>
                        <th>TELÉFONO</th>
                    </tr>
                    <?php
                    foreach ($S4 as $m) {
                        ?>
                        <tr>

                            <td><?= $m->CARGO ?></td>
                            <td><?= $m->ID_PERSONA ?><?php echo ' '; ?>                          
                                <?= $m->NOMBRES ?> <?php echo ' '; ?> <?= $m->APELLIDO_PATERNO ?> <?php echo ' '; ?><?= $m->APELLIDO_MATERNO ?> <?php echo ' '; ?>

                            </td>
                            <td><?= $m->CEDULA ?></td>
                            <td><?= $m->E_MAIL ?></td>
                            <td><?= $m->NUMERO_CELULAR ?></td>
                            <td><?= $m->NUMERO_TELEFONO ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>

            <hr >
            <hr>

            <h5><b>3.5. Información del Examinador</b></h5>
            <h5>&nbsp;&nbsp;&nbsp;3.6.1 DATOS GENERALES DEL EXAMINADOR</h5>

            <table class="table table-striped table-hover" width="100%" border="1">
                <tbody>
                    <tr>
                        <th>No.</th>
                        <th>Nombres y apellidos	</th>
                        <th>No. Cédula </th>
                        <th>Perfil Profesional	</th>
                        <th>(Provincia - Cantón - Parroquia)</th>
                        <th>"Teléfono domicilio y/o celular"</th>
                        <th>Dirección domicilio	</th>
                        <th>E-mail</th>
                    </tr>
                    <?php
                    foreach ($EXAMINADOR as $m) {
                        ?>
                        <tr>

                            <td></td>
                            <td><?= $m->ID_PERSONA ?><?php echo ' '; ?>                          
                                <?= $m->NOMBRES ?> <?php echo ' '; ?> <?= $m->APELLIDO_PATERNO ?> <?php echo ' '; ?><?= $m->APELLIDO_MATERNO ?> <?php echo ' '; ?>

                            </td>
                            <td><?= $m->CEDULA ?></td>
                            <td></td>
                            <td><?= $m->PROVINCIA ?><?php echo ' '; ?> <?= $m->CANTON ?><?php echo ' '; ?> </td>
                            <td><?= $m->NUMERO_CELULAR ?><?php echo ' '; ?><?= $m->NUMERO_TELEFONO ?><?php echo ' '; ?></td>
                            <td><?= $m->CALLE_PRINCIPAL ?><?php echo ' '; ?><?= $m->NRO_CASA ?><?php echo ' '; ?><?= $m->CALLE_SECUNDARIA ?><?php echo ' '; ?></td>
                            <td><?= $m->E_MAIL ?></td>


                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
            <hr >
            <hr>

            <h5>&nbsp;&nbsp;&nbsp;3.6.2. EDUCACIÓN SUPERIOR</h5>
            <i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"(Título profesional afín al perfil profesional)"</i>				
            <br><br>

            <table class="table table-striped table-hover" width="100%" border="1">
                <tbody>
                    <tr>
                        <th>No.</th>
                        <th>Nivel de Instrucción</th>
                        <th>Nombre de la Institución Educativa	</th>
                        <th>Título Obtenido</th>
                        <th>"Registro <br>SENESCYT/MINEDUC/OTROS"	</th>
                    </tr>
                    <?php
                    foreach ($ESTUDIOS as $m) {
                        ?>
                        <tr>
                            <td>&nbsp;</td>

                            <td><?= $m->NOMBRE_FORMACION_EDU_SUP ?></td>
                            <td><?= $m->INSTITUCION ?></td>
                            <td><?= $m->TITULO ?></td>
                            <td><?= $m->REGISTRO_SENECYT ?></td>

                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>

            <hr >
            <hr>


            <h5>&nbsp;&nbsp;&nbsp;3.6.3 CAPACITACIÓN</h5>

            <table class="table table-striped table-hover" width="100%" border="1">
                <tbody>
                    <tr>
                        <th>No.</th>
                        <th>Nombre de la Institución Capacitadora</th>

                        <th>Área</th>
                        <th>" Fecha inicial <br>dd/mm/aa"</th>
                        <th>"Fecha Final <br>dd/mm/aa"</th>
                        <th>Duración <br>en horas	</th>

                    </tr>
                    <?php
//                    foreach ($EXAMINADOR as $m) {
                    ?>
                    <tr>

                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <?php
//                    }
                    ?>
                </tbody>
            </table>

            <hr >
            <hr>
            <h5>&nbsp;&nbsp;&nbsp;3.6.4. EXPERIENCIA PROFESIONAL AFIN AL PERFIL	</h5>

            <table class="table table-striped table-hover" width="100%" border="1">
                <tbody>
                    <tr>
                        <th>No.</th>
                        <th>Entidad</th>

                        <th>Cargo </th>
                        <th>Actividades principales</th>
                        <th>" Fecha inicial <br>dd/mm/aa"</th>
                        <th>"Fecha Final <br>dd/mm/aa"</th>

                    </tr>
                    <?php
                    foreach ($EXPERIENCIA as $m) {
                    ?>
                    <tr>

                        <td><?= $m->ENTIDAD ?></td>
                        <td><?= $m->ACTIVIDAD_CARGO ?></td>
                        <td><?= $m->FECHA_INICIAL ?></td>
                        <td><?= $m->FECHA_FINAL ?></td>

                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>


        </div>
    </div>

</div>