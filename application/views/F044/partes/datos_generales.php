<div class="table-responsive">

    <div  class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"></h3>
            <h4>1 Datos Generales				
            </h4>
        </div>
        <div class="panel-body">

            <h5>1.1 Identificación de la Entidad Solicitante					
            </h5>
            <table align="center" width="100%"  >
                <tbody>
                    <tr>
                        <th  >Nombre o Razón Social</th>
                        <th >RUC</th>
                        <th >Sitio Web</th>
                    </tr>
                    <tr>
                         <?php
                            foreach ($GENERAL as $p) {
                                ?>
                        <th><input type="text" id="nombre" name="nombre" 
                                   placeholder="Nombre o Razón Social"
                                   class="form-control" value="<?= $p->NOMBRE_EMPRESA ?>"/> 	</th>
                        <th><input type="number" id="ruc" name="ruc" 
                                   placeholder="RUC"
                                   class="form-control" value="<?= $p->RUC ?>"/></th>
                        <th><input type="text" id="web" name="web" 
                                   placeholder="Sitio Web"
                                   class="form-control" value="<?= $p->SITIO_WEB ?>"/></th>
                                

                                <?php
                            }
                            ?>
                        
                    </tr>
                    <tr>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                    </tr>
                    <tr>
                        <th >Dirección	</th>
                        <th >Calle No.       </th>
                        <th >Referencia    </th>
                    </tr>
                    <tr>
                        <?php
                            foreach ($GENERAL as $p) {
                                ?>
                        <th><input type="text" id="direccion" name="direccion" 
                                   placeholder="Dirección"
                                   class="form-control" value="<?= $p->DIRECCION ?>"/> 	</th>
                        <th><input type="number" id="calle" name="calle" 
                                   placeholder="Calle Nro."
                                   class="form-control" value="<?= $p->CALLE_NRO ?>"/></th>
                        <th><input type="text" id="referencia" name="referencia" 
                                   placeholder="Referencia"
                                   class="form-control" value="<?= $p->REFERENCIA ?>"/></th>
                               <?php
                            }
                            ?>
                    </tr>
                    <tr>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                    </tr>
                    <tr>
                        <th >Provincia / Cantón	</th>
                        <th >Ciudad 	</th>
                        <th>&nbsp;</th>
                    </tr>
                    <tr>
                        <?php
                            foreach ($GENERAL as $p) {
                                ?>
                        <th><input type="text" id="provincia" name="provincia" 
                                   placeholder="Provincia / Cantón"
                                   class="form-control" value="<?= $p->PROVINCIA ?>"/>   </th>
                        <th><input type="text" id="ciudad" name="ciudad" 
                                   placeholder="Ciudad"
                                   class="form-control" value="<?= $p->CIUDAD ?>"/></th>
                        <th>&nbsp;</th>
                             <?php
                            }
                            ?>
                    </tr>
                    <tr>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                    </tr>
                    <tr>
                        <th >Teléfono Fijo (s)	
                        </th>
                        <th >Teléfono celular (s)	
                        </th>
                        <th >Correo(s) Electrónico (s)				
                        </th>
                    </tr>

                    <tr>
                         <?php
                            foreach ($GENERAL as $p) {
                                ?>

                        <th><input type="text" id="telefono" name="telefono" 
                                   placeholder="Teléfono Fijo "
                                   class="form-control" value="<?= $p->TELEFONO ?>"/>   </th>
                        <th><input type="number" id="celular" name="celular" 
                                   placeholder="Teléfono celular "
                                   class="form-control" value="<?= $p->CELULAR ?>"/></th>
                        <th><input type="text" id="Correo" name="Correo" 
                                   placeholder="Correo(s) Electrónico (s) "
                                   class="form-control" value="<?= $p->CORREO ?>"/></th>
                          <?php
                            }
                            ?>

                    </tr>
                    <tr>
                        <th>&nbsp;</th>
                        <th></th>
                        <th ></th>
                    </tr>
                </tbody>
            </table>
            <button class="btn btn-app btn-grey btn-xs radius-4">
                                <i class="ace-icon fa fa-floppy-o bigger-160"></i>

                                
                                <span class="badge badge-transparent">
                                    <i class="light-red ace-icon fa fa-asterisk"></i>
                                </span>
                            </button>



        </div>
    </div>

</div>