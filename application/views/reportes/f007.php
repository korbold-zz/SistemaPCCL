<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="./assets/bootstrap/css/bootstrap.min.css" 
              rel="stylesheet"> 

    <body>
        <div align="center" id="header">
            <table align="center"  width="100%" >
                <tbody>

                    <tr>
                        <td align="right" >
                            <img src="./assets/imagenes/logo.jpg "width="100" height="110"/>
                        </td>
                        <td align="center" style='width: 400px'>

                            <h4><font color="black"> BASE DE DATOS PERSONAL INTERNO DEL OEC</font>
                            </h4>

                        </td>
                        <td><table width="100%" >
                                <tbody>
                                    <tr>


                                        <td><b>Código </b> ITCA-F007-</td>

                                    </tr>
                                    <tr>
                                        <td><b>Versión</b>&nbsp;1.1  </td>
                                    </tr>
                                    <tr>
                                        <td><b>Fecha de Emisión </b><?= date('Y-m-d ') ?> </td>
                                    </tr>
                                    <tr>
                                        <td><b>Fecha de revisión&nbsp;</b><?= date('Y-m-d') ?> </td>
                                    </tr>

                                    <tr>
                                        <td><b>File:&nbsp;</b>F007 </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>

                </tbody>
            </table>
        </div>
        <br><br><br><br><br><br><br>

        <table align="center" width="80%">
            <tbody>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><b>Base de datos personal Interno del INSTITUTO TECNOLÓGICO SUPERIOR "JOSÉ CHIRIBOGA GRIJALVA"</b> </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
            </tbody>
        </table>
        <font size="1" color="black">
        <table width="100%" border="1">
            <tbody>
                <tr>
                    <td bgcolor="#8db4e2" align="center" >ID</td>
                    <td bgcolor="#8db4e2" align="center" >CÉDULA </td>
                    <td bgcolor="#8db4e2" align="center" >NOMBRES Y APELLIDOS</td>
                    <td bgcolor="#8db4e2" align="center" >CORREO ELECTRÓNICO</td>
                    <td bgcolor="#8db4e2" align="center" >CARGO</td>
                    <td bgcolor="#8db4e2" align="center" >PROFESIÓN</td>
                    <td bgcolor="#8db4e2" align="center" >TELÉFONO 1</td>
                    <td bgcolor="#8db4e2" align="center" >CELULAR</td>
                </tr>
                 <?php
                foreach ($PERSONA as $p) {
                    ?>
                <tr>
                    <td></td>
                    <td><?= $p->NUMERO_CELULAR ?></td>
                    <td><?= $p->NOMBRES . ' ' . $p->APELLIDO_PATERNO . ' ' . $p->APELLIDO_MATERNO ?></td>
                    <td><?= $p->E_MAIL ?></td>
                    <td><?= $p->CARGO ?></td>
                    <td><?= $p->TITULO ?></td>
                    <td><?= $p->NUMERO_TELEFONO ?></td>
                    <td><?= $p->NUMERO_CELULAR ?></td>
                </tr>
                
                    <?php
                }
                ?>
            </tbody>
        </table>

        </font>
    </body>
</html>