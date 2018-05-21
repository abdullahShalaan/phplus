<?php /* Smarty version Smarty-3.1.12, created on 2018-01-05 06:29:26
         compiled from "/home/abdullah/public_html/new/style/lomixa/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6890348185a4ef8c7e1fe71-25009277%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e68c2e213183b9bfe491d22d95dabfe84d69733' => 
    array (
      0 => '/home/abdullah/public_html/new/style/lomixa/login.tpl',
      1 => 1515126563,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6890348185a4ef8c7e1fe71-25009277',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a4ef8c7e740d4_26141673',
  'variables' => 
  array (
    'site' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4ef8c7e740d4_26141673')) {function content_5a4ef8c7e740d4_26141673($_smarty_tpl) {?><!DOCTYPE html>
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
  <!-- Custom styles for this template-->
  <link href="<?php echo $_smarty_tpl->tpl_vars['site']->value['style'];?>
css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
          <form method="POST">
              <input type="hidden" name="action" value="login">
          <div class="form-group">
            <label for="exampleInputEmail1">username</label>
            <input class="form-control" name="username" type="text" aria-describedby="emailHelp" placeholder="username">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">login</label>
            <input class="form-control" name="password" id="exampleInputPassword1" type="password" placeholder="Password">
          </div>
          <div class="form-group">
            <div class="form-check">
                <?php if ($_smarty_tpl->tpl_vars['error']->value==true){?>
                <label class="danger"> error in username or password</label>
                <?php }?>
            </div>
          </div>
            <button class="btn btn-primary btn-block" >Login</button>
        </form>
  
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
</body>

</html>
<?php }} ?>