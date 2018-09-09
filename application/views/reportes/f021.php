<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
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
                    <td align="center" style='width: 400px'>

                        <h4><font color="black"> HOJA DE EVALUACIÓN AL EXAMINADOR PARA SELECCIÓN</font>
                        </h4>

                    </td>
                    <td><table width="300" >
                            <tbody>
                                <tr>
                                    

                                        <td><b>Código </b> ITCA-F021-<?= $ID ?></td>
                                       
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
                                    <td><b>File:&nbsp;</b>F021 </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>

            </tbody>
        </table>
        <br><br><br><br><br><br><br>

<table  width="80%">
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
            
            <?php }
        ?>
    </tbody>
</table>

<br>


<h4>A continuación elija la cálificación para el desarrollo de la evaluación del examinador. Los puntajes se detallan:																			
																			
</h4>
<br>

<table width="100%" border="1">
  <tbody>
    <tr>
      <td>1 Malo</td>
      <td>2 Regular</td>
      <td>3 Bueno</td>
      <td>4 Muy bueno</td>
      <td>5 Excelente</td>
    </tr>
  </tbody>
</table>
<br>

<table id="detalles" name="detalles"  class="table table-striped hover" width="100%" border="1">
  <tbody>
    <tr>
        <th>NRO</th>
      <th>ITEM</th>
      <th>PUNTAJE</th>
    </tr>
    <tr>
      <td></td>
      <td>Asiste puntualmente a la examinación y su presentación personal está acorde al ámbito de la examinación ejecutada:</td>
      <td><?= $V1 ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Durante el proceso de examinación, el experto cumple con los procedimientos establecidos y el uso de los formatos y documentos del proceso de certificación de personas de </td>
      <td><?= $V2 ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Durante el proceso de examinación, el experto evidenció el cumplimiento de normas de seguridad afines a la competencia a examinar de forma:</td>
      <td><?= $V3 ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Su interacción con el examinado en los aspectos, técnicos, de capacidades, conocimientos, destrezas y actitudes permitió obtener evidencias objetivas de una manera:</td>
      <td><?= $V4 ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Sus diferentes formas de expresión (oral, escrita y corporal), permitieron el desarrollo de la examinación de una forma:</td>
      <td><?= $V5 ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Propició un ambiente de cordialidad y respeto con el examinado.</td>
      <td><?= $V6 ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Respetó, cumplió e hizo cumplir lo estipulado en el código de ética y evidenció imparcialidad de una manera:</td>
      <td><?= $V7 ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Antes, durante y al finalizar el proceso de examinación la interacción con el personal de nombre del OEC  en el ámbito del proceso de examinación mantuvo una actitud de </td>
      <td><?= $V8 ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Al finalizar la examinación entrega todos los documentos y registros que permiten evidenciar el cumplimiento del proceso de una forma:</td>
      <td><?= $V9 ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><?= $SUMA ?></td>
    </tr>
  </tbody>
</table>


  <!--<blockquote><p align="justify">COMENTARIOS DEL PERSONAL DE LA SETEC QUE REALIZÓ LA OBSERVACIÓN:__________________________________________________________________________________________________________________________________</p></blockquote>-->

    <br><br><br><br>  
  
   <p align="justify">Firma: _________________________<br>
                    <?php
                    foreach ($RES as $p) {
                        ?>
                        Nombre: <?= $p->NOMBRES . ' ' . $p->APELLIDO_PATERNO . ' ' . $p->APELLIDO_MATERNO ?> <br>
                        CC: <?= $p->CEDULA ?>
                        <?php
                    }
                    ?>
                </p>
                <br><br><br><br>
                
                
                 <p align="justify">Firma: _________________________<br>
                    <?php
                    foreach ($COOR as $p) {
                        ?>
                        Nombre: <?= $p->NOMBRES . ' ' . $p->APELLIDO_PATERNO . ' ' . $p->APELLIDO_MATERNO ?> <br>
                        CC: <?= $p->CEDULA ?>
                        <?php
                    }
                    ?>
                </p>
    </body>
</html>
