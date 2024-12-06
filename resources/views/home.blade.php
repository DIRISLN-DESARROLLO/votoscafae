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
                <div class="card card-flush h-lg-100">
                    <div  class="card-body card-body d-flex justify-content-between flex-column pt-3">
                        <div class="row mt-5">
                            <div class="col-12 text-center">
                                <h1>Las votaciones iniciaran muy pronto!</h1>
                                <hr>
                                <div id="countdown" class="contador"></div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12 text-center">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan" id="actionButton" disabled>
                                    Ir a Votación
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content rounded">
                <div class="modal-header justify-content-end border-0 pb-0">
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                </div>
                <div class="modal-body pt-0 pb-15 px-5 px-xl-20">
                    <div class="mb-13 text-center">
                        <h1 class="mb-3">Plataforma Virtual para el proceso electoral</h1>
                        <div class="text-muted fw-semibold fs-5">Seleccione la lista de su preferencia, recuerde que el voto
                            es secreto.
                        </div>
                    </div>
                    <div class="d-flex flex-column">
                        <div class="row mt-10">
                            <div class="col-lg-6 mb-10 mb-lg-0">
                                <div class="nav flex-column">
                                    @foreach($listas as $lista)
                                        <label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6"
                                            data-bs-toggle="tab" data-bs-target="#lista-{{$lista->id}}">
                                            <div class="d-flex align-items-center me-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                    <input class="form-check-input" type="radio" name="plan" value="startup"/>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="text-gray-900 fw-bold d-block fs-3">{{$lista->nombre}}</span>
                                                    <span class="text-muted fw-semibold fs-6">Ver Integrantes</span>
                                                </div>
                                            </div>
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="tab-content rounded h-100 bg-light p-10">
                                    <div class="tab-pane fade" id="list-1">
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-dark">Miembros de Lista 1</h2>
                                        </div>
                                        <div class="text-muted fw-semibold">Titulares:</div>
                                        <div class="pt-1">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item list-group-item-action active p-4"> Lis</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="kt_l2">
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-dark">Miembros de Lista 2</h2>
                                        </div>
                                        <div class="text-muted fw-semibold">Titulares:</div>
                                        <div class="pt-1">
                                            <div class="d-flex align-items-center mb-7">
                                            <span
                                                class="fw-semibold fs-5 text-gray-700 flex-grow-1">Titular 1 - Lista 2</span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <div class="d-flex align-items-center mb-7">
                                            <span
                                                class="fw-semibold fs-5 text-gray-700 flex-grow-1">Titular 2 - Lista 2</span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <div class="d-flex align-items-center mb-7">
                                            <span
                                                class="fw-semibold fs-5 text-gray-700 flex-grow-1">Titular 3 - Lista 2</span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <div class="text-muted fw-semibold">Suplentes:</div>
                                            <div class="d-flex align-items-center mb-7">
                                            <span
                                                class="fw-semibold fs-5 text-muted flex-grow-1">Suplente 1 - Lista 2</span>
                                                <i class="ki-duotone ki-cross-circle fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <div class="d-flex align-items-center mb-7">
                                            <span
                                                class="fw-semibold fs-5 text-muted flex-grow-1">Suplente 2 - Lista 2</span>
                                                <i class="ki-duotone ki-cross-circle fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <div class="d-flex align-items-center mb-7">
                                            <span
                                                class="fw-semibold fs-5 text-muted flex-grow-1">Suplente 3 - Lista 2</span>
                                                <i class="ki-duotone ki-cross-circle fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="kt_bv">
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-dark">Blanco / Viciado</h2>
                                        </div>
                                        <div class="pt-1">
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Usted puede elegir no votar por ninguna de las 2 Listas</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-center flex-row-fluid pt-12">
                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary" id="kt_modal_upgrade_plan_btn">
                            <span class="indicator-label">Votar</span>
                            <span class="indicator-progress">Procesando...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('css')
    <style>
    .contador{
        font-size: 30px;
    }
    </style>
@stop

@section('js')
    <script >
        //const targetDate = new Date('2024-12-13T00:00:00');
        const targetDate = new Date('2024-12-06T12:16:00');
        const countdownElement = document.getElementById('countdown');
        const actionButton = document.getElementById('actionButton');
        function updateCountdown() {
            const now = new Date();
            const timeDifference = targetDate - now;

            if (timeDifference <= 0) {
                countdownElement.innerHTML = '¡Ya iniciaron las votaciones, realiza tu voto <i class="fa fa-check-square-o" style="font-size: 23px" aria-hidden="true"></i>, Ahora!';
                actionButton.disabled = false;
                clearInterval(interval);
                return;
            }
            const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
            const hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);
            countdownElement.innerText = `${days} días, ${hours} horas, ${minutes} minutos, ${seconds} segundos restantes`;
        }
        const interval = setInterval(updateCountdown, 1000);
        updateCountdown();

    </script>
@stop
