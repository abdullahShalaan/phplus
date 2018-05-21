<?php /* Smarty version Smarty-3.1.12, created on 2018-01-05 07:23:18
         compiled from "/home/abdullah/public_html/new/style/lomixa/add_modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6041189715a4f0765522127-23170002%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b41596ee9ecc0beaa827d3f82f5c260036552d5e' => 
    array (
      0 => '/home/abdullah/public_html/new/style/lomixa/add_modal.tpl',
      1 => 1515129794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6041189715a4f0765522127-23170002',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a4f0765523528_48376948',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4f0765523528_48376948')) {function content_5a4f0765523528_48376948($_smarty_tpl) {?>


<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div style='padding:30px;' class="modal-content">
  <form method='post'>
      <input type="hidden" name='action' value="add_client">
        <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">name</label>
    <div class="col-sm-10">
        <input required="required" type="text" name="name" class="form-control" id="inputEmail3" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input name="email" type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
              <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">serial_no</label>
    <div class="col-sm-10">
        <input type="text" name="serial_no" class="form-control" id="inputEmail3" placeholder="">
    </div>
  </div>
              <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">license_no</label>
    <div class="col-sm-10">
        <input type="text" name="license_no" class="form-control" id="inputEmail3" placeholder="">
    </div>
  </div>
              <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">validations_no</label>
    <div class="col-sm-10">
        <input type="text" name="validations_no" class="form-control" id="inputEmail3" placeholder="">
    </div>
  </div>        <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">login</label>
    <div class="col-sm-10">
        <input type="text" name="login" class="form-control" id="inputEmail3" placeholder="">
    </div>
  </div>        <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">password</label>
    <div class="col-sm-10">
        <input type="text" name="password" class="form-control" id="inputEmail3" placeholder="">
    </div>
  </div>        <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">secure</label>
    <div class="col-sm-10">
        <input type="text" name="secure" class="form-control" id="inputEmail3" placeholder="">
    </div>
  </div>
          <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">code</label>
    <div class="col-sm-10">
        <input type="text" name="code" class="form-control" id="inputEmail3" placeholder="">
    </div>
  </div>
          <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">mac</label>
    <div class="col-sm-10">
        <input type="text" name="mac" class="form-control" id="inputEmail3" placeholder="">
    </div>
  </div>        <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">exp</label>
    <div class="col-sm-10">
        <input type="text" name="exp" class="form-control" id="inputEmail3" placeholder="">
    </div>
  </div>        <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">status</label>
    <div class="col-sm-10">
        <input type="text" name="status" class="form-control" id="inputEmail3" placeholder="">
    </div>
  </div>
 
  
  
  
  
      

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn-lg btn btn-danger">add</button>
    </div>
  </div>
</form>
    </div>
  </div>
</div><?php }} ?>