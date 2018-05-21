<?php /* Smarty version Smarty-3.1.12, created on 2017-12-26 07:40:43
         compiled from "/home/abdullah/public_html/lomixa2/style/lomixa/clinic/working_hours_modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18789335115a41e0dbaaefe4-11619698%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1f3499cd907cabd9b28b23ffc5f6e79ab7845b7' => 
    array (
      0 => '/home/abdullah/public_html/lomixa2/style/lomixa/clinic/working_hours_modal.tpl',
      1 => 1514249733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18789335115a41e0dbaaefe4-11619698',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'clinic2' => 0,
    'var' => 0,
    'workingday' => 0,
    'itemArray' => 0,
    'workingTimeFrom' => 0,
    'workingTimeTo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a41e0dbaecb94_63837178',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a41e0dbaecb94_63837178')) {function content_5a41e0dbaecb94_63837178($_smarty_tpl) {?>

<!-- Start Working Hours Model -->
<?php $_smarty_tpl->tpl_vars['itemArray'] = new Smarty_variable(json_decode($_smarty_tpl->tpl_vars['clinic2']->value['dayStatus'],true), null, 0);?>
<?php $_smarty_tpl->tpl_vars['workingTimeFrom'] = new Smarty_variable(json_decode($_smarty_tpl->tpl_vars['clinic2']->value['timeFrom'],true), null, 0);?>
<?php $_smarty_tpl->tpl_vars['workingTimeTo'] = new Smarty_variable(json_decode($_smarty_tpl->tpl_vars['clinic2']->value['timeTo'],true), null, 0);?>
<?php $_smarty_tpl->tpl_vars['workingday'] = new Smarty_variable(json_decode($_smarty_tpl->tpl_vars['clinic2']->value['day'],true), null, 0);?>


<div class="modal fade" id="working_hours_<?php echo $_smarty_tpl->tpl_vars['clinic2']->value['placeID'];?>
" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h3 class="modal-title" id="myModalLabel34"><?php echo $_smarty_tpl->tpl_vars['var']->value['workingHours'];?>
</h3>
            </div>
            <form method="POST">
                <input type="hidden"  name="placeID" id="placeID" value="<?php echo $_smarty_tpl->tpl_vars['clinic2']->value['placeID'];?>
">

                <div class="modal-body workStyle">

                    <div class="form-group row">
                        <label class="col-md-2 label-control"><?php echo $_smarty_tpl->tpl_vars['var']->value['sat'];?>

                            <input type="hidden" name="saturday" id="saturday" value="<?php echo $_smarty_tpl->tpl_vars['workingday']->value[0];?>
">

                            <input type="checkbox" class="switchery" name="satStatus" id="satStatus" data-size="xs" <?php if ($_smarty_tpl->tpl_vars['itemArray']->value[0]=='on'){?>checked='checked'<?php }?> />
                        </label>

                        <div class="col-md-5" id="satFromStatus">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span><?php echo $_smarty_tpl->tpl_vars['var']->value['from'];?>
</span>
                                </span>
                                    <input type='text' name="satTimeFrom" id="satTimeFrom" class="form-control pickatime" value="<?php echo $_smarty_tpl->tpl_vars['workingTimeFrom']->value[0];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['var']->value['SelectTime'];?>
" />
                            </div>
                        </div>
                        <div class="col-md-5" id="satToStatus">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span><?php echo $_smarty_tpl->tpl_vars['var']->value['to'];?>
</span>
                                </span>
                                    <input type='text' name="satTimeTo" id="satTimeTo" value="<?php echo $_smarty_tpl->tpl_vars['workingTimeTo']->value[0];?>
" class="form-control pickatime" placeholder="<?php echo $_smarty_tpl->tpl_vars['var']->value['SelectTime'];?>
" />
                            </div>
                        </div>
                        <div id="alert_satStatus" style="display: none;" class="alert alert-warning fade in mb-1 col-md-9" role="alert">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 label-control workingStatus" ><?php echo $_smarty_tpl->tpl_vars['var']->value['sun'];?>

                            <input type="hidden" name="sunday" id="sunday" value="<?php echo $_smarty_tpl->tpl_vars['workingday']->value[1];?>
">
                            <input type="checkbox" class="switchery" name="sunStatus" id="sunStatus" data-size="xs" <?php if ($_smarty_tpl->tpl_vars['itemArray']->value[1]=='on'){?>checked='checked'<?php }?>/>
                        </label>
                        <div class="col-md-5" id="sunStatusFrom">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span><?php echo $_smarty_tpl->tpl_vars['var']->value['from'];?>
</span>
                                </span>
                                    <input type='text' name="sunTimeFrom" id="sunTimeFrom" class="form-control pickatime" value="<?php echo $_smarty_tpl->tpl_vars['workingTimeFrom']->value[1];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['var']->value['SelectTime'];?>
" />
                            </div>
                        </div>
                        <div class="col-md-5" id="sunStatusTo">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span><?php echo $_smarty_tpl->tpl_vars['var']->value['to'];?>
</span>
                                </span>
                                    <input type='text' name="sunTimeTo" id="sunTimeTo" value="<?php echo $_smarty_tpl->tpl_vars['workingTimeTo']->value[1];?>
" class="form-control pickatime" placeholder="<?php echo $_smarty_tpl->tpl_vars['var']->value['SelectTime'];?>
" />
                            </div>
                        </div>
                        <div id="alert_sunStatus" style="display: none;" class="alert alert-warning fade in mb-1 col-md-9" role="alert">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 label-control" ><?php echo $_smarty_tpl->tpl_vars['var']->value['mon'];?>

                            <input type="hidden" name="monday" id="monday" value="<?php echo $_smarty_tpl->tpl_vars['workingday']->value[2];?>
">
                            <input type="checkbox" class="switchery" name="monStatus" id="monStatus" data-size="xs" <?php if ($_smarty_tpl->tpl_vars['itemArray']->value[2]=='on'){?>checked='checked'<?php }?>/>
                        </label>
                        <div class="col-md-5" id="monStatusFrom">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span><?php echo $_smarty_tpl->tpl_vars['var']->value['from'];?>
</span>
                                </span>
                                    <input type='text' name="monTimeFrom" id="monTimeFrom" class="form-control pickatime" value="<?php echo $_smarty_tpl->tpl_vars['workingTimeFrom']->value[2];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['var']->value['SelectTime'];?>
" />
                            </div>
                        </div>
                        <div class="col-md-5" id="monStatusTo">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span><?php echo $_smarty_tpl->tpl_vars['var']->value['to'];?>
</span>
                                </span>
                                    <input type='text' name="monTimeTo" id="monTimeTo" value="<?php echo $_smarty_tpl->tpl_vars['workingTimeTo']->value[2];?>
" class="form-control pickatime" placeholder="<?php echo $_smarty_tpl->tpl_vars['var']->value['SelectTime'];?>
" />
                            </div>
                        </div>
                        <div id="alert_monStatus" style="display: none;" class="alert alert-warning fade in mb-1 col-md-9" role="alert">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 label-control" ><?php echo $_smarty_tpl->tpl_vars['var']->value['tue'];?>

                            <input type="hidden" name="tuesday" id="tuesday" value="<?php echo $_smarty_tpl->tpl_vars['workingday']->value[3];?>
">
                            <input type="checkbox" class="switchery" name="tueStatus" id="tueStatus" data-size="xs" <?php if ($_smarty_tpl->tpl_vars['itemArray']->value[3]=='on'){?>checked='checked'<?php }?>/>
                        </label>
                        <div class="col-md-5" id="tueStatusFrom">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span><?php echo $_smarty_tpl->tpl_vars['var']->value['from'];?>
</span>
                                </span>
                                    <input type='text' name="tueTimeFrom" id="tueTimeFrom" class="form-control pickatime" value="<?php echo $_smarty_tpl->tpl_vars['workingTimeFrom']->value[3];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['var']->value['SelectTime'];?>
" />
                            </div>
                        </div>
                        <div class="col-md-5" id="tueStatusTo">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span><?php echo $_smarty_tpl->tpl_vars['var']->value['to'];?>
</span>
                                </span>
                                    <input type='text' name="tueTimeTo" id="tueTimeTo" value="<?php echo $_smarty_tpl->tpl_vars['workingTimeTo']->value[3];?>
" class="form-control pickatime" placeholder="<?php echo $_smarty_tpl->tpl_vars['var']->value['SelectTime'];?>
" />
                            </div>
                        </div>
                        <div id="alert_tueStatus" style="display: none;" class="alert alert-warning fade in mb-1 col-md-9" role="alert">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 label-control workingStatus2" ><?php echo $_smarty_tpl->tpl_vars['var']->value['wed'];?>

                            <input type="hidden" name="wednesday" id="wednesday" value="<?php echo $_smarty_tpl->tpl_vars['workingday']->value[4];?>
">
                            <input type="checkbox" class="switchery" name="wedStatus" id="wedStatus" data-size="xs" <?php if ($_smarty_tpl->tpl_vars['itemArray']->value[4]=='on'){?>checked='checked'<?php }?>/>
                        </label>
                        <div class="col-md-5" id="wedStatusFrom">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span><?php echo $_smarty_tpl->tpl_vars['var']->value['from'];?>
</span>
                                </span>
                                    <input type='text' name="wedTimeFrom" id="wedTimeFrom" class="form-control pickatime" value="<?php echo $_smarty_tpl->tpl_vars['workingTimeFrom']->value[4];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['var']->value['SelectTime'];?>
" />
                            </div>
                        </div>
                        <div class="col-md-5" id="wedStatusTo">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span><?php echo $_smarty_tpl->tpl_vars['var']->value['to'];?>
</span>
                                </span>
                                    <input type='text' name="wedTimeTo" id="wedTimeTo" value="<?php echo $_smarty_tpl->tpl_vars['workingTimeTo']->value[4];?>
" class="form-control pickatime" placeholder="<?php echo $_smarty_tpl->tpl_vars['var']->value['SelectTime'];?>
" />
                            </div>
                        </div>
                        <div id="alert_wedStatus" style="display: none;" class="alert alert-warning fade in mb-1 col-md-9" role="alert">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 label-control workingStatus3" ><?php echo $_smarty_tpl->tpl_vars['var']->value['thu'];?>

                            <input type="hidden" name="thursday" id="thursday" value="<?php echo $_smarty_tpl->tpl_vars['workingday']->value[5];?>
">
                            <input type="checkbox" class="switchery" name="thuStatus" id="thuStatus" data-size="xs" <?php if ($_smarty_tpl->tpl_vars['itemArray']->value[5]=='on'){?>checked='checked'<?php }?>/>
                        </label>
                        <div class="col-md-5" id="thuStatusFrom">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span><?php echo $_smarty_tpl->tpl_vars['var']->value['from'];?>
</span>
                                </span>
                                    <input type='text' name="thuTimeFrom" id="thuTimeFrom" class="form-control pickatime" value="<?php echo $_smarty_tpl->tpl_vars['workingTimeFrom']->value[5];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['var']->value['SelectTime'];?>
" />
                            </div>
                        </div>
                        <div class="col-md-5" id="thuStatusTo">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span><?php echo $_smarty_tpl->tpl_vars['var']->value['to'];?>
</span>
                                </span>
                                    <input type='text' name="thuTimeTo" id="thuTimeTo" value="<?php echo $_smarty_tpl->tpl_vars['workingTimeTo']->value[5];?>
" class="form-control pickatime" placeholder="<?php echo $_smarty_tpl->tpl_vars['var']->value['SelectTime'];?>
" />
                            </div>
                        </div>
                        <div id="alert_thuStatus" style="display: none;" class="alert alert-warning fade in mb-1 col-md-9" role="alert">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 label-control" ><?php echo $_smarty_tpl->tpl_vars['var']->value['fri'];?>

                            <input type="hidden" name="friday" id="friday" value="<?php echo $_smarty_tpl->tpl_vars['workingday']->value[6];?>
">
                            <input type="checkbox" class="switchery" name="friStatus" id="friStatus" data-size="xs" <?php if ($_smarty_tpl->tpl_vars['itemArray']->value[6]=='on'){?>checked='checked'<?php }?>/>
                        </label>
                        <div class="col-md-5" id="friStatusFrom">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span><?php echo $_smarty_tpl->tpl_vars['var']->value['from'];?>
</span>
                                </span>
                                    <input type='text' name="friTimeFrom" id="friTimeFrom" class="form-control pickatime" value="<?php echo $_smarty_tpl->tpl_vars['workingTimeFrom']->value[6];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['var']->value['SelectTime'];?>
" />
                            </div>
                        </div>
                        <div class="col-md-5" id="friStatusTo">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span><?php echo $_smarty_tpl->tpl_vars['var']->value['to'];?>
</span>
                                </span>
                                    <input type='text' name="friTimeTo" id="friTimeTo" value="<?php echo $_smarty_tpl->tpl_vars['workingTimeTo']->value[6];?>
" class="form-control pickatime" placeholder="<?php echo $_smarty_tpl->tpl_vars['var']->value['SelectTime'];?>
" />
                            </div>
                        </div>
                        <div id="alert_friStatus" style="display: none;" class="alert alert-warning fade in mb-1 col-md-9" role="alert">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['var']->value['clinicEditCancel'];?>
</button>
                    <button  type="button" class="add_working_hours btn btn-success"  data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['var']->value['clinicEditSave'];?>
</button>

                </div>
            </form>
        </div>
    </div>
</div>

<!-- End Working Hours Model -->

<?php $_smarty_tpl->tpl_vars['itemArray'] = new Smarty_variable(array(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['workingTimeFrom'] = new Smarty_variable(array(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['workingTimeTo'] = new Smarty_variable(array(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['workingday'] = new Smarty_variable(array(), null, 0);?>
<?php }} ?>