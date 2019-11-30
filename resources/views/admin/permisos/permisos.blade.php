@extends('layouts.admin')
@section('permisos','active')
@section('contenido')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Clientes</h4>
                        {{-- <div class="text-right">
                            <button type="button" rel="tooltip" class="btn btn-info" title="Agregar" data-toggle="modal" data-target="#addVendedor">
                                <i class="material-icons">add_circle_outline</i>
                            </button>
                        </div> --}}
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
                                    <th>Fecha</th>
                                    <th class="text-right">Actions</th>
                                </thead>
                                <tbody>
                                    @foreach ($permisos as $permiso)
                                    <tr>
                                        <td>{{ $permiso->id }}</td>
                                        <td>{{ $permiso->nombre }}</td>
                                        <td>{{ $permiso->descripcion }}</td>
                                        <td class="text-primary">{{ $permiso->created_at }}</td>
                                        <td class="td-actions text-right">
                                            <a href="{{route('verCliente', $permiso->id )}}">
                                                <button type="button" rel="tooltip" class="btn btn-info" title="Ver">
                                                    <i class="material-icons">search</i>
                                                </button>
                                            </a>
                                            <button type="button" rel="tooltip" class="btn btn-success" title="Editar">
                                                <i class="material-icons">edit</i>
                                            </button>
                                            <button type="button" rel="tooltip" class="btn btn-danger deluser"
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
<div class="modal fade" id="addVendedor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form" method="POST" action="{{ route('userAdd')}}" id="registrationform"
                enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 pr-md-1">
                            {{-- <label for="exampleInputEmail1">Nombres</label> --}}
                            <input type="text" class="form-control" id="nombres" name="nombres" aria-describedby=""
                                placeholder="Nombres">
                        </div>
                        <div class="col-md-6 pr-md-1">
                            {{-- <label for="exampleInputEmail1">Apellidos</label> --}}
                            <input type="email" class="form-control" id="apellidos" name="apellidos" aria-describedby=""
                                placeholder="Apellidos">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pr-md-1">
                            <input type="date" class="form-control" id="fecha_nac" name="fecha_nac" aria-describedby=""
                                placeholder="Fecha de nacimiento">
                        </div>
                        <div class="col-md-6 pr-md-1">
                            <input type="text" class="form-control" id="direccion" name="direccion" aria-describedby=""
                                placeholder="Direccion">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pr-md-1">
                            <input type="number" class="form-control" id="telefono" name="telefono" aria-describedby=""
                                placeholder="Telefono">
                        </div>
                        <div class="col-md-6 pr-md-1">
                            <input type="text" class="form-control" id="h" name="h" aria-describedby=""
                                placeholder="Direccion">
                        </div>
                    </div>


                    <div class="col-md-12">
                        <fieldset>
                            <label class="form-control-label" for="input-first-name">Seleccionar foto de perfil</label>
                            <br>
                            <section class="">
                                <input type="file" name="foto" id="foto">
                            </section>
                        </fieldset>
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
<div class="modal fade" id="userDelModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="delUserForm" class="form" method="POST" action="/userDel" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <p>Realmente desea eliminar este usuario?.</p>
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
            clientesTable.on('click', '.deluser', function(){
              $tr = $(this).closest('tr');
              if($($tr).hasClass('child')){
                $tr = $tr.prev('.parent');
              }
              var data = clientesTable.row($tr).data();
              console.log(data);
              $("#userDelModal").modal('show');
              $('#delUserForm').attr('action', '/userDel/'+data[0]);
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
