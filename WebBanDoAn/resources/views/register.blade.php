<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Register | Velonic - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive bootstrap 4 admin template" name="description">
        <meta content="Coderthemes" name="author">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets\images\favicon.ico">

        <!-- App css -->
        <link href="assets\css\bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet">
        <link href="assets\css\icons.min.css" rel="stylesheet" type="text/css">
        <link href="assets\css\app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet">

    </head>

    <body class="authentication-page">

        <div class="account-pages my-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        @if (session('warning') != null)
                        <div class="alert-warning pl-3">
                            {{     session('warning') }} <span class="ion ion-md-close float-right p-1 pr-2"></span>
                        </div>
                        @endif
                        <div class="card mt-4">
                            <div class="card-header p-4 bg-primary">
                                <h4 class="text-white text-center mb-0 mt-0">Velonic</h4>
                            </div>
                            <div class="card-body">
                                <form action="register" class="p-2" method="POST">
                                    @csrf

                                    <div class="form-group mb-3">
                                        <label for="name">Name</label>
                                        <input class="form-control " name="name" type="text" id="name" placeholder="Nguyễn Mạnh Huỳnh">
                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="email">Email Address :</label>
                                        <input class="form-control" name="email" type="email" id="email" placeholder="huynhga198@gmail.com" >
                                        @error('email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="password">Password :</label>
                                        <input class="form-control" name="password" type="password" id="password" placeholder="Enter your password">
                                        @error('password')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="password">Password Again :</label>
                                        <input class="form-control" name="passwordAgain" type="password"" id="passwordAgain" placeholder="Enter your password again">
                                        @error('passwordAgain')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-4">
                                        <div class="checkbox checkbox-success">
                                            <input id="remember" name="remember" type="checkbox" checked="">
                                            <label for="remember">
                                                I accept <strong><a href="#">Terms and Conditions</a></strong>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group row text-center mt-4 mb-4">
                                        <div class="col-12">
                                            <button class="btn btn-md btn-block btn-primary waves-effect waves-light" type="submit">Register</button>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-0">
                                        <div class="col-sm-12 text-center">
                                            <a href="pages-login.html">Already have account?</a>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <!-- end row -->

                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

            </div>
        </div>

        <!-- Vendor js -->
        <script src="assets\js\vendor.min.js"></script>

        <!-- App js -->
        <script src="assets\js\app.min.js"></script>

    </body>

</html>
