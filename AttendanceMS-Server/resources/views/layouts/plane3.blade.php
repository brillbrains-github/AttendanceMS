<!doctype html>
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8"/>
    <title>Tict Attendance System</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="Online Attendance System" name="description"/>
    <meta content="Sourav Das - Tict Bca1518" name="author"/>
    <link rel="icon" href="{{ asset("/img/Tict_logo.png") }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="{{ asset("css/loader.css") }}" rel="stylesheet">
    <div class="loader" id="loader">Loading...</div>
    <script src="{{ asset("js/loader.js") }}" type="text/javascript"></script>


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("/css/materialize.min.css") }}">
    <link href="{{ asset("/css/style.css") }}" type="text/css" rel="stylesheet" media="screen,projection"/>

    <link href="{{ asset("/css/bootstrap.css") }}" rel="stylesheet"/>


    <link href="{{ asset("css/table.css") }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("/css/animate.css") }}">

    @yield('style')

</head>
<body>
<div id="page-body" style="display:none;height:100%;">
    @yield('body')
</div>
<script src="{{ asset("js/jquery-3.2.1.min.js") }}" type="text/javascript"></script>
<script>
    function loding_click_event_function(event) {
        var href = this.href;
        if (href !== undefined) {
            if (href.indexOf('#') < 0 && href.length > 0) MY_click_load_wait();
            window.location = href;
        }
    }

    //$(window).bind("beforeunload", loding_click_event_function);
    $('[href]').click(loding_click_event_function);
    $(document).ready(function () {
        $('select').material_select();
    });
</script>
<script src="{{ asset("/js/bootstrap.min.js") }}"></script>
<script src="{{ asset("/js/materialize.min.js") }}"></script>
<script src="{{ asset("/js/init.js") }}"></script>
@yield('script')
</body>
</html>