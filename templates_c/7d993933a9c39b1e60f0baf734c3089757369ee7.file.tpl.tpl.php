<?php /* Smarty version Smarty-3.1.12, created on 2017-12-26 05:04:02
         compiled from "/home/abdullah/public_html/lomixa2/style/lomixa/main/tpl.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12750264275a41bc221446e9-43291123%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d993933a9c39b1e60f0baf734c3089757369ee7' => 
    array (
      0 => '/home/abdullah/public_html/lomixa2/style/lomixa/main/tpl.tpl',
      1 => 1514249733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12750264275a41bc221446e9-43291123',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'filex' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a41bc2216fff1_72438581',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a41bc2216fff1_72438581')) {function content_5a41bc2216fff1_72438581($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('main/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('main/slide.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['filex']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('main/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>