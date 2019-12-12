@extends('layouts.admin')
@section('interacciones','active')
@section('contenido')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Interacciones</h4>
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
                                    <th>Descripcion</th>
                                    <th class="text-right">Actions</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>4</td>
                                        <td><i class="material-icons">thumb_up</i> Me gusta</td>
                                        <td class="">Aqui puedes ver los me gustas de los clientes a las publicaciones. </td>
                                        <td class="td-actions text-right">
                                            <a href="{{route('megustas')}}">
                                                <button type="button" rel="tooltip" class="btn btn-info" title="Ver">
                                                    <i class="material-icons">search</i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><i class="material-icons">share</i> Compartir</td>
                                        <td class="">Aqui puedes ver las publicaciones compartidas por los clientes.</td>
                                        <td class="td-actions text-right">
                                            <a href="{{route('compartirs')}}">
                                                <button type="button" rel="tooltip" class="btn btn-info" title="Ver">
                                                    <i class="material-icons">search</i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><i class="material-icons">sms</i>Comentarios</td>
                                        <td class="">Aqui puedes ver los comentarios de los clientes a las publicaciones.</td>
                                        <td class="td-actions text-right">
                                            <a href="{{route('comentarios')}}">
                                                <button type="button" rel="tooltip" class="btn btn-info" title="Ver">
                                                    <i class="material-icons">search</i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><i class="material-icons">store</i>Seguir tiendas</td>
                                        <td class="">Aqui puedes verl los clientes que siguen a las diferentes tiendas.</td>
                                        <td class="td-actions text-right">
                                            <a href="{{route('seguirs')}}">
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
