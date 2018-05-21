<?php /* Smarty version Smarty-3.1.12, created on 2017-12-26 07:40:43
         compiled from "/home/abdullah/public_html/lomixa2/style/lomixa/clinic/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17286090825a41e0dba508c7-80180668%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63fed7c68362f64b77f999677b6c4909cdb4e2dc' => 
    array (
      0 => '/home/abdullah/public_html/lomixa2/style/lomixa/clinic/view.tpl',
      1 => 1514249733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17286090825a41e0dba508c7-80180668',
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
  'unifunc' => 'content_5a41e0dba70711_79241539',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a41e0dba70711_79241539')) {function content_5a41e0dba70711_79241539($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['cssfilesx'] = new Smarty_variable(array('plugins/forms/switch.min.css'), null, 0);?>
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
                                <h4 class="card-title"><?php echo $_smarty_tpl->tpl_vars['var']->value['clinicControll'];?>
</h4>
                                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                                <div class="heading-elements">

                                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add_clinic_modal"><i class="icon-plus4 white"></i> <?php echo $_smarty_tpl->tpl_vars['var']->value['add_clinic'];?>
</button>

                                </div>




                            </div>
                        </div>
                        <div class="card-body collapse in">
                            <div class="card-block">
                                <!-- Task List table -->
                                <table style="padding-bottom:  200px;" id="" class="table table-white-space table-bordered row-grouping display table-responsive no-wrap icheck table-middle">

                                    <thead>
                                        <tr>
                                            <th><?php echo $_smarty_tpl->tpl_vars['var']->value['name'];?>
</th>
                                            <th class="hide-on-mobile"><?php echo $_smarty_tpl->tpl_vars['var']->value['SponserActivation'];?>
</th>
                                            <th class="hide-on-mobile"><?php echo $_smarty_tpl->tpl_vars['var']->value['clinicMobile'];?>
</th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['var']->value['clinicStatus'];?>
</th>
                                            <th class="hide-on-mobile"><?php echo $_smarty_tpl->tpl_vars['var']->value['clinicOption'];?>
</th>
                                        </tr>
                                    </thead>
                                    <tbody >
                                        <?php echo $_smarty_tpl->getSubTemplate ('clinic/clinic-edit-form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                                    </tbody>
                                    <tfoot >
                                        <tr >
                                            <th><?php echo $_smarty_tpl->tpl_vars['var']->value['name'];?>
</th>
                                            <th class="hide-on-mobile"><?php echo $_smarty_tpl->tpl_vars['var']->value['SponserActivation'];?>
</th>
                                            <th class="hide-on-mobile"><?php echo $_smarty_tpl->tpl_vars['var']->value['clinicMobile'];?>
</th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['var']->value['clinicStatus'];?>
</th>
                                            <th class="hide-on-mobile"><?php echo $_smarty_tpl->tpl_vars['var']->value['clinicOption'];?>
</th>
                                        </tr>
                                    </tfoot>
                                </table>

                            </div>


                            <!-- Start Working Hours Modal -->

                            

                            <!-- End Working Hours Modal -->

                            <!-- Start Add Model -->

                            <?php echo $_smarty_tpl->getSubTemplate ('clinic/add_modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                            <!-- End Add Modael -->
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ('clinic/sidebar_left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

   
    <?php echo $_smarty_tpl->getSubTemplate ('clinic/Company_insu_modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>


<?php $_smarty_tpl->tpl_vars['jsfilesx'] = new Smarty_variable(array('assets/js/dataTablePlugins.js','clinic/scripts.js','clinic/maps.js'), null, 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('main/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('jsfiles'=>$_smarty_tpl->tpl_vars['jsfilesx']->value), 0);?>

<?php }} ?>