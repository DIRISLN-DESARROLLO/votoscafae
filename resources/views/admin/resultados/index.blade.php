@extends('admin.layouts.app')

@section('content')
    <div class="d-flex flex-column flex-column-fluid mt-5">
        <div class="row">
            <div class="col-lg-8">
                <div class="card card-flush h-lg-100">
                    <div class="card-header py-7">
                        <h2>Resultados de la Votación</h2>
                    </div>
                    <div  class="card-body card-body d-flex justify-content-between flex-column pt-3">
                        <p><strong>Total de Usuarios: </strong>{{ $totalUsuarios }}</p>
                        <p><strong>Total de Votos: </strong>{{ $totalVotos }}</p>
                        <p><strong>Usuarios que no votaron: </strong>{{ $usuariosNoVotaron }}</p>
                        <p><strong>Porcentaje de Usuarios que No Votaron: </strong>{{ number_format($porcentajeNoVotaron, 2) }}%</p>
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                            <tr>
                                <th>Opción</th>
                                <th>Votos</th>
                                <th>Porcentaje</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($resultados as $resultado)
                                <tr>
                                    <td>{{ $resultado->lista->nombre }}</td>
                                    <td>{{ $resultado->votos }}</td>
                                    <td>{{ number_format($resultado->porcentaje, 2) }}%</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <!-- Mostrar al ganador -->
                        @if ($ganador)
                            <h4>El ganador es: {{ $ganador->lista->nombre }} con {{ $ganador->votos }} votos ({{ number_format($ganador->porcentaje, 2) }}%)</h4>
                        @endif

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-flush h-lg-100">
                    <div class="card-header py-7">
                        <h2>Resultado gráfico</h2>
                    </div>
                    <div  class="card-body card-body d-flex justify-content-between flex-column pt-3">
                        <canvas id="myChart" class="grafico"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('css')
    <style>
        /*
    .grafico{
        text-align: center !important;
        width: 600px !important;
        height: 600px !important;
    }*/
    </style>
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var listas = @json($listas);
        var porcentajes = @json($resultados->pluck('porcentaje'));
        var porcentajeNoVotaron = {{ number_format($porcentajeNoVotaron, 2) }};

        var labels = listas.concat(['No votaron']);
        var data = porcentajes.concat([porcentajeNoVotaron]);

        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Porcentaje de Votos',
                    data: data,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)', // Color de la primera lista
                        'rgba(54, 162, 235, 0.2)', // Color de la segunda lista
                        'rgba(255, 206, 86, 0.2)', // Color de la tercera lista
                        'rgba(75, 192, 192, 0.2)', // Color de los usuarios que no votaron
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)', // Borde de la primera lista
                        'rgba(54, 162, 235, 1)', // Borde de la segunda lista
                        'rgba(255, 206, 86, 1)', // Borde de la tercera lista
                        'rgba(75, 192, 192, 1)', // Borde de los usuarios que no votaron
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true, // Hace que el gráfico sea responsivo
                plugins: {
                    legend: {
                        position: 'top', // Posición de la leyenda
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                var porcentaje = tooltipItem.raw.toFixed(2); // Obtener el porcentaje
                                return tooltipItem.label + ': ' + porcentaje + '%'; // Mostrar porcentaje en el tooltip
                            }
                        }
                    }
                }
            }
        });
    </script>
@stop
