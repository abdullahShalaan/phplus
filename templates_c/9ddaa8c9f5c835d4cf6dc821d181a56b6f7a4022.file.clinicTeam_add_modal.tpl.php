<?php /* Smarty version Smarty-3.1.12, created on 2017-12-26 07:40:50
         compiled from "/home/abdullah/public_html/lomixa2/style/lomixa/clinic/clinicTeam_add_modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1214553555a41e0e25541d5-16698286%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ddaa8c9f5c835d4cf6dc821d181a56b6f7a4022' => 
    array (
      0 => '/home/abdullah/public_html/lomixa2/style/lomixa/clinic/clinicTeam_add_modal.tpl',
      1 => 1514249733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1214553555a41e0e25541d5-16698286',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'var' => 0,
    'clinic' => 0,
    'clinic2' => 0,
    'clin' => 0,
    'usertypes' => 0,
    'usertype' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a41e0e25610d8_94888892',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a41e0e25610d8_94888892')) {function content_5a41e0e25610d8_94888892($_smarty_tpl) {?><div class="modal fade text-xs-left" id="addclinicModalTeam"  role="dialog" aria-labelledby="myModalLabel34" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h3 class="modal-title" id="myModalLabel34"><?php echo $_smarty_tpl->tpl_vars['var']->value['clinicUserAdd'];?>
</h3>
            </div>

            <div class="modal-body">
                <form method="POST" id="insert-form">
                    <input type="hidden" name="xsub" value="1">

                    <label><?php echo $_smarty_tpl->tpl_vars['var']->value['clinicMobile'];?>
: </label>
                    <div class="form-group position-relative has-icon-left">
                        <input type="text" name="userPhone" id="insUserPhone" placeholder="<?php echo $_smarty_tpl->tpl_vars['var']->value['clinicMobile'];?>
" class="form-control">
                        <div class="form-control-position">
                            <i class="icon-ios-telephone text-muted"></i>
                        </div>
                    </div>

                    <div class="hiddenName">
                        <label><?php echo $_smarty_tpl->tpl_vars['var']->value['clinicUserName'];?>
: </label>
                        <div class="form-group position-relative has-icon-left">
                            <input type="text" name="fullName" id="insFullName" placeholder="<?php echo $_smarty_tpl->tpl_vars['var']->value['clinicUserName'];?>
" class="form-control">
                            <div class="form-control-position">
                                <i class="icon-ios-telephone text-muted"></i>
                            </div>
                        </div>
                    </div>

                    <label><?php echo $_smarty_tpl->tpl_vars['var']->value['clinicsUser'];?>
: </label>
                    <div class="form-group">
                        <select name="placeID" id="insPlaceID" class="select2 form-control"  style="width: 200px">

                            <?php  $_smarty_tpl->tpl_vars['clinic2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['clinic2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['clinic']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['clinic2']->key => $_smarty_tpl->tpl_vars['clinic2']->value){
$_smarty_tpl->tpl_vars['clinic2']->_loop = true;
?>
                                <option  value="<?php echo $_smarty_tpl->tpl_vars['clinic2']->value['placeID'];?>
" <?php if ($_smarty_tpl->tpl_vars['clinic2']->value['placeID']==$_smarty_tpl->tpl_vars['clin']->value['placeID']){?> selected="selected"<?php }?> ><?php echo $_smarty_tpl->tpl_vars['clinic2']->value['placeName'];?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                    <label><?php echo $_smarty_tpl->tpl_vars['var']->value['clinicUserPermision'];?>
: </label>
                    <div class="">
                        <?php  $_smarty_tpl->tpl_vars['usertype'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['usertype']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usertypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['usertype']->key => $_smarty_tpl->tpl_vars['usertype']->value){
$_smarty_tpl->tpl_vars['usertype']->_loop = true;
?>
                            <label class="display-inline-block custom-control custom-checkbox">
                                <input name="typeID" id="insTypeID"  type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['usertype']->value['typeID'];?>
" class="usertypes custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description"><?php echo $_smarty_tpl->tpl_vars['usertype']->value['typeName'];?>
</span>
                            </label>

                        <?php } ?>

                    </div>
                    <div class="modal-footer">
                        <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="<?php echo $_smarty_tpl->tpl_vars['var']->value['clinicUserClose'];?>
">
                        <input id='addUserToTeam' type="button" class="btn btn-outline-primary btn-lg " value="<?php echo $_smarty_tpl->tpl_vars['var']->value['clinicUserAdd'];?>
">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><?php }} ?>