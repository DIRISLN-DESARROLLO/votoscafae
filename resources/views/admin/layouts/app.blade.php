<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head>
    <base href=""/>
    <title>Votaciones SUB-CAFAE - 2024</title>
    <meta charset="utf-8"/>
    <meta name="description" content="Sistema de votaciones de DIRIS LN" />
    <meta name="keywords" content="votaciones, diris ln, 2024" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="Login SUBCAFAE - DIRIS Lima Norte" />
    <meta property="og:url" content="https://votaciones.dirisln.gob.pe:2024/" />
    <meta property="og:site_name" content="Keenthemes | Oswald HTML Free"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="img/icono.png"/>
    <link rel="canonical" href="https://votaciones.dirisln.gob.pe:2024/" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css"/>
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css"/>
    <style>
        .app-header .app-header-primary{
            background: linear-gradient(45deg, #003f88, #0074d9, #12408c) !important;
        }
        .ganador{
            color: #ffcc00 !important;
        }
        .icono-Titulo{
            font-size: 18px !important;
            color: #1f4290 !important;
        }
        .cabecera-tabla{
            background: #144593 !important;
            color: white !important;
        }
        .ganador-big{
            font-size: 24px !important;
            color: #ffcc00 !important;
        }
        .dni-usuario{
            color: white !important;
            font-size: 20px;
            margin-right: 10px;
        }
        .icon-email{
            font-size: 22px !important;
        }
        .opcional{
            color: #b10404;
        }
    </style>
    @yield('css')
    <!--end::Global Stylesheets Bundle-->
    <script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" data-kt-app-header-stacked="true" data-kt-app-header-primary-enabled="true"
      data-kt-app-header-secondary-enabled="true" data-kt-app-toolbar-enabled="true" class="app-default">
<!--begin::Theme mode setup on page load-->
<script>var defaultThemeMode = "light";
    var themeMode;
    if (document.documentElement) {
        if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
            themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
        } else {
            if (localStorage.getItem("data-bs-theme") !== null) {
                themeMode = localStorage.getItem("data-bs-theme");
            } else {
                themeMode = defaultThemeMode;
            }
        }
        if (themeMode === "system") {
            themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
        }
        document.documentElement.setAttribute("data-bs-theme", themeMode);
    }</script>
<!--end::Theme mode setup on page load-->
<!--begin::App-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
        <!--begin::Header-->
        @include('admin.layouts.header')
        <!--end::Header-->
        <!--begin::Wrapper-->
        <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
            <!--begin::Wrapper container-->
            <div class="app-container container-xxl d-flex flex-row flex-column-fluid">
                <!--begin::Main-->
                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                    @yield('content')
                    @include('admin.layouts.footer')
                </div>
            </div>
        </div>
    </div>
</div>

<!--end::Modal - Upgrade plan-->

<!--end::Modals-->
<!--begin::Javascript-->
<script>var hostUrl = "assets/";</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="assets/plugins/global/plugins.bundle.js"></script>
<script src="assets/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
<script src="assets/js/widgets.bundle.js"></script>
<script src="assets/js/custom/apps/chat/chat.js"></script>
<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
<script src="assets/js/custom/utilities/modals/create-project/type.js"></script>
<script src="assets/js/custom/utilities/modals/create-project/budget.js"></script>
<script src="assets/js/custom/utilities/modals/create-project/settings.js"></script>
<script src="assets/js/custom/utilities/modals/create-project/team.js"></script>
<script src="assets/js/custom/utilities/modals/create-project/targets.js"></script>
<script src="assets/js/custom/utilities/modals/create-project/files.js"></script>
<script src="assets/js/custom/utilities/modals/create-project/complete.js"></script>
<script src="assets/js/custom/utilities/modals/create-project/main.js"></script>
<script src="https://use.fontawesome.com/a567284fb4.js"></script>
<script src="{{ asset('assets/js/rutas.js') }}"></script>

@yield('js')
</body>
<!--end::Body-->
</html>
