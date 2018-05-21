<?php /* Smarty version Smarty-3.1.12, created on 2017-12-26 07:40:25
         compiled from "/home/abdullah/public_html/lomixa2/style/lomixa/diseases/diseases-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2847442785a41e0c9d502a2-71087800%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0882a3765c2f766136cebff31a68edf42e307c6f' => 
    array (
      0 => '/home/abdullah/public_html/lomixa2/style/lomixa/diseases/diseases-form.tpl',
      1 => 1514249733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2847442785a41e0c9d502a2-71087800',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site' => 0,
    'var' => 0,
    'medicalspecial' => 0,
    'medicalspecial2' => 0,
    'jsfilesx' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a41e0c9d8bb28_89686099',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a41e0c9d8bb28_89686099')) {function content_5a41e0c9d8bb28_89686099($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('main/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('main/slide.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<script>
    var site_url = '<?php echo $_smarty_tpl->tpl_vars['site']->value['url'];?>
';
</script>

<!-- Start Table -->

<div class="container">
    <!-- Responsive tables start -->
    <div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><?php echo $_smarty_tpl->tpl_vars['var']->value['DiseasesTable'];?>
</h4>
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

                    <div class="table-responsive">
                        <table class="table mb-0 table-bordered">
                            <thead class="table-inverse">
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['var']->value['DiseasesID'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['var']->value['DiseasesName'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['var']->value['midicalSpecialID'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['var']->value['DiseasesEdit'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['var']->value['DiseasesDelete'];?>
</td>
                                </tr>
                            </thead>
                            <tbody id="diseases_tbl">
                                 <?php echo $_smarty_tpl->getSubTemplate ('diseases/diseases-edit-form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                                



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Responsive tables end -->

    <!-- Start Insert Modal -->

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#insert">
        <i class="fa fa-plus" style="margin-right: 6px"></i><?php echo $_smarty_tpl->tpl_vars['var']->value['AddNewDiseases'];?>

    </button>

    <!-- Modal -->
    <div class="modal fade" id="insert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center" id="myModalLabel"><?php echo $_smarty_tpl->tpl_vars['var']->value['AddNewDiseases'];?>
</h4>
                    <div class="clearfix"></div>
                </div>
                <div class="modal-body">
                    <form id="insert-form"  method="POST">
                        <input type="hidden" name="xsub" value="1">

                        <div class="form-group">
                            <label for="diseasesName"><?php echo $_smarty_tpl->tpl_vars['var']->value['DiseasesName'];?>
</label>
                            <input type="text" name="diseasesName" id="insdiseasesName" class="form-control" aria-describedby="emailHelp" autocomplet="off">
                        </div>


                        

                        <div class="form-group">
                            <label for="medicalSpecialID"><?php echo $_smarty_tpl->tpl_vars['var']->value['midicalSpecialID'];?>
</label>
                            <select name="medicalSpecialID" id="insMidicalSpecialID">
                                <option value='medicalSpecialID'><?php echo $_smarty_tpl->tpl_vars['var']->value['midicalSpecialID'];?>
</option>
                                <?php  $_smarty_tpl->tpl_vars['medicalspecial2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['medicalspecial2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['medicalspecial']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['medicalspecial2']->key => $_smarty_tpl->tpl_vars['medicalspecial2']->value){
$_smarty_tpl->tpl_vars['medicalspecial2']->_loop = true;
?>
                                    <option value='<?php echo $_smarty_tpl->tpl_vars['medicalspecial2']->value['medicalSpecialID'];?>
'><?php echo $_smarty_tpl->tpl_vars['medicalspecial2']->value['medicalSpecialName'];?>
</option>
                                <?php } ?>

                            </select>
                        </div>

                        <div class="mod-fot modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['var']->value['DiseasesClose'];?>
</button>
                            <button type="button" id="submit" class="btn btn-primary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['var']->value['AddNewDiseases'];?>
</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- End Insert Modal -->

<?php $_smarty_tpl->tpl_vars['jsfilesx'] = new Smarty_variable(array('diseases/diseasesPlugins.js'), null, 0);?>



<?php echo $_smarty_tpl->getSubTemplate ('main/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('jsfiles'=>$_smarty_tpl->tpl_vars['jsfilesx']->value), 0);?>

<?php }} ?>