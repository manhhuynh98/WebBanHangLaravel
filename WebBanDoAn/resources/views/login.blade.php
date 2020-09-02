<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Login page | Velonic - Responsive Bootstrap 4 Admin Dashboard</title>
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
                        @if (session('success') != null)
                        <div class="alert-success pl-3">
                            {{     session('success') }} <span class="ion ion-md-done-all float-right p-1 pr-2"></span>
                        </div>
                        @endif

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
                                <form action="login" class="p-2" method="POST">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label for="email">Email Address :</label>
                                        <input class="form-control" name="email" type="email" id="email" required="" placeholder="john@deo.com" >
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">Password :</label>
                                        <input class="form-control" name="password" type="password" required="" id="password" placeholder="Enter your password">
                                    </div>

                                    <div class="form-group mb-4">
                                        <div class="checkbox checkbox-success">
                                            <input id="remember" name="remember" type="checkbox" checked="">
                                            <label for="remember">
                                                Remember me
                                            </label>
                                            <a href="pages-recoverpw.html" class="text-muted float-right">Forgot your password?</a>
                                        </div>
                                    </div>

                                    <div class="form-group row text-center mt-4 mb-4">
                                        <div class="col-12">
                                            <button class="btn btn-md btn-block btn-primary waves-effect waves-light" type="submit">Sign In</button>
                                        </div>
                                    </div>

                                    <div class="form-group row text-center mt-4 mb-4">
                                        <div class="col-12">
                                            <button class="btn btn-md btn-block waves-effect waves-light" style="background-color: #d44837" type="button"><a href="loginwithgoogle">Sign In With Google+</a></button>
                                        </div>
                                    </div>
                                    <div class="form-group row text-center mt-4 mb-4">
                                        <div class="col-12">
                                            <button class="btn btn-md btn-block waves-effect waves-light" style="background-color: #d44837" type="submit">Sign In With Google+</button>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-sm-12 text-center">
                                            <p class="text-muted mb-0">Don't have an account? <a href="register" class="text-dark m-l-5"><b>Sign Up</b></a></p>
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
