<!-- ESTUDIOS SUPERIORES-->

<div class="panel panel-primary">
    <div class="panel-heading">
        Educación Superior
    </div>
    <div class="panel-body">
        
            <div class="row">

                <div class="form-group col-md-10 col-sm-6 col-xs-12">
                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="state"> Tipo de Nivel:</label>

                    <div class="col-xs-12 col-sm-9">
                        <div class="clearfix">
                            <select class="form-control  col-xs-12 col-sm-5" id="edusup" name="edusup" class="select2" data-placeholder="Click to Choose...">
                                <option value="" selected hidden>Seleccione...</option>
                                <?php
                                foreach ($EDUSUP as $p) {
                                    ?>
                                    <option value="<?= $p->ID_FORMACION_EDU_SUP ?>"> <?= $p->NOMBRE_FORMACION_EDU_SUP ?></option>

                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>


<!--            <div class="form-group col-md-10 col-sm-6 col-xs-12">
                <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="state"> Nombre Título:</label>

                <div class="col-xs-12 col-sm-9">
                    <div class="clearfix">

                        <input type="text"  id="nombre_t" name="nombre_t" 
                               placeholder="Nombre Título"
                               class="form-control"/> 
                    </div>
                </div>
            </div>
            <div class="form-group col-md-10 col-sm-6 col-xs-12">
                <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="state"> Nombre Institución:</label>

                <div class="col-xs-12 col-sm-9">
                    <div class="clearfix">


                        <input type="text" id="nombre_i" name="nombre_i" 
                               placeholder="Nombre Institución"
                               class="form-control"/> 
                    </div>
                </div>
            </div>
             <div class="form-group col-md-10 col-sm-6 col-xs-12">
                <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="state"> Número de Registro SENECYT:</label>

                <div class="col-xs-12 col-sm-9">
                    <div class="clearfix">


                        <input type="text" id="numero_reg" name="numero_reg" 
                               placeholder="Número de Registro SENECYT"
                               class="form-control"/> 
                    </div>
                </div>
            </div>-->
            <div class="">
                <div class="">
                    
                    <div>
                      
                    </div>
                </div>
                
            </div> 
<!--            <div align='right' >
                <div class="">
                   
                    <div>
                        <input type="button" id="guardar_edu" name="guardar_edu" class="btn btn-success" value="Guardar"/>
                    </div>
                </div>
            </div>  -->

    <!-- ESTUDIOS SUPERIORES-->

    <table  id='detalles_edu' class="table table-bordered table-hover">
        <thead>
            <tr>
                
                <th style='width: 100px'>Nivel</th>
                <th style='width: 400px'>Nombre Titulo</th>
                <th style='width: 350px'>Nombre de la Institución</th>
                <th style='width: 100px'>Número Reg. SENECYT</th>
                <th style='width: 50px'>
                      <input type="button" id="agregar_edu" name="agregar_edu" class="btn btn-success" value="+"/>
                </th>

            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
    <!-- FIN ESTUDIOS SUPERIORES-->
   </div>  
</div>
   



<script src="<?= base_url() ?>assets/bootstrap/js/jquery.min.js"></script>


<!-- ESTUDIOS SUPERIORES-->
<script>
    $("#agregar_edu").click(function () {
        
        var nombreEdusup = $("#edusup option:selected").val();
//        var nombre_t = $("#nombre_t").val();
//        var nombre_i = $("#nombre_i").val();
//        var numero_reg = $("#numero_reg").val();


        var texto = "<tr><td>"+  
                "<input type='text' style='width: 100px' name='nombreEdusup[]' value='" + nombreEdusup + "' required='required' readonly='readonly'/></td><td>" +
                "<input type='text' style='width: 400px' name='nombre_t[]' required='required' /></td><td>" +
                "<input type='text' style='width: 350px' name='nombre_i[]'required='required'/></td><td>" + 
            "<input type='text' style='width: 100px' name='numero_reg[]' required='required'/>" +     
           "<td style='width: 50px' ><button class='btnDelete glyphicon glyphicon-trash'></button></td></tr>";
        $('#detalles_edu').append(texto);

    });


     $("#detalles_edu").on('click', '.btnDelete', function () {
                $(this).closest('tr').remove();
            });
</script>
<!-- FIN ESTUDIOS SUPERIORES-->