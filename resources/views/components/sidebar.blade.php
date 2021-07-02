<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href=""{{ route('dashboard') }}" class="brand-link">
        <img src="{{asset("dist/img/gg.jpg")}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Healthy Food</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset("dist/img/ff.jpg")}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href=""{{ route('dashboard') }}" class="d-block">{{Auth::user()->name}}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Menu
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item menu-is-opening menu-open">
                            <a href="#" class="nav-link active" style="background-color: rgb(52 58 64);color: white">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Category Table
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview" style="display: block;">
                                <li class="nav-item">
                                    <a href="{{url("admin/categories")}}" class="nav-link"
                                       style="padding-left: 32px">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>List Categories</p>
                                    </a>
                                </li>
                                @can("user-type")
                                    <li class="nav-item">
                                        <a href="{{url("admin/categories/new")}}" class="nav-link"
                                           style="padding-left: 32px">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Add Categories</p>
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                        <li class="nav-item menu-is-opening menu-open">
                            <a href="#" class="nav-link active" style="background-color: rgb(52 58 64);color: white">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Product Table
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview" style="display: block;">
                                <li class="nav-item">
                                    <a href="{{url("admin/products")}}" class="nav-link"
                                       style="padding-left: 32px">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>List Product</p>
                                    </a>
                                </li>
                                @can("user-type")
                                    <li class="nav-item">
                                        <a href="{{url("admin/products/new")}}" class="nav-link"
                                           style="padding-left: 32px">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Add Product</p>
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                        <li class="nav-item menu-is-opening menu-open">
                            <a href="#" class="nav-link active"
                               style="background-color: rgb(52 58 64);color: white">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    User Table
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview" style="display: block;">

                                <li class="nav-item">
                                    <a href="{{url("admin/user")}}" class="nav-link"
                                       style="padding-left: 32px">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>List User</p>
                                    </a>
                                </li>
                                @can("user-type")
                                    <li class="nav-item">
                                        <a href="{{url("admin/user/new")}}" class="nav-link"
                                           style="padding-left: 32px">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Add User</p>
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    <!-- /.sidebar -->
</aside>

