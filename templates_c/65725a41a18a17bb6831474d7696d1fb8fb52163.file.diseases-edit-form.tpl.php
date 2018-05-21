<?php /* Smarty version Smarty-3.1.12, created on 2017-12-26 07:40:25
         compiled from "/home/abdullah/public_html/lomixa2/style/lomixa/diseases/diseases-edit-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8575884495a41e0c9dbb496-05829833%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65725a41a18a17bb6831474d7696d1fb8fb52163' => 
    array (
      0 => '/home/abdullah/public_html/lomixa2/style/lomixa/diseases/diseases-edit-form.tpl',
      1 => 1514249733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8575884495a41e0c9dbb496-05829833',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'diseases' => 0,
    'diseases2' => 0,
    'medicalspecial' => 0,
    'medicalspecial2' => 0,
    'var' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a41e0c9dd5fc9_54942875',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a41e0c9dd5fc9_54942875')) {function content_5a41e0c9dd5fc9_54942875($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['diseases2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['diseases2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['diseases']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['diseases2']->key => $_smarty_tpl->tpl_vars['diseases2']->value){
$_smarty_tpl->tpl_vars['diseases2']->_loop = true;
?>

    <tr id="fullrow_<?php echo $_smarty_tpl->tpl_vars['diseases2']->value['diseasesID'];?>
">
        <td id="s_diseasesID_<?php echo $_smarty_tpl->tpl_vars['diseases2']->value['diseasesID'];?>
"><?php echo $_smarty_tpl->tpl_vars['diseases2']->value['diseasesID'];?>
</td>
        <td id="s_diseasesName_<?php echo $_smarty_tpl->tpl_vars['diseases2']->value['diseasesID'];?>
"><?php echo $_smarty_tpl->tpl_vars['diseases2']->value['diseasesName'];?>
</td>
        <td id="s_midicalSpecialID_<?php echo $_smarty_tpl->tpl_vars['diseases2']->value['diseasesID'];?>
">
            <?php if ($_smarty_tpl->tpl_vars['diseases2']->value['medicalSpecialID']==''){?>-------
            <?php }else{ ?>
                <?php  $_smarty_tpl->tpl_vars['medicalspecial2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['medicalspecial2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['medicalspecial']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['medicalspecial2']->key => $_smarty_tpl->tpl_vars['medicalspecial2']->value){
$_smarty_tpl->tpl_vars['medicalspecial2']->_loop = true;
?>
                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['diseases2']->value['medicalSpecialID'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['medicalspecial2']->value['medicalSpecialID']==$_tmp1){?>
                        <?php echo $_smarty_tpl->tpl_vars['medicalspecial2']->value['medicalSpecialName'];?>
   
                    <?php }?>
                <?php } ?>
            <?php }?>
        </td>




        <td>
            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#edit_<?php echo $_smarty_tpl->tpl_vars['diseases2']->value['diseasesID'];?>
">
                <?php echo $_smarty_tpl->tpl_vars['var']->value['DiseasesEdit'];?>
</button>

        </td>
        <td><button id="<?php echo $_smarty_tpl->tpl_vars['diseases2']->value['diseasesID'];?>
" type="button" data-id="<?php echo $_smarty_tpl->tpl_vars['diseases2']->value['diseasesID'];?>
" class="delete_row btn btn-danger"><?php echo $_smarty_tpl->tpl_vars['var']->value['DiseasesDelete'];?>
</button></td>
    </tr>

    <!-- Start Edit Modal -->
    <div class="modal fade" id="edit_<?php echo $_smarty_tpl->tpl_vars['diseases2']->value['diseasesID'];?>
" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form  method="POST" id="editForm">
                        <input type="hidden" id="diseasesID_edit_<?php echo $_smarty_tpl->tpl_vars['diseases2']->value['diseasesID'];?>
" name="diseasesID" value="<?php echo $_smarty_tpl->tpl_vars['diseases2']->value['diseasesID'];?>
">

                        <div class="form-group">
                            <label for="diseasesName"><?php echo $_smarty_tpl->tpl_vars['var']->value['DiseasesName'];?>
</label>
                            <input type="text" name="diseasesName" value="<?php echo $_smarty_tpl->tpl_vars['diseases2']->value['diseasesName'];?>
" id="diseasesName_edit_<?php echo $_smarty_tpl->tpl_vars['diseases2']->value['diseasesID'];?>
" class="form-control" aria-describedby="emailHelp" autocomplet="off">
                        </div>


                        <div class="form-group">
                            <label for="medicalSpecialID"><?php echo $_smarty_tpl->tpl_vars['var']->value['midicalSpecialID'];?>
</label>
                            <select name="medicalSpecialID" id="midicalSpecialID_edit_<?php echo $_smarty_tpl->tpl_vars['diseases2']->value['diseasesID'];?>
">
                                <option value='medicalSpecialID'><?php echo $_smarty_tpl->tpl_vars['var']->value['midicalSpecialID'];?>
</option>
                                <?php  $_smarty_tpl->tpl_vars['medicalspecial2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['medicalspecial2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['medicalspecial']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['medicalspecial2']->key => $_smarty_tpl->tpl_vars['medicalspecial2']->value){
$_smarty_tpl->tpl_vars['medicalspecial2']->_loop = true;
?>
                                    <option value='<?php echo $_smarty_tpl->tpl_vars['medicalspecial2']->value['medicalSpecialID'];?>
'><?php echo $_smarty_tpl->tpl_vars['medicalspecial2']->value['medicalSpecialName'];?>
</option>
                                <?php } ?>

                            </select>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['var']->value['DiseasesClose'];?>
</button>

                            <button type="button"  id="save_button_<?php echo $_smarty_tpl->tpl_vars['diseases2']->value['diseasesID'];?>
" class="saveedit btn btn-primary" data-dismiss="modal" xid="<?php echo $_smarty_tpl->tpl_vars['diseases2']->value['diseasesID'];?>
"><?php echo $_smarty_tpl->tpl_vars['var']->value['DiseasesSave'];?>
</button>


                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Edit Modal -->


<?php } ?><?php }} ?>