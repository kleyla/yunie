@extends('layouts.admin')
@section('clientes','active')
@section('contenido')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Carrito del cliente {{$cliente->nombres}}</h4>
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
                                    <th>Nit</th>
                                    <th>Telefono</th>
                                    <th>Direccion</th>
                                    <th class="text-right">Actions</th>
                                </thead>
                                <tbody>
                                    @foreach ($tiendas as $tienda)
                                    <tr>
                                        <td>{{ $tienda->id }}</td>
                                        <td> <a href="{{route('verTienda', $tienda->id)}}">{{ $tienda->nombre }}</a> </td>
                                        <td>{{ $tienda->nit }}</td>
                                        <td>{{ $tienda->telefono }}</td>
                                        <td>{{ $tienda->direccion }}</td>
                                        <td class="td-actions text-right">
                                            <a href="{{route('verTienda', $tienda->id )}}">
                                                <button type="button" rel="tooltip" class="btn btn-info" title="Ver">
                                                    <i class="material-icons">search</i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-profile">
                    <div class="card-avatar">
                        <a href="#pablo">
                            <img class="img" src="{{ asset("img/users/$user->foto") }}" />
                        </a>
                    </div>
                    <div class="card-body">
                        <h6 class="card-category text-gray">Cliente</h6>
                        <h4 class="card-title">{{ $user->email }}</h4>
                        <div class="text-left">
                            <p class=""> <strong>Nombres:</strong> {{ $cliente->nombres }}</p>
                            <p class=""> <strong>Apellidos:</strong> {{ $cliente->apellidos }}</p>
                            <p class=""> <strong>Fecha de nacimiento:</strong> {{ $cliente->fecha_nac }}</p>
                            <p class=""> <strong>Genero: </strong> {{ $cliente->genero }}</p>
                            <p class=""> <strong>Telefono: </strong> {{ $cliente->telefono }}</p>
                            <p class=""> <strong>CI: </strong> {{ $cliente->ci }}</p>
                            <p class=""> <strong>Direccion: </strong> {{ $cliente->direccion }}</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
