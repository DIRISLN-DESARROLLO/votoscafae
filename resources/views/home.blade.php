@extends('admin.layouts.app')

@section('content')
    <div class="d-flex flex-column flex-column-fluid mt-5">
        <!-- <div id="kt_app_toolbar" class="app-toolbar pt-lg-9 pt-6">

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
        </div>
    -->
        <div id="kt_app_content">
            <div class="row gx-5 gx-xl-10 mb-5 mb-xl-10">
                <div class="card card-flush h-lg-100">
                    <div  class="card-body card-body d-flex justify-content-between flex-column pt-3">
                        <div class="row mt-5">
                            <div class="col-12 text-center">
                                <h1>El cambio comienza con tu voto, participa y haz la diferencia.
                                <br>
                                    Horario de Votacion es de las 8:00 am a las 4:00 pm del dia 13 de Diciembre del 2024 </h1>
                                <img src="img/banner.jpg" />
                                <hr>
                                <div id="countdown" class="contador"></div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12 text-center">
                                @if ($estado)
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan" id="actionButton" data-text="Ir a Votacion">
                                        Ir a Votación
                                    </button>
                                @else
                                    <button type="button" class="btn btn-secondary" id="actionButton" onclick="actualizar()" disabled>
                                        Aún no es tiempo de votar
                                    </button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form id="form-votar">
        @csrf
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
                    <div class="mb-5 text-center">
                        <h1 class="mb-3">Plataforma Virtual para el proceso electoral</h1>
                        <div class="text-muted fw-semibold fs-5 text-center">Seleccione la lista de su preferencia, recuerde que el voto
                            es secreto.
                        </div>
                    </div>
                    <div class="separator my-2"></div>
                    <div class="d-flex flex-column">
                        <div class="row mt-5">
                            <div class="col-4 offset-md-4">
                                <div class="form-check mb-3 d-flex flex-center flex-row-fluid">
                                    <input class="form-check-input" type="checkbox" value="" id="checkEmail">
                                    <label class="form-check-label text-primary" for="checkEmail">&nbsp;
                                        Notificar al Correo electronico <span class="opcional">(Opcional)</span>
                                    </label>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope icon-email" aria-hidden="true"></i></span>
                                    </div>
                                    <input type="email" class="form-control" id="email"  placeholder="Corrreo electronico">
                                </div>
                            </div>
                        </div>
                        <div class="separator my-2"></div>
                        <div class="row mt-5">
                            <div class="col-lg-6">
                                <div class="nav flex-column">
                                    @foreach($listas as $lista)
                                        <label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6"
                                               data-bs-toggle="tab" data-bs-target="#lista-{{$lista->id}}">
                                            <div class="d-flex align-items-center me-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                    <input class="form-check-input" type="radio" name="lista" value="{{$lista->id}}"/>
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
                                <div class="tab-content rounded h-100 ">
                                    @if($datos && $datos->count() > 0)
                                        @foreach($datos as $dato)
                                            <div class="tab-pane fade" id="lista-{{$dato->id}}">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item list-group-item-action active p-4"> <h3 class="text-white">{{ $dato->nombre }}</h3></li>
                                                    @foreach($dato->miembros as $miembro)
                                                        <li class="list-group-item p-4"> <i class="fa fa-user" aria-hidden="true"></i>  {{ $miembro->nombre }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>

                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-center flex-row-fluid pt-12">
                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary" id="btn-votar">
                            <span class="indicator-label">Votar</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
@endsection
@section('css')
    <style>
    .contador{
        font-size: 30px;
    }
    </style>
@stop

@section('js')
    <script>
        var fecha = "{{$fecha}}";
        var urlVotar = "{{route('votar')}}";
    </script>
    <script src="{{ asset('assets/js/home.js') }}"></script>
@stop
