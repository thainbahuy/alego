<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Alego Story Admin  - Reset Password</title>

      <!-- Bootstrap core CSS-->
      <link href="{{asset('admin')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

      <!-- Custom fonts for this template-->
      <link href="{{asset('admin')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

      <!-- Custom styles for this template-->
      <link href="{{asset('admin')}}/css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div style="max-width: 30rem;" class="card card-login mx-auto mt-5">
                  <div class="card-header">Reset Password</div>
                  <div class="card-body">
                      <div class="text-center">
                          <h4>Reset your password</h4>
                      </div>
                      @if (count($errors) > 0)
                          <div class="alert alert-danger">
                              <ul>
                                  @foreach ($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                  @endforeach
                              </ul>
                          </div>
                      @endif
                      @if(Session::has('success'))
                          <div class="alert alert-success">
                              <ul>
                                  <li>{{Session::get('success') }}</li>
                              </ul>
                          </div>
                      @endif

                      <form method="post" action="{{route('admin.Auth.resetpass')}}">
                          @csrf
                          <input type="text" style="display: none" name="token" value="{{$token}}">
                          <input type="text" style="display: none" name="email" value="{{$email}}">
                          <div class="form-group">
                              <div class="form-label-group">
                                  <input type="password" name="password" id="inputEmail" class="form-control" placeholder="Enter New Password" required="required">
                                  <label for="inputEmail">New Password</label>
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="form-label-group">
                                  <input type="password" name="password_confirmation"  id="inputEmail" class="form-control" placeholder="Enter Confirm Password" required="required" autofocus="autofocus">
                                  <label for="inputEmail">Confirm Password</label>
                              </div>
                          </div>
                          <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
                      </form>
                  </div>

      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  </body>

</html>
