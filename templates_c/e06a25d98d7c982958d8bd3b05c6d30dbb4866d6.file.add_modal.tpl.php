<?php /* Smarty version Smarty-3.1.12, created on 2018-01-05 09:37:36
         compiled from "/home/test010/public_html/new/style/lomixa/add_modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14426662935a4f2b408d5e52-19419289%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e06a25d98d7c982958d8bd3b05c6d30dbb4866d6' => 
    array (
      0 => '/home/test010/public_html/new/style/lomixa/add_modal.tpl',
      1 => 1515129794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14426662935a4f2b408d5e52-19419289',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a4f2b408d80c4_77184122',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4f2b408d80c4_77184122')) {function content_5a4f2b408d80c4_77184122($_smarty_tpl) {?>


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