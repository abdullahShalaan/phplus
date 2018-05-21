<?php /* Smarty version Smarty-3.1.12, created on 2017-12-26 11:39:56
         compiled from "/home/abdullah/public_html/lomixa2/style/lomixa/pharmacies/pharmOrders_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9108619125a4218ec8f0346-25376670%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b345b07f6b4edb968700535ce76bf16ed9553418' => 
    array (
      0 => '/home/abdullah/public_html/lomixa2/style/lomixa/pharmacies/pharmOrders_edit.tpl',
      1 => 1514249733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9108619125a4218ec8f0346-25376670',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order' => 0,
    'order2' => 0,
    'status_style' => 0,
    'var' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a4218ec909427_49466577',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4218ec909427_49466577')) {function content_5a4218ec909427_49466577($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['order2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order2']->key => $_smarty_tpl->tpl_vars['order2']->value){
$_smarty_tpl->tpl_vars['order2']->_loop = true;
?>

    <tr>
        <td>
            <a href="#orderID_<?php echo $_smarty_tpl->tpl_vars['order2']->value['orderID'];?>
" data-toggle="modal" class="text-bold-600"><?php echo $_smarty_tpl->tpl_vars['order2']->value['orderID'];?>
</a>
        </td>
        <td>
            <h6><?php echo $_smarty_tpl->tpl_vars['order2']->value['name'];?>
</h6>
        </td>

        <td class="hide-on-mobile">
            <div class="media">
                <div class="media-left"><span class="avatar avatar-sm avatar-busy rounded-circle">

                        <img src="<?php echo $_smarty_tpl->tpl_vars['order2']->value['image'];?>
" alt="avatar"><i></i></span></div>

                <div class="media-body media-middle">
                    <a href="pharmacy.html" class="media-heading"><?php echo $_smarty_tpl->tpl_vars['order2']->value['placeName'];?>
</a>
                </div>
            </div>
        </td>

        <td>
            <span class="tag tag-default tag-<?php echo $_smarty_tpl->tpl_vars['status_style']->value[$_smarty_tpl->tpl_vars['order2']->value['ordreStatus']];?>
"><?php echo $_smarty_tpl->tpl_vars['var']->value[$_smarty_tpl->tpl_vars['order2']->value['ordreStatus']];?>
</span>
        </td>

        <td class="hide-on-mobile">
            <fieldset class="form-group position-relative has-icon-left">
                <div>
                    <input type="text" class="form-control width-100 datepicker-default no-border px-1 pt-0" id="" placeholder="Icon Left, Default Input" value="<?php echo $_smarty_tpl->tpl_vars['order2']->value['createdTime'];?>
">
                </div>
            </fieldset>
        </td>
        <td class="hide-on-mobile">
            <span class="dropdown">
                <button id="btnSearchDrop4" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="icon-cog3"></i></button>
                <span aria-labelledby="btnSearchDrop4" class="dropdown-menu mt-1 dropdown-menu-right">
                    <a href="#orderID_<?php echo $_smarty_tpl->tpl_vars['order2']->value['orderID'];?>
" data-toggle="modal" class="dropdown-item"><i class="icon-eye6"></i> <?php echo $_smarty_tpl->tpl_vars['var']->value['view_order'];?>
</a>
                    <a href="#edit-order_<?php echo $_smarty_tpl->tpl_vars['order2']->value['orderID'];?>
" order="<?php echo $_smarty_tpl->tpl_vars['order2']->value['orderID'];?>
" data-toggle="modal" class="editOrderModal dropdown-item"><i class="icon-pen3"></i> <?php echo $_smarty_tpl->tpl_vars['var']->value['edit_order'];?>
</a>
                    <a href="#chatBoxModal" class="dropdown-item"><i class="icon-check2"></i><?php echo $_smarty_tpl->tpl_vars['var']->value['complete_order'];?>
</a>

                    <a href="#" class="dropdown-item"><i class="icon-trash4"></i> <?php echo $_smarty_tpl->tpl_vars['var']->value['reject_order'];?>
</a>
                </span>
            </span>
        </td>
    </tr>
    <!-- view Modal -->
    <div class="modal fade text-xs-left" id="orderID_<?php echo $_smarty_tpl->tpl_vars['order2']->value['orderID'];?>
" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel1"><?php echo $_smarty_tpl->tpl_vars['order2']->value['placeName'];?>
</h4>
                </div>
                <div class="modal-body">

                    <h4 class="card-title"><?php echo $_smarty_tpl->tpl_vars['order2']->value['name'];?>
</h4>
                    <ul class="list-inline list-inline-pipe">
                        <li>01002458785</li>

                    </ul>
                    <h5 class="card-subtitle text-muted"><i class="icon-location4"></i><?php echo $_smarty_tpl->tpl_vars['order2']->value['address'];?>
</h5>
                    <br>
                    <div class="list-group list-group-flush">


                        <div style="width: 50%;float: right">Item Name</div>
                        <div style="width: 50%;
                             text-align: left;
                             float: left;
                             margin-top: 0;">

                            <div style="width: 48%;float: right;margin-left: 2%;">
                                <span>Quantity :</span>
                                <span>2</span>
                            </div>


                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End view Modal -->

    <!-- Start Edit Modal -->

    <div class="modal fade text-xs-left" id="edit-order_<?php echo $_smarty_tpl->tpl_vars['order2']->value['orderID'];?>
" role="dialog" aria-labelledby="myModalLabel34" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h3 class="modal-title" id="myModalLabel34"><?php echo $_smarty_tpl->tpl_vars['order2']->value['orderID'];?>
</h3>
                </div>
                <form  method="POST">
                    <div class="modal-body">

                        <!-- Start Select Box -->

                        <div class="row match-height">
                            <div class="col-xl-6 col-md-12">
                                <div class="form-group">
                                    
                                    <select class="select6" style="width: 500px">
                                        <option value="3620194" selected="selected">Select a value......</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                        <!-- End Select Box -->

                        <!-- Start Field Edit -->
                        <div class="row">

                            <div class="col-xl-12 col-lg-12 col-md-12 selectit" id="selectitem_<?php echo $_smarty_tpl->tpl_vars['order2']->value['orderID'];?>
" order="<?php echo $_smarty_tpl->tpl_vars['order2']->value['orderID'];?>
">
                                <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order2']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>

                                    <fieldset>
                                        <div style="width: 100%;margin: 20px 0px 10px 0;" class="input-group bootstrap-touchspin">
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary bootstrap-touchspin-down" type="button"><i class="icon-minus4"></i>
                                                </button>
                                            </span>
                                            <span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
                                            <input type="text" id='<?php echo $_smarty_tpl->tpl_vars['product']->value['poductID'];?>
' class="prods_<?php echo $_smarty_tpl->tpl_vars['order2']->value['orderID'];?>
 touchspin-stop-mousewheel form-control" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['quantity'];?>
" style="display: block;width: 10%;">
                                            <div class="touchspin-stop-mousewheel form-control" style="width: 90%;"><?php echo $_smarty_tpl->tpl_vars['product']->value['pharmProName'];?>
 
                                                <button  style="font-size: 20px;" type="button" class="close abodcx" data-dismiss="modalxx" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            </div>
                                            <span class="input-group-btn">
                                                <button  class="btn btn-primary bootstrap-touchspin-up" type="button"><i class="icon-plus4"></i></button>
                                            </span>
                                        </div>
                                    </fieldset>

                                <?php } ?>
                            </div>

                        </div>

                        <!-- End Field Edit -->

                    </div>
                    <div class="modal-footer">
                        <input type="reset" class="btn btn-outline-secondary btn-lg" value="<?php echo $_smarty_tpl->tpl_vars['var']->value['pharmOrderEditReset'];?>
">
                        <input data-dismiss="modal" orderid='<?php echo $_smarty_tpl->tpl_vars['order2']->value['orderID'];?>
' type="button" class="ordersave btn btn-outline-primary btn-lg" value="<?php echo $_smarty_tpl->tpl_vars['var']->value['pharmOrderEditSave'];?>
">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- End Edit Modal  -->

<?php } ?><?php }} ?>