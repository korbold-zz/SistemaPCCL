<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <!-- bootstrap & fontawesome -->
        <link rel="stylesheet" href="./ar/assets/css/bootstrap.min.css" />
           </head>

    <body>
        
        <table align='center' width="100%" >
            <tbody>
                <tr>
                    <td><h4><font size=1 color="black"> <b>FORMULARIO PARA EL RECONOCIMIENTO DE ORGANISMOS EVALUADORES DE LA CONFORMIDAD (OEC) PARA LA CERTIFICACIÓN DE PERSONAS</b> </font>
                        </h4></td>
                </tr>
            </tbody>
        </table>
        

       
       <font size=1>
        <table width="100%" border="1">
            <tbody>
                <tr>
                    <td>Solicitud Nº</td>
                    <td></td>
                    <td>Código</td>
                    <td>SETEC-SLTUD-OEC-017</td>
                    <td>Fecha Ingreso</td>
                    <td><?= date('Y-m-d') ?></td>
                </tr>
            </tbody>
        </table>
         </font>
        <h5> <font color="black"> 1.1 Identificación de la Entidad Solicitante</font>					
        </h5>
       <font size=1>
        <table align="center" width="100%"  >
            <tbody>
                <tr>
                    <th>Nombre o Razón Social</th>
                    <th >RUC</th>
                    <th >Sitio Web</th>
                </tr>
                <tr>

                    <td><?= $NOMBRE_EMPRESA ?></td>
                    <td><?= $RUC ?></td>
                    <td><?= $SITIO_WEB ?></td>                

                </tr>
                <tr>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                </tr>
                <tr>
                    <th >Dirección	</th>
                    <th >Calle No.       </th>
                    <th >Referencia    </th>
                </tr>
                <tr>

                    <td><?= $DIRECCION ?></td>
                    <td><?= $CALLE_NRO ?></td>
                    <td><?= $REFERENCIA ?></td>

                </tr>
                <tr>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                </tr>
                <tr>
                    <th >Provincia / Cantón	</th>
                    <th >Ciudad 	</th>
                    <th>&nbsp;</th>
                </tr>
                <tr>

                    <td><?= $PROVINCIA ?>   </td>
                    <td><?= $CIUDAD ?></td>
                    <td>&nbsp;</td>

                </tr>
                <tr>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                </tr>
                <tr>
                    <th >Teléfono Fijo (s)	
                    </th>
                    <th >Teléfono celular (s)	
                    </th>
                    <th >Correo(s) Electrónico (s)				
                    </th>
                </tr>

                <tr>
                    <td><?= $TELEFONO ?>   </td>
                    <td><?= $CELULAR ?></td>
                    <td><?= $CORREO ?></td>


                </tr>
                
            </tbody>
        </table>
       
       </font>
        
        <h5> <font color="black">2.1. En concordancia con la Norma Técnica de Reconocimiento de Organismos Evaluadores de Conformidad para la Certificación de Personas, la entidad solicita:														
            </font>
        </h5>
        <font size=1>
        <table  width="50%" border="1">
            <tbody>
                <tr>
                    <td align ="center" bgcolor="#8db4e2">TIPO DE SOLICITUD</td>
                    <td align ="center" bgcolor="#8db4e2">MARCAR</td>
                </tr>
                <?php
                foreach ($TIPO as $p) {
                    ?>
                    <tr>

                        <td align ="center"><?= $p->TIPO_SOLICITUD ?>

                        </td >
                        <td align ="center"><?= $p->MARCAR ?> <input type="checkbox" name="marcar" value="<?= $p->MARCAR ?> "> </td>

                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        </font>
        
<h5><font color="black">2.2. Alcance para el que solicita el reconocimiento: (Revisar anexo)														
            </font>

        </h5>
          <font size=1>
        <table  width="100%" border="1">
            <tbody>
                <tr>
                    <th align ="center" bgcolor="#8db4e2">SECTOR	</th>
                    <th align ="center" bgcolor="#8db4e2">PERFIL PROFESIONAL</th>
                    <th align ="center" bgcolor="#8db4e2">UNIDAD DE COMPETENCIA	</th>
                    <th align ="center" bgcolor="#8db4e2">FAMILIA                    </th>
                    <th align ="center" bgcolor="#8db4e2">ESQUEMA DE CERTIFICACIÓN</th>
                </tr>
                <?php
                foreach ($RECO as $p) {
                    ?>
                    <tr>
                        <td align ="center"><?= $p->NOMBRE_ASOCIACION_PERF_PRO ?></td>

                        <td align ="center"><?= $p->NOMBRE_DENOMINACION_CATALOGO_PERF_PRO ?></td>
                        <td align ="center"><?= $p->UNIDAD_COMPETENCIA ?></td>

                        <td align ="center"><?= $p->NOMBRE_FAMILIA_PROFESIONAL_PERF_PRO ?></td>
                        <td align ="center"><?= $p->NOMBRE_DENOMINACION_CATALOGO_PERF_PRO ?></td>

                    </tr>
                    <?php
                }
                ?>

            </tbody>
        </table>
 </font>
     
        <h5> <font color="black"> 3.1. Responsable del funcionamiento del de la organización:														
            </font>
        </h5>
        <font size=1>
        <table width="100%" border="1">
            <tbody>
                <tr>
                    <th align ="center" bgcolor="#8db4e2">CARGO</th>
                    <th align ="center" bgcolor="#8db4e2">NOMBRES Y APELLIDOS	</th>
                    <th align ="center" bgcolor="#8db4e2">CÉDULA</th>
                    <th align ="center" bgcolor="#8db4e2">E-MAIL</th>
                    <th align ="center" bgcolor="#8db4e2">CELULAR</th>
                    <th align ="center" bgcolor="#8db4e2">TELÉFONO</thh
                </tr>
                <?php
                foreach ($S1 as $m) {
                    ?>
                    <tr>

                        <td align ="center"><?= $m->CARGO ?></td>
                        <td align ="center">                        
                            <?= $m->NOMBRES ?> <?php echo ' '; ?> <?= $m->APELLIDO_PATERNO ?> <?php echo ' '; ?><?= $m->APELLIDO_MATERNO ?> <?php echo ' '; ?>

                        </td>
                        <td align ="center"><?= $m->CEDULA ?></td>
                        <td align ="center"><?= $m->E_MAIL ?></td>
                        <td align ="center"><?= $m->NUMERO_CELULAR ?></td>
                        <td align ="center"><?= $m->NUMERO_TELEFONO ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
 </font>      
        
        <h5> <font color="black"> 3.2 Responsable de la gestión de los procesos de certificación 																				</font>				

        </h5>
        <font size=1>
        <table  width="100%" border="1">
            <tbody>
                <tr>
                    <th align ="center" bgcolor="#8db4e2">CARGO</th>
                    <th align ="center" bgcolor="#8db4e2">NOMBRES Y APELLIDOS	</th>
                    <th align ="center" bgcolor="#8db4e2">CÉDULA</th>
                    <th align ="center" bgcolor="#8db4e2">E-MAIL</th>
                    <th align ="center" bgcolor="#8db4e2">CELULAR</th>
                    <th align ="center" bgcolor="#8db4e2">TELÉFONO</th>
                </tr>
                <?php
                foreach ($S2 as $m) {
                    ?>
                    <tr>

                        <td align ="center"><?= $m->CARGO ?></td>
                        <td align ="center">                         
                            <?= $m->NOMBRES ?> <?php echo ' '; ?> <?= $m->APELLIDO_PATERNO ?> <?php echo ' '; ?><?= $m->APELLIDO_MATERNO ?> <?php echo ' '; ?>

                        </td>
                        <td align ="center"><?= $m->CEDULA ?></td>
                        <td align ="center"><?= $m->E_MAIL ?></td>
                        <td align ="center"><?= $m->NUMERO_CELULAR ?></td>
                        <td align ="center"><?= $m->NUMERO_TELEFONO ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        </font>

        
        <h5> <font color="black">3.3 Responsable de toma de decisión de la certificación 					</font>	
        </h5>
        <font size=1>
        <table  width="100%" border="1">
            <tbody>
                <tr>
                    <th bgcolor="#8db4e2" align ="center">CARGO</th>
                    <th bgcolor="#8db4e2" align ="center">NOMBRES Y APELLIDOS	</th>
                    <th bgcolor="#8db4e2" align ="center">CÉDULA</th>
                    <th bgcolor="#8db4e2" align ="center">E-MAIL</th>
                    <th bgcolor="#8db4e2" align ="center">CELULAR</th>
                    <th bgcolor="#8db4e2" align ="center">TELÉFONO</th>
                </tr>
                <?php
                foreach ($S3 as $m) {
                    ?>
                    <tr>

                        <td align ="center"><?= $m->CARGO ?></td>
                        <td align ="center">                       
                            <?= $m->NOMBRES ?> <?php echo ' '; ?> <?= $m->APELLIDO_PATERNO ?> <?php echo ' '; ?><?= $m->APELLIDO_MATERNO ?> <?php echo ' '; ?>

                        </td>
                        <td align ="center"><?= $m->CEDULA ?></td>
                        <td align ="center"><?= $m->E_MAIL ?></td>
                        <td align ="center"><?= $m->NUMERO_CELULAR ?></td>
                        <td align ="center"><?= $m->NUMERO_TELEFONO ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        </font>

       
        <h5> <font color="black">3.4 Responsable de procesos financiero - contable						
            </font>

        </h5>
        <font size=1>
        <table  width="100%" border="1">
            <tbody>
                <tr>
                    <th bgcolor="#8db4e2" align ="center">CARGO</th>
                    <th bgcolor="#8db4e2" align ="center">NOMBRES Y APELLIDOS	</th>
                    <th bgcolor="#8db4e2" align ="center">CÉDULA</th>
                    <th bgcolor="#8db4e2" align ="center">E-MAIL</th>
                    <th bgcolor="#8db4e2" align ="center">CELULAR</th>
                    <th bgcolor="#8db4e2" align ="center">TELÉFONO</th>
                </tr>
                <?php
                foreach ($S4 as $m) {
                    ?>
                    <tr>

                        <td align ="center"><?= $m->CARGO ?></td>
                        <td align ="center">                        
                            <?= $m->NOMBRES ?> <?php echo ' '; ?> <?= $m->APELLIDO_PATERNO ?> <?php echo ' '; ?><?= $m->APELLIDO_MATERNO ?> <?php echo ' '; ?>

                        </td>
                        <td align ="center"><?= $m->CEDULA ?></td>
                        <td align ="center"><?= $m->E_MAIL ?></td>
                        <td align ="center"><?= $m->NUMERO_CELULAR ?></td>
                        <td align ="center"><?= $m->NUMERO_TELEFONO ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        </font>
      
        <h5> <font color="black">3.5. Información del Examinador<br>
             &nbsp;&nbsp;&nbsp;3.6.1 DATOS GENERALES DEL EXAMINADOR
            </font>
        </h5> 
         
        <font size=1>
        <table width="100%" border="1">
            <tbody>
                <tr>
                    <th bgcolor="#8db4e2" align ="center">No.</th>
                    <th bgcolor="#8db4e2" align ="center">Nombres y apellidos	</th>
                    <th bgcolor="#8db4e2" align ="center">No. Cédula </th>
                    <th bgcolor="#8db4e2" align ="center">Perfil Profesional	</th>
                    <th bgcolor="#8db4e2" align ="center">(Provincia - Cantón - Parroquia)</th>
                    <th bgcolor="#8db4e2" align ="center">"Teléfono domicilio y/o celular"</th>
                    <th bgcolor="#8db4e2" align ="center">Dirección domicilio	</th>
                    <th bgcolor="#8db4e2" align ="center">E-mail</th>
                </tr>
                <?php
                foreach ($EXAMINADOR as $m) {
                    ?>
                    <tr>

                        <td align ="center"></td>
                        <td align ="center"><?= $m->ID_PERSONA ?><?php echo ' '; ?>                          
                            <?= $m->NOMBRES ?> <?php echo ' '; ?> <?= $m->APELLIDO_PATERNO ?> <?php echo ' '; ?><?= $m->APELLIDO_MATERNO ?> <?php echo ' '; ?>

                        </td>
                        <td align ="center"><?= $m->CEDULA ?></td>
                        <td align ="center"></td>
                        <td align ="center"><?= $m->PROVINCIA ?><?php echo ' '; ?> <?= $m->CANTON ?><?php echo ' '; ?> </td>
                        <td align ="center"><?= $m->NUMERO_CELULAR ?><?php echo ' '; ?><?= $m->NUMERO_TELEFONO ?><?php echo ' '; ?></td>
                        <td align ="center"><?= $m->CALLE_PRINCIPAL ?><?php echo ' '; ?><?= $m->NRO_CASA ?><?php echo ' '; ?><?= $m->CALLE_SECUNDARIA ?><?php echo ' '; ?></td>
                        <td align ="center"><?= $m->E_MAIL ?></td>


                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        </font>
        
        <hr>
        
        <h5> <font color="black">&nbsp;&nbsp;&nbsp;3.6.2. EDUCACIÓN SUPERIOR</font></h5>
        <i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"(Título profesional afín al perfil profesional)"</i>		
        <br><br>
        <font size=1>
        <table  width="100%" border="1">
            <tbody>
                <tr>
                    <th bgcolor="#8db4e2" align ="center">No.</th>
                    <th bgcolor="#8db4e2" align ="center">Nivel de Instrucción</th>
                    <th bgcolor="#8db4e2" align ="center">Nombre de la Institución Educativa	</th>
                    <th bgcolor="#8db4e2" align ="center">Título Obtenido</th>
                    <th bgcolor="#8db4e2" align ="center">"Registro <br>SENESCYT/MINEDUC/OTROS"	</th>
                </tr>
                <?php
                foreach ($ESTUDIOS as $m) {
                    ?>
                    <tr>
                        <td align ="center">&nbsp;</td>

                        <td align ="center"><?= $m->NOMBRE_FORMACION_EDU_SUP ?></td>
                        <td align ="center"><?= $m->INSTITUCION ?></td>
                        <td align ="center"><?= $m->TITULO ?></td>
                        <td align ="center"><?= $m->REGISTRO_SENECYT ?></td>

                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        </font>
        
        <hr>


        <h5><font color="black">&nbsp;&nbsp;&nbsp;3.6.3 CAPACITACIÓN </font></h5>
        <font size=1>
        <table width="100%" border="1">
            <tbody>
                <tr>
                    <th bgcolor="#8db4e2" align ="center">No.</th>
                    <th bgcolor="#8db4e2" align ="center">Nombre de la Institución Capacitadora</th>

                    <th bgcolor="#8db4e2" align ="center">Área</th>
                    <th bgcolor="#8db4e2" align ="center">"Fecha inicial <br>dd/mm/aa"</th>
                    <th bgcolor="#8db4e2" align ="center">"Fecha Final <br>dd/mm/aa"</th>
                    <th bgcolor="#8db4e2" align ="center">Duración <br>en horas	</th>

                </tr>
                <?php
                foreach ($FORMACIONES as $m) {
                    ?>
                    <tr>

                        <td></td>
                        <td align ="center"><?= $m->INSTITUCION ?></td>
                        <td align ="center"></td>
                        <td align ="center"><?= $m->FECHA_INICIO ?></td>
                        <td align ="center"><?= $m->FECHA_FINAL ?></td>
                        <td align ="center"><?= $m->DURACION ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        </font>
       
        <hr>
        <h5><font color="black">&nbsp;&nbsp;&nbsp;3.6.4. EXPERIENCIA PROFESIONAL AFIN AL PERFIL	</font></h5>
        <font size=1>
        <table class="table table-striped table-hover" width="100%" border="1">
            <tbody>
                <tr>
                    <th bgcolor="#8db4e2" align ="center">No.</th>
                    <th bgcolor="#8db4e2" align ="center">Entidad</th>

                    <th bgcolor="#8db4e2" align ="center">Cargo </th>
                    <th bgcolor="#8db4e2" align ="center">Actividades principales</th>
                    <th bgcolor="#8db4e2" align ="center">" Fecha inicial <br>dd/mm/aa"</th>
                    <th bgcolor="#8db4e2" align ="center">"Fecha Final <br>dd/mm/aa"</th>

                </tr>
                <?php
                foreach ($EXPERIENCIA as $m) {
                    ?>
                    <tr>
                        <td></td>
                        <td align ="center"><?= $m->ENTIDAD ?></td>
                        <td align ="center"><?= $m->CARGO_EJERCIDO ?></td>
                        <td align ="center"><?= $m->ACTIVIDAD_CARGO ?></td>
                        <td align ="center"><?= $m->FECHA_INICIAL ?></td>
                        <td align ="center"><?= $m->FECHA_FINAL ?></td>

                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        </font>
        
        <h5> <font color="black"> 3.7. Instalaciones <br> Aulas
            </font>
        </h5>
        <font size=1>
        <table width="100%" border="1">
            <tbody>
                <tr>
                    <th bgcolor="#8db4e2" align ="center" style='width: 30px'>No.</th>
                    <th bgcolor="#8db4e2" align ="center" style='width: 100px'>LUGAR DE UBICACIÓN</th>
                    <th bgcolor="#8db4e2" align ="center" style='width: 100px'>PROVINCIA</th>
                    <th bgcolor="#8db4e2" align ="center" style='width: 100px'>CIUDAD</th>
                    <th bgcolor="#8db4e2" align ="center" style='width: 100px'>DIRECCIÓN</th>
                    <th bgcolor="#8db4e2" align ="center" style='width: 100px'>NÚMERO DE AULA</th>
                    <th bgcolor="#8db4e2" align ="center" style='width: 50px'>MODALIDAD</th>


                </tr>
                <?php
                foreach ($AULAS as $m) {
                    ?>
                    <tr>
                        <td>&nbsp;</td>
                        <td align ="center"><?= $m->LUGAR_UBICACION ?></td>
                        <td align ="center"> <?= $m->PROVINCIA ?></td>
                        <td align ="center"><?= $m->CIUDAD ?></td>
                        <td align ="center"><?= $m->DIRECCION ?></td>
                        <td align ="center"><?= $m->NUM_AULA ?></td>
                        <td align ="center"><?= $m->NOMBRE_MODALIDAD ?></td>

                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        </font>        
         
        <h5> <font color="black">  TALLERES Y/O LABORATORIOS. 
            </font>
        </h5>

        <font size=1>
        <table width="100%" border="1">
            <tbody>
                <tr>
                    <th bgcolor="#8db4e2" align ="center" style='width: 30px'>No.</th>
                    <th bgcolor="#8db4e2" align ="center" style='width: 100px'>LUGAR DE UBICACIÓN</th>
                    
                    <th bgcolor="#8db4e2" align ="center" style='width: 100px'>CIUDAD</th>
                    <th bgcolor="#8db4e2" align ="center" style='width: 100px'>DIRECCIÓN</th>
                    <th bgcolor="#8db4e2" align ="center" style='width: 100px'>TIPO DE TALLER Y/O LABORATORIO  A FIN CON LA SOLICITUD</th>
                    <th bgcolor="#8db4e2" align ="center" style='width: 50px'>MODALIDAD</th>


                </tr>
                <?php
                foreach ($AULAS as $m) {
                    ?>
                    <tr>
                        <td>&nbsp;</td>
                        <td align ="center"><?= $m->LUGAR_UBICACION ?></td>
                        
                        <td align ="center"><?= $m->CIUDAD ?></td>
                        <td align ="center"><?= $m->DIRECCION ?></td>
                        <td align ="center"><?= $m->NUM_AULA ?></td>
                        <td align ="center"><?= $m->NOMBRE_MODALIDAD ?></td>

                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        </font>
        
        
          
        <h5> <font color="black"> DETALLE DE SUCURSALES		
	
 
            </font>
        </h5>

        <font size=1>
        <table width="100%" border="1">
            <tbody>
                <tr>
                    <th bgcolor="#8db4e2" align ="center" style='width: 30px'>No.</th>
                    
                    <th bgcolor="#8db4e2" align ="center" style='width: 100px'>PROVINCIA</th>
                    <th bgcolor="#8db4e2" align ="center" style='width: 100px'>CIUDAD</th>
                    <th bgcolor="#8db4e2" align ="center" style='width: 100px'>DIRECCIÓN</th>
                    <th bgcolor="#8db4e2" align ="center" style='width: 100px'>NÚMERO DE PERSONAS EN SUCURSAL</th>
                    <th bgcolor="#8db4e2" align ="center" style='width: 100px'>ACTIVIDADES QUE SE EJECUTA EN ESTA SUCURSAL</th>
                  


                </tr>
                <?php
                foreach ($SUCURSAL as $m) {
                    ?>
                    <tr>
                        <td>&nbsp;</td>
                        
                        <td align ="center"> </td>
                        <td align ="center"><?= $m->CIUDAD ?></td>
                        <td align ="center"><?= $m->DIRECCION ?></td>
                        <td align ="center"><?= $m->NUM_PERSONAS ?></td>
                        <td align ="center"><?= $m->ACTIVIDADES_EJECUTAR ?></td>
                       

                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        </font>
        
        
         <h5> <font color="black"> OBLIGACIONES DEL OEC														

            </font>
        </h5>
        <blockquote> <font size=1 ><p align="justify"> "a. Documentar y declarar ante la SETEC, su estructura, políticas y procedimientos para asegurar la imparcialidad en las actividades de certificación en relación a sus candidatos o personas certificadas, en condiciones de equidad, de conformidad con los instrumentos definidos para el efecto.<br>
b. Otorgar, mantener, renovar, suspender o retirar la certificación de personas, en una o varias unidades de competencia.<br>
c. Tomar las medidas necesarias para garantizar la confidencialidad e imparcialidad en los procesos de evaluación de competencias.<br>
d. Identificar las partes o individuos responsables de: desarrollar e implementar políticas y procedimientos relativos a la operación del organismo de certificación, desarrollar y mantener los esquemas de certificación e instrumentos de evaluación, acorde a las políticas del Comité Interinstitucional, desarrollar actividades de evaluación para la certificación de personas, tomar decisiones relativas a la certificación, suscribir acuerdos contractuales referidos a la operación del OEC.<br>
e. Identificar la existencia de conflicto de intereses para asegurar la imparcialidad en los procesos de certificación de personas;<br>
f. Asegurar la presencia de un examinador y un supervisor para garantizar el adecuado desarrollo de los procesos de evaluación;<br>
g. Poner a disposición del candidato una descripción general del proceso de certificación de acuerdo al esquema de certificación correspondiente;<br>
h. Asegurar una comunicación fluida, escrita y oral durante la evaluación.  En el caso de que dicha evaluación se realice un distinto del español, se garantizará la presencia de un intérprete a fin de asegurar la validez de la evaluación;<br>
i. Reportar a la SETEC el detalle de las certificaciones emitidas, conforme los lineamientos que para el efecto determine la Secretaría Técnica.<br>
j. Las demás que determine el Comité Interinstitucional del Sistema Nacional de Cualificaciones y Capacitación Profesional."														
            </p></font></blockquote>
        
        

        <table width="100%" >
            <tbody>
                <tr>
                    <td align="center">.................................................
                        <br>Firma del Solicitante</td>
                </tr>


            </tbody>
        </table>
    </body>
</html>