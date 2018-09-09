<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>
            <?= $titulo ?>
        </title>  
        <?php $this->load->view('template/cargar_css'); ?>
        <?php $this->load->view('template/cargar_js'); ?>
        
        <?php foreach ($css_files as $file): ?>
            <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
        <?php endforeach; ?>
        <?php foreach ($js_files as $file): ?>
            <script src="<?php echo $file; ?>"></script>
        <?php endforeach; ?>
       
    </head>
    <body id="theme-default" class="full_block">
        <div id="cabecera">
            <?php $this->load->view('template/cabecera'); ?>
        </div>
        <div id="cuerpo" >
            <div id="container" >   
                <div class="page_title">
                    <span class="title_icon"><span class="edit-icon"></span></span>
                    <h3>SISTEMA ACAD&Eacute;MICO </h3>
                </div>
              
                <div id="content">
                    
                    <div>
                        <div id="menu" style="float:left;">
                            <?php $this->load->view('template/menu'); ?>
                        </div>
                        <div id="menu" style="float:right;">
                            <?php $this->load->view('template/perfil'); ?>
                        </div>
                    </div>
                    
                    <div class="grid_container">
                        <div class="grid_12 full_block">
                            <div class="widget_wrap" >
                                <div class="widget_top">	
                                    <span class="h_icon blocks_images"></span>
                                    <h6> <?php echo $titulo_pagina; ?>  </h6>
                                </div>
                                <div class="widget_content">
                                    <?php echo $output; ?>
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