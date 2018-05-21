<?php /* Smarty version Smarty-3.1.12, created on 2018-01-03 14:25:13
         compiled from "/home/abdullah/public_html/lomixa2/style/lomixa/main/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14654028355a41bc221720c3-92622714%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8fd67a5d671b394ba845e9f4643e3318c219dd25' => 
    array (
      0 => '/home/abdullah/public_html/lomixa2/style/lomixa/main/header.tpl',
      1 => 1514895421,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14654028355a41bc221720c3-92622714',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a41bc221c7b93_47646183',
  'variables' => 
  array (
    'direction' => 0,
    'site' => 0,
    'cssfiles' => 0,
    'cssfile' => 0,
    'current_user' => 0,
    'js' => 0,
    'current_lang' => 0,
    'langs' => 0,
    'lang' => 0,
    'new_nums' => 0,
    'var' => 0,
    'notifaction' => 0,
    'notifaction2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a41bc221c7b93_47646183')) {function content_5a41bc221c7b93_47646183($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en" dir="<?php echo $_smarty_tpl->tpl_vars['direction']->value;?>
" class="loading">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="PIXINVENT">
        <title>Project Dashboard - Robust Bootstrap Admin Template</title>
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/app-assets/images/ico/apple-icon-60.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/app-assets/images/ico/apple-icon-76.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/app-assets/images/ico/apple-icon-120.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/app-assets/images/ico/apple-icon-152.png">
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/app-assets/images/ico/favicon.ico">
        <link rel="shortcut icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/app-assets/images/ico/favicon-32.png">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-touch-fullscreen" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="default">
        <!-- BEGIN VENDOR CSS-->
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/app-assets/css<?php if ($_smarty_tpl->tpl_vars['direction']->value=='rtl'){?>-rtl<?php }else{ ?><?php }?>/bootstrap.min.css">
        <!-- font icons-->
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/app-assets/fonts/icomoon.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/app-assets/fonts/flag-icon-css/css/flag-icon.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/app-assets/vendors/css/sliders/slick/slick.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/app-assets/vendors/css/extensions/pace.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/app-assets/vendors/css/charts/morris.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/app-assets/vendors/css/extensions/unslider.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/app-assets/vendors/css/weather-icons/climacons.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min_2.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/app-assets/vendors/css/tables/extensions/rowReorder.dataTables.min_2.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/app-assets/vendors/css/tables/extensions/responsive.dataTables.min_2.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/app-assets/vendors/css/forms/selects/select2.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/app-assets/vendors/css/ui/jquery-ui.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/app-assets/vendors/css/forms/listbox/bootstrap-duallistbox.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/app-assets/vendors/css/forms/icheck/icheck.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/app-assets/vendors/css/forms/icheck/custom.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">



        <!-- END VENDOR CSS-->
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/app-assets/css<?php if ($_smarty_tpl->tpl_vars['direction']->value=='rtl'){?>-rtl<?php }else{ ?><?php }?>/bootstrap-extended.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/app-assets/css<?php if ($_smarty_tpl->tpl_vars['direction']->value=='rtl'){?>-rtl<?php }else{ ?><?php }?>/app.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/app-assets/css<?php if ($_smarty_tpl->tpl_vars['direction']->value=='rtl'){?>-rtl<?php }else{ ?><?php }?>/colors.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/assets/css/style<?php if ($_smarty_tpl->tpl_vars['direction']->value=='rtl'){?>-rtl<?php }else{ ?><?php }?>.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/app-assets/css<?php if ($_smarty_tpl->tpl_vars['direction']->value=='rtl'){?>-rtl<?php }else{ ?><?php }?>/custom<?php if ($_smarty_tpl->tpl_vars['direction']->value=='rtl'){?>-rtl<?php }else{ ?><?php }?>.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/app-assets/vendors/css/forms/toggle/switchery.min.css">

        <!-- END ROBUST CSS-->
        <!-- BEGIN Page Level CSS-->
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/app-assets/css<?php if ($_smarty_tpl->tpl_vars['direction']->value=='rtl'){?>-rtl<?php }else{ ?><?php }?>/core/menu/menu-types/vertical-overlay-menu.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/app-assets/css<?php if ($_smarty_tpl->tpl_vars['direction']->value=='rtl'){?>-rtl<?php }else{ ?><?php }?>/core/menu/menu-types/vertical-overlay-menu.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/app-assets/css<?php if ($_smarty_tpl->tpl_vars['direction']->value=='rtl'){?>-rtl<?php }else{ ?><?php }?>/plugins/calendars/clndr.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/app-assets/css<?php if ($_smarty_tpl->tpl_vars['direction']->value=='rtl'){?>-rtl<?php }else{ ?><?php }?>/core/colors/palette-climacon.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/app-assets/css<?php if ($_smarty_tpl->tpl_vars['direction']->value=='rtl'){?>-rtl<?php }else{ ?><?php }?>/pages/users.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/app-assets/css<?php if ($_smarty_tpl->tpl_vars['direction']->value=='rtl'){?>-rtl<?php }else{ ?><?php }?>/plugins/forms/switch.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/app-assets/css<?php if ($_smarty_tpl->tpl_vars['direction']->value=='rtl'){?>-rtl<?php }else{ ?><?php }?>/plugins/forms/checkboxes-radios.css">

        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">



        <!-- BEGIN Custom CSS-->
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/app-assets/vendors/css/pickers/datetime/bootstrap-datetimepicker.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/app-assets/vendors/css/pickers/datetime/pickadate.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/custom-css.css">

        <!-- END Custom CSS-->

        <?php if (isset($_smarty_tpl->tpl_vars['cssfiles']->value)){?>


            <?php  $_smarty_tpl->tpl_vars['cssfile'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cssfile']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cssfiles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cssfile']->key => $_smarty_tpl->tpl_vars['cssfile']->value){
$_smarty_tpl->tpl_vars['cssfile']->_loop = true;
?>
                <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/app-assets/css<?php if ($_smarty_tpl->tpl_vars['direction']->value=='rtl'){?>-rtl<?php }else{ ?><?php }?>/<?php echo $_smarty_tpl->tpl_vars['cssfile']->value;?>
">

            <?php } ?>
        <?php }?>

        <script>
            var site_url = '<?php echo $_smarty_tpl->tpl_vars['site']->value['url'];?>
';
            var userID = '<?php echo $_smarty_tpl->tpl_vars['current_user']->value['userID'];?>
';
            <?php if (isset($_smarty_tpl->tpl_vars['js']->value)){?>
                <?php echo $_smarty_tpl->tpl_vars['js']->value;?>

            <?php }?>
        </script>
    </head>
    <body data-open="click" data-menu="vertical-overlay-menu" data-col="2-columns" class="vertical-layout vertical-overlay-menu 2-columns  fixed-navbar">

        <!-- navbar-fixed-top-->
        <nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-dark navbar-border navbar-shadow navbar-brand-center">
            <div class="navbar-wrapper">
                <div class="navbar-header">
                    <ul class="nav navbar-nav">
                        <li class="nav-item mobile-menu hidden-md-up float-xs-left"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5 font-large-1"></i></a></li>
                        <li class="nav-item"><a href="" class="navbar-brand nav-link"><img alt="branding logo" src="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/app-assets/images/logo/robust-logo-light.png" data-expand="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/app-assets/images/logo/robust-logo-light.png" data-collapse="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/app-assets/images/logo/robust-logo-small.png" class="brand-logo"></a></li>
                        <li class="nav-item hidden-md-up float-xs-right"><a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i class="icon-ellipsis pe-2x icon-icon-rotate-right-right"></i></a></li>
                    </ul>
                </div>
                <div class="navbar-container content container-fluid">
                    <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
                        <ul class="nav navbar-nav">
                            <li class="nav-item hidden-sm-down"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5"></i></a></li>
                            <li class="nav-item nav-search"><a href="#" class="nav-link nav-link-search fullscreen-search-btn"><i class="ficon icon-search7"></i></a></li>
                            <li class="nav-item hidden-sm-down"><a href="#" class="nav-link nav-link-expand"><i class="ficon icon-expand2"></i></a></li>
                            <li class="dropdown nav-item mega-dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link">Mega</a>
                                <ul class="mega-dropdown-menu dropdown-menu row">
                                    <li class="col-md-2">
                                        <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="icon-paper"></i> News</h6>
                                        <div id="mega-menu-carousel-example" class="responsive-slick">
                                            <div><img src="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/app-assets/images/slider/slider-2.png" alt="First slide" class="rounded img-fluid mb-1"><a href="#" class="news-title mb-0">Poster Frame PSD</a>
                                                <p class="news-content"><span class="font-small-2">January 26, 2016</span></p>
                                            </div>
                                            <div><img src="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/app-assets/images/slider/slider-5.png" alt="First slide" class="rounded img-fluid mb-1"><a href="#" class="news-title mt-1 mb-0">Header MockUp</a>
                                                <p class="news-content"><span class="font-small-2">January 15, 2016</span></p>
                                            </div>
                                            <div><img src="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/app-assets/images/slider/slider-6.png" alt="First slide" class="rounded img-fluid mb-1"><a href="#" class="news-title mt-1 mb-0">2 Poster PSD</a>
                                                <p class="news-content"><span class="font-small-2">January 15, 2016</span></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-3">
                                        <h6 class="dropdown-menu-header text-uppercase"><i class="icon-shuffle3"></i> Drill down menu</h6>
                                        <ul class="drilldown-menu">
                                            <li class="menu-list">
                                                <ul>
                                                    <li><a href="layout-2-columns.html" class="dropdown-item"><i class="icon-layout"></i> Page layouts & Templates</a></li>
                                                    <li><a href="#"><i class="icon-layers"></i> Multi level menu</a>
                                                        <ul>
                                                            <li><a href="#" class="dropdown-item"><i class="icon-share4"></i>  Second level</a></li>
                                                            <li><a href="#"><i class="icon-umbrella3"></i> Second level menu</a>
                                                                <ul>
                                                                    <li><a href="#" class="dropdown-item"><i class="icon-microphone2"></i>  Third level</a></li>
                                                                    <li><a href="#" class="dropdown-item"><i class="icon-head"></i> Third level</a></li>
                                                                    <li><a href="#" class="dropdown-item"><i class="icon-signal2"></i> Third level</a></li>
                                                                    <li><a href="#" class="dropdown-item"><i class="icon-camera8"></i> Third level</a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="#" class="dropdown-item"><i class="icon-flag4"></i> Second level, third link</a></li>
                                                            <li><a href="#" class="dropdown-item"><i class="icon-box"></i> Second level, fourth link</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="color-palette-primary.html" class="dropdown-item"><i class="icon-marquee-plus"></i> Color pallet system</a></li>
                                                    <li><a href="https://pixinvent.com/bootstrap-admin-template/robust/html/ltr/vertical-overlay-menu-template/sk-2-columns.html" class="dropdown-item"><i class="icon-edit2"></i> Page starter kit</a></li>
                                                    <li><a href="changelog.html" class="dropdown-item"><i class="icon-files-empty"></i> Change log</a></li>
                                                    <li><a href="http://support.pixinvent.com/" class="dropdown-item"><i class="icon-tencent-weibo"></i> Customer support center</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="col-md-3">
                                        <h6 class="dropdown-menu-header text-uppercase"><i class="icon-list2"></i> Accordion</h6>
                                        <div id="accordionWrap" role="tablist" aria-multiselectable="true">
                                            <div class="card no-border box-shadow-0 collapse-icon accordion-icon-rotate">
                                                <div id="headingOne" role="tab" class="card-header p-0 pb-1 no-border"><a data-toggle="collapse" data-parent="#accordionWrap" href="#accordionOne" aria-expanded="true" aria-controls="accordionOne" class="card-title">Accordion Group Item #1</a></div>
                                                <div id="accordionOne" role="tabpanel" aria-labelledby="headingOne" aria-expanded="true" class="card-collapse collapse in">
                                                    <div class="card-body">
                                                        <p class="accordion-text">Caramels dessert chocolate cake pastry jujubes bonbon. Jelly wafer jelly beans. Caramels chocolate cake liquorice cake wafer jelly beans croissant apple pie.</p>
                                                    </div>
                                                </div>
                                                <div id="headingTwo" role="tab" class="card-header p-0 pb-1 no-border"><a data-toggle="collapse" data-parent="#accordionWrap" href="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo" class="card-title collapsed">Accordion Group Item #2</a></div>
                                                <div id="accordionTwo" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" class="card-collapse collapse">
                                                    <div class="card-body">
                                                        <p class="accordion-text">Sugar plum bear claw oat cake chocolate jelly tiramisu dessert pie. Tiramisu macaroon muffin jelly marshmallow cake. Pastry oat cake chupa chups.</p>
                                                    </div>
                                                </div>
                                                <div id="headingThree" role="tab" class="card-header p-0 pb-1 no-border"><a data-toggle="collapse" data-parent="#accordionWrap" href="#accordionThree" aria-expanded="false" aria-controls="accordionThree" class="card-title collapsed">Accordion Group Item #3</a></div>
                                                <div id="accordionThree" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false" class="card-collapse collapse">
                                                    <div class="card-body">
                                                        <p class="accordion-text">Candy cupcake sugar plum oat cake wafer marzipan jujubes lollipop macaroon. Cake dragée jujubes donut chocolate bar chocolate cake cupcake chocolate topping.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-4">
                                        <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="icon-mail6"></i> Contact Us</h6>
                                        <form>
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <label for="inputName1" class="col-sm-3 form-control-label">Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="inputName1" placeholder="John Doe" class="form-control">
                                                    <div class="form-control-position"><i class="icon-head"></i></div>
                                                </div>
                                            </fieldset>
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <label for="inputEmail1" class="col-sm-3 form-control-label">Email</label>
                                                <div class="col-sm-9">
                                                    <input type="email" id="inputEmail1" placeholder="john@example.com" class="form-control">
                                                    <div class="form-control-position"><i class="icon-mail6"></i></div>
                                                </div>
                                            </fieldset>
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <label for="inputMessage1" class="col-sm-3 form-control-label">Message</label>
                                                <div class="col-sm-9">
                                                    <textarea id="inputMessage1" rows="2" placeholder="Simple Textarea" class="form-control"></textarea>
                                                    <div class="form-control-position"><i class="icon-file-text"></i></div>
                                                </div>
                                            </fieldset>
                                            <div class="col-sm-12 mb-1">
                                                <button type="button" class="btn btn-primary float-xs-right"><i class="icon-send-o"></i> Send</button>
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <audio style="display: none" id="xyz" src="<?php echo $_smarty_tpl->tpl_vars['site']->value['url'];?>
/files/sounds/call.mp3" ></audio>
                        <ul class="nav navbar-nav float-xs-right">
                            <li class="dropdown dropdown-language nav-item">
                                <a id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link"><i class="flag-icon"></i><span class="selected-language"><?php echo $_smarty_tpl->tpl_vars['current_lang']->value['langName'];?>
</span></a>
                                <div aria-labelledby="dropdown-flag" class="dropdown-menu">
                                    <?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['langs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value){
$_smarty_tpl->tpl_vars['lang']->_loop = true;
?>
                                        <a href="#" class="dropdown-item"><i class="flag-icon "></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['langName'];?>
</a>    
                                    <?php } ?>

                                </div>
                            </li>
                            <li class="dropdown dropdown-notification nav-item"><a href="#" data-toggle="dropdown" class="nav-link nav-link-label"><i class="ficon icon-bell4"></i><span id="notifactionNum" class="tag tag-pill tag-default tag-danger tag-default tag-up"><?php echo $_smarty_tpl->tpl_vars['new_nums']->value;?>
</span></a>
                                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                    <li class="dropdown-menu-header">
                                        <h6 class="dropdown-header m-0"><span class="grey darken-2"><?php echo $_smarty_tpl->tpl_vars['var']->value['notfications'];?>
</span></h6>
                                    </li>
                                    <li class="list-group scrollable-container">

                                        <a id="notify_a" href="#" class="list-group-item">
                                            <?php  $_smarty_tpl->tpl_vars['notifaction2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notifaction2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifaction']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notifaction2']->key => $_smarty_tpl->tpl_vars['notifaction2']->value){
$_smarty_tpl->tpl_vars['notifaction2']->_loop = true;
?>
                                                <div class="media notify_s" id="<?php echo $_smarty_tpl->tpl_vars['notifaction2']->value['notifiID'];?>
">
                                                    <div class="media-left valign-middle"><i class="icon-ios-bell icon-bg-circle bg-cyan"></i></div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading"><?php echo $_smarty_tpl->tpl_vars['notifaction2']->value['notifiName'];?>
</h6>
                                                        <p class="notification-text font-small-3 <?php if ($_smarty_tpl->tpl_vars['notifaction2']->value['notifiStatus']=='new'){?> text-danger <?php }else{ ?> text-muted <?php }?>"><?php echo $_smarty_tpl->tpl_vars['notifaction2']->value['details'];?>
</p><small>
                                                            <time datetime="<?php echo $_smarty_tpl->tpl_vars['notifaction2']->value['notificationTime'];?>
" class="media-meta text-muted"><?php echo $_smarty_tpl->tpl_vars['notifaction2']->value['notificationTime'];?>
</time></small>
                                                    </div>
                                                </div>

                                            <?php } ?>
                                            <div  style="display: none" class="media notify_s" id="0">
                                            </div>
                                        </a>

                                    </li>
                                    <li class="dropdown-menu-footer">
                                        <button   class="readAllNotifaction dropdown-item text-muted text-xs-center"><?php echo $_smarty_tpl->tpl_vars['var']->value['readAllNotfications'];?>
</button>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-notification nav-item"><a href="#large" data-toggle="modal" class="showordersbox nav-link nav-link-label"><i class="icon-speech-bubble"></i></a>

                            </li>
                            <li class="dropdown dropdown-user nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link"><span class="avatar avatar-online"><img src="<?php echo $_smarty_tpl->tpl_vars['site']->value['url'];?>
/<?php echo $_smarty_tpl->tpl_vars['current_user']->value['image'];?>
" alt="avatar"><i></i></span><span class="user-name">
                                            <?php if ($_smarty_tpl->tpl_vars['current_user']->value['fullName']!=''||$_smarty_tpl->tpl_vars['current_user']->value['fullName']!=null){?>
                                                <?php echo $_smarty_tpl->tpl_vars['current_user']->value['fullName'];?>

                                            <?php }else{ ?>
                                                <?php echo $_smarty_tpl->tpl_vars['current_user']->value['userPhone'];?>

                                            <?php }?>
                                    </span></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="/user/user_profile" class="dropdown-item"><i class="icon-head"></i> <?php echo $_smarty_tpl->tpl_vars['var']->value['edit_profile'];?>
</a>
                                    <a href="/manageusers/changepassword" class="dropdown-item"><i class="icon-head"></i><?php echo $_smarty_tpl->tpl_vars['var']->value['changepassword'];?>
</a>
                                    <div class="dropdown-divider"></div><a href="/user/logout" id="logout_url" class="dropdown-item"><i class="icon-power3"></i> <?php echo $_smarty_tpl->tpl_vars['var']->value['logout'];?>
</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <div id="fullscreen-search" class="fullscreen-search">
            <form class="fullscreen-search-form">
                <input type="search" placeholder="Search..." class="fullscreen-search-input">
                <button type="submit" class="fullscreen-search-submit">Search</button>
            </form>
            <div class="fullscreen-search-content">
                <div class="fullscreen-search-options">
                    <div class="row">
                        <div class="col-sm-12">
                            <fieldset>
                                <label class="custom-control custom-checkbox display-inline">
                                    <input type="checkbox" class="custom-control-input"><span class="custom-control-indicator"></span><span class="custom-control-description m-0">All</span>
                                </label>
                                <label class="custom-control custom-checkbox display-inline">
                                    <input type="checkbox" class="custom-control-input"><span class="custom-control-indicator"></span><span class="custom-control-description m-0">People</span>
                                </label>
                                <label class="custom-control custom-checkbox display-inline">
                                    <input type="checkbox" class="custom-control-input"><span class="custom-control-indicator"></span><span class="custom-control-description m-0">Project</span>
                                </label>
                                <label class="custom-control custom-checkbox display-inline">
                                    <input type="checkbox" class="custom-control-input"><span class="custom-control-indicator"></span><span class="custom-control-description m-0">Task</span>
                                </label>
                            </fieldset>
                        </div>
                    </div>
                </div>
                <div class="fullscreen-search-result mt-2">
                    <div class="row">
                        <div class="col-lg-4">
                            <h3>People</h3>
                            <div class="media"><a href="#" class="media-left"><img src="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/app-assets/images/portrait/small/avatar-s-2.png" alt="Generic placeholder image" class="media-object rounded-circle"></a>
                                <div class="media-body">
                                    <h5 class="media-heading"><a href="#">Karmen Dartez</a></h5>
                                    <p class="mb-0"><span class="tag tag-pill mr-1 tag-danger">JavaScript</span><span class="tag tag-pill mr-1 tag-primary">HTML</span></p>
                                    <p><span class="font-weight-bold">Sr. Developer - </span><a href="mailto:john@example.com">karmen@example.com</a></p>
                                </div>
                            </div>
                            <div class="media"><a href="#" class="media-left"><img src="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/app-assets/images/portrait/small/avatar-s-3.png" alt="Generic placeholder image" class="media-object rounded-circle"></a>
                                <div class="media-body">
                                    <h5 class="media-heading"><a href="#">Scot Loh</a></h5>
                                    <p class="mb-0"><span class="tag tag-pill mr-1 tag-danger">PhotoShop</span><span class="tag tag-pill mr-1 tag-warning">UX</span></p>
                                    <p><span class="font-weight-bold">Sr. UI/UX Desugner - </span><a href="mailto:john@example.com">scot@example.com</a></p>
                                </div>
                            </div>
                            <div class="media"><a href="#" class="media-left"><img src="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/app-assets/images/portrait/small/avatar-s-5.png" alt="Generic placeholder image" class="media-object rounded-circle"></a>
                                <div class="media-body">
                                    <h5 class="media-heading"><a href="#">Kim Willmore</a></h5>
                                    <p class="mb-0"><span class="tag tag-pill mr-1 tag-warning">CSS</span><span class="tag tag-pill mr-1 tag-danger">HTML</span></p>
                                    <p><span class="font-weight-bold">UI Developer - </span><a href="mailto:john@example.com">kim@example.com</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <h3>Project</h3>
                            <div class="media">
                                <div class="media-body">
                                    <h5 class="media-heading"><a href="#">WordPress Template Support</a></h5>
                                    <progress value="25" max="100" class="progress progress-xs progress-success mb-0">25%</progress>
                                    <p class="mb-0">Collicitudin vel metus scelerisque ante  commodo.</p>
                                    <p><span class="tag tag-pill tag-success">In Progress</span><span class="tag tag-default tag-default float-sm-right">25% Completed</span></p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-body">
                                    <h5 class="media-heading"><a href="#">Application UI/UX</a></h5>
                                    <progress value="100" max="100" class="progress progress-xs progress-info mb-0">100%</progress>
                                    <p class="mb-0">Cetus scelerisque ante sollicitudin commodo.</p>
                                    <p><span class="tag tag-pill tag-info">Completed</span><span class="tag tag-default tag-default float-sm-right">100% Completed</span></p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-body">
                                    <h5 class="media-heading"><a href="#">SEO Project</a></h5>
                                    <progress value="65" max="100" class="progress progress-xs progress-warning mb-0">65%</progress>
                                    <p class="mb-0">Notifications scelerisque ante sollicitudin commodo.</p>
                                    <p><span class="tag tag-pill tag-warning">Delayed</span><span class="tag tag-default tag-default float-sm-right">65% Completed</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <h3>Task</h3>
                            <div class="media">
                                <div class="media-body">
                                    <h5 class="media-heading"><a href="#">Create the new layout for menu</a></h5>
                                    <p class="mb-0">Pcelerisque ulla vel metus  ante sollicitudin commodo.</p>
                                    <p><span class="tag tag-pill tag-danger">Open</span><span class="tag tag-default tag-default tag-default tag-icon float-sm-right"><i class="icon-calendar5"></i> 22 January, 16</span></p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-body">
                                    <h5 class="media-heading"><a href="#">Addition features on footer</a></h5>
                                    <p class="mb-0">Tuaiulla vel metus scelerisque ante sollicitudin commodo.</p>
                                    <p><span class="tag tag-pill tag-warning">On hold</span><span class="tag tag-default tag-default tag-default tag-icon float-sm-right"><i class="icon-calendar5"></i> 24 January, 16</span></p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-body">
                                    <h5 class="media-heading"><a href="#">Remove TODO comments</a></h5>
                                    <p class="mb-0">Mulullametu vel  scelerisque ante sollicitudin commodo.</p>
                                    <p><span class="tag tag-pill tag-info">Resolved</span><span class="tag tag-default tag-default tag-default tag-icon float-sm-right"><i class="icon-calendar5"></i> 25 January, 16</span></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div><span class="fullscreen-search-close"></span>
        </div>
        <div class="fullscreen-search-overlay"></div>
        
        <!-- ////////////////////////////////////////////////////////////////////////////-->

<?php }} ?>