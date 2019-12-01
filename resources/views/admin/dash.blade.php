@extends('layouts.admin')
@section('dash','active')
@section('contenido')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-warning card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">people</i>
                        </div>
                        <p class="card-category">Usuarios</p>
                        <h3 class="card-title">{{$usuarios}}</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">people</i>Son los usuarios: administradores, vendedores y
                            clientes.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-success card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">store</i>
                        </div>
                        <p class="card-category">Tiendas</p>
                        <h3 class="card-title">{{$tiendas}}</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">store</i> Son las tiendas vigentes.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-danger card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">blur_circular</i>
                        </div>
                        <p class="card-category">Productos</p>
                        <h3 class="card-title">{{$productos}}</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">blur_circular</i>Cantidad de productos.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-info card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">category</i>
                        </div>
                        <p class="card-category">Categorias</p>
                        <h3 class="card-title">{{$categorias}}</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">category</i> Just Updated
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            {{-- <canvas id="myChart"></canvas> --}}

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header ">
                        {{-- <div class="ct-chart" id="dailySalesChart"></div> --}}
                        <h4 class="card-title">Clientes por fecha</h4>
                    </div>
                    <div class="card-body">
                        <canvas id="clientesChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header ">
                        <h4 class="card-title">Productos por fecha</h4>
                    </div>

                    <div class="card-body">
                        <canvas id="productosChart"></canvas>

                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card card-chart">
                    <div class="card-header card-header-danger">
                        <div class="ct-chart" id="completedTasksChart"></div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Completed Tasks</h4>
                        <p class="card-category">Last Campaign Performance</p>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">access_time</i> campaign sent 2 days ago
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('custom-scripts')
<script type="text/javascript">
    const fechas = @json($fechas);
    console.log(fechas);
    const clientes = @json($cantClientes);
    console.log(clientes);

    var ctx = document.getElementById('clientesChart').getContext('2d');
        var chart = new Chart(ctx, {
        // The type of chart we want to create
            type: 'line',
            // The data for our dataset
            data: {
                // labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                labels: fechas,
                // label: ['jo', 'ni'],
                datasets: [{
                    label: 'Clientes',
                    backgroundColor: 'rgb(255, 99, 132)',
                    borderColor: 'rgb(255, 99, 132)',
                    // data:
                    data: clientes
                }]
            },

            // Configuration options go here
            options: {}
    });
    var ctx = document.getElementById('productosChart').getContext('2d');
        var chart = new Chart(ctx, {
        // The type of chart we want to create
            type: 'bar',
            // The data for our dataset
            data: {
                // labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                labels: fechas,
                // label: ['jo', 'ni'],
                datasets: [{
                    label: 'Clientes',
                    backgroundColor: 'rgb(255, 99, 132)',
                    borderColor: 'rgb(255, 99, 132)',
                    // data:
                    data: clientes
                }]
            },

            // Configuration options go here
            options: {}
    });
</script>
@endpush

@endsection
