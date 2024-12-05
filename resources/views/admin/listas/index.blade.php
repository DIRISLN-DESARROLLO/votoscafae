@extends('admin.layouts.app')

@section('content')
    <div class="d-flex flex-column flex-column-fluid mt-5">
        <div class="col-lg-4">
            <div class="card card-flush h-lg-100">
                <div class="card-header py-7">
                    <div class="m-0">
                        <div class="d-flex align-items-center mb-2">
                            <span
                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">Listas</span>
                            <span class="badge badge-light-success fs-base">
                                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                            2.2%</span>
                        </div>
                        <span class="fs-6 fw-semibold text-gray-400">Conoce la lista de los participantes</span>
                    </div>
                </div>
                <div
                    class="card-body card-body d-flex justify-content-between flex-column pt-3">
                    <input type="radio" class="btn-check" name="radio_buttons_1"
                           value="l1" id="kt_radio_buttons_2_option_1"/>
                    <label
                        class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center mb-5"
                        for="kt_radio_buttons_2_option_1">
                        <i class="ki-duotone ki-check-circle fs-4x me-4">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                        <span class="d-block fw-semibold text-start">
                            <span class="text-gray-900 fw-bold d-block fs-3">Lista 1</span>
                            <span class="text-muted fw-semibold fs-6">Ver Integrantes</span>
                        </span>
                    </label>
                    <input type="radio" class="btn-check" name="radio_buttons_1"
                           value="l2" id="kt_radio_buttons_2_option_2"/>
                    <label
                        class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center mb-5"
                        for="kt_radio_buttons_2_option_2">
                        <i class="ki-duotone ki-check-circle fs-4x me-4">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                        <span class="d-block fw-semibold text-start">
                            <span class="text-gray-900 fw-bold d-block fs-3">Lista 2</span>
                            <span class="text-muted fw-semibold fs-6">Ver Integrantes</span>
                        </span>
                    </label>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('css')

@stop

@section('js')

@stop
