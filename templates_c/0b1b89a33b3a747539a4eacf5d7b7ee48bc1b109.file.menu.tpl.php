<?php /* Smarty version Smarty-3.1.12, created on 2018-01-05 09:37:36
         compiled from "/home/test010/public_html/new/style/lomixa/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15054753935a4f2b40888d74-83324416%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b1b89a33b3a747539a4eacf5d7b7ee48bc1b109' => 
    array (
      0 => '/home/test010/public_html/new/style/lomixa/menu.tpl',
      1 => 1515132161,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15054753935a4f2b40888d74-83324416',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a4f2b40891504_77854905',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4f2b40891504_77854905')) {function content_5a4f2b40891504_77854905($_smarty_tpl) {?>  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Start Bootstrap</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['url'];?>
clients/main">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Clients</span>
          </a>
        </li>
      
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
 
    

        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
<?php }} ?>