@extends('layouts.admin')
@section('pedidos','active')
@section('contenido')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title ">Pedidos</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="productoDatatable">
                                <thead class=" text-primary">
                                    <th>ID</th>
                                    <th>Monto</th>
                                    <th>Fecha</th>
                                    <th class="text-right">Actions</th>
                                </thead>
                                <tbody>
                                    @foreach ($notas as $nota)
                                    <tr>
                                        <td>{{ $nota->id }}</td>
                                        <td>{{ $nota->monto_total }}</td>
                                        <td class="text-primary">{{ $nota->created_at }}</td>
                                        <td class="td-actions text-right">
                                            <a href="{{route('verPedido', $nota->id )}}">
                                                <button type="button" rel="tooltip" class="btn btn-info" title="Ver">
                                                    <i class="material-icons">search</i>
                                                </button>
                                            </a>
                                            <a href="{{route('editProducto', $nota->id )}}">
                                                <button type="button" rel="tooltip" class="btn btn-success"
                                                    title="Editar">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                            </a>

                                            <button type="button" rel="tooltip" class="btn btn-danger delProducto"
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


@push('custom-scripts')
<script type="text/javascript">
    $(document).ready(function() {
          $().ready(function() {
            var clientesTable = $('#productoDatatable').DataTable();
            clientesTable.on('click', '.delProducto', function(){
              $tr = $(this).closest('tr');
              if($($tr).hasClass('child')){
                $tr = $tr.prev('.parent');
              }
              var data = clientesTable.row($tr).data();
              console.log(data);
              $("#productoDelModal").modal('show');
              $('#delProductoForm').attr('action', '/productoDel/'+data[0]);
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
