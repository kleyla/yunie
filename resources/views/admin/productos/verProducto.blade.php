@extends('layouts.admin')
@section('productos','active')
@section('contenido')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-profile">
                    <div class="card-avatar">
                        <a href="#">
                            @if ( $imagenMain != null)
                            <img class="img" src="{{ asset("img/productos/$imagenMain->imagen") }}" />
                            @else
                            <img class="img" src="{{ asset("img/productos/producto.png") }}" />
                            @endif
                        </a>
                    </div>
                    <div class="card-body">
                        <h6 class="card-category text-gray">Producto {{$producto->id}}</h6>
                        <h4 class="card-title"> Nombre: {{ $producto->nombre }}</h4>
                        <div class="con">
                            <i class="fa fa-star" aria-hidden="true" id="sn1"></i>
                            <i class="fa fa-star" aria-hidden="true" id="sn2"></i>
                            <i class="fa fa-star" aria-hidden="true" id="sn3"></i>
                            <i class="fa fa-star" aria-hidden="true" id="sn4"></i>
                            <i class="fa fa-star" aria-hidden="true" id="sn5"></i>
                        </div>
                        <div class="text-left">
                            <h6>Tienda: {{ $tienda->nombre }}</h6>
                            <p class="card-text"> <strong>Categoria:</strong> {{ $categoria->nombre}}</p>
                            <p class="card-text"> <strong>Descripcion:</strong>
                                {{ $producto->descripcion }}
                            </p>
                            <p class="card-text"> <strong>Precio:</strong> {{ $producto->precio }}</p>
                            <p class="card-text"> <strong>Stock:</strong> {{ $producto->stock }}</p>
                        </div>
                        <a href="{{route('editProducto', $producto->id)}}">Editar producto</a>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Producto: {{ $producto->nombre }}</h4>
                        <p>Imagenes: </p>
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
                        <div class="row">
                            @foreach ($imagenes as $imagen)
                            <div class="col-md-4">
                                {{-- <div class="card" style="width: 20rem;"> --}}
                                <img class="img-thumbnail card-img-top" src="{{asset("img/productos/$imagen->imagen")}}"
                                    alt="Card image cap">
                                {{-- </div> --}}
                            </div>
                            @endforeach
                        </div>
                        <br>
                        <h6>Los tags de este producto son: </h6>
                        <div class="row">
                            @foreach ($tags as $tag)
                            <button class="btn btn-primary btn-round">{{ $tag->nombre }}</button>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Valoraciones:</h4>
                    </div>
                    <div class="card-body">
                        @foreach ($valoraciones as $valoracion)
                        <div class="row">
                            {{-- <div class="text-left"> --}}
                            <div class="col-md-1.5">
                                <div class="con">
                                    <i class="fa fa-star" aria-hidden="true" id="sn1"></i>
                                    <i class="fa fa-star" aria-hidden="true" id="sn2"></i>
                                    <i class="fa fa-star" aria-hidden="true" id="sn3"></i>
                                    <i class="fa fa-star" aria-hidden="true" id="sn4"></i>
                                    <i class="fa fa-star" aria-hidden="true" id="sn5"></i>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <p class=""> <strong>{{$valoracion->nombres}}: </strong>
                                    {{ $valoracion->comentarios }}
                                </p>
                            </div>

                            {{-- </div> --}}
                        </div>
                        @endforeach
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
    // -------- CALIFICADO
            var calificacion= @json($promedio);
            console.log(calificacion);

            calif = parseFloat(calificacion);
            calif= calificacion;
            console.log(calif);
            if(calif >0 && calif <= 1.4){
                $("#sn1").css("color","yellow");
            console.log("EStoy 1");

            }
            if(calif >=1.5 && calif <= 2.4){
                $("#sn1,#sn2").css("color","yellow");
            console.log("EStoy 2");

            }
            if(calif >=2.5 && calif <= 3.4){
                $("#sn1,#sn2,#sn3").css("color","yellow");
            console.log("EStoy 3");

            }
            if(calif >=3.5 && calif <=4.4){
                $("#sn1,#sn2,#sn3,#sn4").css("color","yellow");
            console.log("EStoy 4");

            }
            if(calif >=4.5 && calif <=5){
                $("#sn1,#sn2,#sn3,#sn4,#sn5").css("color","yellow");
            console.log("EStoy 5");

            }
              ///- ---- CALIFICAR
              var cal;
            $("#s1").click(function(){
                $(".fa-star").css("color","black");
                $("#s1").css("color","yellow");
                cal = 1;
                document.getElementById('cali').value= cal;
            })  ;
            $("#s2").click(function(){
                $(".fa-star").css("color","black");
                $("#s1,#s2").css("color","yellow");
                cal = 2;
                document.getElementById('cali').value= cal;
            })  ;
            $("#s3").click(function(){
                $(".fa-star").css("color","black");
                $("#s1,#s2,#s3").css("color","yellow");
                cal = 3;
                document.getElementById('cali').value= cal;
            })  ;
            $("#s4").click(function(){
                $(".fa-star").css("color","black");
                $("#s1,#s2,#s3,#s4").css("color","yellow");
                cal = 4;
                document.getElementById('cali').value= cal;
            })  ;
            $("#s5").click(function(){
                $(".fa-star").css("color","black");
                $("#s1,#s2,#s3,#s4,#s5").css("color","yellow");
                cal = 5;
                document.getElementById('cali').value= cal;
            })  ;
        });
    });

</script>
{{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATxiHfEHVZwbPtp2gdyc8K15B_4LqNwIA" async defer></script> --}}

@endpush

@endsection
