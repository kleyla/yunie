@extends('layouts.admin')
@section('tiendas','active')
@section('contenido')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        @if (Auth::user()->id_permiso == 1)
                        <h4 class="card-title ">Administrador</h4>
                        @endif
                        @if (Auth::user()->id_permiso == 2)
                        <h4 class="card-title ">Vendedor</h4>
                        @endif
                        @if (Auth::user()->id_permiso == 3)
                        <h4 class="card-title ">Cliente</h4>
                        @endif
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
                        <form method="POST" class="form" action="{{ route('tiendaUpdate', $tienda->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nombres</label>
                                        <input type="text" class="form-control" name="nombre" id="nombre"
                                            value="{{ $tienda->nombre }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Descripcion</label>
                                        <input type="text" class="form-control" name="descripcion" id="descripcion"
                                            value="{{ $tienda->nombre }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Direccion</label>
                                        <input type="text" class="form-control" name="direccion" id="direccion"
                                            value="{{ $tienda->direccion }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Telefono</label>
                                        <input type="number" class="form-control" name="telefono" id="telefono"
                                            value="{{ $tienda->telefono }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nit</label>
                                        <input type="number" class="form-control" name="nit" id="nit"
                                            value="{{ $tienda->nit }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating"></label>
                                        <input type="text" class="form-control">
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
                <div class="card card-profile">
                    <div class="card-avatar">
                        <a href="#pablo">
                            <img class="img" src="{{ asset("img/tiendas/$tienda->foto") }}" />
                        </a>
                    </div>
                    <div class="card-body">
                        <h6 class="card-category text-gray">Tienda</h6>
                        <p class=""> <strong>Nombre:</strong> {{ $tienda->nombre }}</p>
                        <div class="text-left">
                            <p class=""> <strong>Telefono: </strong> {{ $tienda->telefono }}</p>
                            <p class=""> <strong>Direccion: </strong> {{ $tienda->direccion }}</p>
                            <p class=""> <strong>Nit.:</strong> {{ $tienda->nit }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
