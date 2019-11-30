@extends('layouts.admin')
@section('categorias','active')
@section('contenido')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Categoria</h4>
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
                        <form method="POST" class="form" action="{{ route('categoriaUpdate', $categoria->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nombre</label>
                                        <input type="text" class="form-control" name="nombre" id="nombre"
                                            value="{{ $categoria->nombre }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Descripcion</label>
                                        <input type="text" class="form-control" name="descripcion" id="descripcion"
                                            value="{{ $categoria->descripcion }}">
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
                            <img class="img" src="{{ asset("img/categorias/$categoria->foto") }}" />
                        </a>
                    </div>
                    <div class="card-body">
                        <h6 class="card-category text-gray">Categoria</h6>
                        <p class=""> <strong>Nombre:</strong> {{ $categoria->nombre }}</p>
                        <div class="text-left">
                            <p class=""> <strong>Descripcion:</strong> {{ $categoria->descripcion }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
