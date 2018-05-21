<?php /* Smarty version Smarty-3.1.12, created on 2017-12-26 11:40:31
         compiled from "/home/abdullah/public_html/lomixa2/style/lomixa/medical_special/medicalspecial-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6431505345a42190f654387-96705589%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94e720e83d6e19a808dcf44918e78e25ce410b24' => 
    array (
      0 => '/home/abdullah/public_html/lomixa2/style/lomixa/medical_special/medicalspecial-form.tpl',
      1 => 1514249733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6431505345a42190f654387-96705589',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site' => 0,
    'var' => 0,
    'jsfilesx' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a42190f678d18_22347136',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a42190f678d18_22347136')) {function content_5a42190f678d18_22347136($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('main/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
                    <h4 class="card-title"><?php echo $_smarty_tpl->tpl_vars['var']->value['MedicalSpecialTable'];?>
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
                                    <td><?php echo $_smarty_tpl->tpl_vars['var']->value['MedicalID'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['var']->value['MedicalSpecialImg'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['var']->value['MedicalSpecialName'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['var']->value['MedicalEdit'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['var']->value['MedicalDelete'];?>
</td>
                                </tr>
                            </thead>
                            <tbody id="medicalSpecial_tbl">
                                <?php echo $_smarty_tpl->getSubTemplate ('medical_special/medicalspecial-edit-form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
        <i class="fa fa-plus" style="margin-right: 6px"></i><?php echo $_smarty_tpl->tpl_vars['var']->value['AddNewMedicalSpecial'];?>

    </button>

    <!-- Modal -->
    <div class="modal fade" id="insert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center" id="myModalLabel"><?php echo $_smarty_tpl->tpl_vars['var']->value['AddNewMedicalSpecial'];?>
</h4>
                    <div class="clearfix"></div>
                </div>
                <div class="modal-body">
                    <form name="multiform" id="multiform" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="xsub" value="1">

                        <div class="form-group row">
                            <label class="col-md-3 label-control"><?php echo $_smarty_tpl->tpl_vars['var']->value['MedicalSpecialImg'];?>
</label>


                            <div class="fileinput fileinput-new col-md-9" data-provides="fileinput"><input type="hidden" value="" name="...">
                                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                    <img data-src="holder.js/100%x100%" alt="100%x100%" style="height: 100%; width: 100%; display: block;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALwAAACKCAYAAAAQaiAbAAAFGklEQVR4Xu3Yzyt0YRjG8UdS8iOKxEbERnbK//8HKBYSC0osyELJj0h63+5T9+lx3mnO4d3N9zurYY4Z1319zjPPOVOPj49/ig8nAJnAlOAhTRuzmYDghYCagOBRdRtW8BpATUDwqLoNK3gNoCYgeFTdhhW8BlATEDyqbsMKXgOoCQgeVbdhBa8B1AQEj6rbsILXAGoCgkfVbVjBawA1AcGj6jas4DWAmoDgUXUbVvAaQE1A8Ki6DSt4DaAmIHhU3YYVvAZQExA8qm7DCl4DqAkIHlW3YQWvAdQEBI+q27CC1wBqAoJH1W1YwWsANQHBo+o2rOA1gJqA4FF1G1bwGkBNQPCoug0reA2gJiB4VN2GFbwGUBMQPKpuwwpeA6gJCB5Vt2EFrwHUBASPqtuwgtcAagKCR9VtWMFrADUBwaPqNqzgNYCagOBRdRtW8BpATUDwqLoNK3gNoCYgeFTdhhW8BlATEDyqbsMKXgOoCQgeVbdhBa8B1AQEj6rbsILXAGoCgkfVbVjBDzDw/Pxcjo+Py9zcXDk8PGz+In/3+fnZ/Ly7u1u2traa59fX1+Xy8rJ5PjMzUw4ODsri4uKATyrl7OysPDw8lL29vbK+vt78Tfzu7u5u5PvVr8X/F581Ozs76LOIBwm+p/X7+/tyfn5evr6+ytLSUgP+/f29OQHiEcBOT0/Ly8tLgzQecfza2lrZ3Nxsjkv0fRCPjo7K09NTmZ6ebsHn59fvlydenlhxssV7x+cuLCy0JyURdF9mwY+ZUI09Dkvw3RU/V9mAF49Y3eN5rNABPr4F4sS4ublpVup4bWVl5dvJECdNYI9HDb7+90Z9bn4bzM/P/+jk6oMxqa8Lvgd8AN3Y2Phn9YzVOCEH1re3twZ1PAL56upqu8LnipzfDPF3sep/fHy0K/nJyUnzObe3t+23RW5p4j3rlX5/f7/5nPzd9vZ2u8LHN0G+Pqlo/yeX4AdML2HV24XEG9C7+/RR26D8mHp/n98Y9b8QJ1Juj2rwcUx3KxXbmPr94oQR+/hCBf8L8F14V1dX7YVmvYff2dn5ttcPoPm39eo+FHwcV1/Uxnvl9im3SPWF9YBouEMEP6Dy7grf3V7UP8fb1XdZundd+u6qjFvh473j9dw+XVxctM/jLlD92tC7QgPiT9Qhgh9QZxd8XjzmViZW+LwYzYvW2F7kCp97/dfX1/ZaIFbivD6otyFd8PWdmO4qXl8sdy+C++4IDYg9kYcIfkCto/bw3Ts49f65XsXrOy415uXl5W93cHJFHrXC5+3K+Fe799rr1356z39A9Ik7RPATV6mBxk1A8PpATUDwqLoNK3gNoCYgeFTdhhW8BlATEDyqbsMKXgOoCQgeVbdhBa8B1AQEj6rbsILXAGoCgkfVbVjBawA1AcGj6jas4DWAmoDgUXUbVvAaQE1A8Ki6DSt4DaAmIHhU3YYVvAZQExA8qm7DCl4DqAkIHlW3YQWvAdQEBI+q27CC1wBqAoJH1W1YwWsANQHBo+o2rOA1gJqA4FF1G1bwGkBNQPCoug0reA2gJiB4VN2GFbwGUBMQPKpuwwpeA6gJCB5Vt2EFrwHUBASPqtuwgtcAagKCR9VtWMFrADUBwaPqNqzgNYCagOBRdRtW8BpATUDwqLoNK3gNoCYgeFTdhhW8BlATEDyqbsMKXgOoCQgeVbdhBa8B1AQEj6rbsILXAGoCgkfVbVjBawA1AcGj6jas4DWAmoDgUXUb9i9SYu4S3bgOtQAAAABJRU5ErkJggg==">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 12px;"></div>
                                <div>
                                    <span class="btn btn-primary btn-embossed btn-file">
                                        <span class="fileinput-new"><span class="fui-image"></span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['var']->value['Selectimage'];?>
</span>
                                        <span class="fileinput-exists"><span class="fui-gear"></span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['var']->value['Change'];?>
</span>
                                        <input type="file" id="insmedicalSpecialImg"  name="medicalSpecialImg">
                                    </span>
                                    <a href="#" class="btn btn-primary btn-embossed fileinput-exists" data-dismiss="fileinput"><span class="fui-trash"></span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['var']->value['Remove'];?>
</a>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="medicalSpecialName"><?php echo $_smarty_tpl->tpl_vars['var']->value['MedicalSpecialName'];?>
</label>
                            <input type="text" name="medicalSpecialName" id="insmedicalSpecialName" class="form-control" aria-describedby="emailHelp" autocomplet="off">
                        </div>

                        <div class="mod-fot modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['var']->value['Close'];?>
</button>

                            <button type="button" id="submit" class="btn btn-primary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['var']->value['AddNewMedicalSpecial'];?>
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






<?php $_smarty_tpl->tpl_vars['jsfilesx'] = new Smarty_variable(array('medical_special/medicalspecialPlugins.js'), null, 0);?>



<?php echo $_smarty_tpl->getSubTemplate ('main/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('jsfiles'=>$_smarty_tpl->tpl_vars['jsfilesx']->value), 0);?>



<?php }} ?>