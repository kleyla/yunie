@extends('layouts.admin')
@section('interacciones','active')
@section('contenido')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Tiendas siguidas</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="publicacionDatatable">
                                <thead class=" text-primary">
                                    <th>ID</th>
                                    <th>Cliente</th>
                                    <th>Tienda</th>
                                    <th class="text-right">Monedas</th>
                                    <th class="text-right">Fecha de seguir.</th>
                                </thead>
                                <tbody>
                                    @foreach ($seguirs as $seguir)
                                    <tr>
                                        <td>{{ $seguir->id }}</td>
                                        <td> <a href="{{route('verCliente', $seguir->idc)}}">{{ $seguir->nombres }}</a>
                                        </td>
                                        <td> <a
                                                href="{{route('verTienda', $seguir->idt)}}">{{ $seguir->nombre }}</a>
                                        </td>
                                        <td class="text-right">{{ $seguir->cant_monedas }}</td>
                                        <td class="text-right">{{ $seguir->fecha }}</td>
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

</script>
@endpush

@endsection
