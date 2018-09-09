<table id='detalles_aula' width="100%"  class="table table-bordered table-hover" border="1">
    <tbody>
        <tr>
            <th style='width: 30px'>No.</th>
            <th style='width: 100px'>LUGAR DE UBICACIÓN</th>
            <th style='width: 100px'>PROVINCIA</th>
            <th style='width: 100px'>CIUDAD</th>
            <th style='width: 100px'>DIRECCIÓN</th>
            <th style='width: 100px'>NÚMERO DE AULA</th>
            <th style='width: 50px'>Modalidad</th>
            
            <th style='width: 50px'> 

                <input type="button" id="agregar_aula" name="agregar_aula" class="btn btn-success" value="+"/>


            </th>
        </tr>

    </tbody>
</table>


<script src="<?= base_url() ?>assets/bootstrap/js/jquery.min.js"></script>


<!-- ESTUDIOS SUPERIORES-->
<script>
    $("#agregar_aula").click(function () {



        var texto = "<tr><td>" +
                "<input type='text' style='width: 30px' name='nro[]' required='required'/> </td><td>" +
                "<input type='text' style='width: 100px' name='lugar[]'required='required'/> </td><td>" +
                "<input type='text' style='width: 100px' name='provincia[]'required='required'/> </td><td>" +
                "<input type='text' style='width: 100px' name='ciudad[]' required='required'/> </td><td>" +
                "<input type='text' style='width: 100px' name='direccion[]' required='required'/> </td><td>" +
                "<input type='text' style='width: 100px' name='nro_aula[]' required='required'/> </td><td>" +
                "<input type='radio'  name='modalidad[]' value='1' >Propio " +
                "<input type='radio'  name='modalidad[]' value='2' > Arrendado" +
                "<input type='radio'  name='modalidad[]' value='3'> Otro</td>" +
                "<td style='width: 50px' ><button class='btnDelete glyphicon glyphicon-trash'></button></td></tr>";
        $('#detalles_aula').append(texto);

    });


    $("#detalles_aula").on('click', '.btnDelete', function () {
        $(this).closest('tr').remove();
    });
</script>