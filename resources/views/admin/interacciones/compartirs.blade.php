@extends('layouts.admin')
@section('interacciones','active')
@section('contenido')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Publicaciones compartidas</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="publicacionDatatable">
                                <thead class=" text-primary">
                                    <th>ID</th>
                                    <th>Producto</th>
                                    <th>Descripcion</th>
                                    <th class="text-right">Precio oferta</th>
                                    <th class="text-right">Monedas</th>
                                    <th class="text-right">Fecha de pub.</th>
                                    <th>Cliente</th>
                                    <th>Comentario</th>
                                    <th class="text-right">Fecha del me gusta.</th>
                                </thead>
                                <tbody>
                                    @foreach ($compartirs as $compartir)
                                    <tr>
                                        <td>{{ $compartir->id }}</td>
                                        <td> <a
                                                href="{{route('verProducto', $compartir->idp)}}">{{ $compartir->nombre }}</a>
                                        </td>
                                        <td> <a
                                                href="{{route('verPublicacion', $compartir->id)}}">{{ $compartir->descripcion }}</a>
                                        </td>
                                        <td class="text-right">{{ $compartir->precio_oferta }}</td>
                                        <td class="text-right">{{ $compartir->cant_monedas }}</td>

                                        <td class="text-right">{{ $compartir->created_at }}</td>
                                        <td>{{ $compartir->nombres }}</td>
                                        <td>{{ $compartir->comentario }}</td>
                                        <td class="text-right">{{ $compartir->fecha }}</td>
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
