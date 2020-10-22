@extends('admin.layouts.app')

@section('content')
<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->



<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    @if (session('warning') != null)
                    <div class="alert-danger p-2" id="closeWarning">
                        {{     session('warning') }} <span class="ion ion-md-close float-right p-1 pr-2 " onclick="closeWarning()"></span>
                    </div>
                    @endif
                    <div class="page-title-box">
                        <h4 class="page-title">Welcome !</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb p-0 m-0">
                                <li class="breadcrumb-item"><a href="#">Velonic</a></li>
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Dashboard 1</li>
                            </ol>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-3 col-sm-6">
                    <div class="card bg-pink">
                        <div class="card-body widget-style-2">
                            <div class="text-white media">
                                <div class="media-body align-self-center">
                                    <h2 class="my-0 text-white"><span data-plugin="counterup">50</span></h2>
                                    <p class="mb-0">Daily Visits</p>
                                </div>
                                <i class="ion-md-eye"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6">
                    <div class="card bg-purple">
                        <div class="card-body widget-style-2">
                            <div class="text-white media">
                                <div class="media-body align-self-center">
                                    <h2 class="my-0 text-white"><span data-plugin="counterup">12056</span></h2>
                                    <p class="mb-0">Sales</p>
                                </div>
                                <i class="ion-md-paper-plane"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6">
                    <div class="card bg-info">
                        <div class="card-body widget-style-2">
                            <div class="text-white media">
                                <div class="media-body align-self-center">
                                    <h2 class="my-0 text-white"><span data-plugin="counterup">1268</span></h2>
                                    <p class="mb-0">New Orders</p>
                                </div>
                                <i class="ion-ios-pricetag"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6">
                    <div class="card bg-primary">
                        <div class="card-body widget-style-2">
                            <div class="text-white media">
                                <div class="media-body align-self-center">
                                    <h2 class="my-0 text-white"><span data-plugin="counterup">145</span></h2>
                                    <p class="mb-0">New Users</p>
                                </div>
                                <i class="mdi mdi-comment-multiple"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-header py-3 bg-transparent">
                            <div class="card-widgets">
                                <a href="javascript:;" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                <a data-toggle="collapse" href="#cardCollpase1" role="button" aria-expanded="false"
                                    aria-controls="cardCollpase1"><i class="mdi mdi-minus"></i></a>
                                <a href="#" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                            </div>
                            <h5 class="header-title mb-0">Weekly Sales Report</h5>
                        </div>
                        <div id="cardCollpase1" class="collapse show">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="morris-bar-example" class="morris-charts" dir="ltr"
                                            style="height: 320px;"></div>
                                        <div class="row text-center mt-4 mb-4">
                                            <div class="col-sm-3 col-6">
                                                <h5>$ 126</h5>
                                                <small class="text-muted"> Today's Sales</small>
                                            </div>
                                            <div class="col-sm-3 col-6">
                                                <h5>$ 967</h5>
                                                <small class="text-muted">This Week's Sales</small>
                                            </div>
                                            <div class="col-sm-3 col-6">
                                                <h5>$ 4500</h5>
                                                <small class="text-muted">This Month's Sales</small>
                                            </div>
                                            <div class="col-sm-3 col-6">
                                                <h5>$ 87,000</h5>
                                                <small class="text-muted">This Year's Sales</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end card-->

                </div>
                <!-- end col -->

                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-header py-3 bg-transparent">
                            <div class="card-widgets">
                                <a href="javascript:;" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                <a data-toggle="collapse" href="#cardCollpase2" role="button" aria-expanded="false"
                                    aria-controls="cardCollpase2"><i class="mdi mdi-minus"></i></a>
                                <a href="#" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                            </div>
                            <h5 class="header-title mb-0"> Yearly Sales Report</h5>
                        </div>
                        <div id="cardCollpase2" class="collapse show">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="morris-line-example" class="morris-charts" dir="ltr"
                                            style="height: 200px;"></div>
                                        <div class="row text-center mt-4">
                                            <div class="col-sm-4">
                                                <h5>$ 86,956</h5>
                                                <small class="text-muted"> This Year's Report</small>
                                            </div>
                                            <div class="col-sm-4">
                                                <h5>$ 86,69</h5>
                                                <small class="text-muted">Weekly Sales Report</small>
                                            </div>
                                            <div class="col-sm-4">
                                                <h5>$ 948,16</h5>
                                                <small class="text-muted">Yearly Sales Report</small>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end card-->

                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="status">
                                        <h3 class="mt-2">61.5%</h3>
                                        <p class="mb-1">US Dollar Share</p>
                                    </div>
                                </div>
                                <div class="col-sm-4 mt-3">
                                    <span class="sparkpie-big"><canvas width="98" height="50"
                                            style="display: inline-block; width: 98px; height: 50px; vertical-align: top;"></canvas></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End row -->

            <div class="row">
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-header py-3 bg-transparent">
                            <div class="card-widgets">
                                <a href="javascript:;" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                <a data-toggle="collapse" href="#cardCollpase3" role="button" aria-expanded="false"
                                    aria-controls="cardCollpase3"><i class="mdi mdi-minus"></i></a>
                                <a href="#" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                            </div>
                            <h5 class="header-title mb-0">Chat</h5>
                        </div>
                        <div id="cardCollpase3" class="collapse show">
                            <div class="card-body">
                                <div class="chat-conversation">
                                    <ul class="conversation-list slimscroll" style="min-height: 330px;">
                                        <li class="clearfix">
                                            <div class="chat-avatar">
                                                <img src="assets\images\users\avatar-2.jpg" alt="male">
                                                <i>10:00</i>
                                            </div>
                                            <div class="conversation-text">
                                                <div class="ctext-wrap">
                                                    <i>John Deo</i>
                                                    <p>
                                                        Hello!
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="clearfix odd">
                                            <div class="chat-avatar">
                                                <img src="assets\images\users\avatar-3.jpg" alt="Female">
                                                <i>10:01</i>
                                            </div>
                                            <div class="conversation-text">
                                                <div class="ctext-wrap">
                                                    <i>Smith</i>
                                                    <p>
                                                        Hi, How are you? What about our next meeting?
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <div class="chat-avatar">
                                                <img src="assets\images\users\avatar-2.jpg" alt="male">
                                                <i>10:01</i>
                                            </div>
                                            <div class="conversation-text">
                                                <div class="ctext-wrap">
                                                    <i>John Deo</i>
                                                    <p>
                                                        Yeah everything is fine
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="clearfix odd">
                                            <div class="chat-avatar">
                                                <img src="assets\images\users\avatar-3.jpg" alt="male">
                                                <i>10:02</i>
                                            </div>
                                            <div class="conversation-text">
                                                <div class="ctext-wrap">
                                                    <i>Smith</i>
                                                    <p>
                                                        Wow that's great
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="row mt-3">
                                        <div class="col-9 chat-inputbar">
                                            <input type="text" class="form-control chat-input"
                                                placeholder="Enter your text">
                                        </div>
                                        <div class="col-3 chat-send">
                                            <button type="submit" class="btn btn-info btn-block">Send</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- end Chat -->
                </div>
                <!-- end col-->

                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-header py-3 bg-transparent">
                            <div class="card-widgets">
                                <a href="javascript:;" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                <a data-toggle="collapse" href="#cardCollpase4" role="button" aria-expanded="false"
                                    aria-controls="cardCollpase4"><i class="mdi mdi-minus"></i></a>
                                <a href="#" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                            </div>
                            <h5 class="header-title mb-0"> Todo</h5>
                        </div>
                        <div id="cardCollpase4" class="collapse show">
                            <div class="card-body">
                                <div class="todoapp">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h6 id="todo-message"><span id="todo-remaining"></span> of <span
                                                    id="todo-total"></span> remaining</h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <a href="" class="float-right btn btn-primary btn-sm"
                                                id="btn-archive">Archive</a>
                                        </div>
                                    </div>

                                    <ul class="list-group slimscroll todo-list" style="max-height: 310px;"
                                        id="todo-list"></ul>

                                    <form name="todo-form" id="todo-form" class="mt-3">
                                        <div class="row">
                                            <div class="col-9 todo-inputbar">
                                                <input type="text" id="todo-input-text" name="todo-input-text"
                                                    class="form-control" placeholder="Add new todo">
                                            </div>
                                            <div class="col-3 todo-send">
                                                <button class="btn-info btn-block btn" type="button"
                                                    id="todo-btn-submit">Add</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end card-->

                </div>
                <!-- end col -->

                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-header py-3 bg-transparent">
                            <div class="card-widgets">
                                <a href="javascript:;" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                <a data-toggle="collapse" href="#cardCollpase5" role="button" aria-expanded="false"
                                    aria-controls="cardCollpase5"><i class="mdi mdi-minus"></i></a>
                                <a href="#" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                            </div>
                            <h5 class="header-title mb-0"> Team Members</h5>
                        </div>
                        <div id="cardCollpase5" class="collapse show">
                            <div class="card-body">
                                <ul class="list-group list-group-lg">
                                    <li class="list-group-item border-0 pt-2">
                                        <a href="" class=" mr-3">
                                            <img src="assets\images\users\avatar-3.jpg" alt="user-img"
                                                class="avatar-sm rounded">
                                        </a>
                                        <span class="float-right badge badge-primary mt-2">CEO</span>
                                        <a href="">Jonathan Deo</a>
                                    </li>
                                    <li class="list-group-item border-0">
                                        <a href="" class=" mr-3">
                                            <img src="assets\images\users\avatar-4.jpg" alt="user-img"
                                                class="avatar-sm rounded">
                                        </a>
                                        <span class="float-right badge badge-info mt-2">Webdesigner</span>
                                        <a href="">Doler Perte</a>
                                    </li>
                                    <li class="list-group-item border-0">
                                        <a href="" class=" mr-3">
                                            <img src="assets\images\users\avatar-5.jpg" alt="user-img"
                                                class="avatar-sm rounded">
                                        </a>
                                        <span class="float-right badge badge-primary mt-2">Webdeveloper</span>
                                        <a href="">Jannie Dvis</a>
                                    </li>
                                    <li class="list-group-item border-0">
                                        <a href="" class=" mr-3">
                                            <img src="assets\images\users\avatar-6.jpg" alt="user-img"
                                                class="avatar-sm rounded">
                                        </a>
                                        <span class="float-right badge badge-pink mt-2">Programmer</span>
                                        <a href="">Emma Welson</a>
                                    </li>
                                    <li class="list-group-item border-0">
                                        <a href="" class=" mr-3">
                                            <img src="assets\images\users\avatar-7.jpg" alt="user-img"
                                                class="avatar-sm rounded">
                                        </a>
                                        <span class="float-right badge badge-warning mt-2">Webdeveloper</span>
                                        <a href="">Jannie Dvis</a>
                                    </li>
                                    <li class="list-group-item border-0">
                                        <a href="" class=" mr-3">
                                            <img src="assets\images\users\avatar-8.jpg" alt="user-img"
                                                class="avatar-sm rounded">
                                        </a>
                                        <span class="float-right badge badge-info mt-2">Webdesigner</span>
                                        <a href="">Petere Husen</a>
                                    </li>
                                    <li class="list-group-item border-0 pb-1">
                                        <a href="" class=" mr-3">
                                            <img src="assets\images\users\avatar-9.jpg" alt="user-img"
                                                class="avatar-sm rounded">
                                        </a>
                                        <span class="float-right badge badge-warning mt-2">Webdeveloper</span>
                                        <a href="">John Deo</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end card-->
                </div>
                <!-- end col -->
            </div>
            <!-- End row -->

        </div>
        <!-- end container-fluid -->

    </div>
    <!-- end content -->



    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    2015 - 2020 &copy; Velonic theme by <a href="">Coderthemes</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->

</div>

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->
@endsection

