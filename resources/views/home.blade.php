@extends('admin.layouts.app')

@section('content')
    <div class="d-flex flex-column flex-column-fluid mt-5">
        <div id="kt_app_toolbar" class="app-toolbar pt-lg-9 pt-6">
            <!--
            <div id="kt_app_toolbar_container"
                 class="app-container container-fluid d-flex flex-stack flex-wrap">

                <div class="d-flex flex-stack flex-wrap gap-4 w-100">

                    <div class="page-title d-flex flex-column gap-3 me-3">

                        <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bolder fs-2x my-0">
                            Dashboard</h1>

                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold">

                            <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                                <a href="../dist/index.html" class="text-gray-500">
                                    <i class="ki-duotone ki-home fs-3 text-gray-400 me-n1"></i>
                                </a>
                            </li>

                            <li class="breadcrumb-item">
                                <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
                            </li>

                            <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Inicio</li>

                            <li class="breadcrumb-item">
                                <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
                            </li>

                            <li class="breadcrumb-item text-gray-500">Inicio</li>

                        </ul>
                    </div>
                </div>
            </div>
            -->
        </div>
        <div id="kt_app_content" class="app-content pb-0">
            <div class="row gx-5 gx-xl-10 mb-5 mb-xl-10">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_upgrade_plan" disabled>
                                Ir a Votación
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('css')

@stop

@section('js')

@stop
