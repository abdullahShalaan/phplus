<?php /* Smarty version Smarty-3.1.12, created on 2017-12-26 05:04:19
         compiled from "/home/abdullah/public_html/lomixa2/style/lomixa/pharmacies/pharmacy-edit-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15441449415a41bc33446941-16745041%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c06a2187650760be030cec3ae1c944a27a64aac3' => 
    array (
      0 => '/home/abdullah/public_html/lomixa2/style/lomixa/pharmacies/pharmacy-edit-form.tpl',
      1 => 1514249733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15441449415a41bc33446941-16745041',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pharm' => 0,
    'pharm2' => 0,
    'var' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a41bc33474783_49069237',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a41bc33474783_49069237')) {function content_5a41bc33474783_49069237($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['pharm2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pharm2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pharm']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pharm2']->key => $_smarty_tpl->tpl_vars['pharm2']->value){
$_smarty_tpl->tpl_vars['pharm2']->_loop = true;
?>
    <tr id="fullrow_<?php echo $_smarty_tpl->tpl_vars['pharm2']->value['placeID'];?>
">
        <td>
            <div class="media">
                <div class="media-left"><span class="pharmImg avatar avatar-sm <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['pharm2']->value['status'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1=="active"){?>avatar-online<?php }else{ ?>avatar-busy<?php }?> rounded-circle">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['pharm2']->value['image'];?>
" alt="avatar"><i></i></span></div>

                <div class="media-body media-middle">
                    <a href="pharmacy.html" class="media-heading"> <?php echo $_smarty_tpl->tpl_vars['pharm2']->value['placeName'];?>
</a>
                    <a  href="#edit_modal" placeid="<?php echo $_smarty_tpl->tpl_vars['pharm2']->value['placeID'];?>
" image='<?php echo $_smarty_tpl->tpl_vars['pharm2']->value['image'];?>
' lat="<?php echo $_smarty_tpl->tpl_vars['pharm2']->value['placeLat'];?>
" lng="<?php echo $_smarty_tpl->tpl_vars['pharm2']->value['placeLong'];?>
" address="<?php echo $_smarty_tpl->tpl_vars['pharm2']->value['placeAddress'];?>
" placename="<?php echo $_smarty_tpl->tpl_vars['pharm2']->value['placeName'];?>
" mobile="<?php echo $_smarty_tpl->tpl_vars['pharm2']->value['mobile'];?>
" data-toggle="modal" class="show-on-mobile edit_place_modal "><i class="icon-pen3"></i> <?php echo $_smarty_tpl->tpl_vars['var']->value['pharmEdit'];?>
</a>
                    <a href="/pharmacies/team/<?php echo $_smarty_tpl->tpl_vars['pharm2']->value['placeID'];?>
" class="show-on-mobile"><i class="icon-person"></i> <?php echo $_smarty_tpl->tpl_vars['var']->value['pharmTeam'];?>
</a>

                    <a href="#confirm-delete-<?php echo $_smarty_tpl->tpl_vars['pharm2']->value['placeID'];?>
" data-toggle="modal" class="show-on-mobile "><i class="icon-trash4"></i> <?php echo $_smarty_tpl->tpl_vars['var']->value['pharmDelete'];?>
</a>

                </div>
            </div>
        </td>
        <td  class="hide-on-mobile" style="text-align: center;">
            <input type="checkbox"  class="switchery" data-size="xs" name="sponser_status" id="sponser_<?php echo $_smarty_tpl->tpl_vars['pharm2']->value['placeID'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['pharm2']->value['placeID'];?>
" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['pharm2']->value['sponser_status'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2=="active_s"){?>checked<?php }?>/>
        </td>

        <td  class="hide-on-mobile"><?php echo $_smarty_tpl->tpl_vars['pharm2']->value['mobile'];?>
</td>
        <td>
            <input type="checkbox" class="switchery pharmStatus" name="toggle" id="toggle_<?php echo $_smarty_tpl->tpl_vars['pharm2']->value['placeID'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['pharm2']->value['placeID'];?>
" data-size="xs" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['pharm2']->value['status'];?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3=="active"){?>checked<?php }?>/>

        </td>
        <td  class="hide-on-mobile">
            <span class="dropdown">
                <button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="icon-cog3"></i></button>
                <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
                    <a href="#edit_modal" placeid="<?php echo $_smarty_tpl->tpl_vars['pharm2']->value['placeID'];?>
" image='<?php echo $_smarty_tpl->tpl_vars['pharm2']->value['image'];?>
' lat="<?php echo $_smarty_tpl->tpl_vars['pharm2']->value['placeLat'];?>
" lng="<?php echo $_smarty_tpl->tpl_vars['pharm2']->value['placeLong'];?>
" address="<?php echo $_smarty_tpl->tpl_vars['pharm2']->value['placeAddress'];?>
" placename="<?php echo $_smarty_tpl->tpl_vars['pharm2']->value['placeName'];?>
" mobile="<?php echo $_smarty_tpl->tpl_vars['pharm2']->value['mobile'];?>
" data-toggle="modal" class="edit_place_modal dropdown-item"><i class="icon-pen3"></i> <?php echo $_smarty_tpl->tpl_vars['var']->value['pharmEdit'];?>
</a>
                    <a href="/pharmacies/team/<?php echo $_smarty_tpl->tpl_vars['pharm2']->value['placeID'];?>
" class="dropdown-item"><i class="icon-person"></i> <?php echo $_smarty_tpl->tpl_vars['var']->value['pharmTeam'];?>
</a>

                    <a href="#confirm-delete-<?php echo $_smarty_tpl->tpl_vars['pharm2']->value['placeID'];?>
" data-toggle="modal" class="dropdown-item"><i class="icon-trash4"></i> <?php echo $_smarty_tpl->tpl_vars['var']->value['pharmDelete'];?>
</a>

                </span>
            </span>
        </td>
    </tr>



    <!-- Start Delete Model -->

    <div class="modal fade" id="confirm-delete-<?php echo $_smarty_tpl->tpl_vars['pharm2']->value['placeID'];?>
" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <?php echo $_smarty_tpl->tpl_vars['var']->value['pharmDeleteConfirm'];?>
 !!
                </div>
                <div class="modal-body">
                    <?php echo $_smarty_tpl->tpl_vars['var']->value['pharmDeleteMessage'];?>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['var']->value['pharmDeleteCancel'];?>
</button>
                    <button id="<?php echo $_smarty_tpl->tpl_vars['pharm2']->value['placeID'];?>
" type="button" data-id="<?php echo $_smarty_tpl->tpl_vars['pharm2']->value['placeID'];?>
" class="delete_row btn btn-danger"  data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['var']->value['pharmDelete'];?>
</button>

                </div>
            </div>
        </div>
    </div>

    <!-- End Delete Model -->

<?php } ?>
<!-- Start Edit Modal -->
<div class="modal fade pharmModal" id="edit_modal" role="dialog" aria-labelledby="exampleModalLabel" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title text-center" id="myModalLabel"><?php echo $_smarty_tpl->tpl_vars['var']->value['pharmEditPlace'];?>
</h4>
                <div class="clearfix"></div>
            </div>
            <div class="modal-body">


                <!-- Start Form Edit -->

                <form class="xxx form form-horizontal"  method="POST" id="edit_place_form"  enctype="multipart/form-data">

                    <input type="hidden"  name="placeID" id="placeid_edit">


                    <div class="form-body">
                        <div class="form-group row">
                            <label class="col-md-3 label-control" ><?php echo $_smarty_tpl->tpl_vars['var']->value['pharmNameEdit'];?>
</label>
                            <div class="col-md-9">
                                <input type="text" name="placeName" id="placeName_edit"  class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['var']->value['pharmNameEdit'];?>
">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3 label-control"><?php echo $_smarty_tpl->tpl_vars['var']->value['pharmPhone'];?>
</label>
                            <div class="col-md-9">
                                <input type="text" name="mobile" id="placeMobile_edit"  class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['var']->value['pharmPhone'];?>
">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3 label-control"><?php echo $_smarty_tpl->tpl_vars['var']->value['pharmAddress'];?>
</label>
                            <div class="col-md-9">
                                <input type="text" name="placeAddress" id="placeAddress_edit"  class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['var']->value['pharmAddress'];?>
">
                            </div>
                        </div>

                        <!-- Start Map -->


                        <div class="form-group row">
                            <label class="col-md-3 label-control"><?php echo $_smarty_tpl->tpl_vars['var']->value['pharmMap'];?>
</label>
                            <div class="col-md-12">
                                <div style="width:100%;height:300px;" id='mapxEdit' class="col-md-12 form-group">
                                </div>
                                <input type="hidden" name="placeLong" id="long_edit" >
                                <input type="hidden" name="placeLat" id="lat_edit" >

                            </div>
                        </div>
                        <!-- End Map  -->

                        <div class="form-group row">
                            <label class="col-md-3 label-control"><?php echo $_smarty_tpl->tpl_vars['var']->value['pharmPhoto'];?>
</label>


                            <div class="fileinput fileinput-new col-md-9" data-provides="fileinput"><input type="hidden" value="" name="...">
                                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                    <img  alt="100%x100%" style="height: 100%; width: 100%; display: block;" id='editplace_image' src="">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 12px;"></div>
                                <div>
                                    <span class="btn btn-primary btn-embossed btn-file">
                                        <span class="fileinput-new"><span class="fui-image"></span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['var']->value['pharmPhotoSelect'];?>
</span>
                                        <span class="fileinput-exists"><span class="fui-gear"></span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['var']->value['pharmPhotoChange'];?>
</span>
                                        <input type="file" id="placeImage_edit"  name="pharmimage" >
                                    </span>
                                    <a href="#" class="btn btn-primary btn-embossed fileinput-exists" data-dismiss="fileinput"><span class="fui-trash"></span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['var']->value['pharmPhotoDelete'];?>
</a>
                                </div>
                            </div>
                        </div>


                        

                    </div>

                    <div class="form-actions center">
                        <button type="button" class="btn btn-warning mr-1" data-dismiss="modal">
                            <i class="icon-cross2"></i> <?php echo $_smarty_tpl->tpl_vars['var']->value['pharmEditCancel'];?>

                        </button>
                        
                        
                        <input type="button" id="save" class="saveedit btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['var']->value['pharmEditSave'];?>
" />
                    </div>
                </form>

                <!-- End Form Edit -->

            </div>
        </div>
    </div>
</div>
<!-- End Edit Modal --><?php }} ?>