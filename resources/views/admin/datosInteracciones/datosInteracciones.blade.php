@extends('layouts.admin')
@section('datosInteracciones','active')
@section('contenido')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Cliente</h4>
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
                                    <th>X</th>
                                    <th class="text-right">Actions</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><i class="material-icons">thumb_up</i> Me gusta</td>
                                        <td class="text-primary"></td>
                                        <td class="td-actions text-right">
                                            <a href="{{route('datosMegustas')}}">
                                                <button type="button" rel="tooltip" class="btn btn-info" title="Ver">
                                                    <i class="material-icons">search</i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><i class="material-icons">share</i> Compartir</td>
                                        <td class="text-primary"></td>
                                        <td class="td-actions text-right">
                                            <a href="{{route('datosCompartirs')}}">
                                                <button type="button" rel="tooltip" class="btn btn-info" title="Ver">
                                                    <i class="material-icons">search</i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><i class="material-icons">sms</i>Comentarios</td>
                                        <td class="text-primary"></td>
                                        <td class="td-actions text-right">
                                            <a href="{{route('datosComentarios')}}">
                                                <button type="button" rel="tooltip" class="btn btn-info" title="Ver">
                                                    <i class="material-icons">search</i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                            <td>4</td>
                                            <td><i class="material-icons">store</i>Seguir tienda</td>
                                            <td class="text-primary"></td>
                                            <td class="td-actions text-right">
                                                <a href="{{route('datosSeguirs')}}">
                                                    <button type="button" rel="tooltip" class="btn btn-info" title="Ver">
                                                        <i class="material-icons">search</i>
                                                    </button>
                                                </a>
                                            </td>
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
