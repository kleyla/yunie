@extends('layouts.admin')
@section('vendedores','active')
@section('contenido')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title ">Vendedores</h4>
                            </div>
                            <div class="col-md-6 text-right">
                                {{-- <div class="text-right"> --}}
                                <button type="button" rel="tooltip" class="btn btn-info" title="Agregar"
                                    data-toggle="modal" data-target="#addVendedor">
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
                            <table class="table" id="vendedorDatatable">
                                <thead class=" text-primary">
                                    <th>ID</th>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Telefono</th>
                                    <th>Fecha</th>
                                    <th class="text-right">Actions</th>
                                </thead>
                                <tbody>
                                    @foreach ($vendedores as $vendedor)
                                    <tr>
                                        <td>{{ $vendedor->id }}</td>
                                        <td>{{ $vendedor->nombres }}</td>
                                        <td>{{ $vendedor->apellidos }}</td>
                                        <td>{{ $vendedor->telefono }}</td>
                                        <td class="text-primary">{{ $vendedor->created_at }}</td>
                                        <td class="td-actions text-right">
                                            <a href="{{route('verVendedor', $vendedor->id )}}">
                                                <button type="button" rel="tooltip" class="btn btn-info" title="Ver">
                                                    <i class="material-icons">search</i>
                                                </button>
                                            </a>
                                            <a href="{{route('editVendedor', $vendedor->id )}}">
                                                <button type="button" rel="tooltip" class="btn btn-success"
                                                    title="Editar">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                            </a>
                                            <button type="button" rel="tooltip" class="btn btn-danger delvendedor"
                                                data-toggle="modal" data-target="#vendedorDelModal" title="Eliminar">
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
<div class="modal fade" id="addVendedor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar vendedor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form" method="POST" action="{{ route('vendedorAdd')}}" id="registrationform"
                enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 pr-md-1">
                            {{-- <label for="exampleInputEmail1">Nombres</label> --}}
                            <input type="text" class="form-control" id="nombres" name="nombres" aria-describedby=""
                                placeholder="Nombres" required>
                        </div>
                        <div class="col-md-6 pr-md-1">
                            {{-- <label for="exampleInputEmail1">Apellidos</label> --}}
                            <input type="text" class="form-control" id="apellidos" name="apellidos" aria-describedby=""
                                placeholder="Apellidos" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pr-md-1">
                            <input type="date" class="form-control" id="fecha_nac" name="fecha_nac" aria-describedby=""
                                placeholder="Fecha de nacimiento">
                        </div>
                        <div class="col-md-6 pr-md-1">
                            <input type="number" class="form-control" id="telefono" name="telefono" aria-describedby=""
                                placeholder="Telefono" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 pr-md-1">
                            <input type="text" class="form-control" id="direccion" name="direccion" aria-describedby=""
                                placeholder="Direccion" required>

                        </div>
                        {{-- <div class="col-md-6 pr-md-1">
                            <input type="text" class="form-control" id="nit" name="nit" aria-describedby=""
                                placeholder="Nit">
                        </div> --}}
                    </div>
                    <div class="form-group">
                        <label for="permiso">Example select</label>
                        <select class="form-control" data-style="btn btn-link" id="usuario" name="usuario">
                            @foreach ($usuarios as $usuario)
                            <option name="usuario" value="{{ $usuario->id }}">{{ $usuario->email }}</option>
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
<div class="modal fade" id="vendedorDelModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="delvendedorForm" class="form" method="POST" action="/vendedorDel" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <p>Realmente desea eliminar este vendedor?.</p>
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
            var clientesTable = $('#vendedorDatatable').DataTable();
            clientesTable.on('click', '.delvendedor', function(){
              $tr = $(this).closest('tr');
              if($($tr).hasClass('child')){
                $tr = $tr.prev('.parent');
              }
              var data = clientesTable.row($tr).data();
              console.log(data);
              $("#vendedorDelModal").modal('show');
              $('#delvendedorForm').attr('action', '/vendedorDel/'+data[0]);
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
