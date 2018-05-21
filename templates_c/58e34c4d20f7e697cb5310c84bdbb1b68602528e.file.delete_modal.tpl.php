<?php /* Smarty version Smarty-3.1.12, created on 2018-01-05 09:37:36
         compiled from "/home/test010/public_html/new/style/lomixa/delete_modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5897436805a4f2b408c4520-83348290%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58e34c4d20f7e697cb5310c84bdbb1b68602528e' => 
    array (
      0 => '/home/test010/public_html/new/style/lomixa/delete_modal.tpl',
      1 => 1515131142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5897436805a4f2b408c4520-83348290',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'client' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a4f2b408d4235_70359889',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4f2b408d4235_70359889')) {function content_5a4f2b408d4235_70359889($_smarty_tpl) {?>   <div class="modal fade" id="modal_del_<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
" tabindex="-1" role="dialog" aria-labelledby="modal_del_<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">delete confirmation</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">are you sure you want to delete user : <?php echo $_smarty_tpl->tpl_vars['client']->value['name'];?>
</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <form method="post">
                <input type="hidden" name="action" value='del_client'>
                <input type='hidden' name="id" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
">
            <button class="btn btn-primary" >Delete <?php echo $_smarty_tpl->tpl_vars['client']->value['name'];?>
</button>
            </form>
          </div>
        </div>
      </div>
    </div><?php }} ?>