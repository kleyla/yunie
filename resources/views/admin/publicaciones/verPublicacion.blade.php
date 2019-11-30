@extends('layouts.admin')
@section('publicaciones','active')
@section('contenido')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Producto</h4>
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
                        <img class="img-thumbnail card-img-top" src="{{ asset("img/productos/$producto->mainFoto") }}"
                            alt="Card image cap">
                        <div class="card-body">
                            <a href="{{ route('verProducto', $producto->id )}}">
                                <h4 class="text-center"> <strong>Nombre:</strong> {{ $producto->nombre }}
                                </h4>
                            </a>
                            <p class=""> <strong>Telefono:</strong> {{ $producto->precio }}</p>
                            <p class=""> <strong>Direccion:</strong> {{ $producto->stock }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Publicacion</h4>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">{{ $publicacion->descripcion }}</h4>
                        <div class="text-center">
                            <div class="justify-content-center">
                                <i class="material-icons md-18">thumb_up</i> {{$megustas}}
                                <i class="material-icons md-18">share</i> {{$compartirs}}
                                <i class="material-icons md-18">sms</i> {{$comentarios}}
                                {{-- <h6><i class="material-icons">thumb_up</i>me</h6> --}}
                            </div>
                        </div>
                        <div class="text-left">
                            <p class=""> <strong>Descripcion:</strong> {{ $publicacion->descripcion }}</p>
                            @php
                                $precio = $publicacion->precio_oferta * 100
                            @endphp
                            <p class=""> <strong>Precio oferta:</strong> - {{ $precio }} %</p>
                            <p class=""> <strong>Monedas:</strong> {{ $publicacion->cant_monedas }}</p>
                            <p class=""> <strong>Fecha inicio.:</strong> {{ $publicacion->fecha_ini }}</p>
                            <p class=""> <strong>Fecha fin: </strong> {{ $publicacion->fecha_fin }}</p>
                            <p class=""> <strong>Fecha: </strong> {{ $publicacion->created_at }}</p>
                        </div>
                        <a href="{{route('editPublicacion', $publicacion->id)}}">Editar publicacion</a>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Comentarios</h4>
                    </div>
                    <div class="card-body">
                        <div class="text-left">
                            @foreach ($comentarios_pub as $comentario_p)
                            <p class=""> <strong>{{ $comentario_p->nombres }}:</strong> {{ $comentario_p->descripcion }}
                            </p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
