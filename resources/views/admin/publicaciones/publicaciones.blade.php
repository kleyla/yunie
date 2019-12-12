@extends('layouts.admin')
@section('publicaciones','active')
@section('contenido')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title ">Publicaciones</h4>
                            </div>

                            <div class="col-md-6 text-right">
                                <button type="button" rel="tooltip" class="btn btn-info" title="Agregar"
                                    data-toggle="modal" data-target="#addUser">
                                    <i class="material-icons">add_circle_outline</i>
                                </button>
                            </div>
                        </div>

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
                            <table class="table" id="publicacionDatatable">
                                <thead class=" text-primary">
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Precio oferta</th>
                                    <th>Monedas</th>
                                    <th>Fecha</th>
                                    <th class="text-right">Actions</th>
                                </thead>
                                <tbody>
                                    @foreach ($publicaciones as $publicacion)
                                    <tr>
                                        <td>{{ $publicacion->id }}</td>
                                        <td> <a
                                                href="{{route('verProducto', $publicacion->idp)}}">{{ $publicacion->nombre }}</a>
                                        </td>
                                        <td>{{ $publicacion->descripcion }}</td>
                                        @php
                                        $precio = $publicacion->precio_oferta * 100
                                        @endphp
                                        <td>- {{ $precio}} %</td>
                                        <td>{{ $publicacion->cant_monedas }}</td>
                                        <td>{{ $publicacion->created_at }}</td>
                                        <td class="td-actions text-right">
                                            <a href="{{route('verPublicacion', $publicacion->id )}}">
                                                <button type="button" rel="tooltip" class="btn btn-info" title="Ver">
                                                    <i class="material-icons">search</i>
                                                </button>
                                            </a>
                                            <a href="{{route('editPublicacion', $publicacion->id )}}">
                                                <button type="button" rel="tooltip" class="btn btn-success"
                                                    title="Editar">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                            </a>

                                            <button type="button" rel="tooltip" class="btn btn-danger delPublicacion"
                                                data-toggle="modal" data-target="#userDelModal" title="Eliminar">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>
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
</div>


{{-- ADD USER --}}
<div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar publicacion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form" method="POST" action="{{ route('publicacionAdd')}}" id="registrationform"
                enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">Descripcion</label>
                                <input type="text" class="form-control" name="descripcion" id="descripcion" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Precio oferta</label>
                                <input type="number" step="0.01" class="form-control" id="precio_oferta"
                                    name="precio_oferta" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Cantidad de monedas</label>
                                <input type="number" class="form-control" id="cant_monedas" name="cant_monedas"
                                    required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="bmd-label-floating">Fecha inicio</label>
                            <div class="form-group">
                                <input type="date" class="form-control" id="fecha_ini" name="fecha_ini"
                                    placeholder="Fecha" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="bmd-label-floating">Fecna fin</label>
                            <div class="form-group">
                                <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="producto">Example select</label>
                        <select class="form-control" data-style="btn btn-link" id="producto" name="producto">
                            @foreach ($productos as $producto)
                            <option name="producto" value="{{ $producto->id }}">{{ $producto->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>

        </div>
    </div>
</div>
{{-- USER DELETE --}}
<div class="modal fade" id="publicacionDelModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar publicacion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="delPublicacionForm" class="form" method="POST" action="/publicacionDel"
                enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <p>Realmente desea eliminar esta publicacion?.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-danger">Aceptar</button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('custom-scripts')
<script type="text/javascript">
    $(document).ready(function() {
          $().ready(function() {
            var clientesTable = $('#publicacionDatatable').DataTable();
            clientesTable.on('click', '.delPublicacion', function(){
              $tr = $(this).closest('tr');
              if($($tr).hasClass('child')){
                $tr = $tr.prev('.parent');
              }
              var data = clientesTable.row($tr).data();
              console.log(data);
              $("#publicacionDelModal").modal('show');
              $('#delPublicacionForm').attr('action', '/publicacionDel/'+data[0]);
            });

          });

        });

        $('#btn-firebase').on('click', function() {
            let email = document.querySelector('#email').value;
            let password = document.querySelector('#password').value;
            console.log("Before firebase")
            firebase
            .auth()
            .createUserWithEmailAndPassword(email, password)
            .then(user => {
            console.log(user);
            //   $('#registrationform').attr('action', '/userAdd');
            });
        })

</script>
@endpush

@endsection
