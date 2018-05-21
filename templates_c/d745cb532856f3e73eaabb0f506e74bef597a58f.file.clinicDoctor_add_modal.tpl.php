<?php /* Smarty version Smarty-3.1.12, created on 2017-12-26 07:40:50
         compiled from "/home/abdullah/public_html/lomixa2/style/lomixa/clinic/clinicDoctor_add_modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3335174005a41e0e2530845-55448270%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd745cb532856f3e73eaabb0f506e74bef597a58f' => 
    array (
      0 => '/home/abdullah/public_html/lomixa2/style/lomixa/clinic/clinicDoctor_add_modal.tpl',
      1 => 1514249733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3335174005a41e0e2530845-55448270',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'team' => 0,
    'var' => 0,
    'team2' => 0,
    'medicalspecial' => 0,
    'medicalspecial2' => 0,
    'doctorscientificdegree' => 0,
    'doctorscientificdegree2' => 0,
    'medicalspecial3' => 0,
    'dismed' => 0,
    'dismed2' => 0,
    'diseases' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a41e0e2552114_71846281',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a41e0e2552114_71846281')) {function content_5a41e0e2552114_71846281($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['team2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['team2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['team']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['team2']->key => $_smarty_tpl->tpl_vars['team2']->value){
$_smarty_tpl->tpl_vars['team2']->_loop = true;
?>

    <div class="modal fade text-xs-left" id="clinicModalDoctorManage"  role="dialog" aria-labelledby="myModalLabel34" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h3 class="modal-title" id="myModalLabel34"><?php echo $_smarty_tpl->tpl_vars['var']->value['clinicDoctorAdd'];?>
</h3>
                </div>

                <div class="modal-body">
                    <form method="POST" id="insert-form">
                        <input type="hidden" name="docDataID" id="docDataID">
                        <input type="hidden" name="docID" id="docID">
                        <div style="display: block">
                            <label style="width: 25%"><?php echo $_smarty_tpl->tpl_vars['var']->value['availForVisit'];?>
 </label>
                            <input style="width: 50%" type="checkbox" class="switchery" data-size="xs" name="availForVisit" id="availForVisit" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['team2']->value['data']['availForVisit'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1=="avail"){?>checked<?php }?>/>
                        </div>
                        <div style="display: block">
                            <label style="width: 25%"><?php echo $_smarty_tpl->tpl_vars['var']->value['Availableforconsultation'];?>
 </label>

                            <input style="width: 50%" type="checkbox"  class="switchery" data-size="xs" name="availForCounseling" id="availForCounseling" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['team2']->value['data']['availForCounseling'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2=="avail"){?>checked<?php }?>/>
                        </div>


                        <label><?php echo $_smarty_tpl->tpl_vars['var']->value['mainMajor'];?>
 </label>
                        <div class="form-group">
                            <select name="mainMajor" id="mainMajor" class="select2 form-control"  style="width: 200px">

                                <?php  $_smarty_tpl->tpl_vars['medicalspecial2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['medicalspecial2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['medicalspecial']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['medicalspecial2']->key => $_smarty_tpl->tpl_vars['medicalspecial2']->value){
$_smarty_tpl->tpl_vars['medicalspecial2']->_loop = true;
?>
                                    <option  value="<?php echo $_smarty_tpl->tpl_vars['medicalspecial2']->value['medicalSpecialID'];?>
"><?php echo $_smarty_tpl->tpl_vars['medicalspecial2']->value['medicalSpecialName'];?>
</option>
                                <?php } ?>
                            </select>
                        </div>

                        <label><?php echo $_smarty_tpl->tpl_vars['var']->value['scienseDegree'];?>
 </label>
                        <div class="form-group">
                            <select name="scienseDegree" id="scienseDegree" class="select2 form-control"  style="width: 200px">

                                <?php  $_smarty_tpl->tpl_vars['doctorscientificdegree2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['doctorscientificdegree2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['doctorscientificdegree']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['doctorscientificdegree2']->key => $_smarty_tpl->tpl_vars['doctorscientificdegree2']->value){
$_smarty_tpl->tpl_vars['doctorscientificdegree2']->_loop = true;
?>
                                    <option  value="<?php echo $_smarty_tpl->tpl_vars['doctorscientificdegree2']->value['doctorScientificDegreeID'];?>
"><?php echo $_smarty_tpl->tpl_vars['doctorscientificdegree2']->value['doctorScientificDegreeName'];?>
</option>
                                <?php } ?>
                            </select>
                        </div>

                        <label><?php echo $_smarty_tpl->tpl_vars['var']->value['otherspecialties'];?>
: </label>
                        <div class="form-group">
                            <select class="select2 form-control special" multiple="multiple" name="doctorspecial" id="doctorspecial" style="width: 300px">
                                <optgroup label="<?php echo $_smarty_tpl->tpl_vars['var']->value['otherspecialties'];?>
">
                                    <?php  $_smarty_tpl->tpl_vars['medicalspecial3'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['medicalspecial3']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['medicalspecial']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['medicalspecial3']->key => $_smarty_tpl->tpl_vars['medicalspecial3']->value){
$_smarty_tpl->tpl_vars['medicalspecial3']->_loop = true;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['medicalspecial3']->value['medicalSpecialID'];?>
"><?php echo $_smarty_tpl->tpl_vars['medicalspecial3']->value['medicalSpecialName'];?>
</option>
                                    <?php } ?>
                                </optgroup>

                            </select>
                        </div>

                        <label><?php echo $_smarty_tpl->tpl_vars['var']->value['disesasthreatdoc'];?>
: </label>
                        <div class="form-group">
                            <select class="select2 form-control" multiple="multiple" name="disesasthreatdoc" id="disesasthreatdoc" style="width: 300px">

                                <?php  $_smarty_tpl->tpl_vars['dismed2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dismed2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dismed']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dismed2']->key => $_smarty_tpl->tpl_vars['dismed2']->value){
$_smarty_tpl->tpl_vars['dismed2']->_loop = true;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['dismed2']->value['medical_count']>=1){?>
                                        <optgroup label="<?php echo $_smarty_tpl->tpl_vars['dismed2']->value['medicalSpecialName'];?>
">
                                            <?php  $_smarty_tpl->tpl_vars['diseases'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['diseases']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dismed2']->value['diseases']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['diseases']->key => $_smarty_tpl->tpl_vars['diseases']->value){
$_smarty_tpl->tpl_vars['diseases']->_loop = true;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['diseases']->value['diseasesID'];?>
"><?php echo $_smarty_tpl->tpl_vars['diseases']->value['diseasesName'];?>
</option>
                                            <?php } ?>
                                        </optgroup>
                                    <?php }?>
                                <?php } ?>

                            </select>
                        </div>
                        <div class="modal-footer">
                            <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="<?php echo $_smarty_tpl->tpl_vars['var']->value['clinicUserClose'];?>
">
                            <input id='addDataToDoctor' type="button" class="addDoctorData btn btn-outline-primary btn-lg " data-dismiss="modal" value="<?php echo $_smarty_tpl->tpl_vars['var']->value['clinicDoctorAdd'];?>
">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php } ?><?php }} ?>