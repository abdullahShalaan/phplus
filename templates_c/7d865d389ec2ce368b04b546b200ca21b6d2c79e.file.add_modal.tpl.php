<?php /* Smarty version Smarty-3.1.12, created on 2017-12-26 05:04:19
         compiled from "/home/abdullah/public_html/lomixa2/style/lomixa/pharmacies/add_modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16387852355a41bc33477b73-15664881%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d865d389ec2ce368b04b546b200ca21b6d2c79e' => 
    array (
      0 => '/home/abdullah/public_html/lomixa2/style/lomixa/pharmacies/add_modal.tpl',
      1 => 1514249733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16387852355a41bc33477b73-15664881',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'var' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a41bc334805a0_21984559',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a41bc334805a0_21984559')) {function content_5a41bc334805a0_21984559($_smarty_tpl) {?><!-- Modal -->
<div  class="modal fade" id="add_pharmacy_modal" tabindex="-1" role="dialog" aria-labelledby="add_pharmacy_modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center" id="myModalLabel"><?php echo $_smarty_tpl->tpl_vars['var']->value['new'];?>
</h4>
                <div class="clearfix"></div>
            </div>
            <div class="modal-body">
                <form id="insert-form"  method="POST">
                    <input type="hidden" name="xsub" value="1">
                    <div class="form-group">
                        <label for="AreaName"><?php echo $_smarty_tpl->tpl_vars['var']->value['name'];?>
</label>
                        <input type="text" name="name" id="pharmacy_name" class="form-control" aria-describedby="emailHelp" autocomplet="off">

                        <div  id='pharmacy_name_error' class=" whitei alert alert-icon-left  alert-arrow-left alert-danger alert-dismissible fade in mb-2" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>

                            <?php echo $_smarty_tpl->tpl_vars['var']->value['error_name'];?>
                                   </div> 


                    </div>
                    <div class="form-group">
                        <label for="AreaName"><?php echo $_smarty_tpl->tpl_vars['var']->value['address'];?>
</label>
                        <input type="text" name="AreaName" id="pharmacy_address" class="form-control" aria-describedby="emailHelp" autocomplet="off">
                        <div  id='pharmacy_address_error' class=" whitei alert alert-icon-left  alert-arrow-left alert-danger alert-dismissible fade in mb-2" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>

                            <?php echo $_smarty_tpl->tpl_vars['var']->value['error_address'];?>
                                   </div> 


                    </div>
                    <div class="form-group" >
                        <label><?php echo $_smarty_tpl->tpl_vars['var']->value['choose_map_place'];?>
</label>
                        <div  id='pharmacy_map_error' class=" whitei alert alert-icon-left  alert-arrow-left alert-danger alert-dismissible fade in mb-2" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>

                            <?php echo $_smarty_tpl->tpl_vars['var']->value['error_map'];?>
                                   </div> 

                        <div style="width:100%;height:300px;" id='mapx' class="col-md-12 form-group">
                        </div>               

                    </div>

                    


                    <input type="hidden" name="AreaLong" id="long" class="form-control" aria-describedby="emailHelp" autocomplet="off">
                    <input type="hidden" name="AreaLat" id="lat" class="form-control" aria-describedby="emailHelp" autocomplet="off">

                    <div class="form-group">

                        <div class="mod-fot modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['var']->value['close'];?>
</button>
                            <button type="button" id="add_pharmacy_button" class="btn btn-primary" ><?php echo $_smarty_tpl->tpl_vars['var']->value['next'];?>
</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div><?php }} ?>