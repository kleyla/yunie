@extends('layouts.admin')
@section('publicaciones','active')
@section('contenido')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Editar publicacion</h4>
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
                        <form method="POST" class="form" action="{{ route('publicacionUpdate', $publicacion->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Descripcion</label>
                                        <input type="text" class="form-control" name="descripcion" id="descripcion"
                                            value="{{ $publicacion->descripcion}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Precio oferta</label>
                                        <input type="number" step="0.01" class="form-control" id="precio_oferta"
                                            name="precio_oferta" value="{{ $publicacion->precio_oferta}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Cantidad de monedas</label>
                                        <input type="number" class="form-control" id="cant_monedas" name="cant_monedas"
                                            value="{{ $publicacion->cant_monedas}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Fecha inicio</label>
                                        <input type="date" class="form-control" id="fecha_ini" name="fecha_ini"
                                            value="{{ $publicacion->fecha_ini}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Fecna fin</label>
                                        <input type="date" class="form-control" id="fecha_fin" name="fecha_fin"
                                            value="{{ $publicacion->fecha_fin}}">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Guardar</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Publicacion Actual</h4>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">{{ $publicacion->descripcion }}</h4>
                        <div class="text-left">
                            <p class=""> <strong>Descripcion:</strong> {{ $publicacion->descripcion }}</p>
                            <p class=""> <strong>Precio oferta:</strong> {{ $publicacion->precio_oferta }}</p>
                            <p class=""> <strong>Monedas:</strong> {{ $publicacion->cant_monedas }}</p>
                            <p class=""> <strong>Fecha inicio.:</strong> {{ $publicacion->fecha_ini }}</p>
                            <p class=""> <strong>Fecha fin: </strong> {{ $publicacion->fecha_fin }}</p>
                            <p class=""> <strong>Fecha: </strong> {{ $publicacion->created_at }}</p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Producto</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <img class="img-thumbnail card-img-top"
                                src="{{ asset("img/productos/$producto->mainFoto") }}" alt="Card image cap">
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
            </div>
        </div>
    </div>
</div>

@endsection
