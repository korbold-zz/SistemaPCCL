
<div class="panel-body">
    <div class="row">
        <div class="col-xs-6 col-sm-12 center">
            
        </div>
    </div>
</div>

<div class="panel panel-primary">
    <div class="panel-heading">
        Datos Personales
    </div>
    <div class="panel-body">
        <div class="row">

            <div class="form-group col-md-10 col-sm-6 col-xs-12">
                <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="state"> Perfiles Profesionales:</label>

                <div class="col-xs-12 col-sm-9">
                    <div class="clearfix">
                        <select class="form-control  col-xs-12 col-sm-5" id="prof" name="prof" class="select2" data-placeholder="Click to Choose..."required='required'>
                            <option value="" selected hidden>Seleccione...</option>
                            <?php
                            foreach ($PROF as $p) {
                                ?>
                                <option value="<?= $p->ID_DENOMINACION_CATALOGO_PERF_PRO ?>"><?= $p->NOMBRE_DENOMINACION_CATALOGO_PERF_PRO ?></option>

                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>


        <div class="row"> 
            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                <label class=" control-label col-xs-6 col-sm-3 " for="name">Nombres:</label>

                <div class="col-xs-12 col-sm-9">
                    <div class="clearfix">
                        <input type="text" id="nombres" name="nombres" class="col-xs-12 col-sm-12" required='required' />
                    </div>
                </div>
            </div>



            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                <label class=" control-label col-xs-6 col-sm-3 " for="name">Cédula:</label>

                <div class="col-xs-12 col-sm-9">
                    <div class="clearfix">
                        <?php foreach ($C as $v) { ?>
                            <input type="text" id="ci" name="ci" readonly='readonly'  class="col-xs-12 col-sm-12" value="<?= $v->CEDULA ?>" />
                        <?php } ?>
                    </div>
                </div>
            </div>


        </div>
        <div class="row"> 

            <div class=" form-group col-md-6 col-sm-6 col-xs-12">
                <label class="control-label col-xs-6 col-sm-3 no-padding-right" for="name">Apellido Paterno:</label>

                <div class="col-xs-12 col-sm-9">
                    <div class="clearfix">
                        <input type="text" id="apellido_p" name="apellido_p" class="col-xs-12 col-sm-12" required='required'/>
                    </div>
                </div>
            </div>

            <div class="form-group  col-md-6 col-sm-6 col-xs-12">
                <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name" >Apellido Materno:</label>

                <div class="col-xs-12 col-sm-9">
                    <div class="clearfix">
                        <input type="text" id="apellido_m" name="apellido_m" class="col-xs-12 col-sm-12" required='required'/>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row">

        <div class="form-group  col-md-6 col-sm-6 col-xs-12">
            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">Fecha de Nacimiento:</label>

            <div class="col-xs-12 col-sm-9">
                <div class="clearfix">
                    <input type="date" id="datepicker"  name="datepicker" class="col-xs-12 col-sm-12" required='required'/>
                </div>
            </div>
        </div>






        <div class="form-group col-md-6 col-sm-6 col-xs-12">
            <label class="control-label col-xs-6 col-sm-3 no-padding-right" for="state">Género:</label>

            <div class="col-xs-4 col-sm-9">
                <div class="clearfix">
                    <select class="form-control  col-xs-6 col-sm-9" id="genero" name="genero" class="select2" data-placeholder="Click to Choose..." required='required'>
                        <option value="" selected hidden>Seleccione...</option>
                        <?php
                        foreach ($GENEROS as $p) {
                            ?>
                            <option value="<?= $p->ID_GENERO ?>"><?= $p->NOMBRE_GENERO ?></option>

                            <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
        </div>
    </div>


</div>

<div class="panel panel-primary">
    <div class="panel-heading">
        Detalles
    </div>
    <div class="panel-body">


        <div class="row"> 

            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="state">Provincia:</label>

                <div class="col-xs-12 col-sm-9">
                    <div class="clearfix">
                        <select class="form-control  col-xs-12 col-sm-5" id="provincia" name="provincia" class="select2" data-placeholder="Click to Choose..." required='required'>
                            <option value="" selected hidden>Seleccione...</option>
                            <?php
                            foreach ($PROVINCIAS as $p) {
                                ?>
                                <option value="<?= $p->ID_PROVINCIA ?>"><?= $p->PROVINCIA ?></option>

                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>



            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="state">Cantones:</label>

                <div class="col-xs-12 col-sm-9">
                    <div class="clearfix">
                        <select class="form-control  col-xs-12 col-sm-5" id="canton" name="canton" class="select2" data-placeholder="Click to Choose..." required='required'>
                            <option value="" selected hidden>Seleccione...</option>
                            <?php
                            foreach ($CANTONES as $p) {
                                ?>
                                <option value="<?= $p->ID_CANTON ?>"><?= $p->CANTON ?></option>

                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4 col-sm-6 col-xs-12">
                <label class="control-label col-md-5 col-xs-6 col-sm-3 no-padding-right" for="name">Calle Principal:</label>

                <div class="col-xs-12 col-sm-9">
                    <div class="clearfix">
                        <input type="text" id="calle_p" name="calle_p" class="col-xs-12 col-sm-12" required='required'/>
                    </div>
                </div>
            </div>

            <div class="form-group col-md-4 col-sm-6 col-xs-12">
                <label class="control-label  col-md-5  col-xs-6 col-sm-3 no-padding-top" for="name">Nro de Casa:</label>

                <div class="   col-xs-12 col-sm-9">
                    <div class="clearfix">
                        <input type="text" id="nro_casa" name="nro_casa" class="col-xs-12 col-sm-6" required='required'/>
                    </div>
                </div>
            </div>

        

       
            <div class="form-group col-md-4 col-sm-6 col-xs-12">
                <label class="control-label  col-md-5 col-xs-6 col-sm-3 no-padding-right" for="name">Calle Secundaria:</label>

                <div class="col-xs-12 col-sm-9">
                    <div class="clearfix">
                        <input type="text" id="calle_s" name="calle_s" class="col-xs-12 col-sm-12" required='required'/>
                    </div>
                </div>
            </div>

</div>
        </div>
        <div class="row">

            <div class="form-group col-md-4 col-sm-6 col-xs-12">
                <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="phone">Número Télefono:</label>

                <div class="col-xs-12 col-sm-9">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="ace-icon fa fa-phone"></i>
                        </span>

                        <input type="tel" id="nro_telefono" name="nro_telefono" required='required'/>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-4 col-sm-6 col-xs-12">
                <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="phone">Número Celular:</label>

                <div class="col-xs-12 col-sm-9">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="ace-icon fa fa-phone"></i>
                        </span>

                        <input type="tel" id="nro_celular" name="nro_celular" required='required'/>
                    </div>
                </div>
            </div>
            
            <div class="form-group col-md-4 col-sm-6 col-xs-12">
            <label class="control-label col-xs-12 col-sm-3 no-padding-right" >Correo:</label>

            <div class="col-xs-12 col-sm-9">
                <div class="clearfix">
                    <input type="email" name="email" id="email" class=" col-md-10 col-xs-12 col-sm-6" required='required'/>
                </div>
            </div>
        </div> 
        </div>


        
    </div>

</div>
<!--     <div class="form-group">-->


<!--            <div align=" right"  class="col-xs-12 col-sm-9">
                <div class="clearfix">
                    <input type="submit" id="guardar" name="guardar" class="btn btn-success" value="Guardar"/>
                </div>
            </div>
        </div>-->

<!-- CUERPO FINALIZA -->









