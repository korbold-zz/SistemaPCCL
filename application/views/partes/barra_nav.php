
<link href="<?= base_url() ?>acs/bootstrap.css"rel="stylesheet" />


<div class="navbar navbar-inverse navbar-fixed-top scroll-me" id="menu-section" >
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">

                LIGHT WAVE

            </a>
        </div>




        <li class="divider"></li>






        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav" >
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Seguridad<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?= site_url() ?>/seguridad/roles">Roles de Usuario</a></li>
                        <li><a href="<?= site_url() ?>/seguridad/users">Usuarios</a></li>


                    </ul>
                </li>



                <!--                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Reportes<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="<?= site_url() ?>/reportes/reportepdf" target="popup" onClick="window.open(this.href, this.target, 'width=800,height=600');
                                                    return false;">Reporte 1</a>
                                        </li>
                                       
                                    </ul>
                                </li>-->

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Parámetros<span class="caret"></span></a>
                    <ul class="dropdown-menu">

                        <li><a href="<?= site_url() ?>/parametros/tarifas" >Tarifas</a></li>
                        <li class="divider"></li>

                        <li><a href="<?= site_url() ?>/parametros/provincias" >Provincias</a></li>

                        <li>  <a href="<?= site_url() ?>/parametros/cantones" >Cantones</a></li>

                        <li>  <a href="<?= site_url() ?>/parametros/paises">Países</a></li>
                        <li class="divider"></li>

                        <li>  <a href="<?= site_url() ?>/parametros/personas" >Personas</a></li>
                        <li class="divider"></li>

                        <li>  <a href="<?= site_url() ?>/parametros/rutas" >Rutas</a></li>

                        <li>  <a href="<?= site_url() ?>/parametros/unidadesTransporte" >Unidades de Transporte</a></li>

                        <li><a href="<?= site_url() ?>/reportes/reporte_unidades" target="popup" onClick="window.open(this.href, this.target, 'width=800,height=600');
                                return false;">Reporte Unidades de Transportes</a></li>




                    </ul>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Atención<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?= site_url() ?>/atencion/registrar" >Registrar</a>
                        <li>

                            <a href="<?= site_url() ?>/atencion/pasajeros" >Pasajeros</a>
                        </li>
                        <li>
                            <a href="<?= site_url() ?>/atencion/reservas" >Reservas</a>
                        </li>

                        <li>
                            <a href="<?= site_url() ?>/atencion/ventas" >Ventas</a>
                        </li>




                    </ul>
                </li>



            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><p class="navbar-text">
                        <?= $this->session->userdata('datos') ?>
                    </p></li>
                <li><a href="<?php echo site_url(); ?>/autentificacion/salir">
                        <span class="glyphicon glyphicon-off"></span>
                        <b>SALIR</b>
                    </a>
                </li>
            </ul>
        </div>





    </div>
</div>
<br>
<br>
<br>
<br>
<br>



<!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME -->
<!-- CORE JQUERY -->
<script src="<?= base_url() ?>plantilla/assets/js/jquery-1.11.1.js"></script>

<script src="<?= base_url() ?>plantilla/assets/js/bootstrap.js"></script>
