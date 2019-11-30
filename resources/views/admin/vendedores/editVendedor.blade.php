@extends('layouts.admin')
@section('vendedores','active')
@section('contenido')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        @if ($usuario->id_permiso == 1)
                        <h4 class="card-title ">Administrador</h4>
                        @endif
                        @if ($usuario->id_permiso == 2)
                        <h4 class="card-title ">Vendedor</h4>
                        @endif
                        @if ($usuario->id_permiso == 3)
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
                        <form method="POST" class="form" action="{{ route('vendedorUpdate', $vendedor->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nick</label>
                                        <input type="text" class="form-control" name="name" id="mane"
                                            value="{{ $usuario->name }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Email</label>
                                        <input type="email" class="form-control" name="email" id="email"
                                            value="{{ $usuario->email }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nombres</label>
                                        <input type="text" class="form-control" name="nombres" id="nombres" value="{{ $vendedor->nombres }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Apellidos</label>
                                        <input type="text" class="form-control" name="apellidos" id="apellidos" value="{{ $vendedor->apellidos }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Direccion</label>
                                        <input type="text" class="form-control" name="direccion" id="direccion" value="{{ $vendedor->direccion }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Telefono</label>
                                        <input type="number" class="form-control" name="telefono" id="telefono" value="{{ $vendedor->telefono }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Fecha de nacimiento</label>
                                        <input type="date" class="form-control" name="fecha_nac" id="fecha_nac" value="{{ $vendedor->fecha_nac }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Postal Code</label>
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
                        <a href="{{ route('verVendedor', $vendedor->id) }}">
                            <p class=""> <strong>Email:</strong> {{ $usuario->email }}</p>
                        </a>
                        <div class="text-left">
                            <p class=""> <strong>Nombres:</strong> {{ $vendedor->nombres }}</p>
                            <p class=""> <strong>Apellidos:</strong> {{ $vendedor->apellidos }}</p>
                            <p class=""> <strong>Fecha de nac.:</strong> {{ $vendedor->fecha_nac }}</p>
                            <p class=""> <strong>Telefono: </strong> {{ $vendedor->telefono }}</p>
                            <p class=""> <strong>Direccion: </strong> {{ $vendedor->direccion }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
