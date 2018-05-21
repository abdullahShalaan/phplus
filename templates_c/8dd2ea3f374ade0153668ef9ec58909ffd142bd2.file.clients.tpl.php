<?php /* Smarty version Smarty-3.1.12, created on 2018-01-05 07:59:22
         compiled from "/home/abdullah/public_html/new/style/lomixa/clients.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4880657985a4f0139336ee9-46969524%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8dd2ea3f374ade0153668ef9ec58909ffd142bd2' => 
    array (
      0 => '/home/abdullah/public_html/new/style/lomixa/clients.tpl',
      1 => 1515131958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4880657985a4f0139336ee9-46969524',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a4f01393490e2_99286851',
  'variables' => 
  array (
    'site' => 0,
    'clients' => 0,
    'client' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4f01393490e2_99286851')) {function content_5a4f01393490e2_99286851($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
<?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Tables</li>
      </ol>

      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>       <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Add new client</button>
</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>id</th>
                  <th>name</th>
                  <th>email</th>
                  <th>serial_no</th>
                  <th>license_no</th>
                  <th>validations_no</th>
                  <th>login</th>
                  <th>password</th>
                  <th>secure</th>
                  <th>code</th>
                  <th>mac</th>
                  <th>exp</th>
                  <th>status</th>
                </tr>
              </thead>
              <tfoot>
                       <tr>
                  <th>id</th>
                  <th>name</th>
                  <th>email</th>
                  <th>serial_no</th>
                  <th>license_no</th>
                  <th>validations_no</th>
                  <th>login</th>
                  <th>password</th>
                  <th>secure</th>
                  <th>code</th>
                  <th>mac</th>
                  <th>exp</th>
                  <th>status</th>
                </tr>
              </tfoot>
              <tbody>
                  <?php  $_smarty_tpl->tpl_vars['client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['clients']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['client']->key => $_smarty_tpl->tpl_vars['client']->value){
$_smarty_tpl->tpl_vars['client']->_loop = true;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>

                     <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal_del_<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
">delete</button>
                     
                    </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['client']->value['name'];?>

                                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editmodal_<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
">edit</button>

                    
                    </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['client']->value['email'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['client']->value['serial_no'];?>
</td>
                        <td>license_no</td>

                    <td><?php echo $_smarty_tpl->tpl_vars['client']->value['validations_no'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['client']->value['login'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['client']->value['password'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['client']->value['secure'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['client']->value['code'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['client']->value['mac'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['client']->value['exp'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['client']->value['status'];?>

                    <?php echo $_smarty_tpl->getSubTemplate ('edit_modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                       <?php echo $_smarty_tpl->getSubTemplate ('delete_modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                    </td>
                    
                </tr>
              <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2017</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['url'];?>
auth/logout">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
js/sb-admin-datatables.min.js"></script>
    
    
    
    
    
  </div>
    <?php echo $_smarty_tpl->getSubTemplate ('add_modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>

</html>
<?php }} ?>