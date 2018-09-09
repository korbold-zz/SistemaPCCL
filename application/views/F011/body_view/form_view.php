<input type="hidden" name="existe" value="<?= $EXISTE ?>"/>

<table  class="table table-striped" width="100%" border="1">
    <tbody>
        <?php
        foreach ($PERSONAS as $per) {
            ?>
            <tr>
                <th style='width: 500px'> Nombre del Candidato a Examinador:
                   <input type="hidden" name="id_persona" value="<?= $per->ID_PERSONA ?>"/>
                        
        <h4><?= $per->NOMBRES . ' ' . $per->APELLIDO_PATERNO . ' ' . $per->APELLIDO_MATERNO ?></h4></th>

    <th>Fecha de examinación:</td>

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
                <th bgcolor="#01DFD7"><table width="100%"  >
            <tbody>
                <tr >
                    <th  align="right">CRITERIOS DE EVALUACIÓN </th>
                    <th  align="center" style='width: 120px'>PONDERACIÓN %</th>
                    <th align="center" style='width: 120px'>Puntaje máximo</th>

                </tr>
            </tbody>
        </table>

        </th>
        <th bgcolor="#01DFD7" align="center" style='width: 100px'>Puntaje Obtenido</th>
        </tr>
        <!--CAT 1-->
        <tr>



            <td><table class="table table-striped table-hover" width="100%" border="1">
                    <tbody>
                        <tr>
                            <th align="center"> 1. EDUCACIÓN Y FORMACIÓN ACADÉMICA EN EL PERFIL</th>
                            <th align="center" style='width: 120px'> Máx.10% </th>
                            <th align="center" style='width: 120px'> 10</th>
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
                                <td align="center" style='width: 120px' ><?= $m->PONDERACION ?> %</td>
                                <td align="center" style='width: 120px'><?= $m->PONDERACION ?> </td>

                            </tr>
                            <?php
                        }
                        ?>

                    </tbody>
                </table>


            </td>
            <td align="justify" style='width: 10px'><input  type="number" size="30" pattern="^[10|7|4]\d{2}$" id="rg1" name="rg1" 
                                                            placeholder="Puntaje"
                                                            class="form-control" value="<?=$V1?>"/> </td>
        </tr>
        <!-- FIN CAT 1-->

        <!--CAT 2-->
        <tr>



            <td><table class="table table-striped table-hover" width="100%" border="1">
                    <tbody>
                        <tr>
                            <th  align="center"> 2.FORMACIÓN PEDAGÓGICA		</th>
                            <th align="center" style='width: 120px'> Máx.10% </th>
                            <th align="center" style='width: 120px'> 10</th>
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
                                <td align="center" style='width: 120px' ><?= $m->PONDERACION ?> %</td>
                                <td align="center" style='width: 120px'><?= $m->PONDERACION ?> </td>

                            </tr>
                            <?php
                        }
                        ?>

                    </tbody>
                </table>


            </td>
            <td  align="justify" style='width: 10px'><input  type="number" size="30" pattern="^[10|7|4]\d{2}$" id="rg2" name="rg2" 
                                                             placeholder="Puntaje"
                                                             class="form-control"  required="required" value="<?=$V2?>"/> </td>
        </tr>
        <!-- FIN CAT 2-->


        <!--CAT 3-->
        <tr>



            <td><table class="table table-striped table-hover" width="100%" border="1">
                    <tbody>
                        <tr>
                            <th  align="center"> 3. EXPERIENCIA TÉCNICA RELACIONADA AL PERFIL</th>
                            <th align="center" style='width: 120px'> Máx.10% </th>
                            <th align="center" style='width: 120px'> 10</th>
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
                                <td align="center" style='width: 120px' ><?= $m->PONDERACION ?> %</td>
                                <td align="center" style='width: 120px'><?= $m->PONDERACION ?> </td>

                            </tr>
                            <?php
                        }
                        ?>

                    </tbody>
                </table>


            </td>
            <td   align="justify" style='width: 10px'><input onchange="calcularTotal(this);"﻿  type="number" size="30" pattern="^[10|7|4]\d{2}$" id="rg3" name="rg3" 
                                                             placeholder="Puntaje"
                                                             class="form-control" required="required" value="<?=$V3?>"/> </td>
        </tr>
        <!-- FIN CAT 3-->

        <!--CAT 4-->
        <tr>



            <td><table class="table table-striped table-hover" width="100%" border="1">
                    <tbody>
                        <tr>
                            <th  align="center"> 4. EXPERIENCIA PEDAGÓGICA O ACADÉMICA	</th>
                            <th align="center" style='width: 120px'> Máx.10% </th>
                            <th align="center" style='width: 120px'> 10</th>
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
                                <td align="center" style='width: 120px' ><?= $m->PONDERACION ?> %</td>
                                <td align="center" style='width: 120px'><?= $m->PONDERACION ?> </td>

                            </tr>
                            <?php
                        }
                        ?>

                    </tbody>
                </table>


            </td>
            <td  align="justify" style='width: 10px'><input  type="number" size="30" pattern="^[10|7|4]\d{2}$" id="rg4" name="rg4" 
                                                             placeholder="Puntaje"
                                                             class="form-control" required="required" value="<?=$V4?>"/> </td>
        </tr>
        <!-- FIN CAT 4-->


        <tr>
            <td align="right" style='width: 100px'>Calificación sobre un máximo de 100 puntos<br> <strong>Calificación mínima aceptable 70 puntos</strong>		
            </td>



            <td  align="right" style='width: 10px'>	
                <input  type="number"  readonly pattern="^[10|7|4]\d{2}$" id="res" name="res" 
                        placeholder="Puntaje Total"
                        class="form-control" value="<?=$SUMA?>"/> </td>
        </tr>



        </tbody>
    </table>
</div>

<script type="text/javascript">



    $(document).ready(function () {
        $("#rg1").change(function () {
            var resul = $(this).val();
            $("#res").val(resul);
        });
    });

    $("#agregar").click(function () {
        var sumar = 0;
        $('#detalles tbody tr').each(function () {
            var total = $(this).find("td").eq(4).html();
            sumar = sumar + parseFloat(total);
        });

    });

    function sumarNumeros(n1, n2) {
        return (parseInt(n1) + parseInt(n2));
    }
    ,

</script>