   <div class="modal fade" id="modal_del_{$client.id}" tabindex="-1" role="dialog" aria-labelledby="modal_del_{$client.id}" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">delete confirmation</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">are you sure you want to delete user : {$client.name}</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <form method="post">
                <input type="hidden" name="action" value='del_client'>
                <input type='hidden' name="id" value="{$client.id}">
            <button class="btn btn-primary" >Delete {$client.name}</button>
            </form>
          </div>
        </div>
      </div>
    </div>