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

                            <h4><font color="black">ACUERDO DE CONFIDENCIALIDAD Y RESPONSABILIDAD DE LA INFORMACIÓN </font>
                            </h4>

                        </td>
                        <td><table width="300" >
                                <tbody>

                                    <tr>
                                        <?php
                                        foreach ($PERSONA as $p) {
                                            ?>

                                            <td><b>Código </b> ITCA-F003-<?= $p->ID_PERSONA ?></td>
                                            <?php
                                        }
                                        ?>
                                    </tr>
                                  
                                        <tr>

                                            <td><b>Versión</b>&nbsp;1.1</td>

                                        </tr>
                                      
                                    <tr>
                                        <td><b>Fecha de Emisión </b><?= date('Y-m-d ') ?> </td>
                                    </tr>
                                    <tr>
                                        <td><b>Fecha de revisión&nbsp;</b><?= date('Y-m-d ') ?> </td>
                                    </tr>

                                    <tr>
                                        <td><b>File:&nbsp;</b>F003 </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>

                </tbody>
            </table>


            <blockquote>
                <p align="justify">Comparece a la suscripción del presente Acuerdo de Confidencialidad y Responsabilidad de la Información,  <?php foreach ($PERSONA as $p) { ?> <?= $p->NOMBRES . ' ' . $p->APELLIDO_PATERNO . ' ' . $p->APELLIDO_MATERNO ?> <br>
                        <?php }
                    ?> en calidad de Examinador.</p>
                <p align="justify"><b>CLÁUSULA PRIMERA: ANTECEDENTES.-   </b> </p>
                <blockquote><p align="justify"><b>1.1 </b> 	En el capítulo cuarto, articulo 11 literal e de la Norma Técnica de Reconocimiento de Organismos Evaluadores de Conformidad para la Certificación de Personas-Requisitos para registro e información señala: “(…)El OEC debe identificar, gestionar y disponer los documentos relacionados con el proceso de solicitud (formularios), esquemas de certificación, instrumentos de evaluación (registros de examen) y otros relativos a otorgar, renovar, suspender o retirar la certificación, de forma que se asegure la integridad y confidencialidad del proceso. Estos registros incluyen medios para corroborar el estatus de cualquier persona certificada. El acceso a estos registros debe ser compatible con los acuerdos de confidencialidad.” (...)”.   </p></blockquote>
                <blockquote><p align="justify"><b> 1.2 </b> 	El día 14 del mes de julio de 2016, la Sra. Mariana del Pilar Tates comienza a formar parte del proceso de certificación de personas en calidad de Examinador del Instituto Tecnológico Superior “José Chiriboga Grijalva” y con motivo de la prestación de sus servicios y actividades propias de su función va a tener acceso a información institucional privilegiada, considerada como confidencial y por tanto reservada. </p></blockquote>
                <blockquote><p align="justify"><b>CLÁUSULA SEGUNDA: OBJETO.-</b> El objeto del presente acuerdo es determinar los términos y condiciones con los cuales el examinador, que forma parte del proceso de certificación de personas por competencias laborales y/o es contratado por el Instituto Tecnológico Superior “José Chiriboga Grijalva” mantendrá la confidencialidad de todos los datos que maneje y la información institucional que por motivo de su actividad, funciones y servicios llegare a conocer, tener acceso, hacer uso o manejo de ella.     </p></blockquote>
                <blockquote><p align="justify"><b>CLÁUSULA TERCERA: ACUERDO.-</b> Las partes acuerdan que cualquier información del Instituto Tecnológico Superior “José Chiriboga Grijalva” que fuera facilitada de sus archivos o creada en relación a la propiedad intelectual bajo los parámetros de la Ley de Propiedad Intelectual, y que por motivo de la actividad, funciones y servicio, o que por cualquier otra circunstancia o medio llegue a conocimiento del examinador se regirá por este Acuerdo. </p></blockquote>
                <blockquote><p align="justify"> <b>CLÁUSULA CUARTA: USO Y SU PROTECCIÓN.-</b>  En lo relativo al uso y protección de la información institucional, el Examinador deberá considerar los siguientes aspectos: </p></blockquote>
                <blockquote><p align="justify"><b> 4.1 </b> 	La información institucional que reciba, conozca, acceda, maneje o haga uso el Examinador será mantenida y protegida como confidencial, incluyendo información relativa a derechos de autor, investigaciones técnicas, programas, modelos, estrategias, know-how, procesos internos/procesos de certificación de personas, conocimientos técnicos; administración y manejo de recursos; operación y manejo de materias primas; datos de proveedores de bienes y servicios; información financiera; lista de participantes/personas certificadas; empleados; relaciones contractuales; datos de los participantes; estadísticas; y, en general toda clase de datos e información institucional que el Instituto Tecnológico Superior “José Chiriboga Grijalva” utiliza para cumplir con su objeto y funciones. </p></blockquote>
                <blockquote><p align="justify"><b> 4.2	 </b> Toda la información institucional incluida la digital y física (archivos) es de propiedad del Instituto Tecnológico Superior “José Chiriboga Grijalva”, por lo que el Examinador es consciente en que la información que reciba, conozca, acceda, maneje o haga uso es confidencial y su utilización será exclusiva de sus funciones.</p></blockquote>
                <blockquote><p align="justify"><b> 4.3	 </b> El Examinador se compromete a cuidar la información entregada por el Instituto Tecnológico Superior “José Chiriboga Grijalva” y no revelársela a terceras personas sin previa autorización de la institución. </p></blockquote>
                <blockquote><p align="justify"> El Instituto Tecnológico Superior “José Chiriboga Grijalva” gestionará el consentimiento escrito del individuo (solicitante, candidato o persona certificada) para la divulgación de la información, exceptuando los casos en que sea requerida legalmente por la autoridad competente. </p></blockquote>
                <blockquote><p align="justify">En aquellos casos en que la información sea requerida legalmente por autoridad competente, el Examinador, previo a la entrega de la información, notificará inmediatamente al Instituto Tecnológico Superior “José Chiriboga Grijalva”, al respecto.  </p></blockquote>
                <blockquote><p align="justify"><b>4.4	 </b> El Examinador se obliga a guardar y mantener la reserva para la no reproducción de la información institucional confiada en virtud de la ejecución y cumplimiento del presente Acuerdo. La inobservancia de lo manifestado generará responsabilidad y dará lugar a que la Instituto Tecnológico Superior “José Chiriboga Grijalva”, ejerza las acciones legales civiles, penales y/o administrativas correspondientes. </p></blockquote>
                <blockquote><p align="justify"><b> 4.5 </b> 	El Examinador se obliga a devolver al personal responsable de la Instituto Tecnológico Superior “José Chiriboga Grijalva”, la información, grabación, y/o productos resultantes del proceso de certificación a los que se tuvieren acceso sin autorización expresa y evidenciada por parte del Examinador del Instituto Tecnológico Superior “José Chiriboga Grijalva” o la/el encargada/o de la certificación de personas y que representaren guía de examinaciones subsiguientes poniendo en riesgo la imparcialidad del proceso.</p></blockquote>
                <blockquote><p align="justify"><b> CLÁUSULA QUINTA: DE LA RESERVA DE LA INFORMACIÓN.- </b>  La obligación y responsabilidad de mantener la confidencialidad de la información institucional del Instituto Tecnológico Superior “José Chiriboga Grijalva”, por parte el Examinador se mantendrá por el tiempo en que el OEC se encuentre reconocido por la SETEC.</p></blockquote>
                <blockquote><p align="justify"><b>CLÁUSULA SEXTA: EXCEPCIONES.-  </b>  No obstante de lo dispuesto en este Acuerdo, no habrá deber u obligación de confidencialidad respecto de información que sea pública o llegue a ser pública por causa no imputable a el Examinador; sea recibida de un tercero que no esté obligado a mantener confidencialidad de la información; sea legalmente recibida por el Examinador por parte de otra fuente con facultad para divulgarla. Para el efecto, se deberá considerar lo señalado en el numeral 19 del artículo 66 de la Constitución de la República del Ecuador que dice “El derecho a la protección de datos de carácter personal, que incluye el acceso y la decisión sobre información y datos de este carácter, así como su correspondiente protección. La recolección, archivo, procesamiento, distribución o difusión de estos datos o información requerirán la autorización del titular o el mandato de la ley” y artículo 6 de la Ley Orgánica de Transparencia y Acceso a la Información Pública que indica “Información Confidencial.- Se considera información confidencial aquella información pública personal, que no está sujeta al principio de publicidad y comprende aquella derivada de sus derechos personalísimos y fundamentales, especialmente aquellos señalados en los artículos 23 y 24 de la Constitución Política de la República.
                        El uso ilegal que se haga de la información personal o su divulgación, dará lugar a las acciones legales pertinentes.
                        No podrá invocarse reserva, cuando se trate de investigaciones que realicen las autoridades, públicas competentes, sobre violaciones a derechos de las personas que se encuentren establecidos en la Constitución Política de la República, en las declaraciones, pactos, convenios, instrumentos internacionales y el ordenamiento jurídico interno. Se excepciona el procedimiento establecido en las indagaciones previas”.
                    </p></blockquote>
                <blockquote><p align="justify"> <b>CLÁUSULA SÉPTIMA: DOMICILIO.- </b>  Este Acuerdo de Confidencialidad se regirá por las leyes vigentes en la República del Ecuador y sólo podrá ser modificado por escrito y firmado por mutuo acuerdo de las Partes. </p></blockquote>
                <blockquote><p align="justify"><b>CLÁUSULA OCTAVA: ACLARATORIA.-  </b> Este acuerdo, únicamente regula la confidencialidad y la información institucional de Instituto Tecnológico Superior “José Chiriboga Grijalva” por lo que no constituye o implica la promesa de entrar en una relación contractual o de negocios entre las Partes. </p></blockquote>
                <blockquote><p align="justify"><b>CLÁUSULA NOVENA: SOLUCIÓN DE CONTROVERSIAS.- </b>  De producirse controversias, discrepancias o reclamos, derivados o relacionados con la interpretación, aplicación, cumplimiento o ejecución del presente Acuerdo, en casos pertinentes y luego de la decisión de la Máxima Autoridad de Instituto Tecnológico Superior “José Chiriboga Grijalva” se procederá a un arreglo directo, con justicia y equidad.  </p></blockquote>
                <blockquote><p align="justify"> Si no fuere posible solucionar las controversias en el término de cinco (5) días desde que se originaron, serán sometidas a decisión de un mediador del Centro de Mediación de la Procuraduría General del Estado, con sede en la ciudad de Quito. Si las partes no llegaren a un acuerdo, se someterán al procedimiento determinado en la Ley Contencioso Administrativa; para lo cual, renuncian fuero y domicilio y se someterán al Tribunal Contencioso Administrativo de la ciudad de Ibarra. </p></blockquote>
                <blockquote><p align="justify"><b> CLÁUSULA DÉCIMA: .-  </b> El Examinador acepta el contenido de acuerdo de confidencialidad y de responsabilidad, para lo cual suscribe el documento en tres originales de igual contenido y valor.</p></blockquote>
                <br><br> <blockquote><p align="justify">Dado en la ciudad de Ibarra, a los 15 días del mes <?= date('m') ?>  de <?= date('Y') ?> . </p></blockquote>
                <br><br><br><br>  <blockquote><p align="justify"> </p></blockquote>

                <p align="justify">Firma: _________________________<br>
                    <?php
                    foreach ($PERSONA as $p) {
                        ?>
                        Nombre: <?= $p->NOMBRES . ' ' . $p->APELLIDO_PATERNO . ' ' . $p->APELLIDO_MATERNO ?> <br>
                        CC: <?= $p->CEDULA ?>
                        <?php
                    }
                    ?>
                </p>   





                </body>
                </html>