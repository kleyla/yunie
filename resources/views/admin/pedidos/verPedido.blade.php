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
                                <h4 class="card-title ">Nota nro: {{$nota->id}}</h4>
                                <h5 class="card-title ">Monto: {{$nota->monto_total}}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="productoDatatable">
                                <thead class=" text-primary">
                                    <th>ID</th>
                                    <th>Subtotal</th>
                                    <th>Publicacion</th>
                                    <th>Por monedas</th>
                                    <th>% descuento</th>

                                    <th>Producto</th>
                                    <th>Fecha</th>
                                    <th class="text-right">Actions</th>
                                </thead>
                                <tbody>
                                    @foreach ($detalles as $detalle)
                                    <tr>
                                        <td>{{ $detalle->id }}</td>
                                        <td>{{ $detalle->subtotal }}</td>
                                        <td> <a
                                                href="{{route('verPublicacion', $detalle->publicacion->id)}}">{{ $detalle->publicacion->descripcion }}</a>
                                        </td>
                                        <td class="text-right">{{ $detalle->publicacion->cant_monedas }}</td>
                                        <td class="text-right">- {{ $detalle->publicacion->precio_oferta * 100}} %</td>

                                        <td> <a href="{{route('verProducto', $detalle->producto->id)}}">{{ $detalle->producto->nombre }}</a> </td>

                                        <td class="text-primary">{{ $detalle->created_at }}</td>
                                        <td class="td-actions text-right">
                                            <a href="{{route('verPedido', $detalle->id )}}">
                                                <button type="button" rel="tooltip" class="btn btn-info" title="Ver">
                                                    <i class="material-icons">search</i>
                                                </button>
                                            </a>
                                            <a href="{{route('editProducto', $detalle->id )}}">
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
