{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--    <meta name="csrf-token" content="tZvWgoqbdlRnn5qfUGw8qRar2twGzApipUjwC9hI">--}}

{{--    <title>Laravel</title>--}}

{{--    <!-- Fonts -->--}}
{{--    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&amp;display=swap">--}}

{{--    <!-- Styles -->--}}
{{--    <link rel="stylesheet" href="/css/app.css">--}}

{{--    <!-- Scripts -->--}}
{{--    <script src="/js/app.js" defer=""></script>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="font-sans text-gray-900 antialiased" style="background-color: #dfdfdf;height: 100%">--}}
{{--    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100" style="margin: auto;width: 25%">--}}
{{--        <div style="height: 30px;width: 50px;margin: auto">--}}

{{--        </div>--}}

{{--        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">--}}
{{--            <form method="POST" action="http://127.0.0.1:8000/login">--}}
{{--                <input type="hidden" name="_token" value="tZvWgoqbdlRnn5qfUGw8qRar2twGzApipUjwC9hI">--}}
{{--                <div>--}}
{{--                    <input--}}
{{--                        id="email" type="email" name="email" required="required" autofocus="autofocus">--}}
{{--                </div>--}}
{{--                <div class="mt-4">--}}
{{--                    <input--}}
{{--                        id="password" type="password" name="password" required="required"--}}
{{--                        autocomplete="current-password">--}}
{{--                </div>--}}

{{--                <div class="block mt-4">--}}
{{--                    <label for="remember_me" class="flex items-center">--}}
{{--                        <input type="checkbox"--}}
{{--                               class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"--}}
{{--                               id="remember_me" name="remember">--}}
{{--                        <span class="ml-2 text-sm text-gray-600">Remember me</span>--}}
{{--                    </label>--}}
{{--                </div>--}}

{{--                <div class="flex items-center justify-end mt-4">--}}
{{--                    <a class="underline text-sm text-gray-600 hover:text-gray-900"--}}
{{--                       href="http://127.0.0.1:8000/forgot-password">--}}
{{--                        Forgot your password?--}}
{{--                    </a>--}}

{{--                    <button type="submit"--}}
{{--                            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition ml-4">--}}
{{--                        Log in--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}


<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="login-page" style="min-height: 496.8px;">
<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>Admin</b>LTE</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <form method="POST" action="http://127.0.0.1:8000/login">
                @csrf
                <div>
                    <label>Email: &emsp;&emsp;&ensp;  </label>
                    <input
                        id="email" type="email" name="email" required="required" autofocus="autofocus">
                </div>
                <div class="mt-4">
                    <label style="width: 88px">Password:  &ensp;</label>
                    <input
                        id="password" type="password" name="password" required="required"
                        autocomplete="current-password">
                </div>
                <div class="row" style="margin-top: 20px">
                    <div class="col-md-6">
                        <label for="remember_me" class="flex items-center">
                            <input type="checkbox"
                                   class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                   id="remember_me" name="remember">
                            <span class="ml-2 text-sm text-gray-600">Remember me</span>
                        </label>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" style="background-color: #0c84ff"
                                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition ml-4">
                            Log in
                        </button>
                    </div>
                </div>

                <div class="col-md-6" style="margin: auto;margin-top: 20px">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                       href="http://127.0.0.1:8000/forgot-password">
                        Forgot your password?
                    </a>
                </div>
            </form>

            <div class="social-auth-links text-center mb-3">
                <!-- /.social-auth-links -->
                <p class="mb-0">
                    <a href="{{ route('register') }}" class="text-center">Register a new membership</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
</div>
</body>
</html>
