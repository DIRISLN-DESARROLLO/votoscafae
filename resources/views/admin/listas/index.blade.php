@extends('admin.layouts.app')

@section('content')
    <div class="d-flex flex-column flex-column-fluid mt-5">
        <div class="row">
            <div class="col-lg-4">
                <div class="card card-flush h-lg-100">
                    <div class="card-header py-7">
                        <div class="m-0">
                            <div class="d-flex align-items-center mb-2">
                                <span
                                    class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2"><i class="fa fa-list" style="font-size:28px;" aria-hidden="true"></i> Listas</span>
                            </div>
                            <span class="fs-6 fw-semibold text-gray-400">Conoce la lista de los participantes</span>
                        </div>
                    </div>
                    <div  class="card-body card-body d-flex justify-content-between flex-column pt-3">
                        @foreach($listas as $lista)
                            @if($lista->id!=3)
                                <label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center mb-5" id="btn-list-{{$lista->id}}" onclick="mostrar({{$lista->id}})">
                                    <i class="ki-duotone ki-check-circle fs-4x me-4">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <span class="d-block fw-semibold text-start">
                                        <span class="text-gray-900 fw-bold d-block fs-3">{{$lista->nombre}}</span>
                                        <span class="text-muted fw-semibold fs-6">Ver Integrantes</span>
                                    </span>
                                </label>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card card-flush h-lg-100">
                    <div class="card-header py-7">
                        @if($datos && $datos->count() > 0)
                            @foreach($datos as $dato)
                                @if($dato->id !=3)
                                    <div id="lista-{{$dato->id}}" style="display: none">
                                        <ul class="list-group list-group-flush">
                                                <li class="list-group-item list-group-item-action active p-4"> {{ $dato->nombre }}</li>
                                            @foreach($dato->miembros as $miembro)
                                                <li class="list-group-item p-4"> <i class="fa fa-user" aria-hidden="true"></i>  {{ $miembro->nombre }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            @endforeach
                        @else
                            <p>No hay listas disponibles.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('css')

@stop

@section('js')
    <script>
        function mostrar(lista){
            if(lista==1){
                $("#lista-"+lista).show();
                $("#lista-2").hide();
            }else{
                $("#lista-"+lista).show();
                $("#lista-1").hide();
            }

        }
    </script>
@stop
