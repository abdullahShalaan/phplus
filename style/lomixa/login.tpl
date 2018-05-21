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
  <!-- Custom styles for this template-->
  <link href="{$site.style}css/sb-admin.css" rel="stylesheet">
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
                {if $error eq true}
                <label class="danger"> error in username or password</label>
                {/if}
            </div>
          </div>
            <button class="btn btn-primary btn-block" >Login</button>
        </form>
  
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="{$site.style}vendor/jquery/jquery.min.js"></script>
  <script src="{$site.style}vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="{$site.style}vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
