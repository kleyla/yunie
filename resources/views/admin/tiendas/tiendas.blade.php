@extends('layouts.admin')
@section('tiendas','active')
@section('contenido')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title ">Tiendas</h4>
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
                            <table class="table" id="tiendaDatatable">
                                <thead class=" text-primary">
                                    <th>ID</th>
                                    <th>Nombres</th>
                                    <th>Telefono</th>
                                    <th>Direccion</th>
                                    <th>Fecha</th>
                                    <th class="text-right">Actions</th>
                                </thead>
                                <tbody>
                                    @foreach ($tiendas as $tienda)
                                    <tr>
                                        <td>{{ $tienda->id }}</td>
                                        <td>{{ $tienda->nombre }}</td>
                                        <td>{{ $tienda->telefono }}</td>
                                        <td>{{ $tienda->direccion }}</td>
                                        <td class="text-primary">{{ $tienda->created_at }}</td>
                                        <td class="td-actions text-right">
                                            <a href="{{route('verTienda', $tienda->id )}}">
                                                <button type="button" rel="tooltip" class="btn btn-info" title="Ver">
                                                    <i class="material-icons">search</i>
                                                </button>
                                            </a>
                                            <a href="{{ route('editTienda', $tienda->id )}}">
                                                <button type="button" rel="tooltip" class="btn btn-success"
                                                    title="Editar">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                            </a>
                                            <button type="button" rel="tooltip" class="btn btn-danger deltienda"
                                                data-toggle="modal" data-target="#tiendaDelModal" title="Eliminar">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- <div id="map"></div> --}}

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
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form" method="POST" action="{{ route('tiendaAdd')}}" id="registrationform"
                enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 pr-md-1">
                            {{-- <label for="exampleInputEmail1">Nombres</label> --}}
                            <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby=""
                                placeholder="Nombre" required>
                        </div>
                        <div class="col-md-6 pr-md-1">
                            {{-- <label for="exampleInputEmail1">Apellidos</label> --}}
                            <input type="text" class="form-control" id="descripcion" name="descripcion"
                                aria-describedby="" placeholder="Descripcion" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pr-md-1">
                            <input type="number" class="form-control" id="telefono" name="telefono" aria-describedby=""
                                placeholder="Telefono" required>
                        </div>
                        <div class="col-md-6 pr-md-1">
                            {{-- <label for="exampleInputEmail1"></label> --}}
                            <input type="number" class="form-control" id="nit" name="nit" aria-describedby=""
                                placeholder="Nit">
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
                        <select class="form-control" data-style="btn btn-link" id="vendedor" name="vendedor">
                            @foreach ($vendedores as $vendedor)
                            <option name="vendedor" value="{{ $vendedor->id }}">{{ $vendedor->nombres }}
                                {{ $vendedor->apellidos}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12">
                        <fieldset>
                            <label class="form-control-label" for="input-first-name">Seleccionar foto</label>
                            <br>
                            <section class="">
                                <input type="file" name="foto" id="foto" required>
                            </section>
                        </fieldset>
                    </div>
                    <div id="map"></div>
                    <input type="text" name="latitud" id="latitud" class="form-control" required>
                    <input type="text" name="longitud" id="longitud" class="form-control" required>
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
<div class="modal fade" id="tiendaDelModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="delTiendaForm" class="form" method="POST" action="/tiendaDel" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <p>Realmente desea eliminar esta tienda?.</p>
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
<style>
    #map {
        background: blue;
        height: 300px;
        border: 0.5cm;
    }
</style>
<script type="text/javascript">
    $(document).ready(function() {
          $().ready(function() {
            var clientesTable = $('#tiendaDatatable').DataTable();
            clientesTable.on('click', '.deltienda', function(){
              $tr = $(this).closest('tr');
              if($($tr).hasClass('child')){
                $tr = $tr.prev('.parent');
              }
              var data = clientesTable.row($tr).data();
              console.log(data);
              $("#tiendaDelModal").modal('show');
              $('#delTiendaForm').attr('action', '/tiendaDel/'+data[0]);
            });
        });
    });

    var map;
    var latN;
    var lngN;
    var Marcador;

    function initMap() {
        var posicion = {
            lat: -17.776210
            , lng: -63.195079
        };
        map = new google.maps.Map(document.getElementById('map'), {
            center: posicion,
            zoom: 15
        });
        console.log(posicion);

        map.addListener('click', function(e) {
            placeMarkerAndPanTo(e.latLng);
            cargarLatLng(e.latLng);
        });
    }

    function cargarLatLng(latLng){
        latN= latLng.lat();
        lngN=latLng.lng();
        document.getElementById('latitud').value= latN.toString();
        document.getElementById('longitud').value= lngN.toString();
            //console.log(arreglo);
    }

    function placeMarkerAndPanTo(latLng) {

        if(Marcador!=null){
            Marcador.setMap(null);
        }
        var infowindow = new google.maps.InfoWindow({
            content: "Latitud:"+latLng.lat()+"   Longitud: "+latLng.lng()
        });

        Marcador = new google.maps.Marker({
            position: latLng,
            map: map,
            animation:google.maps.Animation.BOUNCE,
        });

    // infowindow.open(map, Marcador);
        map.panTo(latLng);
    }

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATxiHfEHVZwbPtp2gdyc8K15B_4LqNwIA&callback=initMap" async
    defer></script>

@endpush

@endsection
