<?php /* Smarty version Smarty-3.1.12, created on 2017-12-26 03:56:40
         compiled from "/home/abdullah/public_html/lomixa2/style/lomixa/user/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10694040945a41ac58e7a3e2-80849231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1aaea8acd1842dcb81af9e6cf5760030fd3b60a1' => 
    array (
      0 => '/home/abdullah/public_html/lomixa2/style/lomixa/user/login.tpl',
      1 => 1514249733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10694040945a41ac58e7a3e2-80849231',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'direction' => 0,
    'var' => 0,
    'site' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a41ac58ecfb33_38373502',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a41ac58ecfb33_38373502')) {function content_5a41ac58ecfb33_38373502($_smarty_tpl) {?><!DOCTYPE html>
<html class="loading" dir="<?php echo $_smarty_tpl->tpl_vars['direction']->value;?>
">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="PIXINVENT">
        <title><?php echo $_smarty_tpl->tpl_vars['var']->value['title'];?>
</title>
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
/app-assets/vendors/css/forms/icheck/icheck.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/app-assets/vendors/css/forms/icheck/custom.css">

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
        <!-- END ROBUST CSS-->
        <!-- BEGIN Page Level CSS-->
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/app-assets/css<?php if ($_smarty_tpl->tpl_vars['direction']->value=='rtl'){?>-rtl<?php }else{ ?><?php }?>/core/menu/menu-types/vertical-overlay-menu.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/app-assets/css<?php if ($_smarty_tpl->tpl_vars['direction']->value=='rtl'){?>-rtl<?php }else{ ?><?php }?>/core/menu/menu-types/vertical-overlay-menu.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
app-assets/css-rtl/pages/login-register.min.css">
        <!-- BEGIN Custom CSS-->
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/css/custom1.css">
        <!-- END Custom CSS-->
    </head>

    <body data-open="click" data-menu="vertical-overlay-menu" data-col="1-column" class="vertical-layout vertical-overlay-menu 1-column  blank-page blank-page">
        <!-- ////////////////////////////////////////////////////////////////////////////-->
        <div class="app-content content container-fluid">
            <div class="content-wrapper">
                <div class="content-header row">
                </div>
                <div class="content-body"><section class="flexbox-container">
                        <div class="col-md-4 offset-md-4 col-xs-10 offset-xs-1 box-shadow-3 p-0">
                            <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                                <div class="card-header no-border">
                                    <div class="card-title text-xs-center">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
app-assets/images/logo/robust-logo-dark.png" alt="branding logo">
                                    </div>
                                    <div class="login_container">
                                        <h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2"><span><?php echo $_smarty_tpl->tpl_vars['var']->value['login_use'];?>
 </span></h6>
                                    </div>
                                </div>
                                <div class="card-body collapse in">
                                    <div class="login_container">
                                        <div class="text-xs-center">
                                            <a id='facebook-login' href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook"><span class="icon-facebook3"></span></a>
                                            <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-google"><span class="icon-google"></span></a>

                                        </div>
                                    </div>
                                    <!-- Start Alert Message -->

                                    <div class="text-xs-center">
                                        <div id="alert_loginsucc" style="display: none;" class="alert alert-success  fade in mb-2" role="alert">

                                        </div>
                                        <div id="alert_loginNameFailed" style="display: none;" class="alert alert-danger fade in mb-2" role="alert">

                                        </div>
                                    </div>
                                    <!-- End Alert Measage -->
                                    <div class="login_container">
                                        <p class="card-subtitle line-on-side text-muted text-xs-center font-small-3 mx-2 my-1"><span><?php echo $_smarty_tpl->tpl_vars['var']->value['oruseaccount'];?>
 </span></p>
                                        <div class="card-block">
                                            <form class="form-horizontal"  novalidate>
                                                <input type="hidden" id="old_page" value="/">
                                                <fieldset class="form-group position-relative has-icon-left">
                                                    <input type="text" class="form-control" id="user-name" placeholder="<?php echo $_smarty_tpl->tpl_vars['var']->value['username'];?>
" required>
                                                    <div class="form-control-position">
                                                        <i class="icon-head"></i>
                                                    </div>
                                                </fieldset>
                                                <fieldset class="form-group position-relative has-icon-left">
                                                    <input type="password" class="form-control" id="user-password" placeholder="<?php echo $_smarty_tpl->tpl_vars['var']->value['password'];?>
" required>
                                                    <div class="form-control-position">
                                                        <i class="icon-key3"></i>
                                                    </div>
                                                </fieldset>
                                                <fieldset class="form-group row">
                                                    <div class="col-md-6 col-xs-12 text-xs-center">
                                                        <fieldset>
                                                            <input type="checkbox" id="remember-me" class="chk-remember" >
                                                            <label for="remember-me"><?php echo $_smarty_tpl->tpl_vars['var']->value['rememberme'];?>
</label>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-md-6 col-xs-12 float-sm-left text-xs-center"><a id="recoverpasswordbutton" href="manageusers/forgetpassword" class="card-link"><?php echo $_smarty_tpl->tpl_vars['var']->value['forgetpassword'];?>
</a></div>
                                                </fieldset> </form>

                                            

                                            <button id="lomixa-login" class="btn btn-outline-primary btn-block"><i class="icon-unlock2"></i><?php echo $_smarty_tpl->tpl_vars['var']->value['login'];?>
</button>

                                        </div>
                                        <div id="alert_recover_not" class="alert alert-danger notmatch hidden">

                                            <?php echo $_smarty_tpl->tpl_vars['var']->value['notfoundindatabase'];?>
</div>
                                            
                                             <div id="alert_recover_not" class="alert alert-danger 6char hidden">

                                            <?php echo $_smarty_tpl->tpl_vars['var']->value['passwordmorethan6letter'];?>
</div>
                       
                                        <div id="alert_recover_ok" class="alert alert-danger errornumber hidden">

                                            <?php echo $_smarty_tpl->tpl_vars['var']->value['invalidphone'];?>
 </div>
                                        <div id="alert_recover_ok" class="alert alert-success valid hidden">

                                            <?php echo $_smarty_tpl->tpl_vars['var']->value['validnumber'];?>
</div>
                                        <div id="alert_recover_ok" class="alert alert-success codevalid hidden">

                                            <?php echo $_smarty_tpl->tpl_vars['var']->value['codevalid'];?>
</div>
                                        <div id="alert_recover" class="alert alert-success  incorrect hidden">

                                            <?php echo $_smarty_tpl->tpl_vars['var']->value['codenotcorrect'];?>
</div>
                                        <div id="alert_recover" class="alert alert-success  changed hidden">

                                            <?php echo $_smarty_tpl->tpl_vars['var']->value['passwordchanged'];?>
</div>
                                        <div id="alert_recover" class="alert alert-success  notchanged hidden">

                                            type new password correctely</div>
                                         <div id="alert_recover_ok" class="alert alert-success presend hidden">

                                            <?php echo $_smarty_tpl->tpl_vars['var']->value['codesendagain'];?>
</div>
                                            
                                            <div id="alert_recover_ok" class="alert alert-success sendsucess hidden">

                                            <?php echo $_smarty_tpl->tpl_vars['var']->value['sendsucessfully'];?>
</div>
                                        
                                       
                                        
                                        
                                        
                                        
                                        <div id="recoverpassword" class=" card-body collapse in">

                                            
                                            <div class="card-block">
                                                <fieldset class="form-group position-relative has-icon-left">
                                                    <input type="mobile"  maxlength="11" class="form-control form-control-lg input-lg phone" id="userphone" placeholder="<?php echo $_smarty_tpl->tpl_vars['var']->value['YourPhone'];?>
" required>
                                                    <div class="form-control-position">
                                                        <i class="icon-phone"></i>
                                                    </div>
                                                </fieldset>
                                                <button id="forgetPass" type="button" phone="" class="btn btn-primary btn-lg btn-block typephone"><i class="icon-lock4"></i><?php echo $_smarty_tpl->tpl_vars['var']->value['sendcode'];?>
</button>

                                            </div>


                                        </div>

                                        

                                        <div id="changepassword" class="card-body collapse in">
                                            <div class="card-block">
                                                <fieldset class="form-group position-relative has-icon-left">

                                                    <input type="password" class="form-control form-control-lg input-lg phone newpassword" id="new" placeholder="<?php echo $_smarty_tpl->tpl_vars['var']->value['newpassword'];?>
"required>
                                                    <input type="password" class="form-control form-control-lg input-lg phone confirmpassword" id="confirm" placeholder="<?php echo $_smarty_tpl->tpl_vars['var']->value['confirmpassword'];?>
"required>
                                                    <div class="form-control-position">
                                                        <i class="icon-phone"></i>
                                                    </div>
                                                </fieldset>
                                                <button id="editpassword" type="button" class="btn btn-primary btn-lg btn-block editpassword"><i class="icon-lock4"></i> <?php echo $_smarty_tpl->tpl_vars['var']->value['changePassword'];?>
</button>

                                            </div>
                                        </div>            
                                        <div id="resetpassword" class=" card-body collapse in">
                                            <div class="card-block">
                                                <fieldset class="form-group position-relative has-icon-left">
                                                    <input type="hidden" id="loginphone" value="" />
                                                    <input type="text" class="code text-sm-left  form-control form-control-lg input-lg phone" id="code" placeholder="<?php echo $_smarty_tpl->tpl_vars['var']->value['yourcode'];?>
" required>
                                                    <div class="form-control-position">
                                                        <i class="icon-lock"></i>
                                                    </div>
                                                </fieldset>
                                                <div class="row">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-md-4"> <button id="resetpass"  type="button" style="width:120px;height:60px;margin-bottom: 10px;font-size: .7rem;font-weight: bold;" class="btn btn-primary btn-md btn-block float-left"><?php echo $_smarty_tpl->tpl_vars['var']->value['reset'];?>
</button></div>  
                                                        <div class="col-xs-12 col-md-4">
                                                            <button id="changenumber" type="button" style="width:120px;height:60px;margin-bottom: 10px;font-size: .7rem;font-weight: bold;"  class="btn btn-primary btn-md btn-block float-left"><i class="icon-lock4 "></i><?php echo $_smarty_tpl->tpl_vars['var']->value['changenumber'];?>
</button>
                                                        </div>
                                                        <div class="col-xs-12 col-md-4">
                                                            <button id="sendcode" style="width:120px;height:60px;font-size: .7rem;font-weight: bold;"  type="button"  class="btn btn-primary btn-md btn-block float-left"><i class="icon-lock4 "></i><?php echo $_smarty_tpl->tpl_vars['var']->value['sendcode'];?>
</button>
                                                        </div>
                                                    </div>

                                                    


                                                </div>
                                            </div>





                                            <p class="card-subtitle line-on-side text-muted text-xs-center font-small-3 mx-2 my-1"><span><?php echo $_smarty_tpl->tpl_vars['var']->value['newusermessage'];?>
</span></p>
                                            <div class="card-block">
                                                <a href="/register" class="btn btn-outline-primary btn-block"><i class="icon-head"></i><?php echo $_smarty_tpl->tpl_vars['var']->value['register'];?>
</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                    </section>

                </div>
            </div>
        </div>
        
        <!-- ////////////////////////////////////////////////////////////////////////////-->

        <!-- BEGIN VENDOR JS-->
        <!-- build:js app-assets/js/vendors.min.js-->
        <script src="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
app-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
app-assets/vendors/js/ui/tether.min.js" type="text/javascript"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
app-assets/js/core/libraries/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
app-assets/vendors/js/ui/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
app-assets/vendors/js/ui/unison.min.js" type="text/javascript"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
app-assets/vendors/js/ui/blockUI.min.js" type="text/javascript"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
app-assets/vendors/js/ui/jquery.matchHeight-min.js" type="text/javascript"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
app-assets/vendors/js/ui/jquery-sliding-menu.js" type="text/javascript"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
app-assets/vendors/js/sliders/slick/slick.min.js" type="text/javascript"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
app-assets/vendors/js/ui/screenfull.min.js" type="text/javascript"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
app-assets/vendors/js/extensions/pace.min.js" type="text/javascript"></script>
        <!-- /build-->
        <!-- BEGIN VENDOR JS-->
        <!-- BEGIN PAGE VENDOR JS-->
        <script src="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
app-assets/vendors/js/forms/validation/jqBootstrapValidation.js" type="text/javascript"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
app-assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
        <!-- END PAGE VENDOR JS-->
        <!-- BEGIN ROBUST JS-->
        <!-- build:js app-assets/js/app.min.js-->
        <script src="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
app-assets/js/core/app-menu.min.js" type="text/javascript"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
app-assets/js/core/app.min.js" type="text/javascript"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
app-assets/js/scripts/ui/fullscreenSearch.min.js" type="text/javascript"></script>
        <!-- /build-->
        <!-- END ROBUST JS-->
        <!-- BEGIN PAGE LEVEL JS-->
        

            <script>

                window.fbAsyncInit = function () {
                    FB.init({
                        appId: '357536414683771',
                        cookie: true,
                        xfbml: true,
                        version: 'v2.10'
                    });
                    FB.AppEvents.logPageView();
                };

                (function (d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) {
                        return;
                    }
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "//connect.facebook.net/en_US/sdk.js";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));

                function checkLoginState() {
                    FB.getLoginStatus(function (response) {
                        response.status;
                    });
                }

            </script>      
        

        <script src="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/js/login.js" type="text/javascript"></script>


        <script src="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/user/facebook.js" type="text/javascript"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
/manageusers/forgetpassword.js" type="text/javascript"></script>

        <div id="confirm_reset_modal" class="modal" tabindex="-1" role="dialog" style="    top: 33%;"> 
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    
                    <div class="modal-body centerme">
                        <p style="font-size:17px;"><?php echo $_smarty_tpl->tpl_vars['var']->value['areyousure'];?>
</p>
                        <h2>    <i class="icon-mobile"></i> <span style="color: #967adc;    font-weight: bold;    font-size: 32px;" id="mobile_number_span"></span></h2>

                    </div>
                    <div class="modal-footer centerme">
                        <button data-dismiss="modal" id="reset_password_for_mobile" style="padding:9px 14px;" type="button" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['var']->value['confirm'];?>
</button>
                        <button  style="padding:9px 14px;" type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['var']->value['back'];?>
</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php }} ?>