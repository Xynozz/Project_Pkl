<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <title>
        Dompetku
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{asset('user/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('user/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{asset('user/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{asset('user/assets/css/argon-dashboard.css?v=2.0.4')}}" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="g-sidenav-show bg-gray-100">
    <div class="position-absolute w-100 min-height-300 top-0"
        style="background-image: url({{asset('user/assets/img/banner.jpg')}}); background-position-y: 50%;">
    </div>
    {{-- Sidebar --}}
    @include('layouts.backend.user.sidebar')
    {{-- End Sidebar --}}

    <main class="main-content position-relative border-radius-lg">

        {{-- Content --}}
        @yield('content')
        {{-- End Content --}}

        {{-- Footer --}}
        @include('layouts.backend.user.footer')
        {{-- End Footer --}}

        </div>
    </main>
    <!--   Core JS Files   -->
    <script src="{{asset('user/assets/js/core/popper.min.js')}}"></script>
    <script src="{{asset('user/assets/js/core/bootstrap.min.js')}}"></script>
    <script src="{{asset('user/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('user/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
    <script src="{{asset('user/assets/js/plugins/chartjs.min.js')}}"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
    </script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{asset('user/assets/js/argon-dashboard.min.js?v=2.0.4')}}"></script>
    @include('sweetalert::alert')
</body>

</html>
