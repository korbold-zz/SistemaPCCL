
<div class="panel panel-primary">
    <div class="panel-heading">
        Formaciones Pedagógica/Especializada
    </div>
    <div class="panel-body">

        <div class="row">

            <div class="form-group col-md-10 col-sm-6 col-xs-12">
                <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="state"> Tipo De Formacion:</label>

                <div class="col-xs-12 col-sm-9">
                    <div class="clearfix">
                        <select class="form-control  col-xs-12 col-sm-5" id="tipo_ex" name="tipo_ex" class="select2" data-placeholder="Click to Choose...">
                            <option value="" selected hidden>Seleccione...</option>
                            <?php
                            foreach ($FORMACION as $p) {
                                ?>
                                <option value="<?= $p->ID_FORMACION_GENERAL ?>"><?= $p->NOMBRE_FORMACION ?></option>

                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>


        <div class="form-group col-md-10 col-sm-6 col-xs-12">
            <label class="control-label col-xs-12 col-sm-3 no-padding-right" > Nombre Curso:</label>

            <div class="col-xs-12 col-sm-9">
                <div class="clearfix">

                    <input type="text"  id="nombre_curso" name="nombre_curso" 
                           placeholder="Nombre Curso"
                           class="form-control"/> 
                </div>
            </div>
        </div>
        <div class="form-group col-md-10 col-sm-6 col-xs-12">
            <label class="control-label col-xs-12 col-sm-3 no-padding-right" > Nombre Institución:</label>

            <div class="col-xs-12 col-sm-9">
                <div class="clearfix">


                    <input type="text" id="nombre_ie" name="nombre_ie" 
                           placeholder="Nombre Institución"
                           class="form-control"/> 
                </div>
            </div>
        </div>
        <div class="form-group col-md-10 col-sm-6 col-xs-12">
            <label class="control-label col-xs-12 col-sm-3 no-padding-right" > Certificación Obtenida:</label>

            <div class="col-xs-12 col-sm-9">
                <div class="clearfix">


                    <input type="text" id="certificacion" name="certificacion" 
                           placeholder="Certificación Obtenida"
                           class="form-control"/> 
                </div>
            </div>
        </div>


        <div class="row">
            <div class="form-group col-md-4 col-sm-6 col-xs-12">
                <label class="control-label col-xs-12 col-sm-3 no-padding-right" > Fecha Inicial:</label>

                <div class="col-xs-6 col-sm-9">
                    <div class="clearfix">


                        <input type="date" id="fecha_inicial" name="fecha_inicial" 
                               placeholder="Fecha Inicial"
                               class="form-control"/> 
                    </div>
                </div>
            </div>
            <div class="form-group col-md-4 col-sm-6 col-xs-12">
                <label class="control-label col-xs-12 col-sm-3 no-padding-right" > Fecha Final:</label>

                <div class="col-xs-6 col-sm-9">
                    <div class="clearfix">


                        <input type="date" id="fecha_final" name="fecha_final" 
                               placeholder="Fecha Final"
                               class="form-control"/> 
                    </div>
                </div>
            </div>
            <div class="form-group col-md-4 col-sm-6 col-xs-12">
                <label class="control-label col-xs-12 col-sm-3 no-padding-right" > Duración Horas:</label>

                <div class="col-xs-12 col-sm-9">
                    <div class="clearfix">

                        <input type="number" id="duracion" name="duracion" 
                               placeholder="duracion"
                               class="form-control"/> 
                    </div>
                </div>
            </div>

            <div class="">
                <div class="">
                    <label for="agregar">&nbsp;</label>
                    <div>
                        <input type="button" id="agregar_exp" name="agregar_exp" class="btn btn-success" value="Agregar"/>
                    </div>
                </div>
            </div>

            <!--                <div align='right' >
                                <div class="">
            
                                    <div>
                                        <input type="button" id="guardar_exp" name="guardar_exp" class="btn btn-success" value="Guardar"/>
                                    </div>
                                </div>
            
                            </div> -->

        </div>



        <table id='detalles_exp' class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th style='width: 150px'>Tipo Experiencia</th>
                    <th style='width: 120px'>Nombre Curso</th>
                    <th style='width: 120px'>Institucion</th>
                    <th style='width: 120px'>Certificación</th>
                    <th style='width: 120px'>Fecha Inicial</th>
                    <th style='width: 100px'>Fecha Final</th>
                    <th style='width: 100px'>Duración Horas</th>


                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>

</div>

<!-- FIN EXPERIENCIAS-->
<!-- FIN EXPERIENCIAS-->

<script src="<?= base_url() ?>assets/bootstrap/js/jquery.min.js"></script>

<!-- EXPERIENCIAS-->
<script>
    $("#agregar_exp").click(function () {


        var tipo_ex = $("#tipo_ex option:selected").val();
        var nombre_curso = $("#nombre_curso ").val();
        var nombre_ie = $("#nombre_ie").val();
        var certificacion = $("#certificacion").val();
        var fecha_inicial = $("#fecha_inicial ").val();
        var fecha_final = $("#fecha_final").val();
        var duracion = $("#duracion").val();

        var texto = "<tr><td>" +
                "<input type='text' style='width: 120px' name='tipo_ex[]' value='" + tipo_ex + "' required='required' readonly='readonly'/></td><td>" +
                "<input type='text' style='width: 120px' name='nombre_curso[]' value='" + nombre_curso + "' required='required' readonly='readonly'/></td><td>" +
                "<input type='text' style='width: 120px' name='nombre_ie[]' value='" + nombre_ie + "' required='required' readonly='readonly'/></td><td>" +
                "<input type='text' style='width: 120px' name='certificacion[]' value='" + certificacion + "' required='required' readonly='readonly'/></td><td>" +
                "<input type='text' style='width: 120px' name='fecha_inicial[]' value='" + fecha_inicial + "' required='required' readonly='readonly'/></td><td>" +
                "<input type='text' style='width: 100px' name='fecha_final[]' value='" + fecha_final + "' required='required' readonly='readonly'/></td><td>" +
                "<input type='text' style='width: 100px' name='duracion[]' value='" + duracion + "' required='required' readonly='readonly'/>" +
                "<td style='width: 50px' ><button class='btnDelete glyphicon glyphicon-trash'></button></td></tr>";
        $('#detalles_exp').append(texto);

    });



    $("#detalles_exp").on('click', '.btnDelete', function () {
        $(this).closest('tr').remove();
    });
</script>
<!-- EXPERIENCIAS-->

