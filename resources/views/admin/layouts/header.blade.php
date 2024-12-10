<div id="kt_app_header" class="app-header">
    @php
        $user = \Illuminate\Support\Facades\Auth::user();
          if ($user) {
              $nombres = $user->nombres;
              $a_paterno = $user->a_paterno;
              $dni = $user->dni;
          }
    @endphp
    <div class="app-header-primary" data-kt-sticky="true" data-kt-sticky-name="app-header-primary-sticky"
         data-kt-sticky-offset="{default: 'false', lg: '300px'}">
        <div class="app-container container-xxl d-flex align-items-stretch justify-content-between">
            <div class="d-flex flex-grow-1 flex-lg-grow-0">
                <div class="d-flex align-items-center" id="kt_app_header_logo_wrapper">
                    <button
                        class="d-lg-none btn btn-icon btn-color-white btn-active-color-primary ms-n4 me-sm-2"
                        id="kt_app_header_menu_toggle">
                        <i class="ki-duotone ki-abstract-14 fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </button>
                    <a href="../dist/index.html" class="d-flex align-items-center mb-1 mb-lg-0 pt-lg-1">
                        <img alt="Logo" src="img/logo.png" class="d-none d-sm-block" width="350px"/>
                    </a>
                </div>
            </div>
            <div class="app-navbar">
                <div class="app-navbar-item ms-3 me-6" id="kt_header_user_menu_toggle">
                    <span class="dni-usuario">Usuario: {{$dni}}</span>
                    <div class="cursor-pointer symbol symbol-35px"
                         data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                         data-kt-menu-placement="bottom-end">
                        <img class="symbol symbol-35px" src="assets/media/avatars/blank.png" alt="user"/>
                    </div>
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                        data-kt-menu="true">
                        <div class="menu-item px-3">
                            <div class="menu-content d-flex align-items-center px-3">
                                <div class="symbol symbol-50px me-5">
                                    <img alt="Logo" src="assets/media/avatars/blank.png"/>
                                </div>
                                <div class="d-flex flex-column">
                                    <div class="fw-bold d-flex align-items-center fs-5">
                                        {{@$nombres." ".@$a_paterno}}
                                        <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Usuario</span>
                                    </div>
                                    <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">{{@$dni}}</a>
                                </div>
                                <!--end::Username-->
                            </div>
                        </div>
                        <!--
                          <div class="separator my-2"></div>
                        <div class="menu-item px-5">
                            <a href="#" class="menu-link px-5">Mi perfil</a>
                        </div>
                        -->
                        <div class="separator my-2"></div>

                        <div class="menu-item px-5">
                            <a href="{{route('cerrarsession')}}"
                               class="menu-link px-5">Cerrar Sesión</a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="app-header-secondary">
        <div class="app-container container-xxl d-flex align-items-stretch">
            <div class="app-header-menu app-header-mobile-drawer align-items-stretch flex-grow-1"
                 data-kt-drawer="true" data-kt-drawer-name="app-header-menu"
                 data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                 data-kt-drawer-width="250px" data-kt-drawer-direction="start"
                 data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true"
                 data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
                 data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
                <div
                    class="menu menu-rounded menu-active-bg menu-state-primary menu-column menu-lg-row menu-title-gray-700 menu-icon-gray-500 menu-arrow-gray-500 menu-bullet-gray-500 my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0"
                    id="kt_app_header_menu" data-kt-menu="true">
                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                         data-kt-menu-placement="bottom-start"
                         class="menu-item  show menu-here-bg menu-lg-down-accordion me-0 me-lg-2">

                        <span class="menu-link" id="btn-home">
											<span class="menu-title">Inicio</span>
											<span class="menu-arrow d-lg-none"></span>
                        </span>

                    </div>
                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                         data-kt-menu-placement="bottom-start"
                         class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                        <span class="menu-link">
											<span class="menu-title">Opciones</span>
											<span class="menu-arrow d-lg-none"></span>
										</span>
                        <div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-250px">
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                 data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link" id="btn-listas">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-message-text-2 fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title" >Listas</span>
                                </span>
                                <!--end:Menu link-->

                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                 data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link" id="btn-resultados">
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
                                <span class="menu-link" id="btn-constancia">
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
                    </div>
                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                         data-kt-menu-placement="bottom-start"
                         class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                        <!--begin:Menu link-->
                        <span class="menu-link" id="btn-reglamento">
											<span class="menu-title">Reglamento</span>
                        </span>
                        <!--end:Menu link-->
                    </div>
                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                         data-kt-menu-placement="bottom-start"
                         class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                        <!--begin:Menu link-->
                        <span class="menu-link" id="btn-ayuda">
											<span class="menu-title">Ayuda</span>
                        </span>
                        <!--end:Menu link-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

