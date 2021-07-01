<!DOCTYPE html>
<html>
<x-head/>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    <x-nav/>
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    <x-sidebar/>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper col-md-10" >
        <!-- Content Header (Page header) -->
{{--        <section class="content-header">--}}
{{--            <div class="container-fluid">--}}
{{--                <div class="row mb-2">--}}
{{--                    <div class="col-sm-6">--}}
{{--                        <h1>User</h1>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-6">--}}
{{--                        <ol class="breadcrumb float-sm-right">--}}
{{--                            <li class="breadcrumb-item"><a href="#">Home</a></li>--}}
{{--                            <li class="breadcrumb-item active">Category</li>--}}
{{--                        </ol>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div><!-- /.container-fluid -->--}}
{{--        </section>--}}
        <!-- Main content -->
        <section class="content" style="padding-top: 30px">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- /.card -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">User Table</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <table class="table table-condensed">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th style="width: 10px">Name</th>
                                        <th >Email</th>
                                        <th >Created_at</th>
                                        <th >Updated_at</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($user as $us)
                                        <tr>
                                            <td>{{$us->id}}</td>
                                            <td>{{$us->name}}</td>
                                            <td>{{$us->email}}</td>
                                            {{--                                            <td>{{$cat->product_count}}</td>--}}
                                            <td>{{$us->created_at}}</td>
                                            <td>{{$us->updated_at}}</td>
                                            @can("user-type")<td><a href="{{url("/user/remove",["id"=>$us->id])}}"><box-icon type='solid' name='trash' color="gray"></box-icon></a></td>@endcan
{{--                                            <a href="{{url("admin/user/edit",["id"=>$us->id])}}">&ensp;&ensp;<box-icon type='solid' name='edit'></box-icon></a>--}}
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
{{--Box-icon--}}
<script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
</body>
</html>

