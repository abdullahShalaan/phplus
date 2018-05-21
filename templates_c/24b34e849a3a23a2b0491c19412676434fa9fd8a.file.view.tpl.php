<?php /* Smarty version Smarty-3.1.12, created on 2017-12-26 05:04:19
         compiled from "/home/abdullah/public_html/lomixa2/style/lomixa/pharmacies/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15614804435a41bc33428878-12789661%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24b34e849a3a23a2b0491c19412676434fa9fd8a' => 
    array (
      0 => '/home/abdullah/public_html/lomixa2/style/lomixa/pharmacies/view.tpl',
      1 => 1514249733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15614804435a41bc33428878-12789661',
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
  'unifunc' => 'content_5a41bc3343cc75_96391308',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a41bc3343cc75_96391308')) {function content_5a41bc3343cc75_96391308($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['cssfilesx'] = new Smarty_variable(array('plugins/forms/switch.min.css'), null, 0);?>
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
                                <h4 class="card-title"><?php echo $_smarty_tpl->tpl_vars['var']->value['PharmacyControll'];?>
</h4>
                                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                                <div class="heading-elements">

                                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add_pharmacy_modal"><i class="icon-plus4 white"></i> <?php echo $_smarty_tpl->tpl_vars['var']->value['add_pharmacy'];?>
</button>
                                    
                                    
                                </div>




                            </div>
                        </div>
                        <div class="card-body collapse in">
                            <div class="card-block">
                                <!-- Task List table -->
                                <table style="padding-bottom:  100px;" id="" class="table table-white-space table-bordered row-grouping display table-responsive no-wrap icheck table-middle">

                                    <thead>
                                        <tr>
                                            <th><?php echo $_smarty_tpl->tpl_vars['var']->value['pharmName'];?>
</th>
                                            <th class="hide-on-mobile"><?php echo $_smarty_tpl->tpl_vars['var']->value['SponserActivation'];?>
</th>
                                            <th class="hide-on-mobile"><?php echo $_smarty_tpl->tpl_vars['var']->value['pharmMobile'];?>
</th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['var']->value['pharmStatus'];?>
</th>
                                            <th class="hide-on-mobile"><?php echo $_smarty_tpl->tpl_vars['var']->value['pharmOption'];?>
</th>
                                        </tr>
                                    </thead>
                                    <tbody >
                                        <?php echo $_smarty_tpl->getSubTemplate ('pharmacies/pharmacy-edit-form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                                    </tbody>
                                    <tfoot >
                                        <tr >
                                            <th><?php echo $_smarty_tpl->tpl_vars['var']->value['pharmName'];?>
</th>
                                            <th class="hide-on-mobile"><?php echo $_smarty_tpl->tpl_vars['var']->value['SponserActivation'];?>
</th>
                                            <th class="hide-on-mobile"><?php echo $_smarty_tpl->tpl_vars['var']->value['pharmMobile'];?>
</th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['var']->value['pharmStatus'];?>
</th>
                                            <th class="hide-on-mobile"><?php echo $_smarty_tpl->tpl_vars['var']->value['pharmOption'];?>
</th>
                                        </tr>
                                    </tfoot>
                                </table>

                                <!-- Start Add Model -->

                                <?php echo $_smarty_tpl->getSubTemplate ('pharmacies/add_modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                                <!-- End Add Modael -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ('pharmacies/sidebar_left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>








<!-- Start Search Form -->
       

<?php $_smarty_tpl->tpl_vars['jsfilesx'] = new Smarty_variable(array('chat_pharmacy/chatPlugins.js','assets/js/dataTablePlugins.js','pharmacies/scripts.js','pharmacies/maps.js'), null, 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('main/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('jsfiles'=>$_smarty_tpl->tpl_vars['jsfilesx']->value), 0);?>

<?php }} ?>