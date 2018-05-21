<?php /* Smarty version Smarty-3.1.12, created on 2017-12-26 07:40:43
         compiled from "/home/abdullah/public_html/lomixa2/style/lomixa/clinic/Company_insu_modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8916226605a41e0dbaee8c5-75321725%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '974d5b1737738c8f895a04d96eb0d8cc309e4c95' => 
    array (
      0 => '/home/abdullah/public_html/lomixa2/style/lomixa/clinic/Company_insu_modal.tpl',
      1 => 1514249733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8916226605a41e0dbaee8c5-75321725',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'var' => 0,
    'insurancecompany' => 0,
    'insurancecompany2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a41e0dbaf4497_58536357',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a41e0dbaf4497_58536357')) {function content_5a41e0dbaf4497_58536357($_smarty_tpl) {?>
<div class="modal fade text-xs-left" id="company_insu"  role="dialog" aria-labelledby="myModalLabel34" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h3 class="modal-title" id="myModalLabel34"><?php echo $_smarty_tpl->tpl_vars['var']->value['Add_company_ins'];?>
</h3>
            </div>

            <div class="modal-body">
                <form method="POST">
                    <input type="hidden" name="placeid" id="placeid">
                    <!-- Dual Listbox start -->

                    <div class="form-group">
                        <div class="row">

                            <label class="col-xs-12" for="bootstrap-duallistbox-nonselected-list_" style=""><?php echo $_smarty_tpl->tpl_vars['var']->value['company_ins'];?>
</label>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <select multiple="multiple" size="10" class="duallistbox" name="insuranceCompany" id="insuranc_company">
                                        <?php  $_smarty_tpl->tpl_vars['insurancecompany2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['insurancecompany2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['insurancecompany']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['insurancecompany2']->key => $_smarty_tpl->tpl_vars['insurancecompany2']->value){
$_smarty_tpl->tpl_vars['insurancecompany2']->_loop = true;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['insurancecompany2']->value['insuranceCompID'];?>
"><?php echo $_smarty_tpl->tpl_vars['insurancecompany2']->value['insuranceCompName'];?>
</option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Dual Listbox end -->
                    <div class="modal-footer">
                        <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="<?php echo $_smarty_tpl->tpl_vars['var']->value['clinicUserClose'];?>
">
                        <input id='addcompany_insu' type="button" class="add_company_ins btn btn-outline-primary btn-lg" data-dismiss="modal" value="<?php echo $_smarty_tpl->tpl_vars['var']->value['Add_company_ins'];?>
">

                    </div>
                </form>
            </div>
        </div>
    </div>
</div><?php }} ?>