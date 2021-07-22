{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--    <meta name="csrf-token" content="6bZOuDqDygOSjOVN3jWQAWKWJ9avQ8yhSxagsGlw">--}}

{{--    <title>AdminLTE 3 | Registration Page</title>--}}

{{--    <!-- Fonts -->--}}
{{--    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&amp;display=swap">--}}

{{--    <!-- Styles -->--}}
{{--    <link rel="stylesheet" href="/css/app.css">--}}

{{--    <!-- Scripts -->--}}
{{--    <script src="/js/app.js" defer=""></script>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="font-sans text-gray-900 antialiased">--}}
{{--    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">--}}
{{--        <div class="register-logo">--}}
{{--            <a href="../../index2.html"><b>Admin</b>LTE</a>--}}
{{--        </div>--}}

{{--        <div class="register-box">--}}
{{--            <form method="POST" action="http://127.0.0.1:8000/register">--}}
{{--                @csrf--}}
{{--                <div>--}}
{{--                    <label class="block font-medium text-sm text-gray-700" for="name">--}}
{{--                        Name--}}
{{--                    </label>--}}
{{--                    <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full" id="name" type="text" name="name" required="required" autofocus="autofocus" autocomplete="name">--}}
{{--                </div>--}}

{{--                <div class="mt-4">--}}
{{--                    <label class="block font-medium text-sm text-gray-700" for="email">--}}
{{--                        Email--}}
{{--                    </label>--}}
{{--                    <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full" id="email" type="email" name="email" required="required">--}}
{{--                </div>--}}

{{--                <div class="mt-4">--}}
{{--                    <label class="block font-medium text-sm text-gray-700" for="password">--}}
{{--                        Password--}}
{{--                    </label>--}}
{{--                    <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full" id="password" type="password" name="password" required="required" autocomplete="new-password">--}}
{{--                </div>--}}

{{--                <div class="mt-4">--}}
{{--                    <label class="block font-medium text-sm text-gray-700" for="password_confirmation">--}}
{{--                        Confirm Password--}}
{{--                    </label>--}}
{{--                    <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full" id="password_confirmation" type="password" name="password_confirmation" required="required" autocomplete="new-password">--}}
{{--                </div>--}}


{{--                <div class="flex items-center justify-end mt-4">--}}
{{--                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="http://127.0.0.1:8000/login">--}}
{{--                        Already registered?--}}
{{--                    </a>--}}

{{--                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition ml-4">--}}
{{--                        Register--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<script src="../../plugins/jquery/jquery.min.js"></script>--}}
{{--<!-- Bootstrap 4 -->--}}
{{--<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>--}}
{{--<!-- AdminLTE App -->--}}
{{--<script src="../../dist/js/adminlte.min.js"></script>--}}

{{--</body>--}}
{{--</html>--}}



<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Registration Page</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="register-page" style="min-height: 570.8px;">
<div class="register-box">
    <div class="register-logo">
        <a href="/"><b>Admin</b>LTE</a>
    </div>

    <div class="card">
        <div class="card-body register-card-body row" style="margin: auto">
            <p style="margin: auto" class="login-box-msg">Register a new membership</p>
            <form method="POST" action="http://127.0.0.1:8000/register">
                @csrf
                <div class="row">
                    <label class="block font-medium text-sm text-gray-700 col-md-6" for="name">
                        Name
                    </label>
                    <input class="col-md-6 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full" id="name" type="text" name="name" required="required" autofocus="autofocus" autocomplete="name">
                </div>

                <div class="row">
                    <label class="block font-medium text-sm text-gray-700 col-md-6" for="email">
                        Email
                    </label>
                    <input class="col-md-6 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full" id="email" type="email" name="email" required="required">
                </div>

                <div class="row">
                    <label class="block font-medium text-sm text-gray-700 col-md-6" for="password">
                        Password
                    </label>
                    <input class="col-md-6 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full" id="password" type="password" name="password" required="required" autocomplete="new-password">
                </div>

                <div class="row">
                    <label class="block font-medium text-sm text-gray-700 col-md-6" for="password_confirmation">
                        Retype Password
                    </label>
                    <input class="col-md-6 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full" id="password_confirmation" type="password" name="password_confirmation" required="required" autocomplete="new-password">
                </div>
                <div class="flex items-center justify-end mt-4 row">
                    <a class="col-md-6 underline text-sm text-gray-600 hover:text-gray-900" href="http://127.0.0.1:8000/login">
                        Already registered?
                    </a>
                    <button type="submit" style="background-color: #0c84ff" class="col-md-6 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition ">
                        Register
                    </button>
                </div>
            </form>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>


</body></html>
