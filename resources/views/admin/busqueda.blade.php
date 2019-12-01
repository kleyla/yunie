@extends('layouts.admin')
@section('tiendas','active')
@section('contenido')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h6 class="text-center">Resulatos de la busqueda</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            {{-- VENDEDORES --}}
                            @if ( $productosTag != null)
                            @foreach ($productosTag as $producto)
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



@endsection
