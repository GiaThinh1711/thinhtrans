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
    <div class="content-wrapper" style="min-height: 1345.6px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12" style="text-align: center">
                        <h1>Add Products</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- jquery validation -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">New Products</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                <form action="{{url("/products/save")}}" method="post" class="col-md-6" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" value="{{old("name")}}" class="form-control">
                                        @error("name")
                                        <div class="alert alert-danger">{{$message}}</div>@enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" name="image" value="{{old("image")}}"
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea name="des" class="form-control">{{old("des")}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input type="number" min="0" value="{{old("price")}}" name="price"
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Qty</label>
                                        <input type="number" min="0" value="{{old("qty")}}" name="qty"
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select name="category_id" class="form-control">
                                            <option value="0">Select a category</option>
                                            @foreach($categories as $item)
                                                <option @if(old("category_id") == $item->__get("id")) selected
                                                        @endif value="{{$item->__get("id")}}">{{$item->__get("name")}}</option>
                                            @endforeach
                                        </select>
                                        @error("category_id")
                                        <div class="alert alert-danger">{{$message}}</div>@enderror
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-outline-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.content-wrapper -->
                            <x-footer/>

                            <!-- Control Sidebar -->
                            <aside class="control-sidebar control-sidebar-dark">
                                <!-- Control sidebar content goes here -->
                            </aside>
                            <!-- /.control-sidebar -->
                        </div>
                        <x-script/>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
</body>
</html>


