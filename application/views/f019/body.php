<input type="hidden" name="existe" value="<?= $EXISTE ?>"/>
<input type="hidden" name="id_persona" value="<?= $ID_PERSONA ?>"/>

<table align="center" width="80%" >
    <tbody>
        <tr>

            <td align="center"><h2>VERIFICACIÓN DEL EXPEDIENTE DEL PERSONAL INVOLUCRADO</h2></td>
        </tr>
    </tbody>
</table>

<table width="80%">
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

<br>


<table width="80%"  class="table table-striped table-hover ">
    <tbody>
        <tr>
            <th style='width: 500px'>ÍTEM</th>
            <th style='width: 100px'>CUMPLE</th>
            <th style='width: 500px'>OBSERVACIONES</th>
        </tr>
        <tr>
            <td>Hoja de vida según formato SETEC lleno y firmado
                <input type="hidden" name="fila_0_0"   value="Hoja de vida según formato SETEC lleno y firmado"/>
            </td>
            <td><input type="radio" name="fila_0_1" <?= $F19[0][1] == "SI" ? "checked" : "" ?> value="SI"> SI
                <input type="radio" name="fila_0_1" <?= $F19[0][1] == "NO" ? "checked" : "" ?> value="NO"> NO
            </td>
            <td><input type="text" name="fila_0_2" 
                       class="form-control  input-sm" 
                       value="<?= $F19[0][2] ?>"
                       required="required"/> </td>
        </tr>
        <tr>
            <td>Documentos de respaldo Educación superior / Formación educación formal
                <input type="hidden" name="fila_1_0"   value="Documentos de respaldo Educación superior / Formación educación formal"/></td>
            <td><input type="radio" name="fila_1_1" <?= $F19[1][1] == "SI" ? "checked" : "" ?> value="SI"> SI
                <input type="radio" name="fila_1_1" <?= $F19[1][1] == "NO" ? "checked" : "" ?> value="NO"> NO</td>
            <td><input type="text" name="fila_1_2" 
                       class="form-control  input-sm" 
                       value="<?= $F19[1][2] ?>"
                       required="required"/></td>
        </tr>
        <tr>
            <td>Documentos de respaldo - Formación Pedagógica
                <input type="hidden" name="fila_2_0"   value="Documentos de respaldo - Formación Pedagógica"/></td>
            <td><input type="radio" name="fila_2_1" <?= $F19[2][1] == "SI" ? "checked" : "" ?> value="SI"> SI
                <input type="radio" name="fila_2_1" <?= $F19[2][1] == "NO" ? "checked" : "" ?> value="NO"> NO</td>
            <td><input type="text" name="fila_2_2" 
                       class="form-control  input-sm" 
                       value="<?= $F19[2][2] ?>"
                       required="required"/></td>
        </tr>
        <tr>
            <td>Documentos de respaldo - Formación especializada
                <input type="hidden" name="fila_3_0"   value="Documentos de respaldo - Formación especializada"/></td>
            </td>
            <td><input type="radio" name="fila_3_1" <?= $F19[3][1] == "SI" ? "checked" : "" ?> value="SI"> SI
                <input type="radio" name="fila_3_1" <?= $F19[3][1] == "NO" ? "checked" : "" ?> value="NO"> NO</td>
            <td><input type="text" name="fila_3_2" 
                       class="form-control  input-sm" 
                       value="<?= $F19[3][2] ?>"
                       required="required"/></td>
        </tr>
        <tr>
            <td>Documentos de respaldo - Experiencia profesional
                <input type="hidden" name="fila_4_0"   value="Documentos de respaldo - Experiencia profesional"/></td>
            </td>
            <td><input type="radio" name="fila_4_1" <?= $F19[4][1] == "SI" ? "checked" : "" ?> value="SI"> SI
                <input type="radio" name="fila_4_1" <?= $F19[4][1] == "NO" ? "checked" : "" ?> value="NO"> NO</td>
            <td><input type="text" name="fila_4_2" 
                       class="form-control  input-sm" 
                       value="<?= $F19[4][2] ?>"
                       required="required"/></td>
        </tr>
        <tr>
            <td>Documentos de respaldo - Experiencia pedagógica
                <input type="hidden" name="fila_5_0"   value="Documentos de respaldo - Experiencia pedagógica"/></td>
            </td>
            <td><input type="radio" name="fila_5_1" <?= $F19[5][1] == "SI" ? "checked" : "" ?> value="SI"> SI
                <input type="radio" name="fila_5_1" <?= $F19[5][1] == "NO" ? "checked" : "" ?> value="NO"> NO</td>
            <td><input type="text" name="fila_5_2" 
                       class="form-control  input-sm" 
                       value="<?= $F19[5][2] ?>"
                       required="required"/></td>
        </tr>
        <tr>
            <td>Certificado de haber recibido la Inducción del Proceso de Certificación de personas
                <input type="hidden" name="fila_6_0"   value="Certificado de haber recibido la Inducción del Proceso de Certificación de personas"/></td>
            </td>
            <td><input type="radio" name="fila_6_1" <?= $F19[6][1] == "SI" ? "checked" : "" ?> value="SI"> SI
                <input type="radio" name="fila_6_1" <?= $F19[6][1] == "NO" ? "checked" : "" ?> value="NO"> NO</td>
            <td><input type="text" name="fila_6_2" 
                       class="form-control  input-sm" 
                       value="<?= $F19[6][2] ?>"
                       required="required"/></td>
        </tr>
        <tr>
            <td>Código de ética y conducta para el personal involucrado en el proceso de certificación de personas firmado (C005) 
                <input type="hidden" name="fila_7_0"   value="Código de ética y conducta para el personal involucrado en el proceso de certificación de personas firmado (C005)"/></td>
            </td>
            <td><input type="radio" name="fila_7_1" <?= $F19[7][1] == "SI" ? "checked" : "" ?> value="SI"> SI
                <input type="radio" name="fila_7_1" <?= $F19[7][1] == "NO" ? "checked" : "" ?> value="NO"> NO</td>
            <td><input type="text" name="fila_7_2" 
                       class="form-control  input-sm" 
                       value="<?= $F19[7][2] ?>"
                       required="required"/></td>
        </tr>
        <tr>
            <td>Acuerdo de Confidencialidad y Responsabilidad de la Información  firmado(F003)
                <input type="hidden" name="fila_8_0"   value="Acuerdo de Confidencialidad y Responsabilidad de la Información  firmado(F003)"/>
            </td>
            <td><input type="radio" name="fila_8_1" <?= $F19[8][1] == "SI" ? "checked" : "" ?> value="SI"> SI
                <input type="radio" name="fila_8_1" <?= $F19[8][1] == "NO" ? "checked" : "" ?> value="NO"> NO</td>
            <td><input type="text" name="fila_8_2" 
                       class="form-control  input-sm" 
                       value="<?= $F19[8][2] ?>"
                       required="required"/></td>
        </tr>
        <tr>
            <td>Copia del contrato de trabajo o nombramiento
                <input type="hidden" name="fila_9_0"   value="Copia del contrato de trabajo o nombramiento"/>
            </td>
            <td><input type="radio" name="fila_9_1" <?= $F19[9][1] == "SI" ? "checked" : "" ?> value="SI"> SI
                <input type="radio" name="fila_9_1" <?= $F19[9][1] == "NO" ? "checked" : "" ?> value="NO"> NO</td>
            <td><input type="text" name="fila_9_2" 
                       class="form-control  input-sm" 
                       value="<?= $F19[9][2] ?>"
                       required="required"/></td>
        </tr>
        <tr>
            <td>"Desempeño del personal que interviene en el proceso de certificación:
                asistencia a convocatorias, cumplimiento de las actividades designadas por la autoridad competente o compromisos adquiridos en el marco de la Certificación de Personas"
                <input type="hidden" name="fila_10_0"   value="Desempeño del personal que interviene en el proceso de certificación:
                       asistencia a convocatorias,cumplimiento de las actividades designadas por la autoridad competente o compromisos adquiridos en el marco de la Certificación de Personas"/>
            </td>
            <td><input type="radio" name="fila_10_1" <?= $F19[10][1] == "SI" ? "checked" : "" ?> value="SI"> SI
                <input type="radio" name="fila_10_1" <?= $F19[10][1] == "NO" ? "checked" : "" ?> value="NO"> NO</td>
            <td><input type="text" name="fila_10_2" 
                       class="form-control  input-sm" 
                       value="<?= $F19[10][2] ?>"
                       required="required"/></td>
        </tr>
    </tbody>
</table>