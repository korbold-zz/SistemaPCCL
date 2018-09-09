
<input type="hidden" name="id_persona" value="<?= $ID_PERSONA ?>"/>
<input type="hidden" name="existe" value="<?= $EXISTE ?>"/>

<table align="center" width="80%" >
    <tbody>
        <tr>

            <td align="center"><h2>VERIFICACIÓN DEL EXPEDIENTE DEL PERSONAL INVOLUCRADO</h2></td>
        </tr>
    </tbody>
</table>

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
      <td><input type="number" name="1" id="1" value="<?= $V1 ?>"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Durante el proceso de examinación, el experto cumple con los procedimientos establecidos y el uso de los formatos y documentos del proceso de certificación de personas de </td>
      <td><input type="number" name="2" id="2" value="<?= $V2 ?>"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Durante el proceso de examinación, el experto evidenció el cumplimiento de normas de seguridad afines a la competencia a examinar de forma:</td>
      <td><input type="number" name="3" id="3" value="<?= $V3 ?>"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Su interacción con el examinado en los aspectos, técnicos, de capacidades, conocimientos, destrezas y actitudes permitió obtener evidencias objetivas de una manera:</td>
      <td><input type="number" name="4" id="4"value="<?= $V4 ?>"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Sus diferentes formas de expresión (oral, escrita y corporal), permitieron el desarrollo de la examinación de una forma:</td>
      <td><input type="number" name="5" id="5" class="form-control" value="<?= $V5 ?>"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Propició un ambiente de cordialidad y respeto con el examinado.</td>
      <td><input type="number" name="6" id="6" class="form-control" value="<?= $V6 ?>"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Respetó, cumplió e hizo cumplir lo estipulado en el código de ética y evidenció imparcialidad de una manera:</td>
      <td><input type="number" name="7" id="7" class="form-control" value="<?= $V7 ?>"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Antes, durante y al finalizar el proceso de examinación la interacción con el personal de nombre del OEC  en el ámbito del proceso de examinación mantuvo una actitud de </td>
      <td><input type="number" name="8" id="8" class="form-control" value="<?= $V8 ?>"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Al finalizar la examinación entrega todos los documentos y registros que permiten evidenciar el cumplimiento del proceso de una forma:</td>
      <td><input type="number" name="9" id="9" class="form-control" value="<?= $V9 ?>"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="right"><b>NOTA MÁXIMA 
45 PUNTOS</b></td>
      <td><input type="number" readonly name="total" id="total" class="form-control"/></td>
    </tr>
  </tbody>
</table>
