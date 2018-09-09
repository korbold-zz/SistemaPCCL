<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    </head> 
    <body>

        <table align="center"  width="100%" >
            <tbody>

                <tr>
                    <td align="center" width="30">
                        <img src="./assets/imagenes/logo.jpg "width="100" height="110"/>
                    </td>
                    <td align="center" style='width: 400px'>

                        <h4><font color="black"> ACUERDO DE CONFIDENCIALIDAD Y RESPONSABILIDAD DE MANEJO Y ACCESO A LOS EXAMENES</font>
                        </h4>

                    </td>
                    <td><table width="300" >
                            <tbody>

                                <tr>
                                    <?php
                                    foreach ($PERSONA as $p) {
                                        ?>

                                        <td><b>Código </b> ITCA-F002-<?= $p->ID_PERSONA ?></td>
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
                                    <td><b>File:&nbsp;</b>F002 </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>

            </tbody>
        </table>

        <blockquote>
            <p align="justify"> Para garantizar el proceso de examinación, la seguridad, confidencialidad y responsabilidad con el manejo del Esquema proporcionado por la SETEC y uso de los exámenes o banco de preguntas institucionales y los instrumentos adicionales que se utilizan en la certificación de personas por competencias laborales, en calidad de Examinador del OEC me comprometo a:</p>
            <blockquote><p align="justify">  1.	Manejar con honestidad, imparcialidad, justicia y transparencia todas las actividades relacionadas con las examinaciones y certificaciones de competencia de personas del Instituto Tecnológico Superior “José Chiriboga Grijalva”.  </p></blockquote>
            <blockquote><p align="justify">  2.	Utilizar la información que se encuentra en los exámenes o banco de preguntas institucional únicamente cuando sea requerido. </p></blockquote>
            <blockquote><p align="justify">  3.	Utilizar la clave de acceso a los exámenes o banco de preguntas institucional únicamente para fines necesarios. </p></blockquote>
            <blockquote><p align="justify">  4.	Pediré acceso al banco de preguntas institucional y no realizaré cambios no autorizados al mismo. </p></blockquote>
            <blockquote><p align="justify">  5.	No divulgaré información relacionada con los asuntos confidenciales del procedimiento de examinación, así como de los resultados del mismo. </p></blockquote>
            <blockquote><p align="justify">  6.	Administraré adecuadamente los procedimientos de operación del modelo de examinación, supervisando éste de forma justa e imparcial. </p></blockquote>
            <blockquote><p align="justify">  7.	Tendré cuidado al manipular la información que se encuentra en los exámenes y los instrumentos adicionales que en el mismo se ocuparen. </p></blockquote>
            <blockquote><p align="justify">  8.	Resguardaré en todo sentido las seguridades de las examinaciones. </p></blockquote>
            <p align="justify"> Estoy en conformidad con el presente acuerdo y me comprometo a cumplirlo en todo momento, durante el desempeño de mis actividades para o en nombre del Instituto Tecnológico Superior “José Chiriboga Grijalva”, incluyendo todas las etapas del proceso de examinación y por ende la certificación de personas.</p>   
            
            <br><br><br><br><br>
                
                <?php
            foreach ($PERSONA as $p) {
                ?>
            <blockquote> <p align="justify"> <?= $p->NOMBRES . ' ' . $p->APELLIDO_PATERNO . ' ' . $p->APELLIDO_MATERNO ?>     ____________________________      <?= date('Y-m-d') ?>  <br>
                                                                     NOMBRE     FIRMA      FECHA  </p></blockquote>
          
                <?php
            }
            ?>

            
    </body>
</html>