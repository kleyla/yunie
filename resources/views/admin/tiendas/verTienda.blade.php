@extends('layouts.admin')
@section('tiendas','active')
@section('contenido')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-profile">
                    <div class="card-avatar">
                        <a href="#pablo">
                            <img class="img" src="{{ asset("img/tiendas/$tienda->foto") }}" />
                        </a>
                    </div>
                    <div class="card-body">
                        <h6 class="card-category text-gray">Tienda</h6>
                        {{-- <h4 class="card-title">{{ $vendedor->nombres }}</h4> --}}
                        <p class=""> <strong>Nombre:</strong> {{ $tienda->nombre }}</p>

                        <div class="text-left">
                            <p class=""> <strong>Direccion: </strong> {{ $tienda->direccion }}</p>
                            <p class=""> <strong>Telefono: </strong> {{ $tienda->telefono }}</p>
                            <p class=""> <strong>Nit:</strong> {{ $tienda->nit }}</p>
                        </div>
                        <a href="{{route('editTienda', $tienda->id)}}">Editar tienda</a>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h6>Ubicacion:</h6>
                        <div id="map"></div>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="card card-profile">
                    <div class="card-avatar">
                        <a href="#pablo">
                            <img class="img" src="{{ asset("img/users/$usuario->foto") }}" />
                        </a>
                    </div>
                    <div class="card-body">
                        @if ( $usuario->id_permiso == 1)
                        <h6 class="card-category text-gray">Administrador</h6>
                        @endif
                        @if ( $usuario->id_permiso == 2)
                        <h6 class="card-category text-gray">Vendedor</h6>
                        @endif
                        @if ( $usuario->id_permiso == 3)
                        <h6 class="card-category text-gray">Cliente</h6>
                        @endif
                        {{-- <h4 class="card-title">{{ $vendedor->nombres }}</h4> --}}
                        <a href="{{route('verVendedor', $vendedor->id)}}">
                            <p class=""> <strong>Email:</strong> {{ $usuario->email }}</p>
                        </a>
                        <div class="text-left">
                            <p class=""> <strong>Nombres:</strong> {{ $vendedor->nombres }}</p>
                            <p class=""> <strong>Apellidos:</strong> {{ $vendedor->apellidos }}</p>
                            <p class=""> <strong>Fecha de nac.:</strong> {{ $vendedor->fecha_nac }}</p>
                            <p class=""> <strong>Telefono: </strong> {{ $vendedor->telefono }}</p>
                            <p class=""> <strong>Direccion: </strong> {{ $vendedor->direccion }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Productos de la tienda</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            {{-- VENDEDORES --}}
                            @if ( $productos != null)
                            @foreach ($productos as $producto)
                            <div class="col-md-3">
                                {{-- <div class="card" style="width: 20rem;"> --}}
                                <img class="img-thumbnail card-img-top"
                                    src="{{ asset("img/productos/$producto->mainFoto") }}" alt="Card image cap">
                                <div class="card-body">
                                    <a href="{{ route('verProducto', $producto->id )}}">
                                        <h4 class="text-center"> <strong>Nombre:</strong> {{ $producto->nombre }}
                                        </h4>
                                    </a>
                                    <p class="card-text"> <strong>Telefono:</strong> {{ $producto->precio }}</p>
                                    <p class="card-text"> <strong>Direccion:</strong> {{ $producto->stock }}</p>
                                </div>
                                {{-- </div> --}}
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
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

<script>
    var map;
    const tienda = @json($ubicacion);

        function initMap() {
            //console.log(tienda);

            console.log(tienda);
            var iconBase1 = 'https://maps.google.com/mapfiles/kml/shapes/';
            var iconBase = 'http://maps.google.com/mapfiles/kml/paddle/';
            console.log(tienda.length);
            var lati=parseFloat(tienda[0].latitud);
            console.log(lati);
              var long=parseFloat(tienda[0].longitud);
              console.log(long);
              var myLatLng = {lat: lati, lng: long};
            map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: myLatLng,
            });
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                // icon: iconBase + 'blu-circle.png'
            });

        }
        function cargarLatLng(latLng){
            document.getElementById('lat').value=latLng.lat();
            document.getElementById('lng').value=latLng.lng();
        }

        function placeMarkerAndPanTo(latLng) {

            if(Marcador!=null){
            Marcador.setMap(null);
            }
            var infowindow = new google.maps.InfoWindow({
            content: "Latitud:"+latLng.lat()+"   Longitud: "+latLng.lng()
            });

            var Marcador = new google.maps.Marker({
                position: latLng,
                map: map,
                animation:google.maps.Animation.BOUNCE,
            });

          infowindow.open(map, Marcador);
          map.panTo(latLng);

        }

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATxiHfEHVZwbPtp2gdyc8K15B_4LqNwIA&callback=initMap" async
    defer></script>

@endpush

@endsection
