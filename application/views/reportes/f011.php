<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="./assets/bootstrap/css/bootstrap.min.css" 
              rel="stylesheet">   
    </head>

    <body>

        <table align="center"  width="100%" >
            <tbody>

                <tr>
                    <td align="center" width="30">
                        <img src="./assets/imagenes/logo.jpg "width="100" height="110"/>
                    </td>
                    <td bgcolor="#8db4e2" align="center" style='width: 400px'>

                        <h4><font color="black"> "CUADRO DE EVALUACIÓN DEL EXAMINADOR PARA SELECCIÓN"	</font>
                        </h4>

                    </td>
                    <td><table width="300" >
                            <tbody>
                                <tr>


                                    <td><b>Código </b> ITCA-F011-<?= $ID ?></td>

                                </tr>
                                <tr>
                                    <td><b>Versión</b>&nbsp;1.1  </td>
                                </tr>
                                <tr>
                                    <td><b>Fecha de Emisión </b><?= date('Y-m-d ') ?> </td>
                                </tr>
                                <tr>
                                    <td><b>Fecha de revisión&nbsp;</b><?= date('Y-m-d') ?> </td>
                                </tr>
                                <tr>
                                    <td><b>File:&nbsp;</b>F011 </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>

            </tbody>
        </table>
        <?php
        for ($i = 0; $i < 2; $i++) {
            ?>
            <br><br><br>

            <?php
        }
        ?>


        <table  class="table table-striped" width="100%" border="1">
            <tbody>
                <?php
                foreach ($PERSONAS as $per) {
                    ?>
                    <tr>
                        <th style='width: 500px'> Nombre del Candidato a Examinador:<br>
                <h4><?= $per->NOMBRES . ' ' . $per->APELLIDO_PATERNO . ' ' . $per->APELLIDO_MATERNO ?></h4></th>

            <th>Fecha de examinación:<br><?= $FECHA ?></th>

        </tr>

        <?php
    }
    ?>
</tbody>
</table>




<div class="table-responsive">

    <table id="detalles" class="table table-striped  " width="100%" >
        <tbody>
            <tr>
                <th bgcolor="#8db4e2"><table width="100%"  >
            <tbody>
                <tr >
                    <th align="center"><font size=1 color="black">CRITERIOS DE EVALUACIÓN </font></th>
                    <th   align="center" style='width: 80px'><font size=1 color="black">PONDERACIÓN %</font></th>
                    <th align="center" style='width: 80px'><font size=1 color="black">Puntaje máximo</font></th>

                </tr>
            </tbody>
        </table>

        </th>
        <th bgcolor="#8db4e2" align="center" style='width: 80px'><font size=1 color="black">Puntaje Obtenido</font></th>
        </tr>


        <!--CAT 1-->
        <tr>



            <td><table class="table table-striped table-hover" width="100%" border="1">
                    <tbody>
                        <tr>
                            <th  align="center"> <font  font size=1 color="black"> 1. EDUCACIÓN Y FORMACIÓN ACADÉMICA EN EL PERFIL</font></th>
                            <th   align="center" style='width: 80px'><font size=1 color="black"> Máx.10% </font></th>
                            <th  align="center" style='width: 80px'><font size=1 color="black"> 10</font></th>
                        </tr>
                        <?php
                        $con1 = 1;
                        foreach ($REG1 as $m) {
                            ?>
                            <tr>

                        <!--                                <td>
                            <textarea name="textarea" rows="2" cols="50"><?= $m->NOMBRE_SUBCAT_CRIT_EVA ?></textarea>
                            </td>-->
                                <td>
                                    1. 
                                    <?php
                                    $con1++;
                                    echo "$con1" . " ";
                                    ?>
                                    <?= $m->NOMBRE_SUBCAT_CRIT_EVA ?></td>
                                <td align="center" style='width: 80px' ><?= $m->PONDERACION ?> %</td>
                                <td align="center" style='width: 80px'><?= $m->PONDERACION ?> </td>

                            </tr>
                            <?php
                        }
                        ?>

                    </tbody>
                </table>


            </td>
            <td align="center" style='width: 80px'><?= $VALOR1 ?></td>
        </tr>
        <!-- FIN CAT 1-->

        <!--CAT 2-->
        <tr>



            <td><table class="table table-striped table-hover" width="100%" border="1">
                    <tbody>
                        <tr>
                            <th  align="center"> 2.FORMACIÓN PEDAGÓGICA		</th>
                            <th align="center" style='width: 80px'> Máx.10% </th>
                            <th align="center" style='width: 80px'> 10</th>
                        </tr>
                        <?php
                        $con2 = 1;
                        foreach ($REG2 as $m) {
                            ?>
                            <tr>

                        <!--                                <td>
                            <textarea name="textarea" rows="2" cols="50"><?= $m->NOMBRE_SUBCAT_CRIT_EVA ?></textarea>
                            </td>-->
                                <td>
                                    2. 
                                    <?php
                                    $con2++;
                                    echo "$con2" . " ";
                                    ?>
                                    <?= $m->NOMBRE_SUBCAT_CRIT_EVA ?></td>
                                <td align="center" style='width: 80px' ><?= $m->PONDERACION ?> %</td>
                                <td align="center" style='width: 80px'><?= $m->PONDERACION ?> </td>

                            </tr>
                            <?php
                        }
                        ?>

                    </tbody>
                </table>


            </td>
            <td  align="center" style='width: 80px'><?= $VALOR2 ?> </td>
        </tr>
        <!-- FIN CAT 2-->


        <!--CAT 3-->
        <tr>



            <td><table class="table table-striped table-hover" width="100%" border="1">
                    <tbody>
                        <tr>
                            <th  align="center"> 3. EXPERIENCIA TÉCNICA RELACIONADA AL PERFIL</th>
                            <th align="center" style='width: 80px'> Máx.10% </th>
                            <th align="center" style='width: 80px'> 10</th>
                        </tr>
                        <?php
                        $con3 = 1;
                        foreach ($REG3 as $m) {
                            ?>
                            <tr>

                        <!--                                <td>
                            <textarea name="textarea" rows="2" cols="50"><?= $m->NOMBRE_SUBCAT_CRIT_EVA ?></textarea>
                            </td>-->
                                <td>
                                    3. 
                                    <?php
                                    $con3++;
                                    echo "$con3" . " ";
                                    ?>
                                    <?= $m->NOMBRE_SUBCAT_CRIT_EVA ?></td>
                                <td align="center" style='width: 80px' ><?= $m->PONDERACION ?> %</td>
                                <td align="center" style='width: 80px'><?= $m->PONDERACION ?> </td>

                            </tr>
                            <?php
                        }
                        ?>

                    </tbody>
                </table>


            </td>
            <td   align="center" style='width: 80px'><?= $VALOR3 ?></td>
        </tr>
        <!-- FIN CAT 3-->

        <!--CAT 4-->
        <tr>



            <td><table class="table table-striped table-hover" width="100%" border="1">
                    <tbody>
                        <tr>
                            <th  align="center"> 4. EXPERIENCIA PEDAGÓGICA O ACADÉMICA	</th>
                            <th align="center" style='width: 80px'> Máx.10% </th>
                            <th align="center" style='width: 80px'> 10</th>
                        </tr>
                        <?php
                        $con4 = 1;
                        foreach ($REG4 as $m) {
                            ?>
                            <tr>

                        <!--                                <td>
                            <textarea name="textarea" rows="2" cols="50"><?= $m->NOMBRE_SUBCAT_CRIT_EVA ?></textarea>
                            </td>-->
                                <td>4. 
                                    3. 
                                    <?php
                                    $con4++;
                                    echo "$con4" . " ";
                                    ?>
                                    <?= $m->NOMBRE_SUBCAT_CRIT_EVA ?></td>
                                <td align="center" style='width: 80px' ><?= $m->PONDERACION ?> %</td>
                                <td align="center" style='width: 80px'><?= $m->PONDERACION ?> </td>

                            </tr>
                            <?php
                        }
                        ?>

                    </tbody>
                </table>


            </td>
            <td  align="center" style='width: 80px'><?= $VALOR4 ?> </td>
        </tr>
        <!-- FIN CAT 4-->


        <tr>
            <td align="right" >Calificación sobre un máximo de 100 puntos<br> <strong>Calificación mínima aceptable 70 puntos</strong>		
            </td>



            <td  align="center" style='width: 80px'><?= $RESULTADO ?></td>
        </tr>


        </tbody>
    </table>
</div>



</body>
</html>
