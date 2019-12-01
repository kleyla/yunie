@extends('layouts.admin')
@section('reportes','active')
@section('contenido')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Reportes</h4>
                        <div class="flash-message">
                            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                            @if(Session::has('alert-' . $msg))

                            <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#"
                                    class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                            @endif
                            @endforeach
                        </div> <!-- end .flash-message -->
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="vendedorDatatable">
                                <thead class=" text-primary">
                                    <th>ID</th>
                                    <th>Nombres</th>
                                    <th>Fecha inicio</th>
                                    <th>Fecha fin</th>
                                    <th class="text-right">Descargar reporte</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <form class="form" method="POST" action="{{ route('downUsers')}}"
                                            id="registrationform" enctype="multipart/form-data">
                                            @csrf
                                            <td>1</td>
                                            <td><i class="material-icons">people</i>Usuarios</td>
                                            @php
                                            date("Y-m-d\TH:i:s");
                                            @endphp
                                            <td class="text-right"><input type="date" name="fecha_ini_user"> </td>
                                            <td class="text-right"><input type="date" name="fecha_fin_user"> </td>
                                            <td class="td-actions text-right">
                                                {{-- <a href="{{route('downUsers')}}"> --}}
                                                <button type="submit" rel="tooltip" class="btn btn-info" title="Ver">
                                                    <i class="material-icons">cloud_download</i>
                                                </button>
                                                {{-- </a> --}}
                                            </td>
                                        </form>
                                    </tr>
                                    <tr>
                                        <form class="form" method="POST" action="{{ route('downVendedores')}}"
                                            id="registrationform" enctype="multipart/form-data">
                                            @csrf

                                            <td>2</td>
                                            <td><i class="material-icons">people</i> Vendedores</td>
                                            <td class="text-right"><input type="date" name="fecha_ini_vend"> </td>
                                            <td class="text-right"><input type="date" name="fecha_fin_vend"> </td>
                                            <td class="td-actions text-right">
                                                <button type="submit" rel="tooltip" class="btn btn-info" title="Ver">
                                                    <i class="material-icons">cloud_download</i>
                                                </button>
                                            </td>
                                        </form>
                                    </tr>
                                    <tr>
                                        <form class="form" method="POST" action="{{ route('downClientes')}}"
                                            id="registrationform" enctype="multipart/form-data">
                                            @csrf

                                            <td>3</td>
                                            <td><i class="material-icons">people</i>Clientes</td>
                                            <td class="text-right"><input type="date" name="fecha_ini_cli"> </td>
                                            <td class="text-right"><input type="date" name="fecha_fin_cli"> </td>
                                            <td class="td-actions text-right">
                                                <button type="submit" rel="tooltip" class="btn btn-info" title="Ver">
                                                    <i class="material-icons">cloud_download</i>
                                                </button>
                                            </td>
                                        </form>
                                    </tr>
                                    <tr>
                                        <form class="form" method="POST" action="{{ route('downTiendas')}}"
                                            id="registrationform" enctype="multipart/form-data">
                                            @csrf
                                            <td>4</td>
                                            <td><i class="material-icons">store</i>Tiendas</td>
                                            <td class="text-right"><input type="date" name="fecha_ini_tienda"> </td>
                                            <td class="text-right"><input type="date" name="fecha_fin_tienda"> </td>
                                            <td class="td-actions text-right">
                                                <button type="submit" rel="tooltip" class="btn btn-info" title="Ver">
                                                    <i class="material-icons">cloud_download</i>
                                                </button>

                                            </td>
                                        </form>
                                    </tr>
                                    <tr>
                                        <form class="form" method="POST" action="{{ route('downMegustas')}}"
                                            id="registrationform" enctype="multipart/form-data">
                                            @csrf
                                            <td>4</td>
                                            <td><i class="material-icons">store</i>Me gustas</td>
                                            <td class="text-right"><input type="date" name="fecha_ini_megusta"> </td>
                                            <td class="text-right"><input type="date" name="fecha_fin_megusta"> </td>
                                            <td class="td-actions text-right">
                                                <button type="submit" rel="tooltip" class="btn btn-info" title="Ver">
                                                    <i class="material-icons">cloud_download</i>
                                                </button>
                                            </td>
                                        </form>

                                    </tr>
                                    <tr>
                                        <form class="form" method="POST" action="{{ route('downProductos')}}"
                                            id="registrationform" enctype="multipart/form-data">
                                            @csrf
                                            <td>4</td>
                                            <td><i class="material-icons">store</i>Productos</td>
                                            <td class="text-right"><input type="date" name="fecha_ini_prod"> </td>
                                            <td class="text-right"><input type="date" name="fecha_fin_prod"> </td>
                                            <td class="td-actions text-right">
                                                <a href="{{route('downProductos')}}">
                                                    <button type="submit" rel="tooltip" class="btn btn-info"
                                                        title="Ver">
                                                        <i class="material-icons">cloud_download</i>
                                                    </button>
                                                </a>
                                            </td>
                                        </form>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
