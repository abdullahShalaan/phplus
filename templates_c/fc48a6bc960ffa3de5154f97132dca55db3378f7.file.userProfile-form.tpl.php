<?php /* Smarty version Smarty-3.1.12, created on 2017-12-26 11:40:53
         compiled from "/home/abdullah/public_html/lomixa2/style/lomixa/user/userProfile-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20769461065a421925c75158-70734847%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc48a6bc960ffa3de5154f97132dca55db3378f7' => 
    array (
      0 => '/home/abdullah/public_html/lomixa2/style/lomixa/user/userProfile-form.tpl',
      1 => 1514249733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20769461065a421925c75158-70734847',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site' => 0,
    'current_user' => 0,
    'jsfilesx' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a421925c88bb3_45741534',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a421925c88bb3_45741534')) {function content_5a421925c88bb3_45741534($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('main/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('main/slide.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<script>
    var site_url = '<?php echo $_smarty_tpl->tpl_vars['site']->value['url'];?>
';
</script>


<div class="content-body">

    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    <h4 class="form-section"><i class="icon-head"></i> Personal Info</h4>
                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                            <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                            <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                            <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body collapse in">
                    <div class="card-block">

                        <form class="form form-horizontal" name="multiform" id="multiform" method="POST" enctype="multipart/form-data">

                            <div class="form-body">
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="userName">User Name</label>
                                    <div class="col-md-9">
                                        <input type="text" id="userName" class="form-control" placeholder="User Name" name="userName">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="fullName">Full Name</label>
                                    <div class="col-md-9">
                                        <input type="text" id="fullName" class="form-control" placeholder="Full Name" name="fullName">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="userEmail">E-mail</label>
                                    <div class="col-md-9">
                                        <input type="text" id="userEmail" class="form-control" placeholder="E-mail" name="userEmail">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="userAddress">Adress</label>
                                    <div class="col-md-9">
                                        <input type="text" id="userAddress" class="form-control" placeholder="Adress" name="userAddress">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="gender">Gender</label>
                                    <div class="col-md-9">
                                        <select class="selectBox selectBox-fixed" name="gender" id="gender">
                                            <option value="1">Male</option>
                                            <option value="2">FEMALE</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="userBirth">Date of Birth</label>

                                    
                                    <div class="col-lg-6 mb-1">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <span class="icon-calendar5"></span>
                                            </span>
                                            <input id="userBirth" name="userBirth" placeholder="DD/MM/YYYY" class="datepicker" type="date">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 label-control">Profile picture</label>


                                    <div class="fileinput fileinput-new col-md-9" data-provides="fileinput"><input type="hidden" value="" name="...">
                                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                            <img data-src="holder.js/100%x100%" alt="100%x100%" style="height: 120px;  display: block;" src="<?php echo $_smarty_tpl->tpl_vars['site']->value['url'];?>
/<?php echo $_smarty_tpl->tpl_vars['current_user']->value['image'];?>
">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 12px;"></div>
                                        <div>
                                            <span class="btn btn-primary btn-embossed btn-file">
                                                <span class="fileinput-new"><span class="fui-image"></span>&nbsp;&nbsp;Select image</span>
                                                <span class="fileinput-exists"><span class="fui-gear"></span>&nbsp;&nbsp;Change</span>
                                                <input type="file" id="userImg"  name="userImg">
                                            </span>
                                            <a href="#" class="btn btn-primary btn-embossed fileinput-exists" data-dismiss="fileinput"><span class="fui-trash"></span>&nbsp;&nbsp;Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-actions center">
                                <button type="button" class="btn btn-warning mr-1">
                                    <i class="icon-cross2"></i> Cancel
                                </button>
                                <button type="button" id="userProfileSave" class="btn btn-primary">
                                    <i class="icon-check2"></i> Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- // Basic form layout section end -->
</div>

<?php $_smarty_tpl->tpl_vars['jsfilesx'] = new Smarty_variable(array('js/userProfilePlugins.js'), null, 0);?>



<?php echo $_smarty_tpl->getSubTemplate ('main/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('jsfiles'=>$_smarty_tpl->tpl_vars['jsfilesx']->value), 0);?>

<?php }} ?>