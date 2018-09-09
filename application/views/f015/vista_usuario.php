<!DOCTYPE html>
<html >
    <head>
        <meta charset="ISO-8859-9" name="viewport" content="width=device-width, initial-scale=1">

        <title><?= $nombre_sistema ?></title>       

        <?php $this->load->view('template/cargar_js'); ?>
        <?php $this->load->view('template/cargar_css'); ?>

        <script>
            $(function () {
                $("#generar").on('click', function () {

                    var abre = true
                    if (abre == true)
                    {


                        $.post("<?= site_url('prueba/preguntas') ?>", {

                            ob: 2

                        },
                                function (respuesta) {

                                    $("#salida").html(respuesta);


                                });
                        return false;
                    } else
                    {

                        return false;
                    }
                });
            })
        </script>


    </head>
    
<div class ="container" style="width:95%">
    <div class="panel panel-primary right center-block" style='width: 99%'  > 

        <div class="panel-heading"> 

            <h3 class="panel-title">Datos</h3> 

        </div> 

        <div class="panel-body"> 

            <?php
            $user = $this->vacio_model->llena_tablasid('tab_usuarios', 'ID_USUARIO', '5');
            $user = $user[0];
            $datos = $this->vacio_model->llena_tablasid('tab_personas', 'ID_PERSONA', '5');
            $datos = $datos[0];
            echo"<strong>Usuario: </strong>";
            echo $datos->APELLIDO_PATERNO . " " . $datos->APELLIDO_MATERNO . " " . $datos->NOMBRES;

            $prueba = $this->vacio_model->llena_tablasid('tab_evaluado', 'ID_USUARIO', '5');
            $prueba = $prueba[0];
            if ($prueba->ESTADO == 'F') {
                echo"<h3>PROCESO TERMINADO</H3>";
            } else {
                ?>
                <P></P>
                <table border = '1' align = 'center'class = 'table table-hover table table-condensed'id = "lista">

                    <thead>
                        <tr  style="color:#F1F8E0 ">
                            <td bgcolor='#0148ca' ><strong>N&deg;</strong></td>
                            <td bgcolor='#0148ca'><strong>PREGUNTA</strong></td>
                            <td bgcolor='#0148ca'><strong>ALTERNATIVAS</strong></td>

                        </tr>
                    </thead>
                 
                    <?php
                    $consulta = array();

                    $consulta = $this->vacio_model->llena_tablasid('tab_evaluacion', 'ID_EVALUADO', $prueba->ID_EVALUADO);
                    $i = 1;
                    ?>
                    <form method='post' action= "<?php echo site_url('menu/prueba') ?>">
                   <?php
                      echo "<tbody>";
                    foreach ($consulta as $datos) {
                      

                       


                        if ($i % 2 == 0) {
                            echo "<tr bgcolor='88BDFA'>";
                        }
                        echo"<td>" . $i . "</td>";
                        $user = $this->vacio_model->llena_tablasid('tab_preguntas_bloquea', 'ID_PREGUNTA', $datos->ID_PREGUNTA);
                        $user = $user[0];
                        echo"<td>" . $user->DESCRIPCION_PREGUNTA . "</td>";
                        $user1 = array();
                        $user1 = $this->vacio_model->llena_tablasid('tab_respuestas', 'ID_PREGUNTA', $datos->ID_PREGUNTA);

                        echo"<td>";
                        if ($user->BLOQUE == "A") {
                            ECHO" <div class = 'col-md-6'>";
                            echo"<select id ='" . $i . "'name='".$i."' class = 'form-control' aria-required='true'  required >";

                            echo"<option value=''>SELECCIONE RESPUESTA</option>";
                            foreach ($user1 as $d) {
                                echo"<option value=" . $d->ID_RESPUESTA . ">" . $d->DESCRIPCION_RESPUESTA . "</option>";
                            }

                            echo"</select>";


                            echo"</div>";
                        } ELSE {
                               ECHO" <div class = 'col-md-6'>";
                            echo"<input id ='" . $i . "'name='".$i."' class = 'form-control'   autocomplete='off'required='required'placeholder='RESPUESTA' >";
                            echo"</div>";
                            
                        }

                        echo"</td>";

                        echo"<td></td>";

                        echo " </tr>";
                       
                        

                        $i++;
                        
                    }
                     $this->session->set_userdata('i', $i-1);
                    echo "</tbody>";
                     echo"<input type='submit'class='btn btn-success'id ='btnaceptar' value='ENVIAR Y TERMINAR'>";
                        echo"</form>";
                    ?>
                    
                </table>
                <?php
            }
            ?>


        </div>
    </div>
</div>




</html>









