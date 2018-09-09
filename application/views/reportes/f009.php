<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <!--        <link href="./assets/bootstrap/css/bootstrap.min.css" 
                      rel="stylesheet">   -->

    <body>
        <div id="header">
            <table align="center"  width="100%" >
                <tbody>

                    <tr>
                        <td align="center" width="30">
                            <img src="./assets/imagenes/logo.jpg "width="100" height="110"/>
                        </td>
                        <td align="center" style='width: 400px'>

                            <h4><font color="black"> CERTIFICADO DE INDUCCIÓN DEL PROCESO DE CERTIFICACIÓN DE PERSONAS</font>
                            </h4>

                        </td>
                        <td><table width="300" >
                                <tbody>
                                    <?php
                                    foreach ($DETALLE as $p) {
                                        ?>
                                        <tr>


                                            <td><b>Código </b> ITCA-F009-<?=$p->ID_CERTIFICACION?></td>

                                        </tr>
                                        <?php
                                    }
                                    ?>
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
                                        <td><b>File:&nbsp;</b>F009 </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>

                </tbody>
            </table>

            <?php
            foreach ($DETALLE as $p) {
                ?>
                <p align="justify">Por medio del presente, 
                    certifico que el Señor(a)(ita). <b><?= $p->NOMBRES . ' ' . $p->APELLIDO_PATERNO . ' ' . $p->APELLIDO_MATERNO ?></b>, 
                    con Cédula de Ciudadanía Nº <?= $p->CEDULA ?>, 
                    ha participado en el proceso de <b>Inducción del  Sistema de Gestión de Certificación de Personas por Competencias Laborales</b>, 
                    realizado el día  <?= $p->FECHA ?>, con una duración de  <?= $p->DURACION ?> horas.</p>
                <?php
            }
            ?>
            <p align="justify">Esta inducción es habilitante para participar como (personal involucrado en el proceso de certificación) en la ejecución de las actividades de los Procesos del Sistema de Gestión de Certificación de Personas del Instituto Tecnológico Superior “José Chiriboga Grijalva” en relación al desarrollo del proceso de Certificación de Personas por Competencias Laborales </p>

            <blockquote><p align="justify"><b> Los temas tratados fueron: </b> </p></blockquote>



            <table width="100%" border="1">
                <tbody>
                    <tr>
                        <td>Nro</td>
                        <td>Documentos relacionados con el proceso de certificación de personas</td>
                    </tr>
                    <?php
                    foreach ($ENUNCIADO as $p) {
                        ?>
                        <tr>
                            <td>&nbsp;</td>
                            <td><?= $p->NOMBRE_DET_CERT ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
            <br><br><br>
            
            
             <blockquote><p align="justify"><b> Los temas tratados fueron: </b> </p></blockquote>


    </body>
</html>