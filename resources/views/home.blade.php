@extends("layout")
@section("main")
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <div class="content-wrapper" style="min-height: 485px;">
        <!-- Content Header (Page header) -->
        <div class="content-header">

        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Monthly Recap Report</h5>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-tool dropdown-toggle"
                                                data-toggle="dropdown">
                                            <i class="fas fa-wrench"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                                            <a href="#" class="dropdown-item">Action</a>
                                            <a href="#" class="dropdown-item">Another action</a>
                                            <a href="#" class="dropdown-item">Something else here</a>
                                            <a class="dropdown-divider"></a>
                                            <a href="#" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <p class="text-center">
                                            <strong>Sales: 7 March, 20202 - 30 July, 2021</strong>
                                        </p>

                                        <div class="chart">
                                            <div class="chartjs-size-monitor">
                                                <div class="chartjs-size-monitor-expand">
                                                    <div class=""></div>
                                                </div>
                                                <div class="chartjs-size-monitor-shrink">
                                                    <div class=""></div>
                                                </div>
                                            </div>
                                            <!-- Sales Chart Canvas -->
                                            <canvas id="salesChart" height="225"
                                                    style="height: 180px; display: block; width: 769px;" width="961"
                                                    class="chartjs-render-monitor"></canvas>
                                        </div>
                                        <!-- /.chart-responsive -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-4">
                                        <p class="text-center">
                                            <strong>Goal Completion</strong>
                                        </p>

                                        <div class="progress-group">
                                            Add Products to Cart
                                            <span class="float-right"><b>160</b>/200</span>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-primary" style="width: 80%"></div>
                                            </div>
                                        </div>
                                        <!-- /.progress-group -->

                                        <div class="progress-group">
                                            Complete Purchase
                                            <span class="float-right"><b>310</b>/400</span>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-danger" style="width: 75%"></div>
                                            </div>
                                        </div>

                                        <!-- /.progress-group -->
                                        <div class="progress-group">
                                            <span class="progress-text">Visit Premium Page</span>
                                            <span class="float-right"><b>480</b>/800</span>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-success" style="width: 60%"></div>
                                            </div>
                                        </div>

                                        <!-- /.progress-group -->
                                        <div class="progress-group">
                                            Send Inquiries
                                            <span class="float-right"><b>250</b>/500</span>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-warning" style="width: 50%"></div>
                                            </div>
                                        </div>
                                        <!-- /.progress-group -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- ./card-body -->
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-sm-3 col-6">
                                        <div class="description-block border-right">
                                            <span class="description-percentage text-success"><i
                                                    class="fas fa-caret-up"></i> 17%</span>
                                            <h5 class="description-header">$35,210.43</h5>
                                            <span class="description-text">TOTAL REVENUE</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-3 col-6">
                                        <div class="description-block border-right">
                                            <span class="description-percentage text-warning"><i
                                                    class="fas fa-caret-left"></i> 0%</span>
                                            <h5 class="description-header">$10,390.90</h5>
                                            <span class="description-text">TOTAL COST</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-3 col-6">
                                        <div class="description-block border-right">
                                            <span class="description-percentage text-success"><i
                                                    class="fas fa-caret-up"></i> 20%</span>
                                            <h5 class="description-header">$24,813.53</h5>
                                            <span class="description-text">TOTAL PROFIT</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-3 col-6">
                                        <div class="description-block">
                                            <span class="description-percentage text-danger"><i
                                                    class="fas fa-caret-down"></i> 18%</span>
                                            <h5 class="description-header">1200</h5>
                                            <span class="description-text">GOAL COMPLETIONS</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <div class="col-md-8">
                        <!-- MAP & BOX PANE -->
                        <!-- /.card -->
                        <div class="row">
                            <div class="col-md-6">
                                <!-- DIRECT CHAT -->
                                <div class="card direct-chat direct-chat-warning">
                                    <div class="card-header">
                                        <h3 class="card-title">Direct Chat</h3>

                                        <div class="card-tools">
                                            <span title="3 New Messages" class="badge badge-warning">3</span>
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                            <button type="button" class="btn btn-tool" title="Contacts"
                                                    data-widget="chat-pane-toggle">
                                                <i class="fas fa-comments"></i>
                                            </button>
                                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <!-- Conversations are loaded here -->
                                        <div class="direct-chat-messages">
                                            <!-- Message. Default to the left -->
                                            <div class="direct-chat-msg">
                                                <div class="direct-chat-infos clearfix">
                                                    <span class="direct-chat-name float-left">Admin</span>
                                                    <span
                                                        class="direct-chat-timestamp float-right">23 June 2:00 pm</span>
                                                </div>
                                                <!-- /.direct-chat-infos -->
                                                <img class="direct-chat-img" src="{{asset("dist/img/gt1.jpg")}}"
                                                     alt="message user image">
                                                <!-- /.direct-chat-img -->
                                                <div class="direct-chat-text">
                                                    Oh shit! I found that something special.
                                                </div>
                                                <!-- /.direct-chat-text -->
                                            </div>
                                            <!-- /.direct-chat-msg -->

                                            <!-- Message to the right -->
                                            <div class="direct-chat-msg right">
                                                <div class="direct-chat-infos clearfix">
                                                    <span class="direct-chat-name float-right">Employee</span>
                                                    <span
                                                        class="direct-chat-timestamp float-left">23 June 2:05 pm</span>
                                                </div>
                                                <!-- /.direct-chat-infos -->
                                                <img class="direct-chat-img" src="{{asset("dist/img/gt2.jpg")}}"
                                                     alt="message user image">
                                                <!-- /.direct-chat-img -->
                                                <div class="direct-chat-text">
                                                    What is this ?
                                                </div>
                                                <!-- /.direct-chat-text -->
                                            </div>
                                            <!-- /.direct-chat-msg -->

                                            <!-- Message. Default to the left -->
                                            <div class="direct-chat-msg">
                                                <div class="direct-chat-infos clearfix">
                                                    <span class="direct-chat-name float-left">Admin</span>
                                                    <span
                                                        class="direct-chat-timestamp float-right">23 June 5:37 pm</span>
                                                </div>
                                                <!-- /.direct-chat-infos -->
                                                <img class="direct-chat-img" src="{{asset("dist/img/gt1.jpg")}}"
                                                     alt="message user image">
                                                <!-- /.direct-chat-img -->
                                                <div class="direct-chat-text">
                                                    Name of the loser :))))
                                                </div>
                                                <!-- /.direct-chat-text -->
                                            </div>
                                            <!-- /.direct-chat-msg -->

                                            <!-- Message to the right -->
                                            <div class="direct-chat-msg right">
                                                <div class="direct-chat-infos clearfix">
                                                    <span class="direct-chat-name float-right">Employee</span>
                                                    <span
                                                        class="direct-chat-timestamp float-left">23 June 6:10 pm</span>
                                                </div>
                                                <!-- /.direct-chat-infos -->
                                                <img class="direct-chat-img" src="{{asset("dist/img/gt2.jpg")}}"
                                                     alt="message user image">
                                                <!-- /.direct-chat-img -->
                                                <div class="direct-chat-text">
                                                    Wtf are talking about ?
                                                </div>
                                                <!-- /.direct-chat-text -->
                                            </div>
                                            <!-- /.direct-chat-msg -->

                                        </div>
                                        <!--/.direct-chat-messages-->

                                        <!-- Contacts are loaded here -->

                                        <!-- /.direct-chat-pane -->
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <form action="#" method="post">
                                            <div class="input-group">
                                                <input type="text" name="message" placeholder="Type Message ..."
                                                       class="form-control">
                                                <span class="input-group-append">
                          <button type="button" class="btn btn-warning">Send</button>
                        </span>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.card-footer-->
                                </div>
                                <!--/.direct-chat -->
                            </div>
                            <!-- /.col -->

                            <div class="col-md-6">
                                <!-- USERS LIST -->
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Members of Company</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body p-0">
                                        <ul class="users-list clearfix row">
                                            <li class="col-md-3">
                                                <img src="{{asset("dist/img/gt1.jpg")}}" alt="User Image">
                                                <a class="users-list-name" href="#">Gia Thịnh</a>
                                            </li>
                                            <li class="col-md-3">
                                                <img src="{{asset("dist/img/gt2.jpg")}}" alt="User Image">
                                                <a class="users-list-name" href="#">Gia Thịnh</a>
                                            </li>
                                            <li class="col-md-3">
                                                <img src="{{asset("dist/img/gt3.jpg")}}" alt="User Image">
                                                <a class="users-list-name" href="#">Gia Thịnh</a>
                                            </li>
                                            <li class="col-md-3">
                                                <img src="{{asset("dist/img/gt4.jpg")}}" alt="User Image">
                                                <a class="users-list-name" href="#">Gia Thịnh</a>
                                            </li>
                                            <li class="col-md-3">
                                                <img src="{{asset("dist/img/chó tùng.jpg")}}"
                                                     style="height: 81px;width: 81px" alt="User Image">
                                                <a class="users-list-name" href="#">Duy Tùng</a>
                                            </li>
                                            <li class="col-md-3">
                                                <img src="{{asset("dist/img/tung.jpg")}}"
                                                     style="height: 81px;width: 81px" alt="User Image">
                                                <a class="users-list-name" href="#">Duy Tùng</a>
                                            </li>
                                            <li class="col-md-3">
                                                <img src="{{asset("dist/img/manh.jpg")}}"
                                                     style="height: 81px;width: 81px" alt="User Image">
                                                <a class="users-list-name" href="#">Mạnh VG</a>
                                            </li>
                                            <li class="col-md-3">
                                                <img src="{{asset("dist/img/manh.jpg")}}"
                                                     style="height: 81px;width: 81px" alt="User Image">
                                                <a class="users-list-name" href="#">Mạnh VG</a>
                                            </li>
                                        </ul>
                                        <!-- /.users-list -->
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer text-center">
                                        <a href="javascript:">View All Users</a>
                                    </div>
                                    <!-- /.card-footer -->
                                </div>
                                <!--/.card -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <!-- TABLE: LATEST ORDERS -->
                        <div class="card">
                            <div class="card-header border-transparent">
                                <h3 class="card-title">Latest Orders</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table m-0">
                                        <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Item</th>
                                            <th>Status</th>
                                            <th>Popularity</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                            <td>Eggs</td>
                                            <td><span class="badge badge-success">Shipped</span></td>
                                            <td>
                                                <div class="sparkbar" data-color="#00a65a" data-height="20">
                                                    USA
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                            <td>Beef</td>
                                            <td><span class="badge badge-warning">Pending</span></td>
                                            <td>
                                                <div class="sparkbar" data-color="#f39c12" data-height="20">
                                                    Viet Nam
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                            <td>Chicken breasts</td>
                                            <td><span class="badge badge-danger">Delivered</span></td>
                                            <td>
                                                <div class="sparkbar" data-color="#f56954" data-height="20">
                                                    France
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                            <td>Coconuts</td>
                                            <td><span class="badge badge-info">Processing</span></td>
                                            <td>
                                                <div class="sparkbar" data-color="#00c0ef" data-height="20">
                                                    Portugal
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                            <td>Corn</td>
                                            <td><span class="badge badge-warning">Pending</span></td>
                                            <td>
                                                <div class="sparkbar" data-color="#f39c12" data-height="20">
                                                    China
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                            <td>Red pepper</td>
                                            <td><span class="badge badge-danger">Delivered</span></td>
                                            <td>
                                                <div class="sparkbar" data-color="#f56954" data-height="20">
                                                    Laos
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                            <td>Macadamia nuts</td>
                                            <td><span class="badge badge-success">Shipped</span></td>
                                            <td>
                                                <div class="sparkbar" data-color="#00a65a" data-height="20">
                                                    India
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                                <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All
                                    Orders</a>
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Browser Usage</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="chart-responsive">
                                            <div class="chartjs-size-monitor">
                                                <div class="chartjs-size-monitor-expand">
                                                    <div class=""></div>
                                                </div>
                                                <div class="chartjs-size-monitor-shrink">
                                                    <div class=""></div>
                                                </div>
                                            </div>
                                            <canvas id="pieChart" height="142" width="286"
                                                    style="display: block; height: 114px; width: 229px;"
                                                    class="chartjs-render-monitor"></canvas>
                                        </div>
                                        <!-- ./chart-responsive -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-4">
                                        <ul class="chart-legend clearfix">
                                            <li><i class="far fa-circle text-danger"></i> Chrome</li>
                                            <li><i class="far fa-circle text-success"></i> IE</li>
                                            <li><i class="far fa-circle text-warning"></i> FireFox</li>
                                            <li><i class="far fa-circle text-info"></i> Safari</li>
                                            <li><i class="far fa-circle text-primary"></i> Opera</li>
                                            <li><i class="far fa-circle text-secondary"></i> Navigator</li>
                                        </ul>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer bg-light p-0">
                                <ul class="nav nav-pills flex-column">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            United States of America
                                            <span class="float-right text-danger">
                        <i class="fas fa-arrow-down text-sm"></i>
                        12%</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            India
                                            <span class="float-right text-success">
                        <i class="fas fa-arrow-up text-sm"></i> 4%
                      </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            China
                                            <span class="float-right text-warning">
                        <i class="fas fa-arrow-left text-sm"></i> 0%
                      </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.footer -->
                        </div>
                        <!-- /.card -->

                        <!-- PRODUCT LIST -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Recently Added Products</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <ul class="products-list product-list-in-card pl-2 pr-2">
                                    <li class="item">
                                        <div class="product-img">
                                            <img src="{{asset("dist/img/corn.jpg")}}" alt="Product Image"
                                                 class="img-size-50">
                                        </div>
                                        <div class="product-info">
                                            <a href="javascript:void(0)" class="product-title">Corn
                                                <span class="badge badge-warning float-right">$1800</span></a>
                                        </div>
                                    </li>
                                    <!-- /.item -->
                                    <li class="item">
                                        <div class="product-img">
                                            <img src="{{asset("dist/img/cucumber.jpg")}}" alt="Product Image"
                                                 class="img-size-50">
                                        </div>
                                        <div class="product-info">
                                            <a href="javascript:void(0)" class="product-title">Cucumber
                                                <span class="badge badge-info float-right">$700</span></a>
                                        </div>
                                    </li>
                                    <!-- /.item -->
                                    <li class="item">
                                        <div class="product-img">
                                            <img src="{{asset("dist/img/onion.jpg")}}" alt="Product Image"
                                                 class="img-size-50">
                                        </div>
                                        <div class="product-info">
                                            <a href="javascript:void(0)" class="product-title">
                                                Onion
                                                <span class="badge badge-danger float-right">$350</span>
                                            </a>
                                        </div>
                                    </li>
                                    <!-- /.item -->
                                    <li class="item">
                                        <div class="product-img">
                                            <img src="{{asset("dist/img/red.jpg")}}" alt="Product Image"
                                                 class="img-size-50">
                                        </div>
                                        <div class="product-info">
                                            <a href="javascript:void(0)" class="product-title">Red pepper
                                                <span class="badge badge-success float-right">$399</span></a>
                                        </div>
                                    </li>
                                    <!-- /.item -->
                                </ul>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer text-center">
                                <a href="javascript:void(0)" class="uppercase">View All Products</a>
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
