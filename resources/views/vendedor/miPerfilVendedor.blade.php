@extends('layouts.admin')
@section('miPerfilVendedor','active')
@section('contenido')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="card card-profile">
                    <div class="card-avatar">
                        <a href="#pablo">
                            <img class="img" src="{{ asset("img/users/$usuario->foto") }}" />
                        </a>
                    </div>
                    <div class="card-body">
                        @if ( $usuario->id_permiso == 1)
                        <h6 class="card-category text-gray">Administrador</h6>
                        @endif
                        @if ( $usuario->id_permiso == 2)
                        <h6 class="card-category text-gray">Vendedor</h6>
                        @endif
                        @if ( $usuario->id_permiso == 3)
                        <h6 class="card-category text-gray">Cliente</h6>
                        @endif
                        <h4 class="card-title">{{ $usuario->name }}</h4>
                        <p class="card-description">
                            Email: {{ $usuario->email }}
                        </p>
                        <div class="text-left">
                            <p class=""> <strong>Nombres:</strong> {{ $vendedor->nombres }}</p>
                            <p class=""> <strong>Apellidos:</strong> {{ $vendedor->apellidos }}</p>
                            <p class=""> <strong>Fecha de nac.:</strong> {{ $vendedor->fecha_nac }}</p>
                            <p class=""> <strong>Telefono: </strong> {{ $vendedor->telefono }}</p>
                            <p class=""> <strong>Direccion: </strong> {{ $vendedor->direccion }}</p>
                        </div>
                        <a href="{{route('editVendedor', $vendedor->id)}}">Editar perfil</a>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Mis Tiendas</h4>
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
                        <div class="row">
                            {{-- VENDEDORES --}}
                            @if ( $tiendas != null)
                            @foreach ($tiendas as $tienda)
                            <div class="col-md-6">
                                <div class="card" style="width: 20rem;">
                                    <img class="img-thumbnail card-img-top"
                                        src="{{ asset("img/tiendas/$tienda->foto") }}" alt="Card image cap">
                                    <div class="card-body">
                                        <a href="{{route('verTienda', $tienda->id )}}">
                                            <h4 class="text-center"> <strong>Nombre:</strong> {{ $tienda->nombre }}</h4>
                                        </a>
                                        <p class=""> <strong>Telefono:</strong> {{ $tienda->telefono }}</p>
                                        <p class=""> <strong>Direccion:</strong> {{ $tienda->direccion }}</p>
                                        <p class=""> <strong>Nit:</strong> {{ $tienda->nit }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
