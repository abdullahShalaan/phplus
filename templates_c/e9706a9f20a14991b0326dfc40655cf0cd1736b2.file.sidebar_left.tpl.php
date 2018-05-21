<?php /* Smarty version Smarty-3.1.12, created on 2017-12-26 07:40:43
         compiled from "/home/abdullah/public_html/lomixa2/style/lomixa/clinic/sidebar_left.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7528324325a41e0dbaff707-57734090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9706a9f20a14991b0326dfc40655cf0cd1736b2' => 
    array (
      0 => '/home/abdullah/public_html/lomixa2/style/lomixa/clinic/sidebar_left.tpl',
      1 => 1514249733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7528324325a41e0dbaff707-57734090',
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
  'unifunc' => 'content_5a41e0dbb07911_74702902',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a41e0dbb07911_74702902')) {function content_5a41e0dbb07911_74702902($_smarty_tpl) {?><div class="sidebar-detached sidebar-right">
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
</strong> <?php echo $_smarty_tpl->tpl_vars['var']->value['clinicPoints'];?>

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
clinics/view/" class="list-group-item active"><?php echo $_smarty_tpl->tpl_vars['var']->value['clinicList'];?>
</a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value['url'];?>
clinics/reports/" class="list-group-item list-group-item-action"><?php echo $_smarty_tpl->tpl_vars['var']->value['clinicReports'];?>
</a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value['url'];?>
clinics/orders/" class="list-group-item list-group-item-action"><?php echo $_smarty_tpl->tpl_vars['var']->value['clinicOrders'];?>
</a>
                        <a href="chat-box.html" class="list-group-item list-group-item-action"><?php echo $_smarty_tpl->tpl_vars['var']->value['clinicChat'];?>
</a>
                        <a href="our-plans.html" class="list-group-item list-group-item-action"><?php echo $_smarty_tpl->tpl_vars['var']->value['clinicPlans'];?>
</a>
                    </div>
                </div>



            </div>
            <!--/ Predefined Views -->

        </div>
    </div>
</div><?php }} ?>