<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Alego Story Admin  - Forgot Password</title>

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
                          <h4>Forgot your password?</h4>
                          <p>Enter your email address and we will send you instructions on how to reset your password.</p>
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

                      <form method="post" action="{{route('admin.Auth.forgotpass')}}">
                          @csrf
                          <div class="form-group">
                              <div class="form-label-group">
                                  <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Enter email address" required="required" autofocus="autofocus">
                                  <label for="inputEmail">Enter email address</label>
                              </div>
                          </div>
                          <button type="submit" class="btn btn-primary btn-block">Send</button>
                      </form>
                      <div class="text-center">
                          <a class="d-block small" href="{{route('view.admin.Auth.login')}}">Back to Login</a>
                      </div>
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
