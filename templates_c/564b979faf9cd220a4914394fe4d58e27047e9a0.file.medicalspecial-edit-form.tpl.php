<?php /* Smarty version Smarty-3.1.12, created on 2017-12-26 11:40:31
         compiled from "/home/abdullah/public_html/lomixa2/style/lomixa/medical_special/medicalspecial-edit-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7235893335a42190f67c437-70814608%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '564b979faf9cd220a4914394fe4d58e27047e9a0' => 
    array (
      0 => '/home/abdullah/public_html/lomixa2/style/lomixa/medical_special/medicalspecial-edit-form.tpl',
      1 => 1514249733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7235893335a42190f67c437-70814608',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'medicalspecial' => 0,
    'medicalspecial2' => 0,
    'file' => 0,
    'file2' => 0,
    'var' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a42190f694e27_69510480',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a42190f694e27_69510480')) {function content_5a42190f694e27_69510480($_smarty_tpl) {?>

<?php  $_smarty_tpl->tpl_vars['medicalspecial2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['medicalspecial2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['medicalspecial']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['medicalspecial2']->key => $_smarty_tpl->tpl_vars['medicalspecial2']->value){
$_smarty_tpl->tpl_vars['medicalspecial2']->_loop = true;
?>

    <tr id="fullrow_<?php echo $_smarty_tpl->tpl_vars['medicalspecial2']->value['medicalSpecialID'];?>
">
        <td><?php echo $_smarty_tpl->tpl_vars['medicalspecial2']->value['medicalSpecialID'];?>
</td>
        <td>
            <?php if ($_smarty_tpl->tpl_vars['medicalspecial2']->value['medicalSpecialImg']==''){?>-------
            <?php }else{ ?>
                <?php  $_smarty_tpl->tpl_vars['file2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['file']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file2']->key => $_smarty_tpl->tpl_vars['file2']->value){
$_smarty_tpl->tpl_vars['file2']->_loop = true;
?>
                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['medicalspecial2']->value['medicalSpecialImg'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['file2']->value['fileID']==$_tmp1){?>
                        <img id="img" src="<?php echo $_smarty_tpl->tpl_vars['file2']->value['placeOnServer'];?>
" height="100" width="100" class="img-thumbnail" />  
                    <?php }?>
                <?php } ?>
            <?php }?>
        </td>
        <td><?php echo $_smarty_tpl->tpl_vars['medicalspecial2']->value['medicalSpecialName'];?>
</td>



        <td>
            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#edit_<?php echo $_smarty_tpl->tpl_vars['medicalspecial2']->value['medicalSpecialID'];?>
">
                <?php echo $_smarty_tpl->tpl_vars['var']->value['MedicalEdit'];?>
</button>

        </td>
        <td><button id="<?php echo $_smarty_tpl->tpl_vars['medicalspecial2']->value['medicalSpecialID'];?>
" type="button" data-id="<?php echo $_smarty_tpl->tpl_vars['medicalspecial2']->value['medicalSpecialID'];?>
" class="delete_row btn btn-danger"><?php echo $_smarty_tpl->tpl_vars['var']->value['MedicalDelete'];?>
</button></td>
    </tr>

    <!-- Start Edit Modal -->
    <div class="modal fade" id="edit_<?php echo $_smarty_tpl->tpl_vars['medicalspecial2']->value['medicalSpecialID'];?>
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

                    <form  method="POST" id="editForm" method="POST" enctype="multipart/form-data">
                        <input type="hidden" id="medicalSpecialID_edit" name="medicalSpecialID" value="<?php echo $_smarty_tpl->tpl_vars['medicalspecial2']->value['medicalSpecialID'];?>
">

                        

                        <div class="form-group row">
                            <label class="col-md-3 label-control"><?php echo $_smarty_tpl->tpl_vars['var']->value['MedicalSpecialImg'];?>
</label>

                            <div class="fileinput fileinput-new col-md-9" data-provides="fileinput">
                                <input type="hidden" value="" name="">
                                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                    <img style="height: 100%; width: 100%; display: block;" src="<?php  $_smarty_tpl->tpl_vars['file2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['file']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file2']->key => $_smarty_tpl->tpl_vars['file2']->value){
$_smarty_tpl->tpl_vars['file2']->_loop = true;
?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['medicalspecial2']->value['medicalSpecialImg'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['file2']->value['fileID']==$_tmp2){?><?php echo $_smarty_tpl->tpl_vars['file2']->value['placeOnServer'];?>
<?php }?><?php } ?>">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 12px;"></div>
                                <div>
                                    <span class="btn btn-primary btn-embossed btn-file">
                                        <span class="fileinput-new"><span class="fui-image"></span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['var']->value['Selectimage'];?>
</span>
                                        <span class="fileinput-exists"><span class="fui-gear"></span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['var']->value['Change'];?>
</span>
                                        <input type="file" id="medicalSpecialImg_edit"  name="medicalSpecialImg" value="<?php  $_smarty_tpl->tpl_vars['file2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['file']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file2']->key => $_smarty_tpl->tpl_vars['file2']->value){
$_smarty_tpl->tpl_vars['file2']->_loop = true;
?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['medicalspecial2']->value['medicalSpecialImg'];?>
<?php $_tmp3=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['file2']->value['fileID']==$_tmp3){?><?php echo $_smarty_tpl->tpl_vars['file2']->value['fileID'];?>
<?php }?><?php } ?>">
                                    </span>
                                    <a href="#" class="btn btn-primary btn-embossed fileinput-exists" data-dismiss="fileinput"><span class="fui-trash"></span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['var']->value['Remove'];?>
</a>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="medicalSpecialName"><?php echo $_smarty_tpl->tpl_vars['var']->value['MedicalSpecialName'];?>
</label>
                            <input type="text" name="medicalSpecialName" value="<?php echo $_smarty_tpl->tpl_vars['medicalspecial2']->value['medicalSpecialName'];?>
" id="medicalSpecialName_edit" class="form-control" aria-describedby="emailHelp" autocomplet="off">
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['var']->value['Close'];?>
</button>
                            <input type="submit" id="save" class="btn btn-primary" value=<?php echo $_smarty_tpl->tpl_vars['var']->value['MedicalSpecialSavechanges'];?>
>


                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Edit Modal -->


<?php } ?><?php }} ?>