<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title><?= NOMBRE_SISTEMA ?></title>

        <meta name="description" content="and Validation" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <!-- bootstrap & fontawesome -->
        <link rel="stylesheet" href="<?= base_url() ?>ar/assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?= base_url() ?>ar/assets/font-awesome/4.5.0/css/font-awesome.min.css" />

        <!-- page specific plugin styles -->
        <link rel="stylesheet" href="<?= base_url() ?>ar/assets/css/select2.min.css" />

        <!-- text fonts -->
        <link rel="stylesheet" href="<?= base_url() ?>ar/assets/css/fonts.googleapis.com.css" />

        <!-- ace styles -->
        <link rel="stylesheet" href="<?= base_url() ?>ar/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

        <!--[if lte IE 9]>
                <link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
        <![endif]-->
        <link rel="stylesheet" href="<?= base_url() ?>ar/assets/css/ace-skins.min.css" />
        <link rel="stylesheet" href="<?= base_url() ?>ar/assets/css/ace-rtl.min.css" />

        <!--[if lte IE 9]>
          <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
        <![endif]-->

        <!-- inline styles related to this page -->

        <!-- ace settings handler -->
        <script src="<?= base_url() ?>ar/assets/js/ace-extra.min.js"></script>

        <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->


        <script src="<?= base_url() ?>ar/assets/js/html5shiv.min.js"></script>
        <script src="<?= base_url() ?>ar/assets/js/respond.min.js"></script>


        <link rel="stylesheet" href="<?= base_url() ?>ar/assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?= base_url() ?>ar/assets/font-awesome/4.5.0/css/font-awesome.min.css" />

        <!-- page specific plugin styles -->
        <link rel="stylesheet" href="<?= base_url() ?>ar/assets/css/jquery-ui.custom.min.css" />
        <link rel="stylesheet" href="<?= base_url() ?>ar/assets/css/jquery.gritter.min.css" />
        <link rel="stylesheet" href="<?= base_url() ?>ar/assets/css/select2.min.css" />
        <link rel="stylesheet" href="<?= base_url() ?>ar/assets/css/bootstrap-datepicker3.min.css" />
        <link rel="stylesheet" href="<?= base_url() ?>ar/assets/css/bootstrap-editable.min.css" />
        <link rel="stylesheet" href="<?= base_url() ?>ar/assets/css/jquery-ui.min.css" />

        <!-- text fonts -->
        <link rel="stylesheet" href="<?= base_url() ?>ar/assets/css/fonts.googleapis.com.css" />

        <!-- ace styles -->
        <link rel="stylesheet" href="<?= base_url() ?>ar/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

        <!--[if lte IE 9]>
                <link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
        <![endif]-->
        <!--<link rel="stylesheet" href="<?= base_url() ?>ar/assets/css/ace-skins.min.css" />-->
        <link rel="stylesheet" href="<?= base_url() ?>ar/assets/css/ace-rtl.min.css" />

        <!--[if lte IE 9]>
          <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
        <![endif]-->

        <!-- inline styles related to this page -->

        <!-- ace settings handler -->
        <script src="<?= base_url() ?>ar/assets/js/ace-extra.min.js"></script>

        <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

        <!--[if lte IE 8]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->


    </head>

    <body class="no-skin">
        <?php $this->load->view('partes/etiqueta'); ?>

        <div class="main-container ace-save-state" id="main-container">
            <script type="text/javascript">
                try {
                    ace.settings.loadState('main-container')
                } catch (e) {
                }
            </script>

            <div id="sidebar" class="sidebar                  responsive                    ace-save-state">
                <script type="text/javascript">
                    try {
                        ace.settings.loadState('sidebar')
                    } catch (e) {
                    }
                </script>

                <div class="sidebar-shortcuts" id="sidebar-shortcuts">
                    <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                        <button class="btn btn-success">
                            <i class="ace-icon fa fa-signal"></i>
                        </button>

                        <button class="btn btn-info">
                            <i class="ace-icon fa fa-pencil"></i>
                        </button>

                        <button class="btn btn-warning">
                            <i class="ace-icon fa fa-users"></i>
                        </button>

                        <button class="btn btn-danger">
                            <i class="ace-icon fa fa-cogs"></i>
                        </button>
                    </div>

                    <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                        <span class="btn btn-success"></span>

                        <span class="btn btn-info"></span>

                        <span class="btn btn-warning"></span>

                        <span class="btn btn-danger"></span>
                    </div>
                </div><!-- /.sidebar-shortcuts -->

                <?php $this->load->view('partes/menu'); ?>

                <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
                    <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
                </div>
            </div>

            <div class="main-content">
                <div class="main-content-inner">
                    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                        <ul class="breadcrumb">
                            <!--							<li>
                                                                                            <i class="ace-icon fa fa-home home-icon"></i>
                                                                                            <a href="#">Home</a>
                                                                                    </li>
                            
                                                                                    <li>
                                                                                            <a href="#">Other Pages</a>
                                                                                    </li>
                                                                                    <li class="active">Blank Page</li>-->

                        </ul> 

                        <div class="nav-search" id="nav-search">
                            <form class="form-search">
                                <span class="input-icon">
                                    <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                                    <i class="ace-icon fa fa-search nav-search-icon"></i>
                                </span>
                            </form>
                        </div><!-- /.nav-search -->
                    </div>

                    <div class="page-content">
                        <div class="ace-settings-container" id="ace-settings-container">
                            <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                                <i class="ace-icon fa fa-cog bigger-130"></i>
                            </div>

                            <div class="ace-settings-box clearfix" id="ace-settings-box">
                                <div class="pull-left width-50">
                                    <div class="ace-settings-item">
                                        <div class="pull-left">
                                            <select id="skin-colorpicker" class="hide">
                                                <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                                                <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                                                <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                                                <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                                            </select>
                                        </div>
                                        <span>&nbsp; Choose Skin</span>
                                    </div>

                                    <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
                                        <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                                    </div>

                                    <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
                                        <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                                    </div>

                                    <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
                                        <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                                    </div>

                                    <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
                                        <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                                    </div>

                                    <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
                                        <label class="lbl" for="ace-settings-add-container">
                                            Inside
                                            <b>.container</b>
                                        </label>
                                    </div>
                                </div><!-- /.pull-left -->

                                <div class="pull-left width-50">
                                    <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
                                        <label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
                                    </div>

                                    <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
                                        <label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
                                    </div>

                                    <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
                                        <label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
                                    </div>
                                </div><!-- /.pull-left -->
                            </div><!-- /.ace-settings-box -->
                        </div><!-- /.ace-settings-container -->

                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->

                                <h1> CUADRO DE EVALUACIÓN DEL EXAMINADOR
                                    PARA SELECCIÓN</h1>
                                <form id="tabla" method="post" action="<?= site_url() ?>/f011/guardar_califiacion">
                                    
                                      <div class="panel panel-green shadow-gris">
                                        <div class="panel-heading"> 
                                            
                                        <div class="panel-body" >
                                            <?php $this->load->view('F011/body_view/form_view'); ?>
                                            <div class="panel-footer">                    
                                                <div class="pull-right">  
                                                    <button type="submit" id="sistema_boton_guardar" class="btn btn-primary btn-sm">
                                                        <span class="glyphicon glyphicon-save" ></span>
                                                        GUARDAR
                                                    </button>
                                                    <a href="<?= site_url() ?>/f011/calificar_persona" class="btn btn-default btn-sm">
                                                        <span class="glyphicon glyphicon-remove"></span>
                                                        CANCELAR
                                                    </a>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                        </div>
                                    </div>
                                        </div>

                                   

                                </form>

                                <!-- PAGE CONTENT ENDS -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.page-content -->
                </div>
            </div><!-- /.main-content -->

            <?php $this->load->view('partes/footer'); ?>

            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
            </a>
        </div><!-- /.main-container -->

        <!-- basic scripts -->

        <!--[if !IE]> -->
        <!--<script src="<?= base_url() ?>ar/assets/js/jquery-2.1.4.min.js"></script>-->

        <!-- <![endif]-->

        <!--[if IE]>
    <script src="assets/js/jquery-1.11.3.min.js"></script>
    <![endif]-->

        <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
            <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
        </a>
    </div><!-- /.main-container -->

    <!-- basic scripts -->

    <!--[if !IE]> -->
    <script src="<?= base_url() ?>ar/assets/js/jquery-2.1.4.min.js"></script>

    <!-- <![endif]-->

    <!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
    <script type="text/javascript">
                    if ('ontouchstart' in document.documentElement)
                        document.write("<script src='<?= base_url() ?>ar/assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
    </script>
    <script src="<?= base_url() ?>ar/assets/js/bootstrap.min.js"></script>


    <script src="<?= base_url() ?>ar/assets/js/wizard.min.js"></script>
    <script src="<?= base_url() ?>ar/assets/js/jquery.validate.min.js"></script>
    <script src="<?= base_url() ?>ar/assets/js/jquery-additional-methods.min.js"></script>
    <script src="<?= base_url() ?>ar/assets/js/bootbox.js"></script>

    <script src="<?= base_url() ?>ar/assets/js/select2.min.js"></script>


    <script src="<?= base_url() ?>ar/assets/js/ace-elements.min.js"></script>
    <!--<script src="<?= base_url() ?>ar/assets/js/ace.min.js"></script>-->

    
    

        <!-- page specific plugin scripts -->

        <!-- ace scripts -->
     
        <script src="<?= base_url() ?>ar/assets/js/ace.min.js"></script>






    <script type="text/javascript">
                    
                    $(document).ready(function () {
                        $("#detalles").on("change", "#rg1,#rg2,#rg3,#rg4", function () {
                            var num1 = parseInt($("#rg1").val());
                            var num2 = parseInt($("#rg2").val());
                            var num3 = parseInt($("#rg3").val());
                            var num4 = parseInt($("#rg4").val());
                            if (isNaN(num1)) {
                                num1=0;
                            }
                            if (isNaN(num2)) {
                                num2=0;
                            }
                            if (isNaN(num3)) {
                                num3=0;
                            }
                            if (isNaN(num4)) {
                                num4=0;
                            }
                                $("#res").val(num1 + num2 + num3 + num4);
                            
                                
                            
                        });
                    });
                    
                    jQuery(function ($) {
                        
                        $('[data-rel=tooltip]').tooltip();
                        
                        $('.select2').css('width', '200px').select2({allowClear: true})
                                .on('change', function () {
                                    $(this).closest('form').validate().element($(this));
                                });
                        
                        
                        var $validation = false;
                        $('#fuelux-wizard-container')
                                .ace_wizard({
                                    //step: 2 //optional argument. wizard will jump to step "2" at first
                                    //buttons: '.wizard-actions:eq(0)'
                                })
                                .on('actionclicked.fu.wizard', function (e, info) {
                                    if (info.step == 1 && $validation) {
                                        if (!$('#validation-form').valid())
                                            e.preventDefault();
                                    }
                                })
                                //.on('changed.fu.wizard', function() {
                                //})
                                .on('finished.fu.wizard', function (e) {
                                    bootbox.dialog({
                                        message: "Thank you! Your information was successfully saved!",
                                        buttons: {
                                            "success": {
                                                "label": "OK",
                                                "className": "btn-sm btn-primary"
                                            }
                                        }
                                    });
                                }).on('stepclick.fu.wizard', function (e) {
                            //e.preventDefault();//this will prevent clicking and selecting steps
                        });
                        
                        
                        //jump to a step
                        /**
                         var wizard = $('#fuelux-wizard-container').data('fu.wizard')
                         wizard.currentStep = 3;
                         wizard.setState();
                         */
                        
                        //determine selected step
                        //wizard.selectedItem().step
                        
                        
                        
                        //hide or show the other form which requires validation
                        //this is for demo only, you usullay want just one form in your application
                        $('#skip-validation').removeAttr('checked').on('click', function () {
                            $validation = this.checked;
                            if (this.checked) {
                                $('#sample-form').hide();
                                $('#validation-form').removeClass('hide');
                            }
                            else {
                                $('#validation-form').addClass('hide');
                                $('#sample-form').show();
                            }
                        })
                        
                        
                        
                        //documentation : http://docs.jquery.com/Plugins/Validation/validate
                        
                        
                        $.mask.definitions['~'] = '[+-]';
                        $('#phone').mask('(999) 999-9999');
                        
                        jQuery.validator.addMethod("phone", function (value, element) {
                            return this.optional(element) || /^\(\d{3}\) \d{3}\-\d{4}( x\d{1,6})?$/.test(value);
                        }, "Enter a valid phone number.");
                        
                        $('#validation-form').validate({
                            errorElement: 'div',
                            errorClass: 'help-block',
                            focusInvalid: false,
                            ignore: "",
                            rules: {
                                email: {
                                    required: true,
                                    email: true
                                },
                                password: {
                                    required: true,
                                    minlength: 5
                                },
                                password2: {
                                    required: true,
                                    minlength: 5,
                                    equalTo: "#password"
                                },
                                name: {
                                    required: true
                                },
                                phone: {
                                    required: true,
                                    phone: 'required'
                                },
                                url: {
                                    required: true,
                                    url: true
                                },
                                comment: {
                                    required: true
                                },
                                state: {
                                    required: true
                                },
                                platform: {
                                    required: true
                                },
                                subscription: {
                                    required: true
                                },
                                gender: {
                                    required: true,
                                },
                                agree: {
                                    required: true,
                                }
                            },
                            messages: {
                                email: {
                                    required: "Please provide a valid email.",
                                    email: "Please provide a valid email."
                                },
                                password: {
                                    required: "Please specify a password.",
                                    minlength: "Please specify a secure password."
                                },
                                state: "Please choose state",
                                subscription: "Please choose at least one option",
                                gender: "Please choose gender",
                                agree: "Please accept our policy"
                            },
                            highlight: function (e) {
                                $(e).closest('.form-group').removeClass('has-info').addClass('has-error');
                            },
                            success: function (e) {
                                $(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
                                $(e).remove();
                            },
                            errorPlacement: function (error, element) {
                                if (element.is('input[type=checkbox]') || element.is('input[type=radio]')) {
                                    var controls = element.closest('div[class*="col-"]');
                                    if (controls.find(':checkbox,:radio').length > 1)
                                        controls.append(error);
                                    else
                                        error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
                                }
                                else if (element.is('.select2')) {
                                    error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
                                }
                                else if (element.is('.chosen-select')) {
                                    error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
                                }
                                else
                                    error.insertAfter(element.parent());
                            },
                            submitHandler: function (form) {
                            },
                            invalidHandler: function (form) {
                            }
                        });
                        
                        
                        
                        
                        $('#modal-wizard-container').ace_wizard();
                        $('#modal-wizard .wizard-actions .btn[data-dismiss=modal]').removeAttr('disabled');
                        
                        
                        /**
                         $('#date').datepicker({autoclose:true}).on('changeDate', function(ev) {
                         $(this).closest('form').validate().element($(this));
                         });
                         
                         $('#mychosen').chosen().on('change', function(ev) {
                         $(this).closest('form').validate().element($(this));
                         });
                         */
                        
                        
                        $(document).one('ajaxloadstart.page', function (e) {
                            //in ajax mode, remove remaining elements before leaving page
                            $('[class*=select2]').remove();
                        });
                    })
    </script>
  
</body>
</html>
