<!-- ESTUDIOS SUPERIORES-->

<div class="panel panel-primary">
    <div class="panel-heading">
        Referencias Personales
    </div>
    <div class="panel-body">
        <!--        
                   <div class="form-group col-md-10 col-sm-6 col-xs-12">
                        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="state"> Entidad:</label>
        
                        <div class="col-xs-12 col-sm-9">
                            <div class="clearfix">
        
                                <input type="text"  id="entity" name="entity" 
                                       placeholder="Entidad"
                                       class="form-control"/> 
                            </div>
                        </div>
                    </div>
        
              
        
        
        
                <div class="form-group col-md-10 col-sm-6 col-xs-12">
                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="state"> Contacto:</label>
        
                    <div class="col-xs-12 col-sm-9">
                        <div class="clearfix">
        
        
                            <input type="text" id="contacto" name="contacto" 
                                   placeholder="Contacto"
                                   class="form-control"/> 
                        </div>
                    </div>
                </div>
        
                <div class="row">
                    <div class="form-group col-md-5 col-sm-6 col-xs-12">
                        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="phone">Número Télefono:</label>
        
                        <div class="col-xs-12 col-sm-9">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="ace-icon fa fa-phone"></i>
                                </span>
        
                                <input type="text" id="nro_tel" name="nro_tel" />
                            </div>
                        </div>
                    </div>
        
                    <div class="form-group form-group col-md-6 col-sm-6 col-xs-12">
                        <label class="control-label col-xs-12 col-sm-3 no-padding-right" >Correo:</label>
        
                        <div class="col-xs-12 col-sm-9">
                            <div class="clearfix">
                                <input type="text" name="correo" id="correo" class=" col-md-8 col-xs-12 col-sm-6" />
                            </div>
                        </div>
                    </div>
        
                    <div class="">
                        <div class="">
                            <label for="agregar">&nbsp;</label>
                            <div>
                                <input type="button" id="agregar_ref" name="agregar_ref" class="btn btn-success" value="Agregar"/>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="">
                        <div class="">
                            <label for="agregar">&nbsp;</label>
                            <div>
                                <input type="button" id="guardar_ref" name="guardar_ref" class="btn btn-success" value="Guardar"/>
                            </div>
                        </div>
                    </div>
                </div>-->



        <!-- ESTUDIOS SUPERIORES-->

        <table id='detalles_ref' class="table table-bordered table-hover">
            <thead>
                <tr>

                    <th style='width: 300px'>Entidad</th>
                    <th style='width: 100px'>Contacto</th>
                    <th style='width: 100px'>Teléfono</th>
                    <th style='width: 300px'>Correo</th>
                    <th style='width: 50px'> 
                        
                         <input type="button" id="agregar_ref" name="agregar_ref" class="btn btn-success" value="+"/>
                        
                       
                        </th>

                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
        <!-- FIN ESTUDIOS SUPERIORES-->

    </div>
    <br>
</div>

<script src="<?= base_url() ?>assets/bootstrap/js/jquery.min.js"></script>


<!-- ESTUDIOS SUPERIORES-->
<script>
    $("#agregar_ref").click(function () {
//        var id = id + ($("#ref").val() + 1);
//        var entity = $("#entity").val();
//        var contacto = $("#contacto").val();
//        var nro_tel = $("#nro_tel").val();
//        var correo = $("#correo").val();


        var texto = "<tr><td>" +
                "<input type='text' style='width: 300px' name='entity[]' required='required'/> </td><td>" +
                "<input type='text' style='width: 100px' name='contacto[]'required='required'/> </td><td>" +
                "<input type='text' style='width: 100px' name='nro_tel[]'required='required'/> </td><td>" +
                "<input type='text' style='width: 300px' name='correo[]' required='required'/> </td>" +
                "<td style='width: 50px' ><button class='btnDelete glyphicon glyphicon-trash'></button></td></tr>";
        $('#detalles_ref').append(texto);

    });


    $("#detalles_ref").on('click', '.btnDelete', function () {
        $(this).closest('tr').remove();
    });
</script>
<!-- FIN ESTUDIOS SUPERIORES-->