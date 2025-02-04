<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from jthemes.net/themes/html/quizo/version-5/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Aug 2024 10:58:06 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <!-- FontAwesome-cdn include -->
    <link rel="stylesheet" href="{{ asset('quizo/css/all.min.css') }}">
    <!-- Google fonts include -->
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700;800&amp;family=Sen:wght@400;700;800&amp;display=swap"
        rel="stylesheet">
    <!-- Bootstrap-css include -->
    <link rel="stylesheet" href="{{ asset('quizo/css/bootstrap.min.css') }}">
    <!-- Animate-css include -->
    <link rel="stylesheet" href="{{ asset('quizo/css/animate.min.css') }}">
    <!-- Main-StyleSheet include -->
    <link rel="stylesheet" href="{{ asset('quizo/css/style.css') }}">
</head>

<body>
    <div class="wrapper">
        <!-- Top content -->
        {{-- @yield('content') --}}
    </div>
    <!-- jQuery-js include -->
    <script src="{{ asset('quizo/js/jquery-3.6.0.min.js') }}"></script>
    <!-- jquery-count-down include -->
    {{-- <script src="{{ asset('quizo/js/countdown.js') }}"></script> --}}
    <!-- Bootstrap-js include -->
    <script src="{{ asset('quizo/js/bootstrap.min.js') }}"></script>
    <!-- jQuery-validate-js include -->
    <script src="{{ asset('quizo/js/jquery.validate.min.js') }}"></script>
    <!-- Custom-js include -->
    {{-- <script src="{{ asset('quizo/js/script.js') }}"></script> --}}
    @stack('js')

    <!-- <script type="text/javascript">
        $('#getting-started').countdown('2020/07/25', function(event) {
            $(this).html(event.strftime('%w weeks %d days %H:%M:%S'));
        });
    </script> -->
</body>

<!-- Mirrored from jthemes.net/themes/html/quizo/version-5/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Aug 2024 10:58:08 GMT -->

</html>
