<?php /* Smarty version Smarty-3.1.12, created on 2018-01-05 09:37:36
         compiled from "/home/test010/public_html/new/style/lomixa/edit_modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15609724735a4f2b40893571-34880382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c03b9e2b4648dd2789026069dbf1939b4a27444' => 
    array (
      0 => '/home/test010/public_html/new/style/lomixa/edit_modal.tpl',
      1 => 1515130522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15609724735a4f2b40893571-34880382',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'client' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a4f2b408c1e31_60616792',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4f2b408c1e31_60616792')) {function content_5a4f2b408c1e31_60616792($_smarty_tpl) {?>


<div class="modal fade" id='editmodal_<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
' tabindex="-1" role="dialog" aria-labelledby="edit_modal_<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div style='padding:30px;' class="modal-content">
  <form method='post'>
      <input type="hidden" name='action' value="edit_client">
      <input type="hidden" name='id' value="<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
">
        <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">name</label>
    <div class="col-sm-10">
        <input required="required" type="text" name="name" class="form-control" id="inputEmail3" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['name'];?>
">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input name="email" type="email" class="form-control" id="inputEmail3" placeholder="Email" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['email'];?>
">
    </div>
  </div>
              <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">serial_no</label>
    <div class="col-sm-10">
        <input type="text" name="serial_no" class="form-control" id="inputEmail3" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['serial_no'];?>
">
    </div>
  </div>
              <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">license_no</label>
    <div class="col-sm-10">
        <input type="text" name="license_no" class="form-control" id="inputEmail3" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['license_no'];?>
">
    </div>
  </div>
              <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">validations_no</label>
    <div class="col-sm-10">
        <input type="text" name="validations_no" class="form-control" id="inputEmail3" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['validations_no'];?>
">
    </div>
  </div>        <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">login</label>
    <div class="col-sm-10">
        <input type="text" name="login" class="form-control" id="inputEmail3" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['login'];?>
">
    </div>
  </div>        <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">password</label>
    <div class="col-sm-10">
        <input type="text" name="password" class="form-control" id="inputEmail3" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['password'];?>
">
    </div>
  </div>        <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">secure</label>
    <div class="col-sm-10">
        <input type="text" name="secure" class="form-control" id="inputEmail3" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['secure'];?>
">
    </div>
  </div>
          <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">code</label>
    <div class="col-sm-10">
        <input type="text" name="code" class="form-control" id="inputEmail3" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['code'];?>
">
    </div>
  </div>
          <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">mac</label>
    <div class="col-sm-10">
        <input type="text" name="mac" class="form-control" id="inputEmail3" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['mac'];?>
">
    </div>
  </div>        <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">exp</label>
    <div class="col-sm-10">
        <input type="text" name="exp" class="form-control" id="inputEmail3" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['exp'];?>
">
    </div>
  </div>        <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">status</label>
    <div class="col-sm-10">
        <input type="text" name="status" class="form-control" id="inputEmail3" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['status'];?>
">
    </div>
  </div>
 
  
  
  
  
      

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn-lg btn btn-danger">SAVE</button>
    </div>
  </div>
</form>
    </div>
  </div>
</div><?php }} ?>