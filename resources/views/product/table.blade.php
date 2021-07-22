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
    <div class="content-wrapper col-md-10">
        <!-- Content Header (Page header) -->
        <!-- Main content -->
        <section class="content" style="margin-top: 30px">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Products Table</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-head-fixed">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Qty</th>
                                        <th>Category</th>
                                        <th>Create_At</th>
                                        <th>Update_At</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $item)
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->name}}</td>
                                            <td><img width="70px" height="70px" src="{{$item->getImage()}}"></td>
                                            <td>{{$item->des}}</td>
                                            <td>{{$item->price}}</td>
                                            <td>{{$item->qty}}</td>
                                            <td>{{$item->Category->__get("name")}}</td>
                                            <td>{{formatDate($item->created_at)}}</td>
                                            <td>{{formatDate($item->updated_at)}}</td>
                                            @can("user-type")<td><a href="{{url("/products/remove",["id"=>$item->id])}}"><box-icon type='solid' name='trash' color="gray"></box-icon></a><a href="{{url("admin/products/edit",["id"=>$item->id])}}">&ensp;&ensp;<box-icon type='solid' name='edit'></box-icon></a></td>@endcan
                                            <td><a href="{{url("admin/products/add-to-cart",["id"=>$item->id])}}">Add to cart</a>
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

