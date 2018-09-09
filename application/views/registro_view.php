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
                           <?php $this->load->view('partes/registrar'); ?>
                          
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

            page specific plugin scripts 
            <script src="<?= base_url() ?>ar/assets/js/wizard.min.js"></script>
            <script src="<?= base_url() ?>ar/assets/js/jquery.validate.min.js"></script>
            <script src="<?= base_url() ?>ar/assets/js/jquery-additional-methods.min.js"></script>
            <script src="<?= base_url() ?>ar/assets/js/bootbox.js"></script>

            <script src="<?= base_url() ?>ar/assets/js/select2.min.js"></script>

            ace scripts 
            <script src="<?= base_url() ?>ar/assets/js/ace-elements.min.js"></script>
            <script src="<?= base_url() ?>ar/assets/js/ace.min.js"></script>

            inline scripts related to this page 
            <script type="text/javascript">
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
            
            <script src="<?= base_url() ?>ar/assets/js/ace-editable.min.js"></script>
            <script src="<?= base_url() ?>ar/assets/js/jquery.maskedinput.min.js"></script>



            <!-- inline scripts related to this page -->
            <script type="text/javascript">
                    jQuery(function ($) {

                        //editables on first profile page
                        $.fn.editable.defaults.mode = 'inline';
                        $.fn.editableform.loading = "<div class='editableform-loading'><i class='ace-icon fa fa-spinner fa-spin fa-2x light-blue'></i></div>";
                        $.fn.editableform.buttons = '<button type="submit" class="btn btn-info editable-submit"><i class="ace-icon fa fa-check"></i></button>' +
                                '<button type="button" class="btn editable-cancel"><i class="ace-icon fa fa-times"></i></button>';

                        //editables 

                        //text editable
                        $('#username')
                                .editable({
                                    type: 'text',
                                    name: 'username'
                                });



                        //select2 editable
                        var countries = [];
                        $.each({"CA": "Canada", "IN": "India", "NL": "Netherlands", "TR": "Turkey", "US": "United States"}, function (k, v) {
                            countries.push({id: k, text: v});
                        });

                        var cities = [];
                        cities["CA"] = [];
                        $.each(["Toronto", "Ottawa", "Calgary", "Vancouver"], function (k, v) {
                            cities["CA"].push({id: v, text: v});
                        });
                        cities["IN"] = [];
                        $.each(["Delhi", "Mumbai", "Bangalore"], function (k, v) {
                            cities["IN"].push({id: v, text: v});
                        });
                        cities["NL"] = [];
                        $.each(["Amsterdam", "Rotterdam", "The Hague"], function (k, v) {
                            cities["NL"].push({id: v, text: v});
                        });
                        cities["TR"] = [];
                        $.each(["Ankara", "Istanbul", "Izmir"], function (k, v) {
                            cities["TR"].push({id: v, text: v});
                        });
                        cities["US"] = [];
                        $.each(["New York", "Miami", "Los Angeles", "Chicago", "Wysconsin"], function (k, v) {
                            cities["US"].push({id: v, text: v});
                        });

                        var currentValue = "NL";
                        $('#country').editable({
                            type: 'select2',
                            value: 'NL',
                            //onblur:'ignore',
                            source: countries,
                            select2: {
                                'width': 140
                            },
                            success: function (response, newValue) {
                                if (currentValue == newValue)
                                    return;
                                currentValue = newValue;

                                var new_source = (!newValue || newValue == "") ? [] : cities[newValue];

                                //the destroy method is causing errors in x-editable v1.4.6+
                                //it worked fine in v1.4.5
                                /**			
                                 $('#city').editable('destroy').editable({
                                 type: 'select2',
                                 source: new_source
                                 }).editable('setValue', null);
                                 */

                                //so we remove it altogether and create a new element
                                var city = $('#city').removeAttr('id').get(0);
                                $(city).clone().attr('id', 'city').text('Select City').editable({
                                    type: 'select2',
                                    value: null,
                                    //onblur:'ignore',
                                    source: new_source,
                                    select2: {
                                        'width': 140
                                    }
                                }).insertAfter(city);//insert it after previous instance
                                $(city).remove();//remove previous instance

                            }
                        });

                        $('#city').editable({
                            type: 'select2',
                            value: 'Amsterdam',
                            //onblur:'ignore',
                            source: cities[currentValue],
                            select2: {
                                'width': 140
                            }
                        });



                        //custom date editable
                        $('#signup').editable({
                            type: 'adate',
                            date: {
                                //datepicker plugin options
                                format: 'yyyy/mm/dd',
                                viewformat: 'yyyy/mm/dd',
                                weekStart: 1

                                        //,nativeUI: true//if true and browser support input[type=date], native browser control will be used
                                        //,format: 'yyyy-mm-dd',
                                        //viewformat: 'yyyy-mm-dd'
                            }
                        })

                        $('#age').editable({
                            type: 'spinner',
                            name: 'age',
                            spinner: {
                                min: 16,
                                max: 99,
                                step: 1,
                                on_sides: true
                                        //,nativeUI: true//if true and browser support input[type=number], native browser control will be used
                            }
                        });


                        $('#login').editable({
                            type: 'slider',
                            name: 'login',
                            slider: {
                                min: 1,
                                max: 50,
                                width: 100
                                        //,nativeUI: true//if true and browser support input[type=range], native browser control will be used
                            },
                            success: function (response, newValue) {
                                if (parseInt(newValue) == 1)
                                    $(this).html(newValue + " hour ago");
                                else
                                    $(this).html(newValue + " hours ago");
                            }
                        });

                        $('#about').editable({
                            mode: 'inline',
                            type: 'wysiwyg',
                            name: 'about',
                            wysiwyg: {
                                //css : {'max-width':'300px'}
                            },
                            success: function (response, newValue) {
                            }
                        });



                        // *** editable avatar *** //
                        try {//ie8 throws some harmless exceptions, so let's catch'em

                            //first let's add a fake appendChild method for Image element for browsers that have a problem with this
                            //because editable plugin calls appendChild, and it causes errors on IE at unpredicted points
                            try {
                                document.createElement('IMG').appendChild(document.createElement('B'));
                            } catch (e) {
                                Image.prototype.appendChild = function (el) {
                                }
                            }

                            var last_gritter
                            $('#avatar').editable({
                                type: 'image',
                                name: 'avatar',
                                value: null,
                                //onblur: 'ignore',  //don't reset or hide editable onblur?!
                                image: {
                                    //specify ace file input plugin's options here
                                    btn_choose: 'Change Avatar',
                                    droppable: true,
                                    maxSize: 110000, //~100Kb

                                    //and a few extra ones here
                                    name: 'avatar', //put the field name here as well, will be used inside the custom plugin
                                    on_error: function (error_type) {//on_error function will be called when the selected file has a problem
                                        if (last_gritter)
                                            $.gritter.remove(last_gritter);
                                        if (error_type == 1) {//file format error
                                            last_gritter = $.gritter.add({
                                                title: 'File is not an image!',
                                                text: 'Please choose a jpg|gif|png image!',
                                                class_name: 'gritter-error gritter-center'
                                            });
                                        } else if (error_type == 2) {//file size rror
                                            last_gritter = $.gritter.add({
                                                title: 'File too big!',
                                                text: 'Image size should not exceed 100Kb!',
                                                class_name: 'gritter-error gritter-center'
                                            });
                                        }
                                        else {//other error
                                        }
                                    },
                                    on_success: function () {
                                        $.gritter.removeAll();
                                    }
                                },
                                url: function (params) {
                                    // ***UPDATE AVATAR HERE*** //
                                    //for a working upload example you can replace the contents of this function with 
                                    //examples/profile-avatar-update.js

                                    var deferred = new $.Deferred

                                    var value = $('#avatar').next().find('input[type=hidden]:eq(0)').val();
                                    if (!value || value.length == 0) {
                                        deferred.resolve();
                                        return deferred.promise();
                                    }


                                    //dummy upload
                                    setTimeout(function () {
                                        if ("FileReader" in window) {
                                            //for browsers that have a thumbnail of selected image
                                            var thumb = $('#avatar').next().find('img').data('thumb');
                                            if (thumb)
                                                $('#avatar').get(0).src = thumb;
                                        }

                                        deferred.resolve({'status': 'OK'});

                                        if (last_gritter)
                                            $.gritter.remove(last_gritter);
                                        last_gritter = $.gritter.add({
                                            title: 'Avatar Updated!',
                                            text: 'Uploading to server can be easily implemented. A working example is included with the template.',
                                            class_name: 'gritter-info gritter-center'
                                        });

                                    }, parseInt(Math.random() * 800 + 800))

                                    return deferred.promise();

                                    // ***END OF UPDATE AVATAR HERE*** //
                                },
                                success: function (response, newValue) {
                                }
                            })
                        } catch (e) {
                        }

                        /**
                         //let's display edit mode by default?
                         var blank_image = true;//somehow you determine if image is initially blank or not, or you just want to display file input at first
                         if(blank_image) {
                         $('#avatar').editable('show').on('hidden', function(e, reason) {
                         if(reason == 'onblur') {
                         $('#avatar').editable('show');
                         return;
                         }
                         $('#avatar').off('hidden');
                         })
                         }
                         */

                        //another option is using modals
                        $('#avatar2').on('click', function () {
                            var modal =
                                    '<div class="modal fade">\
                                      <div class="modal-dialog">\
                                       <div class="modal-content">\
                                            <div class="modal-header">\
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>\
                                                    <h4 class="blue">Change Avatar</h4>\
                                            </div>\
                                            \
                                            <form class="no-margin">\
                                             <div class="modal-body">\
                                                    <div class="space-4"></div>\
                                                    <div style="width:75%;margin-left:12%;"><input type="file" name="file-input" /></div>\
                                             </div>\
                                            \
                                             <div class="modal-footer center">\
                                                    <button type="submit" class="btn btn-sm btn-success"><i class="ace-icon fa fa-check"></i> Submit</button>\
                                                    <button type="button" class="btn btn-sm" data-dismiss="modal"><i class="ace-icon fa fa-times"></i> Cancel</button>\
                                             </div>\
                                            </form>\
                                      </div>\
                                     </div>\
                                    </div>';


                            var modal = $(modal);
                            modal.modal("show").on("hidden", function () {
                                modal.remove();
                            });

                            var working = false;

                            var form = modal.find('form:eq(0)');
                            var file = form.find('input[type=file]').eq(0);
                            file.ace_file_input({
                                style: 'well',
                                btn_choose: 'Click to choose new avatar',
                                btn_change: null,
                                no_icon: 'ace-icon fa fa-picture-o',
                                thumbnail: 'small',
                                before_remove: function () {
                                    //don't remove/reset files while being uploaded
                                    return !working;
                                },
                                allowExt: ['jpg', 'jpeg', 'png', 'gif'],
                                allowMime: ['image/jpg', 'image/jpeg', 'image/png', 'image/gif']
                            });

                            form.on('submit', function () {
                                if (!file.data('ace_input_files'))
                                    return false;

                                file.ace_file_input('disable');
                                form.find('button').attr('disabled', 'disabled');
                                form.find('.modal-body').append("<div class='center'><i class='ace-icon fa fa-spinner fa-spin bigger-150 orange'></i></div>");

                                var deferred = new $.Deferred;
                                working = true;
                                deferred.done(function () {
                                    form.find('button').removeAttr('disabled');
                                    form.find('input[type=file]').ace_file_input('enable');
                                    form.find('.modal-body > :last-child').remove();

                                    modal.modal("hide");

                                    var thumb = file.next().find('img').data('thumb');
                                    if (thumb)
                                        $('#avatar2').get(0).src = thumb;

                                    working = false;
                                });


                                setTimeout(function () {
                                    deferred.resolve();
                                }, parseInt(Math.random() * 800 + 800));

                                return false;
                            });

                        });



                        //////////////////////////////
                        $('#profile-feed-1').ace_scroll({
                            height: '250px',
                            mouseWheelLock: true,
                            alwaysVisible: true
                        });

                        $('a[ data-original-title]').tooltip();

                        $('.easy-pie-chart.percentage').each(function () {
                            var barColor = $(this).data('color') || '#555';
                            var trackColor = '#E2E2E2';
                            var size = parseInt($(this).data('size')) || 72;
                            $(this).easyPieChart({
                                barColor: barColor,
                                trackColor: trackColor,
                                scaleColor: false,
                                lineCap: 'butt',
                                lineWidth: parseInt(size / 10),
                                animate: false,
                                size: size
                            }).css('color', barColor);
                        });

                        ///////////////////////////////////////////

                        //right & left position
                        //show the user info on right or left depending on its position
                        $('#user-profile-2 .memberdiv').on('mouseenter touchstart', function () {
                            var $this = $(this);
                            var $parent = $this.closest('.tab-pane');

                            var off1 = $parent.offset();
                            var w1 = $parent.width();

                            var off2 = $this.offset();
                            var w2 = $this.width();

                            var place = 'left';
                            if (parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2))
                                place = 'right';

                            $this.find('.popover').removeClass('right left').addClass(place);
                        }).on('click', function (e) {
                            e.preventDefault();
                        });


                        ///////////////////////////////////////////
                        $('#user-profile-3')
                                .find('input[type=file]').ace_file_input({
                            style: 'well',
                            btn_choose: 'Change avatar',
                            btn_change: null,
                            no_icon: 'ace-icon fa fa-picture-o',
                            thumbnail: 'large',
                            droppable: true,
                            allowExt: ['jpg', 'jpeg', 'png', 'gif'],
                            allowMime: ['image/jpg', 'image/jpeg', 'image/png', 'image/gif']
                        })
                                .end().find('button[type=reset]').on(ace.click_event, function () {
                            $('#user-profile-3 input[type=file]').ace_file_input('reset_input');
                        })
                                .end().find('.date-picker').datepicker().next().on(ace.click_event, function () {
                            $(this).prev().focus();
                        })
                        $('.input-mask-phone').mask('(999) 999-9999');

                        $('#user-profile-3').find('input[type=file]').ace_file_input('show_file_list', [{type: 'image', name: $('#avatar').attr('src')}]);


                        ////////////////////
                        //change profile
                        $('[data-toggle="buttons"] .btn').on('click', function (e) {
                            var target = $(this).find('input[type=radio]');
                            var which = parseInt(target.val());
                            $('.user-profile').parent().addClass('hide');
                            $('#user-profile-' + which).parent().removeClass('hide');
                        });



                        /////////////////////////////////////
                        $(document).one('ajaxloadstart.page', function (e) {
                            //in ajax mode, remove remaining elements before leaving page
                            try {
                                $('.editable').editable('destroy');
                            } catch (e) {
                            }
                            $('[class*=select2]').remove();
                        });
                    });
            </script>

            <script type="text/javascript">
                if ('ontouchstart' in document.documentElement)
                    document.write("<script src='<?= base_url() ?>ar/assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
            </script>
            <script src="<?= base_url() ?>ar/assets/js/bootstrap.min.js"></script>

            <!-- page specific plugin scripts -->
            <script src="<?= base_url() ?>ar/assets/js/jquery-ui.min.js"></script>
            <script src="<?= base_url() ?>ar/assets/js/jquery.ui.touch-punch.min.js"></script>

            <script src="<?= base_url() ?>ar/assets/js/bootstrap.min.js"></script>



            <!-- ace scripts -->
            <script src="<?= base_url() ?>ar/assets/js/ace-elements.min.js"></script>
            <script src="<?= base_url() ?>ar/assets/js/ace.min.js"></script>

            <!-- inline scripts related to this page -->
            <script type="text/javascript">
                jQuery(function ($) {

                    $("#datepicker").datepicker({
                        showOtherMonths: true,
                        selectOtherMonths: false,
                        //isRTL:true,


                        /*
                         changeMonth: true,
                         changeYear: true,
                         
                         showButtonPanel: true,
                         beforeShow: function() {
                         //change button colors
                         var datepicker = $(this).datepicker( "widget" );
                         setTimeout(function(){
                         var buttons = datepicker.find('.ui-datepicker-buttonpane')
                         .find('button');
                         buttons.eq(0).addClass('btn btn-xs');
                         buttons.eq(1).addClass('btn btn-xs btn-success');
                         buttons.wrapInner('<span class="bigger-110" />');
                         }, 0);
                         }
                         */
                    });


                    //override dialog's title function to allow for HTML titles
                    $.widget("ui.dialog", $.extend({}, $.ui.dialog.prototype, {
                        _title: function (title) {
                            var $title = this.options.title || '&nbsp;'
                            if (("title_html" in this.options) && this.options.title_html == true)
                                title.html($title);
                            else
                                title.text($title);
                        }
                    }));

                    $("#id-btn-dialog1").on('click', function (e) {
                        e.preventDefault();

                        var dialog = $("#dialog-message").removeClass('hide').dialog({
                            modal: true,
                            title: "<div class='widget-header widget-header-small'><h4 class='smaller'><i class='ace-icon fa fa-check'></i> jQuery UI Dialog</h4></div>",
                            title_html: true,
                            buttons: [
                                {
                                    text: "Cancel",
                                    "class": "btn btn-minier",
                                    click: function () {
                                        $(this).dialog("close");
                                    }
                                },
                                {
                                    text: "OK",
                                    "class": "btn btn-primary btn-minier",
                                    click: function () {
                                        $(this).dialog("close");
                                    }
                                }
                            ]
                        });

                        /**
                         dialog.data( "uiDialog" )._title = function(title) {
                         title.html( this.options.title );
                         };
                         **/
                    });


                    $("#id-btn-dialog2").on('click', function (e) {
                        e.preventDefault();

                        $("#dialog-confirm").removeClass('hide').dialog({
                            resizable: false,
                            width: '320',
                            modal: true,
                            title: "<div class='widget-header'><h4 class='smaller'><i class='ace-icon fa fa-exclamation-triangle red'></i> Empty the recycle bin?</h4></div>",
                            title_html: true,
                            buttons: [
                                {
                                    html: "<i class='ace-icon fa fa-trash-o bigger-110'></i>&nbsp; Delete all items",
                                    "class": "btn btn-danger btn-minier",
                                    click: function () {
                                        $(this).dialog("close");
                                    }
                                }
                                ,
                                {
                                    html: "<i class='ace-icon fa fa-times bigger-110'></i>&nbsp; Cancel",
                                    "class": "btn btn-minier",
                                    click: function () {
                                        $(this).dialog("close");
                                    }
                                }
                            ]
                        });
                    });



                    //autocomplete
                    var availableTags = [
                        "ActionScript",
                        "AppleScript",
                        "Asp",
                        "BASIC",
                        "C",
                        "C++",
                        "Clojure",
                        "COBOL",
                        "ColdFusion",
                        "Erlang",
                        "Fortran",
                        "Groovy",
                        "Haskell",
                        "Java",
                        "JavaScript",
                        "Lisp",
                        "Perl",
                        "PHP",
                        "Python",
                        "Ruby",
                        "Scala",
                        "Scheme"
                    ];
                    $("#tags").autocomplete({
                        source: availableTags
                    });

                    //custom autocomplete (category selection)
                    $.widget("custom.catcomplete", $.ui.autocomplete, {
                        _create: function () {
                            this._super();
                            this.widget().menu("option", "items", "> :not(.ui-autocomplete-category)");
                        },
                        _renderMenu: function (ul, items) {
                            var that = this,
                                    currentCategory = "";
                            $.each(items, function (index, item) {
                                var li;
                                if (item.category != currentCategory) {
                                    ul.append("<li class='ui-autocomplete-category'>" + item.category + "</li>");
                                    currentCategory = item.category;
                                }
                                li = that._renderItemData(ul, item);
                                if (item.category) {
                                    li.attr("aria-label", item.category + " : " + item.label);
                                }
                            });
                        }
                    });

                    var data = [
                        {label: "anders", category: ""},
                        {label: "andreas", category: ""},
                        {label: "antal", category: ""},
                        {label: "annhhx10", category: "Products"},
                        {label: "annk K12", category: "Products"},
                        {label: "annttop C13", category: "Products"},
                        {label: "anders andersson", category: "People"},
                        {label: "andreas andersson", category: "People"},
                        {label: "andreas johnson", category: "People"}
                    ];
                    $("#search").catcomplete({
                        delay: 0,
                        source: data
                    });


                    //tooltips
                    $("#show-option").tooltip({
                        show: {
                            effect: "slideDown",
                            delay: 250
                        }
                    });

                    $("#hide-option").tooltip({
                        hide: {
                            effect: "explode",
                            delay: 250
                        }
                    });

                    $("#open-event").tooltip({
                        show: null,
                        position: {
                            my: "left top",
                            at: "left bottom"
                        },
                        open: function (event, ui) {
                            ui.tooltip.animate({top: ui.tooltip.position().top + 10}, "fast");
                        }
                    });


                    //Menu
                    $("#menu").menu();


                    //spinner
                    var spinner = $("#spinner").spinner({
                        create: function (event, ui) {
                            //add custom classes and icons
                            $(this)
                                    .next().addClass('btn btn-success').html('<i class="ace-icon fa fa-plus"></i>')
                                    .next().addClass('btn btn-danger').html('<i class="ace-icon fa fa-minus"></i>')

                            //larger buttons on touch devices
                            if ('touchstart' in document.documentElement)
                                $(this).closest('.ui-spinner').addClass('ui-spinner-touch');
                        }
                    });

                    //slider example
                    $("#slider").slider({
                        range: true,
                        min: 0,
                        max: 500,
                        values: [75, 300]
                    });



                    //jquery accordion
                    $("#accordion").accordion({
                        collapsible: true,
                        heightStyle: "content",
                        animate: 250,
                        header: ".accordion-header"
                    }).sortable({
                        axis: "y",
                        handle: ".accordion-header",
                        stop: function (event, ui) {
                            // IE doesn't register the blur when sorting
                            // so trigger focusout handlers to remove .ui-state-focus
                            ui.item.children(".accordion-header").triggerHandler("focusout");
                        }
                    });
                    //jquery tabs
                    $("#tabs").tabs();


                    //progressbar
                    $("#progressbar").progressbar({
                        value: 37,
                        create: function (event, ui) {
                            $(this).addClass('progress progress-striped active')
                                    .children(0).addClass('progress-bar progress-bar-success');
                        }
                    });


                    //selectmenu
                    $("#number").css('width', '200px')
                            .selectmenu({position: {my: "left bottom", at: "left top"}})

                });
            </script>



    </body>
</html>
