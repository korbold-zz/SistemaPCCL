<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="./assets/bootstrap/css/bootstrap.min.css" 
              rel="stylesheet"> 
        <title>Documento sin título</title>
    </head>

    <body>



        <table align="center" width="80%" >
            <tbody>
                <tr>

                    <td align="center" width="30">
                        <img src="./assets/imagenes/logo.jpg "width="100" height="110"/>
                    </td>
                    <td align="center"><h2><font color="black"> VERIFICACIÓN DEL EXPEDIENTE DEL PERSONAL INVOLUCRADO</font></h2></td>
                </tr>
            </tbody>
        </table>
    
        <table width="80%" >
            <tbody>
                <?php foreach ($PERSONAS as $p) { ?>
                    <tr>
                        <td>NOMBRES COMPLETOS:</td>
                        <td><?= $p->NOMBRES . ' ' . $p->APELLIDO_PATERNO . ' ' . $p->APELLIDO_MATERNO ?> </td>
                    </tr>
                    <tr>
                        <td>Cédula de ciudadanía:</td>
                        <td><?= $p->CEDULA ?></td>
                    </tr>
                    <tr>
                        <td>CARGO/ROL:</td>
                        <td><?= $p->CARGO ?></td>
                    </tr>
                <?php }
                ?>
            </tbody>
        </table>

    

        <font size="1">
        <table width="80%"  >
            <tbody>
                <tr>
                    <th style='width: 500px'>ÍTEM</th>
                    <th style='width: 80px'>CUMPLE</th>
                    <th >OBSERVACIONES</th>
                </tr>

                <tr>
                    <td>Hoja de vida según formato SETEC lleno y firmado</td>
                    <td><?= $HOJA_CUMPLE?></td>
                    <td><?= $HOJA_OB ?></td>
                </tr>
                <tr>
                    <td>Documentos de respaldo Educación superior / Formación educación formal</td>
                    <td><?= $EDU_CUMPLE?></td>
                    <td><?= $EDU_OB ?></td>
                </tr>
                <tr>
                    <td>Documentos de respaldo - Formación Pedagógica</td>
                    <td><?= $FOR_CUMPLE?></td>
                    <td><?= $FOR_OB ?></td>
                </tr>
                <tr>
                    <td>Documentos de respaldo - Formación especializada</td>
                    <td><?= $FOR_CUMPLE?></td>
                    <td><?= $FOR_OB ?></td>
                </tr>
                <tr>
                    <td>Documentos de respaldo - Experiencia profesional</td>
                    <td><?= $EXP_CUMPLE1?></td>
                    <td><?= $EXP_OB1 ?></td>
                </tr>
                <tr>
                    <td>Documentos de respaldo - Experiencia pedagógica</td>
                   <td><?= $EXP_CUMPLE?></td>
                    <td><?= $EXP_OB ?></td>
                </tr>
                <tr>
                    <td>Certificado de haber recibido la Inducción del Proceso de Certificación de personas</td>
                    <td><?= $IND_CUMPLE?></td>
                    <td><?= $IND_OB ?></td>
                </tr>
                <tr>
                    <td>Código de ética y conducta para el personal involucrado en el proceso de certificación de personas firmado (C005) </td>
                    <td><?= $ETICA_CUMPLE?></td>
                    <td><?= $ETICA_OB ?></td>
                </tr>
                <tr>
                    <td>Acuerdo de Confidencialidad y Responsabilidad de la Información  firmado(F003)</td>
                     <td><?= $ACUERDO_CUMPLE?></td>
                    <td><?= $ACUERDO_OB ?></td>
                </tr>
               
               


            </tbody>
        </table>
        </font>


<font size="1">
            <table width="200" >
                <tbody>
                    <?php foreach ($VER as $p) { ?>
              
                    <tr>
                         <td>______________________________</td>
                        
                    </tr>
                    <tr>
                       <td><?= $p->NOMBRES . ' ' . $p->APELLIDO_PATERNO . ' ' . $p->APELLIDO_MATERNO ?> </td>
                    </tr>
                    <tr>
                        <td><?= $p->CEDULA ?></td>
                    </tr>
                    <tr>
                       <td>CARGO: Responsable del proceso de certificación y control</td>
                    </tr>
                     <?php }
            ?>
                </tbody>
            </table>

            <table width="200" >
                <tbody>
                    <?php foreach ($CER as $p) { ?>
              
                    <tr>
                         <td>______________________________</td>
                        
                    </tr>
                    <tr>
                       <td><?= $p->NOMBRES . ' ' . $p->APELLIDO_PATERNO . ' ' . $p->APELLIDO_MATERNO ?> </td>
                    </tr>
                    <tr>
                        <td><?= $p->CEDULA ?></td>
                    </tr>
                    <tr>
                       <td>CARGO: Coordinadora del Comité de Certificación</td>
                    </tr>
                     <?php }
            ?>
                </tbody>
            </table>
        
            </font>
  
</body>
</html>
