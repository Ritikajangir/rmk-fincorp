<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>{{config('app.name')}} | @yield('title')</title>

        <link href="images/fav-icon.png" rel="icon">

        <!-- Bootstrap css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">

        <!-- Style css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" async>

    </head>

    <body class="admin-dashboard">

        <div class="login-wrapper">
            <div class="container">
                @yield('content')
            </div>
        </div>

        <!-- Jquery Library -->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <!-- Bootstrap Js -->
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
        @yield('scripts')

    </body>

</html>