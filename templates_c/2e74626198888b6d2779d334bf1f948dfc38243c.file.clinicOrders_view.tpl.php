<?php /* Smarty version Smarty-3.1.12, created on 2017-12-26 11:39:56
         compiled from "/home/abdullah/public_html/lomixa2/style/lomixa/clinic/clinicOrders_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13601464235a4218ec8c35a9-08928080%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e74626198888b6d2779d334bf1f948dfc38243c' => 
    array (
      0 => '/home/abdullah/public_html/lomixa2/style/lomixa/clinic/clinicOrders_view.tpl',
      1 => 1514249733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13601464235a4218ec8c35a9-08928080',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'var' => 0,
    'jsfilesx' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a4218ec8ec1c5_91392999',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4218ec8ec1c5_91392999')) {function content_5a4218ec8ec1c5_91392999($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['cssfilesx'] = new Smarty_variable(array('plugins/forms/switch.min.css'), null, 0);?>
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
                        <div class="card-header">
                            <h4 class="card-title"><?php echo $_smarty_tpl->tpl_vars['var']->value['clinicOrders'];?>
</h4>
                            <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                            <div class="heading-elements">
                                <?php echo $_smarty_tpl->getSubTemplate ('clinic/filterselect.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



                            </div>
                        </div>
                        <div class="card-body collapse in">
                            <div class="card-block">
                                <!-- Task List table -->
                                <table id="project-bugs-list" class="table table-white-space table-bordered nowrap table-responsive" cellspacing="0" width="100%">

                                    <thead>
                                        <tr>
                                            <th><x class="hide-on-mobile"><?php echo $_smarty_tpl->tpl_vars['var']->value['pharmOrderID'];?>
</x>
                                    <x class="show-on-mobile">#</x>
                                </th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['var']->value['pharmOrderCustomer'];?>
</th>
                                            <th class="hide-on-mobile"><?php echo $_smarty_tpl->tpl_vars['var']->value['pharmOrderPharm'];?>
</th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['var']->value['pharmOrderStatus'];?>
</th>
                                            <th class="hide-on-mobile"><?php echo $_smarty_tpl->tpl_vars['var']->value['pharmOrderDue'];?>
</th>
                                            <th class="hide-on-mobile"><?php echo $_smarty_tpl->tpl_vars['var']->value['pharmOrderOption'];?>
</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php echo $_smarty_tpl->getSubTemplate ('pharmacies/pharmOrders_edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th><x class="hide-on-mobile"><?php echo $_smarty_tpl->tpl_vars['var']->value['pharmOrderID'];?>
</x>
                                    <x class="show-on-mobile">#</x></th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['var']->value['pharmOrderCustomer'];?>
</th>
                                            <th class="hide-on-mobile"><?php echo $_smarty_tpl->tpl_vars['var']->value['pharmOrderPharm'];?>
</th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['var']->value['pharmOrderStatus'];?>
</th>
                                            <th class="hide-on-mobile"><?php echo $_smarty_tpl->tpl_vars['var']->value['pharmOrderDue'];?>
</th>
                                            <th class="hide-on-mobile"><?php echo $_smarty_tpl->tpl_vars['var']->value['pharmOrderOption'];?>
</th>
                                        </tr>
                                    </tfoot>


                                </table>

 
                                        
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <?php echo $_smarty_tpl->getSubTemplate ('pharmacies/sidebar_left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


</div>

<?php $_smarty_tpl->tpl_vars['jsfilesx'] = new Smarty_variable(array('pharmacies/pharmPlugins.js','assets/js/dataTablePlugins.js','pharmacies/scripts.js','pharmacies/maps.js'), null, 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('main/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('jsfiles'=>$_smarty_tpl->tpl_vars['jsfilesx']->value), 0);?>
<?php }} ?>