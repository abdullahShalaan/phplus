<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="{$site.style}vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="{$site.style}vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="{$site.style}vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="{$site.style}css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
{include file='menu.tpl'}
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
                  {foreach $clients as $client}
                <tr>
                    <td>{$client.id}
                     <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal_del_{$client.id}">delete</button>
                     
                    </td>
                    <td>{$client.name}
                                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editmodal_{$client.id}">edit</button>

                    
                    </td>
                    <td>{$client.email}</td>
                    <td>{$client.serial_no}</td>
                        <td>license_no</td>

                    <td>{$client.validations_no}</td>
                    <td>{$client.login}</td>
                    <td>{$client.password}</td>
                    <td>{$client.secure}</td>
                    <td>{$client.code}</td>
                    <td>{$client.mac}</td>
                    <td>{$client.exp}</td>
                    <td>{$client.status}
                    {include file='edit_modal.tpl'}
                       {include file='delete_modal.tpl'}
                    </td>
                    
                </tr>
              {/foreach}
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
            <a class="btn btn-primary" href="{$site.url}auth/logout">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="{$site.style}vendor/jquery/jquery.min.js"></script>
    <script src="{$site.style}vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="{$site.style}vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="{$site.style}vendor/datatables/jquery.dataTables.js"></script>
    <script src="{$site.style}vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="{$site.style}js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="{$site.style}js/sb-admin-datatables.min.js"></script>
    
    
    
    
    
  </div>
    {include file='add_modal.tpl'}
</body>

</html>
