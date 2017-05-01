<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Strudent Reg</title>

    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">

    <link rel="stylesheet" href="{{asset('assets/css/vendor.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/elephant.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/application.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/demo.min.css')}}">

    <!-- Custom CSS by LEFTARM -->
    {{--<link rel="stylesheet" href="{{ asset('custom_assets/css/custom.css') }}">--}}

    @yield('head')
</head>
<body class="layout layout-header-fixed">


<div class="layout-main">
    <div class="layout-content">
        <div class="layout-content-body">

            <div class="title-bar">
                @yield('title-bar')
            </div>

            @yield('content')

        </div>
    </div>
</div>

<script src="{{asset('assets/js/vendor.min.js')}}"></script>
<script src="{{asset('assets/js/elephant.min.js')}}"></script>
<script src="{{asset('assets/js/application.min.js')}}"></script>
{{--<script src="{{asset('assets/js/demo.min.js')}}"></script>--}}

@yield('script')

<script>
    $(function () {
        $('a[disabled]').click(function (e) {
            e.preventDefault();
        })
    })
</script>

</body>
</html>
