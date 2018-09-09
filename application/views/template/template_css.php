<!DOCTYPE html>
<html>
    <head>
        <title>
            <?= $titulo ?>
        </title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="<?php echo "$base/$css" ?>">
        <?php $this->load->view('template/cargar_css'); ?>
        <?php $this->load->view('template/cargar_js'); ?>
    </head>
    <body id="theme-default">
        <div id="cabecera">
            <?php $this->load->view('template/cabecera'); ?>
        </div>
        <div id="cuerpo">
            <div id="container" >  
                <div class="page_title">
                    <span class="title_icon"><span class="edit-icon"></span></span>
                    <h3><?=$titulo_pagina?></h3>
                </div>
                
                <div id="content">
                    
                    <div>
                        <div id="menus" style="float:left;">
                            <?php $this->load->view('template/menu'); ?>
                        </div>
                        <div id="perfil" style="float:right;">
                            <?php $this->load->view('template/perfil'); ?>
                        </div>
                    </div>
                    
                    <div class="grid_container">
                        <div class="grid_12 full_block">
                            <div class="widget_wrap">
                                <div class="widget_top">	
                                    <span class="h_icon blocks_images"></span>
                                    <h6><?=$titulo_bloque?></h6>
                                </div>
                                <div class="widget_content">


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>    

        <div id="pie">
            <?php $this->load->view('template/pie'); ?>
        </div>
    </body>
</html>