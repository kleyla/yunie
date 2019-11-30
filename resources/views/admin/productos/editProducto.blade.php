@extends('layouts.admin')
@section('productos','active')
@section('contenido')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Editar producto</h4>
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
                        <form method="POST" class="form" action="{{ route('productoUpdate', $producto->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nombre</label>
                                        <input type="text" class="form-control" name="nombre" id="nombre"
                                            value="{{ $producto->nombre}}">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Descripcion</label>
                                        <input type="text" class="form-control" name="descripcion" id="descripcion"
                                            value="{{ $producto->descripcion}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Precio</label>
                                        <input type="number" class="form-control" id="precio" name="precio"
                                            value="{{ $producto->precio}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Stock</label>
                                        <input type="number" class="form-control" id="stock" name="stock"
                                            value="{{ $producto->stock}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="categoria">Seleccione una categoria</label>
                                        <select class="form-control" data-style="btn btn-link" id="categoria"
                                            name="categoria">
                                            @foreach ($categorias as $categoria)
                                            @if ( $producto->id_categoria == $categoria->id)
                                            <option name="categoria" value="{{ $categoria->id }}" selected>
                                                {{ $categoria->nombre }}</option>
                                            @else
                                            <option name="categoria" value="{{ $categoria->id }}">
                                                {{ $categoria->nombre }}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <h6>Tags, separe sus tags por comas</h6>
                                    </div>
                                    <div class="form-group">
                                        <label for="producto-tags">Por favor escriba tags: </label>
                                        <input type="text" name="tags" id="tags" data-role="tagsinput"
                                            class="form-control" value="{{$tags}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                @foreach ($imagenes as $imagen)
                                <div class="col-md-4">
                                    <div class="card" style="width: 20rem;">
                                        <img class="img-thumbnail card-img-top"
                                            src="{{asset("img/productos/$imagen->imagen")}}" alt="Card image cap">
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <fieldset>
                                        <label class="form-control-label" for="input-first-name">Seleccionar foto de
                                            perfil</label> <br>
                                        <section class="">
                                            <input type="file" name="foto[]" id="foto" multiple="">
                                            <br>
                                            <img id="imgSalida" width="50%" height="50%" src="" alt="">
                                        </section>
                                    </fieldset>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary pull-right">Guardar</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('custom-scripts')
<script src=""></script>
<script type="text/javascript">
    // $(window).load(function(){

        $(function() {
        $('#foto').change(function(e) {
            addImage(e);
            });

            function addImage(e){
            var file = e.target.files[0],
            imageType = /image.*/;

            if (!file.type.match(imageType))
            return;

            var reader = new FileReader();
            reader.onload = fileOnload;
            reader.readAsDataURL(file);
            }

            function fileOnload(e) {
            var result=e.target.result;
            $('#imgSalida').attr("src",result);
            }
        });
        // });
</script>
@endpush

@endsection
