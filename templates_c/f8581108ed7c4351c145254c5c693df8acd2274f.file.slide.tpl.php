<?php /* Smarty version Smarty-3.1.12, created on 2017-12-26 05:04:02
         compiled from "/home/abdullah/public_html/lomixa2/style/lomixa/main/slide.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5295758535a41bc221cb060-58286412%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8581108ed7c4351c145254c5c693df8acd2274f' => 
    array (
      0 => '/home/abdullah/public_html/lomixa2/style/lomixa/main/slide.tpl',
      1 => 1514249733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5295758535a41bc221cb060-58286412',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cats' => 0,
    'cat' => 0,
    'site' => 0,
    'route' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a41bc221d1dd5_26221596',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a41bc221d1dd5_26221596')) {function content_5a41bc221d1dd5_26221596($_smarty_tpl) {?>
<!-- main menu-->
<div class="main-menu menu-fixed menu-dark menu-accordion">
    <!-- main menu header-->
    <div class="main-menu-header">
        <input type="text" placeholder="Search" class="menu-search form-control round"/>
    </div>
    <!-- / main menu header-->
    <!-- main menu content-->
    <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
            <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
                <li class=" nav-item"><a href="#"><i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-title"><?php echo $_smarty_tpl->tpl_vars['cat']->value['routeCategoryName'];?>
</span><span class="tag tag tag-primary tag-pill float-xs-right mr-2"><?php echo $_smarty_tpl->tpl_vars['cat']->value['routes_count'];?>
</span></a>


                    <ul class="menu-content">
                        <?php  $_smarty_tpl->tpl_vars['route'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['route']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat']->value['routes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['route']->key => $_smarty_tpl->tpl_vars['route']->value){
$_smarty_tpl->tpl_vars['route']->_loop = true;
?>
                            
                            <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['site']->value['url'];?>
<?php echo $_smarty_tpl->tpl_vars['route']->value['routeUrl'];?>
/<?php echo $_smarty_tpl->tpl_vars['route']->value['routeMainMethod'];?>
" data-i18n="nav.dash.project" class="menu-item">

                                    <?php echo $_smarty_tpl->tpl_vars['route']->value['routeName'];?>

                                </a>
                            </li>

                            
                        <?php } ?>
                    </ul>

                </li>

            <?php } ?>
        </ul>
    </div>

    <!-- /main menu content-->
    <!-- main menu footer-->
    <!-- include includes/menu-footer-->
    <!-- main menu footer-->
</div>
<!-- / main menu-->

<div class="app-content content container-fluid">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><?php }} ?>