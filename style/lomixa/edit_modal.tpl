


<div class="modal fade" id='editmodal_{$client.id}' tabindex="-1" role="dialog" aria-labelledby="edit_modal_{$client.id}" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div style='padding:30px;' class="modal-content">
  <form method='post'>
      <input type="hidden" name='action' value="edit_client">
      <input type="hidden" name='id' value="{$client.id}">
        <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">name</label>
    <div class="col-sm-10">
        <input required="required" type="text" name="name" class="form-control" id="inputEmail3" placeholder="" value="{$client.name}">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input name="email" type="email" class="form-control" id="inputEmail3" placeholder="Email" value="{$client.email}">
    </div>
  </div>
              <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">serial_no</label>
    <div class="col-sm-10">
        <input type="text" name="serial_no" class="form-control" id="inputEmail3" placeholder="" value="{$client.serial_no}">
    </div>
  </div>
              <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">license_no</label>
    <div class="col-sm-10">
        <input type="text" name="license_no" class="form-control" id="inputEmail3" placeholder="" value="{$client.license_no}">
    </div>
  </div>
              <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">validations_no</label>
    <div class="col-sm-10">
        <input type="text" name="validations_no" class="form-control" id="inputEmail3" placeholder="" value="{$client.validations_no}">
    </div>
  </div>        <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">login</label>
    <div class="col-sm-10">
        <input type="text" name="login" class="form-control" id="inputEmail3" placeholder="" value="{$client.login}">
    </div>
  </div>        <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">password</label>
    <div class="col-sm-10">
        <input type="text" name="password" class="form-control" id="inputEmail3" placeholder="" value="{$client.password}">
    </div>
  </div>        <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">secure</label>
    <div class="col-sm-10">
        <input type="text" name="secure" class="form-control" id="inputEmail3" placeholder="" value="{$client.secure}">
    </div>
  </div>
          <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">code</label>
    <div class="col-sm-10">
        <input type="text" name="code" class="form-control" id="inputEmail3" placeholder="" value="{$client.code}">
    </div>
  </div>
          <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">mac</label>
    <div class="col-sm-10">
        <input type="text" name="mac" class="form-control" id="inputEmail3" placeholder="" value="{$client.mac}">
    </div>
  </div>        <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">exp</label>
    <div class="col-sm-10">
        <input type="text" name="exp" class="form-control" id="inputEmail3" placeholder="" value="{$client.exp}">
    </div>
  </div>        <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">status</label>
    <div class="col-sm-10">
        <input type="text" name="status" class="form-control" id="inputEmail3" placeholder="" value="{$client.status}">
    </div>
  </div>
 
  
  
  
  
      

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn-lg btn btn-danger">SAVE</button>
    </div>
  </div>
</form>
    </div>
  </div>
</div>