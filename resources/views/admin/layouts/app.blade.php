<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head>
    <base href=""/>
    <title>Votaciones SUB-CAFAE - 2024</title>
    <meta charset="utf-8"/>
    <meta name="description"
          content="Axel admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets."/>
    <meta name="keywords"
          content="Axel theme, bootstrap, bootstrap 5, admin themes, free admin themes, bootstrap admin, bootstrap dashboard"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="Oswald HTML Free - Bootstrap 5 HTML Multipurpose Admin Dashboard Theme"/>
    <meta property="og:url" content="https://keenthemes.com/products/oswald-html-pro"/>
    <meta property="og:site_name" content="Keenthemes | Oswald HTML Free"/>
    <link rel="canonical" href="https://preview.keenthemes.com/axel-html-free"/>
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico"/>
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
                    <!--begin::Content wrapper-->
                    @yield('content')
                    <!--end::Content wrapper-->
                    <!--begin::Footer-->
                    @include('admin.layouts.footer')
                    <!--end::Footer-->
                </div>
                <!--end:::Main-->
            </div>
            <!--end::Wrapper container-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::App-->
<!--begin::Modals-->
<!--begin::Modal - Upgrade plan-->
<div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-xl">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header justify-content-end border-0 pb-0">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body pt-0 pb-15 px-5 px-xl-20">
                <!--begin::Heading-->
                <div class="mb-13 text-center">
                    <h1 class="mb-3">Plataforma Virtual para el proceso electoral</h1>
                    <div class="text-muted fw-semibold fs-5">Seleccione la lista de su preferencia, recuerde que el voto
                        es secreto.
                    </div>
                </div>
                <!--end::Heading-->
                <!--begin::Plans-->
                <div class="d-flex flex-column">

                    <!--begin::Row-->
                    <div class="row mt-10">
                        <!--begin::Col-->
                        <div class="col-lg-6 mb-10 mb-lg-0">
                            <!--begin::Tabs-->
                            <div class="nav flex-column">
                                <!--begin::Tab link-->
                                <label
                                    class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6"
                                    data-bs-toggle="tab" data-bs-target="#kt_l1">
                                    <!--end::Description-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Radio-->
                                        <div
                                            class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                            <input class="form-check-input" type="radio" name="plan" value="startup"/>
                                        </div>
                                        <!--end::Radio-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Lista 1</div>
                                            <div class="fw-semibold opacity-75">Ver miembros</div>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Description-->

                                </label>
                                <!--end::Tab link-->
                                <!--begin::Tab link-->
                                <label
                                    class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6"
                                    data-bs-toggle="tab" data-bs-target="#kt_l2">
                                    <!--end::Description-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Radio-->
                                        <div
                                            class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                            <input class="form-check-input" type="radio" name="plan" value="advanced"/>
                                        </div>
                                        <!--end::Radio-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Lista 2</div>
                                            <div class="fw-semibold opacity-75">Ver miembros</div>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Description-->
                                </label>
                                <!--end::Tab link-->
                                <!--begin::Tab link-->
                                <label
                                    class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6"
                                    data-bs-toggle="tab" data-bs-target="#kt_bv">
                                    <!--end::Description-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Radio-->
                                        <div
                                            class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                            <input class="form-check-input" type="radio" name="plan" value="custom"/>
                                        </div>
                                        <!--end::Radio-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Blanco /
                                                Viciado
                                            </div>
                                            <div class="fw-semibold opacity-75">No hay miembros por elegir</div>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Description-->

                                </label>
                                <!--end::Tab link-->
                            </div>
                            <!--end::Tabs-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-lg-6">
                            <!--begin::Tab content-->
                            <div class="tab-content rounded h-100 bg-light p-10">
                                <!--begin::Tab Pane-->
                                <div class="tab-pane fade" id="kt_l1">
                                    <!--begin::Heading-->
                                    <div class="pb-5">
                                        <h2 class="fw-bold text-dark">Miembros de Lista 1</h2>
                                    </div>
                                    <!--end::Heading-->
                                    <div class="text-muted fw-semibold">Titulares:</div>
                                    <!--begin::Body-->
                                    <div class="pt-1">
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span
                                                class="fw-semibold fs-5 text-gray-700 flex-grow-1">Titular 1 - Lista 1</span>
                                            <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span
                                                class="fw-semibold fs-5 text-gray-700 flex-grow-1">Titular 2 - Lista 1</span>
                                            <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span
                                                class="fw-semibold fs-5 text-gray-700 flex-grow-1">Titular 3 - Lista 1</span>
                                            <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Item-->
                                        <div class="text-muted fw-semibold">Suplentes:</div>
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span
                                                class="fw-semibold fs-5 text-muted flex-grow-1">Suplente 1 - Lista 1</span>
                                            <i class="ki-duotone ki-cross-circle fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span
                                                class="fw-semibold fs-5 text-muted flex-grow-1">Suplente 2 - Lista 1</span>
                                            <i class="ki-duotone ki-cross-circle fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span
                                                class="fw-semibold fs-5 text-muted flex-grow-1">Suplente 3 - Lista 1</span>
                                            <i class="ki-duotone ki-cross-circle fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Tab Pane-->
                                <!--begin::Tab Pane-->
                                <div class="tab-pane fade" id="kt_l2">
                                    <!--begin::Heading-->
                                    <div class="pb-5">
                                        <h2 class="fw-bold text-dark">Miembros de Lista 2</h2>
                                    </div>
                                    <!--end::Heading-->
                                    <div class="text-muted fw-semibold">Titulares:</div>
                                    <!--begin::Body-->
                                    <div class="pt-1">
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span
                                                class="fw-semibold fs-5 text-gray-700 flex-grow-1">Titular 1 - Lista 2</span>
                                            <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span
                                                class="fw-semibold fs-5 text-gray-700 flex-grow-1">Titular 2 - Lista 2</span>
                                            <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span
                                                class="fw-semibold fs-5 text-gray-700 flex-grow-1">Titular 3 - Lista 2</span>
                                            <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Item-->
                                        <div class="text-muted fw-semibold">Suplentes:</div>
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span
                                                class="fw-semibold fs-5 text-muted flex-grow-1">Suplente 1 - Lista 2</span>
                                            <i class="ki-duotone ki-cross-circle fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span
                                                class="fw-semibold fs-5 text-muted flex-grow-1">Suplente 2 - Lista 2</span>
                                            <i class="ki-duotone ki-cross-circle fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span
                                                class="fw-semibold fs-5 text-muted flex-grow-1">Suplente 3 - Lista 2</span>
                                            <i class="ki-duotone ki-cross-circle fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Tab Pane-->
                                <!--begin::Tab Pane-->
                                <div class="tab-pane fade" id="kt_bv">
                                    <!--begin::Heading-->
                                    <div class="pb-5">
                                        <h2 class="fw-bold text-dark">Blanco / Viciado</h2>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Body-->
                                    <div class="pt-1">
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Usted puede elegir no votar por ninguna de las 2 Listas</span>
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Tab Pane-->
                            </div>
                            <!--end::Tab content-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Plans-->
                <!--begin::Actions-->
                <div class="d-flex flex-center flex-row-fluid pt-12">
                    <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary" id="kt_modal_upgrade_plan_btn">
                        <!--begin::Indicator label-->
                        <span class="indicator-label">Votar</span>
                        <!--end::Indicator label-->
                        <!--begin::Indicator progress-->
                        <span class="indicator-progress">Procesando...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        <!--end::Indicator progress-->
                    </button>
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
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

<script src="{{ asset('assets/js/rutas.js') }}"></script>

@yield('js')
</body>
<!--end::Body-->
</html>
