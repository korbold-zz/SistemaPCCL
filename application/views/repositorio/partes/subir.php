
<form enctype="multipart/form-data" action="<?= site_url() ?>/repositorio/subirFile" method="post">
<!--    <input name="archivo" type="file" />
    <input type="submit" value="Subir archivo" />-->


    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Subir Archivo</h3>
        </div>
        <div class="panel-body">
            <table width="100%" >
                <tbody>
                    <tr>
                        <td>&nbsp;</td>
                        <td style='width: 300px'><input  type="text"   id="nombre" name="nombre" 
                                                                         placeholder="Nombre del Archivo"
                                                                         class="form-control"/> </td>
                        <td style='width: 300px'><input  type="text"   id="autor" name="autor" 
                                                                         placeholder="Autor"
                                                                         class="form-control"/> </td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td> <input name="archivo" id=archivo" type="file" />
                           </td>
                        

                        <td> <button type="submit" value="Subir archivo" class="btn btn-sm btn-primary">
                                <i class="ace-icon fa fa-cloud-upload"></i>
                                Subir Archivo
                            </button></td>
                            <td></td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>


</form>