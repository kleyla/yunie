@extends('layouts.admin')
@section('clientes','active')
@section('contenido')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Me gustas de {{$cliente->nombres}}</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table" id="vendedorDatatable">
                                        <thead class=" text-primary">
                                            <th>ID</th>
                                            <th>Monedas</th>
                                            <th>Publicacion</th>
                                            <th>Fecha</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($monedasMegusta as $megusta)
                                            <tr>
                                                <td>{{ $megusta->id }}</td>
                                                <td class="text-right">{{ $megusta->valor }}</td>
                                                <td> <a
                                                        href="{{route('verPublicacion', $megusta->idp)}}">{{ $megusta->descripcion }}</a>
                                                </td>
                                                <td class="text-right">{{ $megusta->created_at }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Compartidos de {{$cliente->nombres}}</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table" id="vendedorDatatable">
                                        <thead class=" text-primary">
                                            <th>ID</th>
                                            <th>Monedas</th>
                                            <th>Publicacion</th>
                                            <th>Fecha</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($monedasCompartir as $compartir)
                                            <tr>
                                                <td>{{ $compartir->id }}</td>
                                                <td class="text-right">{{ $compartir->valor }}</td>
                                                <td> <a
                                                        href="{{route('verPublicacion', $compartir->idp)}}">{{ $compartir->descripcion }}</a>
                                                </td>
                                                <td class="text-right">{{ $compartir->created_at }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Comentarios de {{$cliente->nombres}}</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table" id="vendedorDatatable">
                                        <thead class=" text-primary">
                                            <th>ID</th>
                                            <th>Monedas</th>
                                            <th>Publicacion</th>
                                            <th>Fecha</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($monedasComentar as $comentario)
                                            <tr>
                                                <td>{{ $comentario->id }}</td>
                                                <td class="text-right">{{ $comentario->valor }}</td>
                                                <td> <a
                                                        href="{{route('verPublicacion', $comentario->idp)}}">{{ $comentario->descripcion }}</a>
                                                </td>
                                                <td class="text-right">{{ $comentario->created_at }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Tiendas que sigue {{$cliente->nombres}}</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table" id="vendedorDatatable">
                                        <thead class=" text-primary">
                                            <th>ID</th>
                                            <th>Monedas</th>
                                            <th>Publicacion</th>
                                            <th>Fecha</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($monedasSeguir as $tiendas)
                                            <tr>
                                                <td>{{ $tiendas->id }}</td>
                                                <td class="text-right">{{ $tiendas->valor }}</td>
                                                <td> <a
                                                        href="{{route('verTienda', $tiendas->idt)}}">{{ $tiendas->nombre }}</a>
                                                </td>
                                                <td class="text-right">{{ $tiendas->created_at }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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
