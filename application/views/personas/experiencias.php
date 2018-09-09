<!-- ESTUDIOS SUPERIORES-->

<div class="panel panel-primary">
    <div class="panel-heading">
        Experiencias
    </div>
    <div class="panel-body">
        
        <div class="row">

            <div class="form-group col-md-10 col-sm-6 col-xs-12">
                <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="state"> Tipo de Formación:</label>

                <div class="col-xs-12 col-sm-9">
                    <div class="clearfix">
                        <select class="form-control  col-xs-12 col-sm-5" id="expe" name="expe" class="select2" data-placeholder="Click to Choose...">
                            <option value="" selected hidden>Seleccione EXPS...</option>
                            <?php
                            foreach ($EXP as $p) {
                                ?>
                                <option value="<?= $p->ID_EXPE_PROFESIONAL ?>"><?= $p->NOMBRE_EXPE_PROFESIONAL ?></option>

                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>


        <div class="form-group col-md-10 col-sm-6 col-xs-12">
            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="state"> Entidad:</label>

            <div class="col-xs-12 col-sm-9">
                <div class="clearfix">

                    <input type="text"  id="entidad" name="entidad" 
                           placeholder="Nombre Entidad"
                           class="form-control"/> 
                </div>
            </div>
        </div>
        <div class="form-group col-md-10 col-sm-6 col-xs-12">
            <label class="control-label col-xs-12 col-sm-3 no-padding-right" > Cargo Ejercido:</label>

            <div class="col-xs-12 col-sm-9">
                <div class="clearfix">


                    <input type="text" id="cargo" name="cargo" 
                           placeholder="Cargo Ejercido"
                           class="form-control"/> 
                </div>
            </div>
        </div>
        <div class="form-group col-md-10 col-sm-6 col-xs-12">
            <label class="control-label col-xs-12 col-sm-3 no-padding-right" > Actividades en el Cargo:</label>

            <div class="col-xs-12 col-sm-9">
                <div class="clearfix">


                    <input type="text" id="act" name="act" 
                           placeholder="Actividades en el Cargo"
                           class="form-control"/> 
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4 col-sm-6 col-xs-12">
                <label class="control-label col-xs-12 col-sm-3 no-padding-right" > Fecha Inicial:</label>

                <div class="col-xs-6 col-sm-9">
                    <div class="clearfix">


                        <input type="date" id="fecha_inicialf" name="fecha_inicialf" 
                               placeholder="Fecha Inicial"
                               class="form-control"/> 
                    </div>
                </div>
            </div>
            <div class="form-group col-md-4 col-sm-6 col-xs-12">
                <label class="control-label col-xs-12 col-sm-3 no-padding-right" > Fecha Final:</label>

                <div class="col-xs-6 col-sm-9">
                    <div class="clearfix">


                        <input type="date" id="fecha_finalf" name="fecha_finalf" 
                               placeholder="Fecha Final"
                               class="form-control"/> 
                    </div>
                </div>
            </div>

            <div class="">
                <div class="">
                    <label for="agregar">&nbsp;</label>
                    <div>
                        <input type="button" id="agregar_for" name="agregar_for" class="btn btn-success" value="Agregar"/>
                    </div>
                </div>
            </div> 
<!--             <div class="">
                <div class="form-group form-group-sm">
                    <label for="agregar">&nbsp;</label>
                    <div>
                        <input type="button" id="guardar_for" name="guardar_for" class="btn btn-success" value="Guardar"/>
                    </div>
                </div>
            </div> -->
            
        </div>
            
    </div>
    <br>
    <!-- ESTUDIOS SUPERIORES-->

    <table id='detalles_for' class="table table-bordered table-hover" >
        <thead>
            <tr>
                
                <th style='width: 100px'>Experiencia</th>
                <th style='width: 150px'>Entidad</th>
                 
                <th style='width: 150px' >Cargo Ejercido</th>
                <th style='width: 150px'>Actividades en el Cargo</th>
                <th style='width: 90px'>Fecha Inicial</th>
                <th style='width: 90px'>Fecha Final</th>

            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
    <!-- FIN ESTUDIOS SUPERIORES-->


</div>

<script src="<?= base_url() ?>assets/bootstrap/js/jquery.min.js"></script>


<!-- ESTUDIOS SUPERIORES-->
<script>
    $("#agregar_for").click(function () {
        
        var expe = $("#expe option:selected").val();
        var entidad = $("#entidad").val();
        var cargo = $("#cargo").val();
        var act = $("#act").val();
        
        var fecha_inicialf = $("#fecha_inicialf").val();
        var fecha_finalf = $("#fecha_finalf").val();


        var texto = "<tr><td>" +
                
                "<input  type='text' style='width: 100px' name='expe[]' value='" + expe + "' required='required' readonly='readonly'/></td><td>" +

                "<input type='text' style='width: 150px' name='entidad[]' value='" + entidad + "' required='required' readonly='readonly'/></td><td>" +
                "<input type='text' style='width: 150px' name='cargo[]' value='" + cargo + "' required='required' readonly='readonly'/></td><td>" +
                "<input type='text' style='width: 150px' name='act[]' value='" + act + "' required='required' readonly='readonly'/></td><td>" +
                         

                "<input type='text' style='width: 120px' name='fecha_inicialf[]' value='" + fecha_inicialf + "' required='required' readonly='readonly'/></td><td>" + 

                "<input type='text' style='width: 120px' name='fecha_finalf[]' value='" + fecha_finalf + "' required='required' readonly='readonly'/>" + 
              "<td style='width: 50px' ><button class='btnDelete glyphicon glyphicon-trash'></button></td></tr>";
        $('#detalles_for').append(texto);

    });


   $("#detalles_for").on('click', '.btnDelete', function () {
                $(this).closest('tr').remove();
            });
</script>
<!-- FIN ESTUDIOS SUPERIORES-->

