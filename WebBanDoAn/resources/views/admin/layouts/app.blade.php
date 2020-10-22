<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <base href="{{ asset('') }}">

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive bootstrap 4 admin template" name="description">
        <meta content="Coderthemes" name="author">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets\images\favicon.ico">

        <!-- Plugins css-->
        <link href="assets\libs\sweetalert2\sweetalert2.min.css" rel="stylesheet" type="text/css">

        <!-- App css -->
        <link href="assets\css\bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet">
        <link href="assets\css\icons.min.css" rel="stylesheet" type="text/css">
        <link href="assets\css\app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet">

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets\images\favicon.ico">

        <!-- third party css -->
        <link href="assets\libs\datatables\dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
        <link href="assets\libs\datatables\buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
        <link href="assets\libs\datatables\responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">
        <link href="assets\libs\datatables\select.bootstrap4.min.css" rel="stylesheet" type="text/css">
    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            @include('admin.layouts.topbar')

            @include('admin.layouts.leftmenu')

            @yield('content')

        </div>
        <!-- END wrapper -->

            @include('admin.layouts.rightbar')

        <!-- Vendor js -->
        <script src="assets\js\vendor.min.js"></script>

        <script src="assets\libs\moment\moment.min.js"></script>
        <script src="assets\libs\jquery-scrollto\jquery.scrollTo.min.js"></script>
        <script src="assets\libs\sweetalert2\sweetalert2.min.js"></script>

        <!-- Chat app -->
        <script src="assets\js\pages\jquery.chat.js"></script>

        <!-- Todo app -->
        <script src="assets\js\pages\jquery.todo.js"></script>

        <!--Morris Chart-->
        <script src="assets\libs\morris-js\morris.min.js"></script>
        <script src="assets\libs\raphael\raphael.min.js"></script>

        <!-- Sparkline charts -->
        <script src="assets\libs\jquery-sparkline\jquery.sparkline.min.js"></script>

        <!-- Dashboard init JS -->
        <script src="assets\js\pages\dashboard.init.js"></script>

        <!-- App js -->
        <script src="assets\js\app.min.js"></script>
    </body>

    @yield('script')

</html>
