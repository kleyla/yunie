@extends('layouts.admin')
@section('clientes','active')
@section('contenido')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
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
                                    <th>Publicacion</th>
                                    <th>Precio oferta</th>
                                    <th>Monedas</th>
                                    <th>Fecha inicio</th>
                                    <th>Fecha fin</th>
                                    <th>Fecha</th>
                                </thead>
                                <tbody>
                                    @foreach ($megustas as $megusta)
                                    <tr>
                                        <td>{{ $megusta->id }}</td>
                                        <td> <a
                                                href="{{route('verPublicacion', $megusta->id)}}">{{ $megusta->descripcion }}</a>
                                        </td>
                                        <td>{{ $megusta->precio_oferta }}</td>
                                        <td>{{ $megusta->cant_monedas }}</td>
                                        <td>{{ $megusta->fecha_ini }}</td>
                                        <td>{{ $megusta->fecha_fin }}</td>
                                        <td>{{ $megusta->fecha }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
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
                            <p class=""> <strong>Fecha de nac.:</strong> {{ $cliente->fecha_nac }}</p>
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
