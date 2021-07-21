<!DOCTYPE html>
<html lang="en">
<x-head/>
<body class="hold-transition  sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__wobble" src="{{asset("dist/img/ff.jpg")}}" alt="AdminLTELogo" height="80" width="80">
    </div>
@yield("main")
<!-- Navbar -->
    <x-nav/>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <x-sidebar/>
    <!-- Content Wrapper. Contains page content -->

    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <x-aside/>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-2">
            </div>

            <div class="col-md-10" style="padding: 0">
                <form action="{{url("/user/save")}}" method="post">
                    @csrf
                    <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md" style="box-shadow: none">
                        <div class="">
                            <!-- Team Owner Information -->
                            <div class="col-span-6">
                                <div class="col-md-12">
                                    <div class="ml-4 leading-tight" style="text-align: center">
                                        <p style="font-size: 20px;font-weight: bolder;margin-top: 10px">Create user account</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Team Name -->
                            <div class="col-span-6 sm:col-span-4">
                                <label class="block font-medium text-sm text-gray-700" for="name">
                                    User Name
                                </label>
                                </br>
                                <input style="width: 400px;height: 30px"
                                       class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="name" type="text" name="name">
                            </div>
                            <div class="col-span-6 sm:col-span-4" style="margin-top: 20px">
                                <label class="block font-medium text-sm text-gray-700" for="email">
                                    Email
                                </label>
                                </br>
                                <input style="width: 400px;height: 30px"
                                       class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="name" type="email" name="email">
                            </div>
                            <div class="col-span-6 sm:col-span-4" style="margin-top: 20px">
                                <label class="block font-medium text-sm text-gray-700" for="password">
                                    Password
                                </label>
                                </br>
                                <input style="width: 400px;height: 30px"
                                       class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="name" type="password" name="password">
                            </div>
                            <div class="col-span-6 sm:col-span-4" style="margin-top: 20px">
                                <label class="block font-medium text-sm text-gray-700" for="confirm_password">
                                    Confirm Password
                                </label>
                                </br>
                                <input style="width: 400px;height: 30px"
                                       class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="name" type="password" name="confirm_password">
                            </div>
                        </div>
                        <div style="margin-top: 20px" >
                            <div x-data="{ shown: false, timeout: null }"
                                 x-init="window.livewire.find('KCn4YaC6kym2xj7rnKk4').on('saved', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 2000);  })"
                                 x-show="shown" style="display: none;"
                                 class="text-sm text-gray-600 mr-3">
                                Saved.
                            </div>
                            <button style="background-color: cornflowerblue" type="submit"
                                    class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</div>
<!-- ./wrapper -->

<x-script/>
</body>
</html>




