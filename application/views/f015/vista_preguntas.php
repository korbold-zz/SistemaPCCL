<!DOCTYPE html>
<html>
    <head>
        <meta charset="ISO-8859-9" name="viewport" content="width=device-width, initial-scale=1">
         <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <title><?= $nombre_sistema ?></title>   

           <?php $this->load->view('vista_administrador'); ?>
        <?php foreach ($css_files as $file): ?>
            <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
        <?php endforeach; ?>
        <?php foreach ($js_files as $file): ?>
            <script src="<?php echo $file; ?>"></script>
        <?php endforeach; ?>
        <style type='text/css'>
            body
            {
                font-family: Arial;
                font-size: 14px;
            }
            a {
                color: blue;
                text-decoration: none;
                font-size: 14px;
            }
            a:hover
            {
                text-decoration: underline;
            }

        </style>
        <script>
            function r2()
        {
            var pagina = "<?= site_url('proceso/enunciado') ?>";
            location.href = pagina;
        }

        </script>
        
    </head>
    <body>

  <div class ="container" style="width:99%">
            <div class="panel panel-primary right center-block" style='width: 99%'  > 

                <div class="panel-heading"> 

                    <h3 class="panel-title">  <?php echo $TITULO_PAGINA; ?></h3> 

                </div>
                
                <div class="panel-body" > 
                                    <?php
                                    if (isset($PREGUNTA)) {
                                         $this->session->set_userdata('pregunta', $PREGUNTA);
                                    } else {
                                      $PREGUNTA=   $this->session->userdata('pregunta');
                                    }

                                    $consulta = array();
                                    $tabla = "tab_perfiles_pro_estados";
                                    $consulta = $this->vacio_model->llena_tablas($tabla);


                                    foreach ($consulta as $datos) {
                                        if ($datos->ID_PERFIL_PRO_ESTADO == $PREGUNTA) {
                                            echo'<h4>';
                                            echo'<strong>PERFIL:</strong>';
                                            echo $datos->NOMBRE_PERFIL_PRO_ESTADO;
                                            echo'</h4>';
                                        }
                                    }
                                    ?>

                    <?php echo $output; ?><button type="" name="button" id="btnretornar" value="" onclick="r2();" class='btn btn-success'>RETORNAR A PERFIL</button>
                    
                </div>

            </div> 
        </div>
    </body>
    <?php $this->load->view('template/pie'); ?>
</html>
