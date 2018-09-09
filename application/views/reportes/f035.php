
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

                        <h4><font color="black"> HOJA DE VIDA  DEL  EXAMINADOR DE CERTIFICACIÓN Y CONTROL</font>
                        </h4>

                    </td>
                    <td><table width="300" >
                            <tbody>
                                <tr>
                                    <?php
                                    foreach ($PERSONA as $p) {
                                        ?>

                                        <td><b>Código </b> ITCA-F035-<?= $p->ID_PERSONA ?></td>
                                        <?php
                                    }
                                    ?>
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
                                    <td><b>File:&nbsp;</b>F035 </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>

            </tbody>
        </table>
        <br><br>   <br><br>   <br><br>   
        <table width="100%" >
            <tbody>
                <tr>
                    <td align="center" > <font size=4 color="black">INSTITUTO TECNOLÓGICO SUPERIOR "JOSÉ CHIRIBOGA GRIJALVA"</font>

                    </td>
                </tr>
            </tbody>
        </table>
        <br><br>
        <table  class="table table-striped" width="100%" >
            <tbody>
                <tr>
                    <th bgcolor="#8db4e2" align="left" > <font size=1 color="black">1.- DATOS GENERALES</font>			

                    </th>
                </tr>
            </tbody>
        </table>
        <br>


        <table align="center" table table-striped table-hover  width="80%" >
            <tbody>
                <?php
                foreach ($PERSONA as $p) {
                    ?>
                    <tr>
                        <td style='width: 220px'><b>Nombres y Apellidos</b></td>
                        <td align="center" style="border-width: 0.1px;border: solid; border-color: #000000;"><?= $p->NOMBRES . ' ' . $p->APELLIDO_PATERNO . ' ' . $p->APELLIDO_MATERNO ?></td>
                    </tr>
                    <tr>
                        <td style='width: 220px'><b>Dirección Domicilio</b></td>
                        <td  align="center" style="border-width: 1px;border: solid; border-color: #000000;"><?= $p->CALLE_PRINCIPAL . ' ' . $p->NRO_CASA . ' ' . $p->CALLE_SECUNDARIA ?></td>
                    </tr>
                    <tr>
                        <td style='width: 220px'><b>Teléfono Domicilio</b></td>
                        <td align="center" style="border-width: 1px;border: solid; border-color: #000000;"><?= $p->NUMERO_TELEFONO ?></td>
                    </tr>
                    <tr>
                        <td style='width: 220px'><b>Teléfono Móvil</b></td>
                        <td align="center" style="border-width: 1px;border: solid; border-color: #000000;"><?= $p->NUMERO_CELULAR ?></td>
                    </tr>
                    <tr>
                        <td style='width: 220px'><b>Correo electrónico</b></td>
                        <td align="center"style="border-width: 1px;border: solid; border-color: #000000;"><?= $p->E_MAIL ?></td>
                    </tr>
                    <tr>
                        <td><b>N° Cédula de ciudadanía</b></td>
                        <td align="center"style="border-width: 1px;border: solid; border-color: #000000;"><?= $p->CEDULA ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <br> <br>
        <table  class="table table-striped" width="100%" >
            <tbody>
                <tr>
                    <th bgcolor="#8db4e2" align="left" > <font size=1 color="black">2.- EDUCACIÓN SUPERIOR<br>
                        (Título profesional afin a las áreas, especialidades o módulos del perfil profesional)"					
                        </font>			

                    </th>
                </tr>
            </tbody>
        </table>
        <br>


        <table align="center" width="100%" >
            <tbody>
                <?php
                foreach ($EDUCACION as $p) {
                    ?>
                    <tr>
                        <td style='width: 100px' align="center"><?= $p->NOMBRE_FORMACION_EDU_SUP ?></td>
                        <td><table width="100%" border="1">
                                <tbody>
                                    <tr>
                                        <td style='width: 150px'>TITULO</td>
                                        <td align="center"><?= $p->TITULO ?></td>

                                    </tr>
                                    <tr>
                                        <td>INSTITUCIÓN</td>
                                        <td align="center"><?= $p->INSTITUCION ?></td>


                                    </tr>
                                    <tr>
                                        <td style='width: 150px'>REG. SENECYT</td>
                                        <td align="center"><?= $p->REGISTRO_SENECYT ?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                        </td>
                    </tr>

                    <?php
                }
                ?>

            </tbody>
        </table>
        <?php
          for ($i = 0; $i < 3; $i++) {
            ?>
            <br><br><br>

            <?php
        }
        ?>
        <table  class="table table-striped" width="100%" >
            <tbody>
                <tr>
                    <th bgcolor="#8db4e2" align="left" > <font size=1 color="black">3.- FORMACIÓN PEDAGÓGICA					

                        </font>			

                    </th>
                </tr>
            </tbody>
        </table>


        <table align="center" width="100%" border="1">
            <tbody>
                <tr>
                    <td align="center"bgcolor="#8db4e2" >Nombre Curso</td>
                    <td align="center"bgcolor="#8db4e2" >Institución</td>
                    <td align="center"bgcolor="#8db4e2" >Certificacion Obtenida</td>
                    <td align="center"bgcolor="#8db4e2" >Fecha Inicial</td>
                    <td align="center"bgcolor="#8db4e2" >Fecha Final</td>
                    <td align="center"bgcolor="#8db4e2" >Duración</td>
                </tr>
                <?php
                foreach ($F_PEDAGOGICA as $p) {
                    ?>
                    <tr>
                        <td align="center"><?= $p->NOMBRE_CURSO ?></td>
                        <td align="center"><?= $p->INSTITUCION ?></td>
                        <td align="center">&nbsp;</td>
                        <td align="center"><?= $p->FECHA_INICIO ?></td>
                        <td align="center"><?= $p->FECHA_FINAL ?></td>
                        <td align="center"><?= $p->DURACION ?></td>

                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>

        <?php
          for ($i = 0; $i < 3; $i++) {
            ?>
            <br><br>

            <?php
        }
        ?>
        <table  class="table table-striped" width="100%" >
            <tbody>
                <tr>
                    <th bgcolor="#8db4e2" align="left" > <font size=1 color="black">4.- FORMACIÓN ESPECIALIZADA					

                        </font>			

                    </th>
                </tr>
            </tbody>
        </table>


        <table align="center" width="100%" border="1">
            <tbody>
                <tr>
                    <td align="center"bgcolor="#8db4e2" >Nombre Curso</td>
                    <td align="center"bgcolor="#8db4e2" >Institución</td>
                    <td align="center"bgcolor="#8db4e2" >Certificacion Obtenida</td>
                    <td align="center"bgcolor="#8db4e2" >Fecha Inicial</td>
                    <td align="center"bgcolor="#8db4e2" >Fecha Final</td>
                    <td align="center"bgcolor="#8db4e2" >Duración</td>
                </tr>
                <?php
                foreach ($F_ESPE as $p) {
                    ?>
                    <tr>
                        <td align="center"><?= $p->NOMBRE_CURSO ?></td>
                        <td align="center"><?= $p->INSTITUCION ?></td>
                        <td align="center">&nbsp;</td>
                        <td v><?= $p->FECHA_INICIO ?></td>
                        <td align="center"><?= $p->FECHA_FINAL ?></td>
                        <td align="center"><?= $p->DURACION ?></td>

                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>

       <?php
          for ($i = 0; $i < 3; $i++) {
            ?>
            <br><br>

            <?php
        }
        ?>
        <table  class="table table-striped" width="100%" >
            <tbody>
                <tr>
                    <th bgcolor="#8db4e2" align="left" > <font size=1 color="black">5.- EXPERIENCIA PROFESIONAL

                        </font>			

                    </th>
                </tr>
            </tbody>
        </table>

        <table width="100%" border="1">
            <tbody>
                <tr>
                    <td align="center"bgcolor="#8db4e2">Entidad</td>
                    <td align="center"bgcolor="#8db4e2">Cargo Ejercido</td>
                    <td align="center"bgcolor="#8db4e2">Actividadades en el Cargo</td>
                    <td align="center"bgcolor="#8db4e2">Fecha Inicial</td>
                    <td align="center"bgcolor="#8db4e2">Fecha Final</td>
                </tr>
                <?php
                foreach ($E_ESPE as $p) {
                    ?>
                    <tr>

                        <td align="center"><?= $p->ENTIDAD ?></td>
                        <td align="center"><?= $p->CARGO_EJERCIDO ?></td>
                        <td align="center"><?= $p->ACTIVIDAD_CARGO ?></td>
                        <td align="center"><?= $p->FECHA_INICIAL ?></td>
                        <td align="center"><?= $p->FECHA_FINAL ?></td>


                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>


        <?php
          for ($i = 0; $i < 3; $i++) {
            ?>
            <br><br>

            <?php
        }
        ?>
        <table  class="table table-striped" width="100%" >
            <tbody>
                <tr>
                    <th bgcolor="#8db4e2" align="left" > <font size=1 color="black">6.- EXPERIENCIA ESPECIALIZADA

                        </font>			

                    </th>
                </tr>
            </tbody>
        </table>

        <table width="100%" border="1">
            <tbody>
                <tr>
                    <td align="center"bgcolor="#8db4e2">Entidad</td>
                    <td align="center"bgcolor="#8db4e2">Cargo Ejercido</td>
                    <td align="center"bgcolor="#8db4e2">Actividadades en el Cargo</td>
                    <td align="center"bgcolor="#8db4e2">Fecha Inicial</td>
                    <td align="center"bgcolor="#8db4e2">Fecha Final</td>
                </tr>
                <?php
                foreach ($E_PROF as $p) {
                    ?>
                    <tr>

                        <td align="center"><?= $p->ENTIDAD ?></td>
                        <td align="center"><?= $p->CARGO_EJERCIDO ?></td>
                        <td align="center"><?= $p->ACTIVIDAD_CARGO ?></td>
                        <td align="center"><?= $p->FECHA_INICIAL ?></td>
                        <td align="center"><?= $p->FECHA_FINAL ?></td>


                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>


        <?php
          for ($i = 0; $i < 3; $i++) {
            ?>
            <br><br>

            <?php
        }
        ?>
        <table  class="table table-striped" width="100%" >
            <tbody>
                <tr>
                    <th bgcolor="#8db4e2" align="left" > <font size=1 color="black">7.- REFRENCIAS PERSONALES

                        </font>			

                    </th>
                </tr>
            </tbody>
        </table>
        <table width="100%" border="1">
            <tbody>
                <tr>
                    <td align="center"bgcolor="#8db4e2">Entidad</td>
                    <td align="center"bgcolor="#8db4e2">Contacto</td>
                    <td align="center"bgcolor="#8db4e2">Teléfono</td>
                    <td align="center" bgcolor="#8db4e2">Correo electrónico</td>
                </tr>
                <?php
                foreach ($REFERENCIAS as $p) {
                    ?>

                    <tr>
                        <td align="center"><?= $p->ENTIDAD ?></td>
                        <td align="center"><?= $p->CONTACTO ?></td>
                        <td align="center"><?= $p->NUMERO_TELEFONO ?></td>
                        <td align="center"><?= $p->CORREO ?></td>

                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <br><br><br><br><br><br>

        <table width="100%" >
            <tbody>
                <tr>
                    <td align="center">.................................................
                        <br>Firma del Examinador</td>
                </tr>


            </tbody>
        </table>
        <br><br>

        <table width="100%" >
            <tbody>

                <tr>
                    <td style="border-width: 0.1px;border: solid; border-color: #000000;" align="center"><font size=1 > <p><b>"Notas Aclaratorias: </b><br>
                            a) Deberá adjuntarse al presente documento, una copia de la cédula de ciudadanía y papeleta de votación.<br>
                            b)El ITS se reserva el derecho de verificar la información consignada en el presente documento.<br>
                            c) Los documentos de respaldo de la hoja de vida de los examinadores deberán reposar en los expedientes que mantendrá el OEC."<br>						
                        </p></font></td>
                </tr>
            </tbody>
        </table>

    </body>
</html>
