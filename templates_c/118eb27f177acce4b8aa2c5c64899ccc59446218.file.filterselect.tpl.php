<?php /* Smarty version Smarty-3.1.12, created on 2017-12-26 07:40:50
         compiled from "/home/abdullah/public_html/lomixa2/style/lomixa/clinic/filterselect.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4153409105a41e0e2528c38-48654890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '118eb27f177acce4b8aa2c5c64899ccc59446218' => 
    array (
      0 => '/home/abdullah/public_html/lomixa2/style/lomixa/clinic/filterselect.tpl',
      1 => 1514249733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4153409105a41e0e2528c38-48654890',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'var' => 0,
    'clinic' => 0,
    'clinic3' => 0,
    'clin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a41e0e252f7a9_45711028',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a41e0e252f7a9_45711028')) {function content_5a41e0e252f7a9_45711028($_smarty_tpl) {?>                            <select class="selectBox clinicFilter">
                                        <option value="0" disabled="disabled"><?php echo $_smarty_tpl->tpl_vars['var']->value['clinicFilter'];?>
</option>
                                        <?php  $_smarty_tpl->tpl_vars['clinic3'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['clinic3']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['clinic']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['clinic3']->key => $_smarty_tpl->tpl_vars['clinic3']->value){
$_smarty_tpl->tpl_vars['clinic3']->_loop = true;
?>
                                            <option  value="<?php echo $_smarty_tpl->tpl_vars['clinic3']->value['placeID'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['clin']->value['placeID'])){?><?php if ($_smarty_tpl->tpl_vars['clinic3']->value['placeID']==$_smarty_tpl->tpl_vars['clin']->value['placeID']){?> selected="selected"<?php }?><?php }?> ><?php echo $_smarty_tpl->tpl_vars['clinic3']->value['placeName'];?>
</option>
                                        <?php } ?>

                                    </select><?php }} ?>