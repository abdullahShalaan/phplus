<?php /* Smarty version Smarty-3.1.12, created on 2017-12-26 11:39:52
         compiled from "/home/abdullah/public_html/lomixa2/style/lomixa/clinic/clinicReport_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4763333665a4218e8620a55-42879644%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cde8e3ee538061881a32a7f23ff6d91f19e7348' => 
    array (
      0 => '/home/abdullah/public_html/lomixa2/style/lomixa/clinic/clinicReport_view.tpl',
      1 => 1514249733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4763333665a4218e8620a55-42879644',
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
  'unifunc' => 'content_5a4218e8642a51_34953431',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4218e8642a51_34953431')) {function content_5a4218e8642a51_34953431($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['cssfilesx'] = new Smarty_variable(array('plugins/forms/switch.min.css'), null, 0);?>
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
        <div class="content-body">
            <section class="row">
                <div class="col-xs-12">
                    <div class="card">
                        <div class="card-head">
                            <div class="card-header">
                                <h4 class="card-title"><?php echo $_smarty_tpl->tpl_vars['var']->value['clinicReports'];?>
</h4>
                                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <select class="selectBox">
                                        <option value="">Pharmacy Filter</option>
                                        <option value="1">Pharmacy 1</option>
                                        <option value="2">Pharmacy 2</option>
                                        <option value="3">Pharmacy 3</option>

                                    </select>
                                    <button class="btn btn-primary btn-sm"><i class="icon-plus4 white"></i> <?php echo $_smarty_tpl->tpl_vars['var']->value['clinicReportCreate'];?>
</button>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="card-body collapse in">
                            <div class="card-block">
                                <!-- Invoices List table -->

                                <table id="pharm_report" class="table table-white-space table-bordered row-grouping display no-wrap icheck table-middle" role="grid" aria-describedby="invoices-list_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="invoices-list" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 153px;"><?php echo $_smarty_tpl->tpl_vars['var']->value['clinicReportDate'];?>
</th>
                                            <th class="sorting" tabindex="0" aria-controls="invoices-list" rowspan="1" colspan="1" aria-label="Invoice #: activate to sort column ascending" style="width: 153px;"><?php echo $_smarty_tpl->tpl_vars['var']->value['clinicReportInvoice'];?>
</th>
                                            <th class="sorting" tabindex="0" aria-controls="invoices-list" rowspan="1" colspan="1" aria-label="Order No: activate to sort column ascending" style="width: 150px;"><?php echo $_smarty_tpl->tpl_vars['var']->value['clinicOrderNum'];?>
</th>
                                            <th class="sorting" tabindex="0" aria-controls="invoices-list" rowspan="1" colspan="1" aria-label="Customer Name: activate to sort column ascending" style="width: 256px;"><?php echo $_smarty_tpl->tpl_vars['var']->value['clinicReportCustomer'];?>
</th>
                                            <th class="sorting" tabindex="0" aria-controls="invoices-list" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 128px;"><?php echo $_smarty_tpl->tpl_vars['var']->value['clinicReportAmount'];?>
</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr role="row" class="odd">
                                            <td>06/05/2016</td>
                                            <td><a href="invoice-list.html#" class="text-bold-600">INV-001001</a></td>
                                            <td>PO-005201</td>
                                            <td>Elizabeth Washington</td>

                                            <td>200</td>



                                        </tr><tr role="row" class="even">
                                            <td>16/07/2016</td>
                                            <td><a href="invoice-list.html#" class="text-bold-600">INV-001012</a></td>
                                            <td>PO-001201</td>
                                            <td>Andrew Davis</td>

                                            <td>200</td>

                                        </tr><tr role="row" class="odd">
                                            <td>12/11/2016</td>
                                            <td><a href="invoice-list.html#" class="text-bold-600">INV-001401</a></td>
                                            <td>PO-014561</td>
                                            <td>Megan Stephens</td>

                                            <td>200</td>

                                        </tr><tr role="row" class="even">
                                            <td>15/05/2016</td>
                                            <td><a href="invoice-list.html#" class="text-bold-600">INV-001201</a></td>
                                            <td>PO-015201</td>
                                            <td>Judith Carlson</td>

                                            <td>200</td>

                                        </tr><tr role="row" class="odd">
                                            <td>18/06/2016</td>
                                            <td><a href="invoice-list.html#" class="text-bold-600">INV-005801</a></td>
                                            <td>PO-002201</td>
                                            <td>Harry Banks</td>

                                            <td>200</td>

                                        </tr><tr role="row" class="even">
                                            <td>26/08/2016</td>
                                            <td><a href="invoice-list.html#" class="text-bold-600">INV-001011</a></td>
                                            <td>PO-001201</td>
                                            <td>Jeremy Wright</td>

                                            <td>200</td>

                                        </tr><tr role="row" class="odd">
                                            <td>11/11/2016</td>
                                            <td><a href="invoice-list.html#" class="text-bold-600">INV-002101</a></td>
                                            <td>PO-004511</td>
                                            <td>Brittany Lewis</td>

                                            <td>200</td>

                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th rowspan="1" colspan="1"><?php echo $_smarty_tpl->tpl_vars['var']->value['clinicReportDate'];?>
</th>
                                            <th rowspan="1" colspan="1"><?php echo $_smarty_tpl->tpl_vars['var']->value['clinicReportInvoice'];?>
</th>
                                            <th rowspan="1" colspan="1"><?php echo $_smarty_tpl->tpl_vars['var']->value['clinicOrderNum'];?>
</th>
                                            <th rowspan="1" colspan="1"><?php echo $_smarty_tpl->tpl_vars['var']->value['clinicReportCustomer'];?>
</th>
                                            <th rowspan="1" colspan="1"><?php echo $_smarty_tpl->tpl_vars['var']->value['clinicReportAmount'];?>
</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                            <!--/ Invoices table -->
                        </div>
                    </div>
                </div>
        </div>
        </section>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ('clinic/sidebar_left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>


<?php $_smarty_tpl->tpl_vars['jsfilesx'] = new Smarty_variable(array('assets/js/dataTablePlugins.js','pharmacies/scripts.js','pharmacies/maps.js'), null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('main/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('jsfiles'=>$_smarty_tpl->tpl_vars['jsfilesx']->value), 0);?>
<?php }} ?>