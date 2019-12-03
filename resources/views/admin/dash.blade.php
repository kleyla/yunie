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
                    <div class="card-footer"></div>
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
                    <div class="card-footer"></div>
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
                    <div class="card-footer"></div>
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
                    <div class="card-footer"></div>
                </div>
            </div>
        </div>
        <div class="row">
            {{-- <canvas id="myChart"></canvas> --}}

            <div class="col-md-4">
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
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header ">
                        <h4 class="card-title">Me gustas por fecha</h4>
                    </div>

                    <div class="card-body">
                        <canvas id="mgChart"></canvas>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header ">
                        <h4 class="card-title">Tiendas seguidas por fecha</h4>
                    </div>

                    <div class="card-body">
                        <canvas id="segChart"></canvas>

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
                        <h4 class="card-title">Comentarios por fecha</h4>
                    </div>
                    <div class="card-body">
                        <canvas id="comChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header ">
                        <h4 class="card-title">Publicaciones compartidas por fecha</h4>
                    </div>

                    <div class="card-body">
                        <canvas id="compChart"></canvas>

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
    const fechasMg = @json($fechasMg);
    console.log(fechasMg);
    const cantMg = @json($cantMg);
    console.log(cantMg);

    var ctx = document.getElementById('mgChart').getContext('2d');
        var chart = new Chart(ctx, {
        // The type of chart we want to create
            type: 'bar',
            // The data for our dataset
            data: {
                // labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                labels: fechasMg,
                // label: ['jo', 'ni'],
                datasets: [{
                    label: 'Me gustas',
                    backgroundColor: '#8bc34a',
                    borderColor: '#8bc34a',
                    // data:
                    data: cantMg
                }]
            },

            // Configuration options go here
            options: {}
    });
    const fechasCom = @json($fechasCom);
    console.log(fechasCom);
    const cantCom = @json($cantCom);
    console.log(cantCom);

    var ctx = document.getElementById('comChart').getContext('2d');
        var chart = new Chart(ctx, {
        // The type of chart we want to create
            type: 'bar',
            // The data for our dataset
            data: {
                // labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                labels: fechasCom,
                // label: ['jo', 'ni'],
                datasets: [{
                    label: 'Comentarios',
                    backgroundColor: '#ff9800',
                    borderColor: '#ff9800',
                    // data:
                    data: cantCom
                }]
            },

            // Configuration options go here
            options: {}
    });
    const fechasComp = @json($fechasComp);
    console.log(fechasComp);
    const cantComp = @json($cantComp);
    console.log(cantComp);

    var ctx = document.getElementById('compChart').getContext('2d');
        var chart = new Chart(ctx, {
        // The type of chart we want to create
            type: 'bar',
            // The data for our dataset
            data: {
                // labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                labels: fechasComp,
                // label: ['jo', 'ni'],
                datasets: [{
                    label: 'Compartidos',
                    backgroundColor: '#f44336',
                    borderColor: '#f44336',
                    // data:
                    data: cantComp
                }]
            },

            // Configuration options go here
            options: {}
    });
    const fechasSeg = @json($fechasSeg);
    console.log(fechasSeg);
    const cantSeg = @json($cantSeg);
    console.log(cantSeg);

    var ctx = document.getElementById('segChart').getContext('2d');
        var chart = new Chart(ctx, {
        // The type of chart we want to create
            type: 'bar',
            // The data for our dataset
            data: {
                // labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                labels: fechasSeg,
                // label: ['jo', 'ni'],
                datasets: [{
                    label: 'Seguidores',
                    backgroundColor: '#00bcd4',
                    borderColor: '#00bcd4',
                    // data:
                    data: cantSeg
                }]
            },

            // Configuration options go here
            options: {}
    });
</script>
@endpush

@endsection
