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
        <div id="kt_app_header" class="app-header">
            <!--begin::Header primary-->
            <div class="app-header-primary" data-kt-sticky="true" data-kt-sticky-name="app-header-primary-sticky"
                 data-kt-sticky-offset="{default: 'false', lg: '300px'}">
                <!--begin::Header primary container-->
                <div class="app-container container-xxl d-flex align-items-stretch justify-content-between">
                    <!--begin::Logo and search-->
                    <div class="d-flex flex-grow-1 flex-lg-grow-0">
                        <!--begin::Logo wrapper-->
                        <div class="d-flex align-items-center" id="kt_app_header_logo_wrapper">
                            <!--begin::Header toggle-->
                            <button
                                class="d-lg-none btn btn-icon btn-color-white btn-active-color-primary ms-n4 me-sm-2"
                                id="kt_app_header_menu_toggle">
                                <i class="ki-duotone ki-abstract-14 fs-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </button>
                            <!--end::Header toggle-->
                            <!--begin::Logo-->
                            <a href="../dist/index.html" class="d-flex align-items-center mb-1 mb-lg-0 pt-lg-1">
                                <img alt="Logo" src="assets/media/logos/default-small.svg" class="d-block d-sm-none"/>
                                <img alt="Logo" src="assets/media/logos/default-X.svg" class="d-none d-sm-block"/>
                            </a>
                            <!--end::Logo-->
                        </div>
                        <!--end::Logo wrapper-->
                    </div>
                    <!--end::Logo and search-->
                    <!--begin::Navbar-->
                    <div class="app-navbar">


                        <!--begin::User menu-->
                        <div class="app-navbar-item ms-3 me-6" id="kt_header_user_menu_toggle">
                            <!--begin::Menu wrapper-->
                            <div class="cursor-pointer symbol symbol-35px"
                                 data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                                 data-kt-menu-placement="bottom-end">
                                <img class="symbol symbol-35px" src="assets/media/avatars/blank.png" alt="user"/>
                            </div>
                            <!--begin::User account menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content d-flex align-items-center px-3">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-50px me-5">
                                            <img alt="Logo" src="assets/media/avatars/blank.png"/>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Username-->
                                        <div class="d-flex flex-column">
                                            <div class="fw-bold d-flex align-items-center fs-5">Arturo Llanos
                                                <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Tec. Informatico</span>
                                            </div>
                                            <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">arturo.llanos@dirislimanorte.gob.pe</a>
                                        </div>
                                        <!--end::Username-->
                                    </div>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator my-2"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href="../dist/account/overview.html" class="menu-link px-5">Mi perfil</a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu separator-->
                                <div class="separator my-2"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                     data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                    <a href="#" class="menu-link px-5">
												<span class="menu-title position-relative">Apariencia
												<span class="ms-5 position-absolute translate-middle-y top-50 end-0">
													<i class="ki-duotone ki-night-day theme-light-show fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
														<span class="path5"></span>
														<span class="path6"></span>
														<span class="path7"></span>
														<span class="path8"></span>
														<span class="path9"></span>
														<span class="path10"></span>
													</i>
													<i class="ki-duotone ki-moon theme-dark-show fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</span></span>
                                    </a>
                                    <!--begin::Menu-->
                                    <div
                                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                                        data-kt-menu="true" data-kt-element="theme-mode-menu">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3 my-0">
                                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                               data-kt-value="light">
														<span class="menu-icon" data-kt-element="icon">
															<i class="ki-duotone ki-night-day fs-2">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
																<span class="path4"></span>
																<span class="path5"></span>
																<span class="path6"></span>
																<span class="path7"></span>
																<span class="path8"></span>
																<span class="path9"></span>
																<span class="path10"></span>
															</i>
														</span>
                                                <span class="menu-title">Light</span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3 my-0">
                                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                               data-kt-value="dark">
														<span class="menu-icon" data-kt-element="icon">
															<i class="ki-duotone ki-moon fs-2">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
                                                <span class="menu-title">Dark</span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3 my-0">
                                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                               data-kt-value="system">
														<span class="menu-icon" data-kt-element="icon">
															<i class="ki-duotone ki-screen fs-2">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
																<span class="path4"></span>
															</i>
														</span>
                                                <span class="menu-title">System</span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator my-2"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href="../dist/authentication/layouts/corporate/sign-in.html"
                                       class="menu-link px-5">Cerrar Sesión</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::User account menu-->
                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::User menu-->

                        <!--begin::Header menu toggle-->
                        <!--end::Header menu toggle-->
                    </div>
                    <!--end::Navbar-->
                </div>
                <!--end::Header primary container-->
            </div>
            <!--end::Header primary-->
            <!--begin::Header secondary-->
            <div class="app-header-secondary">
                <!--begin::Header secondary container-->
                <div class="app-container container-xxl d-flex align-items-stretch">
                    <!--begin::Menu wrapper-->
                    <div class="app-header-menu app-header-mobile-drawer align-items-stretch flex-grow-1"
                         data-kt-drawer="true" data-kt-drawer-name="app-header-menu"
                         data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                         data-kt-drawer-width="250px" data-kt-drawer-direction="start"
                         data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true"
                         data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
                         data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
                        <!--begin::Menu-->
                        <div
                            class="menu menu-rounded menu-active-bg menu-state-primary menu-column menu-lg-row menu-title-gray-700 menu-icon-gray-500 menu-arrow-gray-500 menu-bullet-gray-500 my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0"
                            id="kt_app_header_menu" data-kt-menu="true">
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                 data-kt-menu-placement="bottom-start"
                                 class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
                                <!--begin:Menu link-->
                                <span class="menu-link">
											<span class="menu-title">Inicio</span>
											<span class="menu-arrow d-lg-none"></span>
										</span>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->

                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                 data-kt-menu-placement="bottom-start"
                                 class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                                <!--begin:Menu link-->
                                <span class="menu-link">
											<span class="menu-title">Opciones</span>
											<span class="menu-arrow d-lg-none"></span>
										</span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div
                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-250px">
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                         data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
													<span class="menu-icon">
														<i class="ki-duotone ki-message-text-2 fs-2">
															<span class="path1"></span>
                											<span class="path2"></span>
                                                            <span class="path3"></span>
														</i>
													</span>
													<span class="menu-title">Listas</span
												</span>
                                        <!--end:Menu link-->

                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                         data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
													<span class="menu-icon">
														<i class="ki-duotone ki-chart-simple fs-2">
                                                            <span class="path1"></span>
                											<span class="path2"></span>
                                                            <span class="path3"></span>
                                                            <span class="path4"></span>
                                                        </i>
													</span>
													<span class="menu-title">Resultados</span>
												</span>
                                        <!--end:Menu link-->

                                    </div>
                                    <!--end:Menu item-->

                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                         data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
													<span class="menu-icon">
														<i class="ki-duotone ki-file-added fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
													<span class="menu-title">Constancia de votación</span>
												</span>
                                        <!--end:Menu link-->

                                    </div>
                                    <!--end:Menu item-->

                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                 data-kt-menu-placement="bottom-start"
                                 class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                                <!--begin:Menu link-->
                                <span class="menu-link">
											<span class="menu-title">Ayuda</span>
										</span>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::Menu wrapper-->
                    <!--begin::Search-->
                    <div class="d-flex align-items-center w-100 w-lg-225px pt-5 pt-lg-0">
                        <!--begin::Search-->
                        <div id="kt_header_search" class="header-search d-flex align-items-center w-100 w-lg-225px"
                             data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter"
                             data-kt-search-layout="menu" data-kt-search-responsive="" data-kt-menu-trigger="auto"
                             data-kt-menu-permanent="true" data-kt-menu-placement="bottom-start">
                            <!--begin::Form(use d-none d-lg-block classes for responsive search)-->
                            <form data-kt-search-element="form" class="w-100 position-relative mb-5 mb-lg-0"
                                  autocomplete="off">
                                <!--begin::Hidden input(Added to disable form autocomplete)-->
                                <input type="hidden"/>
                                <!--end::Hidden input-->
                                <!--begin::Icon-->
                                <i class="ki-duotone ki-magnifier search-icon fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-5">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <!--end::Icon-->
                                <!--begin::Input-->
                                <input type="text" class="search-input form-control ps-13" name="search" value=""
                                       placeholder="Buscar..." data-kt-search-element="input"/>
                                <!--end::Input-->
                                <!--begin::Spinner-->
                                <span
                                    class="search-spinner position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
                                    data-kt-search-element="spinner">
											<span
                                                class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
										</span>
                                <!--end::Spinner-->
                                <!--begin::Reset-->
                                <span
                                    class="search-reset btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4"
                                    data-kt-search-element="clear">
											<i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</span>
                                <!--end::Reset-->
                            </form>
                            <!--end::Form-->

                        </div>
                        <!--end::Search-->
                    </div>
                    <!--end::Search-->
                </div>
                <!--end::Header secondary container-->
            </div>
            <!--end::Header secondary-->
        </div>
        <!--end::Header-->
        <!--begin::Wrapper-->
        <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
            <!--begin::Wrapper container-->
            <div class="app-container container-xxl d-flex flex-row flex-column-fluid">
                <!--begin::Main-->
                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                    <!--begin::Content wrapper-->
                    <div class="d-flex flex-column flex-column-fluid">
                        <!--begin::Toolbar-->
                        <div id="kt_app_toolbar" class="app-toolbar pt-lg-9 pt-6">
                            <!--begin::Toolbar container-->
                            <div id="kt_app_toolbar_container"
                                 class="app-container container-fluid d-flex flex-stack flex-wrap">
                                <!--begin::Toolbar wrapper-->
                                <div class="d-flex flex-stack flex-wrap gap-4 w-100">
                                    <!--begin::Page title-->
                                    <div class="page-title d-flex flex-column gap-3 me-3">
                                        <!--begin::Title-->
                                        <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bolder fs-2x my-0">
                                            Dashboard</h1>
                                        <!--end::Title-->
                                        <!--begin::Breadcrumb-->
                                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold">
                                            <!--begin::Item-->
                                            <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                                                <a href="../dist/index.html" class="text-gray-500">
                                                    <i class="ki-duotone ki-home fs-3 text-gray-400 me-n1"></i>
                                                </a>
                                            </li>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <li class="breadcrumb-item">
                                                <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
                                            </li>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Inicio</li>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <li class="breadcrumb-item">
                                                <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
                                            </li>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <li class="breadcrumb-item text-gray-500">Inicio</li>
                                            <!--end::Item-->
                                        </ul>
                                        <!--end::Breadcrumb-->
                                    </div>
                                    <!--end::Page title-->

                                </div>
                                <!--end::Toolbar wrapper-->
                            </div>
                            <!--end::Toolbar container-->
                        </div>
                        <!--end::Toolbar-->
                        <!--begin::Content-->
                        <div id="kt_app_content" class="app-content pb-0">

                            <!--begin::Row-->
                            <div class="row gx-5 gx-xl-10 mb-5 mb-xl-10">
                                <!--begin::Col-->
                                <div class="col-lg-4 mb-5 mb-lg-0">
                                    <!--begin::Chart widget 27-->
                                    <div class="card card-flush h-lg-100">
                                        <!--begin::Header-->
                                        <div class="card-header py-7">
                                            <!--begin::Statistics-->
                                            <div class="m-0">
                                                <!--begin::Heading-->
                                                <div class="d-flex align-items-center mb-2">
                                                    <!--begin::Title-->
                                                    <span
                                                        class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">3,752</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Description-->
                                                <span class="fs-6 fw-semibold text-gray-400">Resultados</span>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Statistics-->

                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body pt-0 pb-1">
                                            <div id="kt_charts_widget_27" class="min-h-auto"></div>
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Chart widget 27-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-lg-4 mb-5 mb-lg-0">
                                    <!--begin::Chart widget 28-->
                                    <div class="card card-flush h-lg-100">
                                        <!--begin::Header-->
                                        <div class="card-header py-7">
                                            <!--begin::Statistics-->
                                            <div class="m-0">
                                                <!--begin::Heading-->
                                                <div class="d-flex align-items-center mb-2">
                                                    <!--begin::Title-->
                                                    <span
                                                        class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">2,579</span>
                                                    <!--end::Title-->
                                                    <!--begin::Label-->
                                                    <span class="badge badge-light-success fs-base">
															<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>2.2%</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Description-->
                                                <span
                                                    class="fs-6 fw-semibold text-gray-400">Domain External Links</span>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Statistics-->

                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body d-flex align-items-end ps-4 pe-0 pb-4">
                                            <!--begin::Chart-->
                                            <div id="kt_charts_widget_28" class="h-300px w-100 min-h-auto"></div>
                                            <!--end::Chart-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Chart widget 28-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-lg-4">
                                    <!--begin::List widget 9-->
                                    <div class="card card-flush h-lg-100">
                                        <!--begin::Header-->
                                        <div class="card-header py-7">
                                            <!--begin::Statistics-->
                                            <div class="m-0">
                                                <!--begin::Heading-->
                                                <div class="d-flex align-items-center mb-2">
                                                    <!--begin::Title-->
                                                    <span
                                                        class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">5,037</span>
                                                    <!--end::Title-->
                                                    <!--begin::Label-->
                                                    <span class="badge badge-light-success fs-base">
															<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>2.2%</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Description-->
                                                <span
                                                    class="fs-6 fw-semibold text-gray-400">Visits by Social Networks</span>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Statistics-->

                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div
                                            class="card-body card-body d-flex justify-content-between flex-column pt-3">
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Flag-->
                                                <img src="assets/media/svg/brand-logos/dribbble-icon-1.svg"
                                                     class="me-4 w-30px" style="border-radius: 4px" alt=""/>
                                                <!--end::Flag-->
                                                <!--begin::Section-->
                                                <div
                                                    class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                                                    <!--begin::Content-->
                                                    <div class="me-5">
                                                        <!--begin::Title-->
                                                        <a href="#"
                                                           class="text-gray-800 fw-bold text-hover-primary fs-6">Dribbble</a>
                                                        <!--end::Title-->
                                                        <!--begin::Desc-->
                                                        <span
                                                            class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Community</span>
                                                        <!--end::Desc-->
                                                    </div>
                                                    <!--end::Content-->
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Number-->
                                                        <span class="text-gray-800 fw-bold fs-4 me-3">579</span>
                                                        <!--end::Number-->
                                                        <!--begin::Info-->
                                                        <div class="m-0">
                                                            <!--begin::Label-->
                                                            <span class="badge badge-light-success fs-base">
																	<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>2.6%</span>
                                                            <!--end::Label-->
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </div>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Separator-->
                                            <div class="separator separator-dashed my-3"></div>
                                            <!--end::Separator-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Flag-->
                                                <img src="assets/media/svg/brand-logos/linkedin-1.svg"
                                                     class="me-4 w-30px" style="border-radius: 4px" alt=""/>
                                                <!--end::Flag-->
                                                <!--begin::Section-->
                                                <div
                                                    class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                                                    <!--begin::Content-->
                                                    <div class="me-5">
                                                        <!--begin::Title-->
                                                        <a href="#"
                                                           class="text-gray-800 fw-bold text-hover-primary fs-6">Linked
                                                            In</a>
                                                        <!--end::Title-->
                                                        <!--begin::Desc-->
                                                        <span
                                                            class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Social Media</span>
                                                        <!--end::Desc-->
                                                    </div>
                                                    <!--end::Content-->
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Number-->
                                                        <span class="text-gray-800 fw-bold fs-4 me-3">1,088</span>
                                                        <!--end::Number-->
                                                        <!--begin::Info-->
                                                        <div class="m-0">
                                                            <!--begin::Label-->
                                                            <span class="badge badge-light-danger fs-base">
																	<i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>0.4%</span>
                                                            <!--end::Label-->
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </div>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Separator-->
                                            <div class="separator separator-dashed my-3"></div>
                                            <!--end::Separator-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Flag-->
                                                <img src="assets/media/svg/brand-logos/slack-icon.svg"
                                                     class="me-4 w-30px" style="border-radius: 4px" alt=""/>
                                                <!--end::Flag-->
                                                <!--begin::Section-->
                                                <div
                                                    class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                                                    <!--begin::Content-->
                                                    <div class="me-5">
                                                        <!--begin::Title-->
                                                        <a href="#"
                                                           class="text-gray-800 fw-bold text-hover-primary fs-6">Slack</a>
                                                        <!--end::Title-->
                                                        <!--begin::Desc-->
                                                        <span
                                                            class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Messanger</span>
                                                        <!--end::Desc-->
                                                    </div>
                                                    <!--end::Content-->
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Number-->
                                                        <span class="text-gray-800 fw-bold fs-4 me-3">794</span>
                                                        <!--end::Number-->
                                                        <!--begin::Info-->
                                                        <div class="m-0">
                                                            <!--begin::Label-->
                                                            <span class="badge badge-light-success fs-base">
																	<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>0.2%</span>
                                                            <!--end::Label-->
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </div>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Separator-->
                                            <div class="separator separator-dashed my-3"></div>
                                            <!--end::Separator-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Flag-->
                                                <img src="assets/media/svg/brand-logos/youtube-3.svg"
                                                     class="me-4 w-30px" style="border-radius: 4px" alt=""/>
                                                <!--end::Flag-->
                                                <!--begin::Section-->
                                                <div
                                                    class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                                                    <!--begin::Content-->
                                                    <div class="me-5">
                                                        <!--begin::Title-->
                                                        <a href="#"
                                                           class="text-gray-800 fw-bold text-hover-primary fs-6">YouTube</a>
                                                        <!--end::Title-->
                                                        <!--begin::Desc-->
                                                        <span
                                                            class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Video Channel</span>
                                                        <!--end::Desc-->
                                                    </div>
                                                    <!--end::Content-->
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Number-->
                                                        <span class="text-gray-800 fw-bold fs-4 me-3">978</span>
                                                        <!--end::Number-->
                                                        <!--begin::Info-->
                                                        <div class="m-0">
                                                            <!--begin::Label-->
                                                            <span class="badge badge-light-success fs-base">
																	<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>4.1%</span>
                                                            <!--end::Label-->
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </div>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Separator-->
                                            <div class="separator separator-dashed my-3"></div>
                                            <!--end::Separator-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Flag-->
                                                <img src="assets/media/svg/brand-logos/instagram-2-1.svg"
                                                     class="me-4 w-30px" style="border-radius: 4px" alt=""/>
                                                <!--end::Flag-->
                                                <!--begin::Section-->
                                                <div
                                                    class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                                                    <!--begin::Content-->
                                                    <div class="me-5">
                                                        <!--begin::Title-->
                                                        <a href="#"
                                                           class="text-gray-800 fw-bold text-hover-primary fs-6">Instagram</a>
                                                        <!--end::Title-->
                                                        <!--begin::Desc-->
                                                        <span
                                                            class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Social Network</span>
                                                        <!--end::Desc-->
                                                    </div>
                                                    <!--end::Content-->
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Number-->
                                                        <span class="text-gray-800 fw-bold fs-4 me-3">1,458</span>
                                                        <!--end::Number-->
                                                        <!--begin::Info-->
                                                        <div class="m-0">
                                                            <!--begin::Label-->
                                                            <span class="badge badge-light-success fs-base">
																	<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>8.3%</span>
                                                            <!--end::Label-->
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </div>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::List widget 9-->
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col-lg-4">
                                    <!--begin::List widget 9-->
                                    <div class="card card-flush h-lg-100">
                                        <!--begin::Header-->
                                        <div class="card-header py-7">
                                            <!--begin::Statistics-->
                                            <div class="m-0">
                                                <!--begin::Heading-->
                                                <div class="d-flex align-items-center mb-2">
                                                    <!--begin::Title-->
                                                    <span
                                                        class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">Prueba</span>
                                                    <!--end::Title-->
                                                    <!--begin::Label-->
                                                    <span class="badge badge-light-success fs-base">
															<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>2.2%</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Description-->
                                                <span
                                                    class="fs-6 fw-semibold text-gray-400">Visits by Social Networks</span>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Statistics-->

                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div
                                            class="card-body card-body d-flex justify-content-between flex-column pt-3">

                                            <!--begin::Option-->
                                            <input type="radio" class="btn-check" name="radio_buttons_1"
                                                   value="l1" id="kt_radio_buttons_2_option_1"/>
                                            <label
                                                class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center mb-5"
                                                for="kt_radio_buttons_2_option_1">
                                                <i class="ki-duotone ki-check-circle fs-4x me-4"><span
                                                        class="path1"></span><span class="path2"></span></i>

                                                <span class="d-block fw-semibold text-start">
                                                            <span
                                                                class="text-gray-900 fw-bold d-block fs-3">Lista 1</span>
                                                            <span
                                                                class="text-muted fw-semibold fs-6">Ver Integrantes</span>
                                                        </span>
                                            </label>
                                            <!--end::Option-->

                                            <!--begin::Option-->
                                            <input type="radio" class="btn-check" name="radio_buttons_1"
                                                   value="l2" id="kt_radio_buttons_2_option_2"/>
                                            <label
                                                class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center mb-5"
                                                for="kt_radio_buttons_2_option_2">
                                                <i class="ki-duotone ki-check-circle fs-4x me-4"><span
                                                        class="path1"></span><span class="path2"></span></i>

                                                <span class="d-block fw-semibold text-start">
                                                            <span
                                                                class="text-gray-900 fw-bold d-block fs-3">Lista 2</span>
                                                            <span
                                                                class="text-muted fw-semibold fs-6">Ver Integrantes</span>
                                                        </span>
                                            </label>
                                            <!--end::Option-->

                                            <!--begin::Option-->
                                            <input type="radio" class="btn-check" name="radio_buttons_1"
                                                   value="l3" id="kt_radio_buttons_2_option_3"/>
                                            <label
                                                class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center mb-5"
                                                for="kt_radio_buttons_2_option_3">
                                                <i class="ki-duotone ki-switch fs-4x me-4"><span
                                                        class="path1"></span><span class="path2"></span></i>

                                                <span class="d-block fw-semibold text-start">
                                                            <span class="text-gray-900 fw-bold d-block fs-3">Blanco / Viciado</span>
                                                            <span
                                                                class="text-muted fw-semibold fs-6">No hay integrantes</span>
                                                        </span>
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Body-->
                                        <div class="text-center mt-5 mb-9">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#kt_modal_upgrade_plan">
                                                Ir a Votación
                                            </button>
                                        </div>
                                    </div>
                                    <!--end::List widget 9-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Content wrapper-->
                    <!--begin::Footer-->
                    <div id="kt_app_footer"
                         class="app-footer align-items-center justify-content-center justify-content-md-between flex-column flex-md-row py-3 py-lg-6">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted fw-semibold me-1">2024&copy;</span>
                            <a href="https://www.gob.pe/dirislimanorte" target="_blank"
                               class="text-gray-800 text-hover-primary">DIRIS Lima Norte</a>
                        </div>
                        <!--end::Copyright-->
                        <!--begin::Menu-->
                        <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                            <li class="menu-item">
                                <a href="#" target="_blank" class="menu-link px-2">Soporte</a>
                            </li>
                        </ul>
                        <!--end::Menu-->
                    </div>
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
<script src="assets/js/custom/utilities/modals/users-search.js"></script>
<!--end::Custom Javascript-->
<!--end::Javascript-->
</body>
<!--end::Body-->
</html>
