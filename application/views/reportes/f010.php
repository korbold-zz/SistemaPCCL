<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
       <body>
        <div id="header">
            <table align="center"  width="100%" >
                <tbody>

                    <tr>
                        <td align="center" width="30">
                            <img src="./assets/imagenes/logo.jpg "width="100" height="110"/>
                        </td>
                        <td align="center" style='width: 400px'>

                            <h4><font color="black"> CÓDIGO DE ÉTICA Y CONDUCTA PARA EL PERSONAL INVOLUCRADO EN EL PROCESO DE CERTIFICACIÓN DE PERSONAS</font>
                            </h4>

                        </td>
                        <td><table width="300" >
                                <tbody>
                                    <tr>


                                        <td><b>Código </b> ITCA-F010-</td>

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
                                        <td><b>File:&nbsp;</b>F010 </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>

                </tbody>
            </table>

            <blockquote>
                <p align="justify">Para promover y cautelar el honor, la seriedad y la integridad de la examinación de la conformidad de los procesos de Certificación a personas, en base a la Norma Técnica de Reconocimiento de Organsmos Evaluadores de Conformidad para la Certificación de Personas emitida por la Secretaria Técnica del Sistema Nacional de Cualificación y Capacitación Profesional; y, con la finalidad de estar acorde con los estándares de conducta ética, yo  <?php foreach ($PERSONA as $p) {?> <?= $p->APELLIDO_PATERNO . ' ' . $p->APELLIDO_MATERNO . ' ' . $p->NOMBRES  ?> <br><?php
                                    }?> reconozco que: </p>
                <blockquote><p align="justify"> 1.	Seré honesto, imparcial, justo y transparente, en todas las actividades relacionadas con las examinaciones y certificaciones de competencia de personas del Instituto Tecnológico Superior “José Chiriboga Grijalva” </p></blockquote>
                <blockquote><p align="justify"> 2.	Promoveré y asistiré en el desarrollo y progreso profesional de aquellos que están bajo mi supervisión.</p></blockquote>
                <blockquote><p align="justify"> 3.	Me comportaré con profesionalismo en todo momento. </p></blockquote>
                <blockquote><p align="justify"> 4.	Serviré a los usuarios y a el Instituto Tecnológico Superior “José Chiriboga Grijalva” con eficiencia, buen modo, de forma oportuna, igual, justa, imparcial y enfoque de servicio.</p></blockquote>
                <blockquote><p align="justify"> 5.	No divulgaré información relacionada con los asuntos confidenciales del Instituto Tecnológico Superior “José Chiriboga Grijalva”, ni sus procesos técnicos, así como de los resultados de las examinaciones y certificaciones de los usuarios. </p></blockquote>
                <blockquote><p align="justify"> 6.	Informaré al Instituto Tecnológico Superior “José Chiriboga Grijalva”  de todas las conexiones, intereses, relaciones o afiliaciones que puedan influir en mi juicio o deteriorar el carácter equitativo de mis servicios.</p></blockquote>
                <blockquote><p align="justify"> 7.	Promoveré la confiabilidad de los servicios de certificación del Instituto Tecnológico Superior “José Chiriboga Grijalva” para el uso de entidades públicas y privadas. </p></blockquote>
                <blockquote><p align="justify"> 8.	Administraré las políticas del Instituto Tecnológico Superior “José Chiriboga Grijalva” y los procedimientos de operación del modelo de examinación de una forma no discriminatoria. </p></blockquote>
                <blockquote><p align="justify"> 9.	No aceptaré compensaciones de ninguna índole de parte de los usuarios, ni participaré en actividades de asesoría o capacitación de operadores de capacitación que proporcionen estos servicios a los usuarios a la certificación de los diferentes perfiles.  </p></blockquote>
                <blockquote><p align="justify">  10.	Me comprometo a que el crédito del trabajo realizado por otros, sea otorgado a quienes es debido.</p></blockquote>
                <blockquote><p align="justify"> 11.	Me comprometo a no presentar una solicitud de aplicación al proceso de certificación de personas por competencias laborales por un período menor a 2 años, desde la última fecha en que accedí al proceso de examinación y bancos de preguntas del perfil en el cual se realiza la solicitud. </p></blockquote>
                <blockquote><p align="justify">  12.	Cumpliré las reglas definidas por el Instituto Tecnológico Superior “José Chiriboga Grijalva” incluidas aquellas relativas a la confidencialidad, la imparcialidad y los conflictos de interés.</p></blockquote>
                <blockquote><p align="justify"> 13.	Me comprometo a cumplir el código de ética y conducta en todo momento, durante el desempeño de mis actividades para o en nombre del Instituto Tecnológico Superior “José Chiriboga Grijalva” incluyendo todas las etapas del proceso de certificación a personas. </p></blockquote>
                <p align="justify"> </p>   

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