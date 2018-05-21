<?php /* Smarty version Smarty-3.1.12, created on 2017-12-26 05:04:19
         compiled from "/home/abdullah/public_html/lomixa2/style/lomixa/pharmacies/sidebar_left.tpl" */ ?>
<?php /*%%SmartyHeaderCode:769244325a41bc33481f10-94773166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da43a5bc9cc175a18d4393c92eb0d80292a078e1' => 
    array (
      0 => '/home/abdullah/public_html/lomixa2/style/lomixa/pharmacies/sidebar_left.tpl',
      1 => 1514249733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '769244325a41bc33481f10-94773166',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'current_user' => 0,
    'var' => 0,
    'site' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a41bc3348d067_04552146',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a41bc3348d067_04552146')) {function content_5a41bc3348d067_04552146($_smarty_tpl) {?><div class="sidebar-detached sidebar-right">
    <div class="sidebar"><div class="bug-list-sidebar-content">
            <!-- Predefined Views -->
            <div class="card">
                <div class="card-head">
                    <div class="media p-1">
                        <div class="media-right">
                            <span class="avatar avatar-sm avatar-online rounded-circle">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['current_user']->value['image'];?>
" alt="avatar"><i></i></span></div>
                        <div class="media-body media-middle" style="padding-right: 11px;">
                             <h6><?php echo $_smarty_tpl->tpl_vars['current_user']->value['fullName'];?>
</h6>
                             <small style="
                             font-size: 70%;
                             "><strong><?php echo $_smarty_tpl->tpl_vars['current_user']->value['points'];?>
</strong> <?php echo $_smarty_tpl->tpl_vars['var']->value['pharmPoints'];?>

                            </small>
                        </div>
                    </div>
                </div>


                <!-- contacts search -->

                <!-- /contacts search -->

                <!-- contacts view -->
                <div class="card-block">
                    <div class="list-group">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value['url'];?>
pharmacies/view/" class="list-group-item active"><?php echo $_smarty_tpl->tpl_vars['var']->value['pharmList'];?>
</a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value['url'];?>
pharmacies/reports/" class="list-group-item list-group-item-action"><?php echo $_smarty_tpl->tpl_vars['var']->value['pharmReports'];?>
</a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value['url'];?>
pharmacies/orders/" class="list-group-item list-group-item-action"><?php echo $_smarty_tpl->tpl_vars['var']->value['pharmOrders'];?>
</a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value['url'];?>
pharmacies/pharmChat_view" class="list-group-item list-group-item-action"><?php echo $_smarty_tpl->tpl_vars['var']->value['pharmChat'];?>
</a>
                        <a href="our-plans.html" class="list-group-item list-group-item-action"><?php echo $_smarty_tpl->tpl_vars['var']->value['pharmPlans'];?>
</a>
                    </div>
                </div>



            </div>
            <!--/ Predefined Views -->

        </div>
    </div>
</div><?php }} ?>