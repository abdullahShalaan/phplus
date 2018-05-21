<?php /* Smarty version Smarty-3.1.12, created on 2017-12-26 07:40:50
         compiled from "/home/abdullah/public_html/lomixa2/style/lomixa/clinic/clinicDcotor_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1475295955a41e0e24eed82-23194314%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0020d3c3570f6c688534da68bae883eac5ac045b' => 
    array (
      0 => '/home/abdullah/public_html/lomixa2/style/lomixa/clinic/clinicDcotor_view.tpl',
      1 => 1514249733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1475295955a41e0e24eed82-23194314',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'var' => 0,
    'clin' => 0,
    'team' => 0,
    'team2' => 0,
    'perm' => 0,
    'jsfilesx' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a41e0e2524cf2_00717525',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a41e0e2524cf2_00717525')) {function content_5a41e0e2524cf2_00717525($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['cssfilesx'] = new Smarty_variable(array('plugins/forms/switch.min.css'), null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('main/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('main/slide.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="app-content content container-fluid">
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-xs-12">

        </div>
        <div class="content-header-right col-md-6 col-xs-12">
            <fieldset class="form-group relative has-icon-left col-md-5 col-xs-12 float-xs-right p-0">
                <input id="iconLeft" type="text" placeholder="Search..." class="form-control round"/>
                <div class="form-control-position"><i class="icon-search7"></i></div>
            </fieldset>
        </div>
        <div class="content-header-lead col-xs-12 mt-2">
            <p class="lead"></p>
        </div>
    </div>
    <div class="content-detached content-right">
        <div class="content-body"><section class="row">
                <div class="col-xs-12">
                    <div class="card">
                        <div class="card-head">
                            <div class="card-header">
                                <h4 class="card-title"><?php echo $_smarty_tpl->tpl_vars['var']->value['clinicTeam'];?>
 <?php echo $_smarty_tpl->tpl_vars['var']->value['clinicIN'];?>
  <?php echo $_smarty_tpl->tpl_vars['clin']->value['placeName'];?>
</h4>
                                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                                <div class="heading-elements">

                                    <?php echo $_smarty_tpl->getSubTemplate ('clinic/filterselect.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addclinicModalTeam"><i class="icon-plus4 white"></i> <?php echo $_smarty_tpl->tpl_vars['var']->value['clinicDoctorAdd'];?>
</button>

                                </div>
                            </div>
                        </div>
                        <div class="card-body collapse in">
                            <div class="card-block">
                                <!-- Task List table -->
                                <table style="padding-bottom:  50px;" id="" class="table table-white-space table-bordered row-grouping display table-responsive no-wrap icheck table-middle">
                                    <thead>
                                        <tr>
                                            <th style="width: 400px"><?php echo $_smarty_tpl->tpl_vars['var']->value['clinicUserName'];?>
</th>
                                            <th style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['var']->value['clinicUserPermision'];?>
</th>
                                            <th style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['var']->value['clinicMobile'];?>
</th>
                                            <th style="text-align: center;width: 69px"><?php echo $_smarty_tpl->tpl_vars['var']->value['clinicOption'];?>
</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        <?php  $_smarty_tpl->tpl_vars['team2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['team2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['team']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['team2']->key => $_smarty_tpl->tpl_vars['team2']->value){
$_smarty_tpl->tpl_vars['team2']->_loop = true;
?>
                                            <tr>
                                                
                                                <td>
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <span class="avatar avatar-sm avatar-online rounded-circle">
                                                                <img src="<?php echo $_smarty_tpl->tpl_vars['team2']->value['image'];?>
" alt="avatar"><i></i>
                                                            </span>
                                                        </div>
                                                        <div class="media-body media-middle">
                                                            <a href="#" class="media-heading"><?php echo $_smarty_tpl->tpl_vars['team2']->value['fullName'];?>
</a>
                                                        </div>
                                                        <div class="media-body media-right">
                                                            <a href="#clinicModalDoctorManage" data-toggle="modal" class="doctManage btn btn-info btn-sm" diseaseThreatID='<?php echo $_smarty_tpl->tpl_vars['team2']->value['diases'];?>
' specialMedicalSpecialID='<?php echo $_smarty_tpl->tpl_vars['team2']->value['specs'];?>
'  otherdocID="<?php echo $_smarty_tpl->tpl_vars['team2']->value['userID'];?>
" docDataID="<?php echo $_smarty_tpl->tpl_vars['team2']->value['data']['docDataID'];?>
" availForCounseling="<?php echo $_smarty_tpl->tpl_vars['team2']->value['data']['availForCounseling'];?>
" availForVisit="<?php echo $_smarty_tpl->tpl_vars['team2']->value['data']['availForVisit'];?>
" scienseDegree="<?php echo $_smarty_tpl->tpl_vars['team2']->value['data']['scienseDegree'];?>
" mainMajor="<?php echo $_smarty_tpl->tpl_vars['team2']->value['data']['mainMajor'];?>
"><?php echo $_smarty_tpl->tpl_vars['var']->value['doctorManage'];?>
</a>
                                                        </div>
                                                        

                                                    </div>
                                                </td>
                                                <td class="text-xs-center">
                                                    <?php  $_smarty_tpl->tpl_vars['perm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['perm']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['team2']->value['permissions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['perm']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['perm']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['perm']->key => $_smarty_tpl->tpl_vars['perm']->value){
$_smarty_tpl->tpl_vars['perm']->_loop = true;
 $_smarty_tpl->tpl_vars['perm']->iteration++;
 $_smarty_tpl->tpl_vars['perm']->last = $_smarty_tpl->tpl_vars['perm']->iteration === $_smarty_tpl->tpl_vars['perm']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['last'] = $_smarty_tpl->tpl_vars['perm']->last;
?>
                                                        <?php echo $_smarty_tpl->tpl_vars['perm']->value['typeName'];?>
 <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['last']){?>,<?php }?> 
                                                    <?php } ?>
                                                </td>
                                                <td style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['team2']->value['userPhone'];?>
</td>
                                                <td style="text-align: center">
                                                    <span class="dropdown">
                                                        <button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="icon-cog3"></i></button>
                                                        <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
                                                            <a href="#confirm-delete-permision<?php echo $_smarty_tpl->tpl_vars['team2']->value['userID'];?>
"  data-toggle="modal" class="dropdown-item"><i class="icon-trash4"></i> <?php echo $_smarty_tpl->tpl_vars['var']->value['clinicDelete'];?>
</a>
                                                        </span>
                                                    </span>
                                                </td>
                                            </tr>

                                            <!-- Start Delte Permision Modal -->

                                        <div class="modal fade" id="confirm-delete-permision<?php echo $_smarty_tpl->tpl_vars['team2']->value['userID'];?>
" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <?php echo $_smarty_tpl->tpl_vars['var']->value['clinicDeleteConfirm'];?>
 !!
                                                    </div>
                                                    <div class="modal-body">
                                                        <?php echo $_smarty_tpl->tpl_vars['var']->value['clinicDeleteMessage'];?>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['var']->value['clinicEditCancel'];?>
</button>
                                                        <button id="" userid="<?php echo $_smarty_tpl->tpl_vars['team2']->value['userID'];?>
" data-place="<?php echo $_smarty_tpl->tpl_vars['clin']->value['placeID'];?>
" type="button" data-id="<?php echo $_smarty_tpl->tpl_vars['team2']->value['userID'];?>
" class="delete_permision btn btn-danger"  data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['var']->value['clinicDelete'];?>
</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- End Delete Model -->

                                    <?php } ?>

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th><?php echo $_smarty_tpl->tpl_vars['var']->value['clinicUserName'];?>
</th>
                                            <th style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['var']->value['clinicUserPermision'];?>
</th>
                                            <th style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['var']->value['clinicMobile'];?>
</th>
                                            <th style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['var']->value['clinicOption'];?>
</th>
                                        </tr>
                                    </tfoot>
                                </table>

                                <!-- Start Add Modal -->

                                <?php echo $_smarty_tpl->getSubTemplate ('clinic/clinicDoctor_add_modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


                                <!-- End Add Modal  -->

                                <!-- Start Add Modal -->

                                <?php echo $_smarty_tpl->getSubTemplate ('clinic/clinicTeam_add_modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


                                <!-- End Add Modal  -->


                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <?php echo $_smarty_tpl->getSubTemplate ('clinic/sidebar_left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>




</div>


<?php $_smarty_tpl->tpl_vars['jsfilesx'] = new Smarty_variable(array('clinic/scripts.js','clinic/maps.js'), null, 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('main/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('jsfiles'=>$_smarty_tpl->tpl_vars['jsfilesx']->value), 0);?>
<?php }} ?>