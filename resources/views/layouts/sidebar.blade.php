<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{ asset('img/sidebar-1.jpg')}}">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
        <a href="#" class="simple-text logo-normal">
            YUNIEXPRESS
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item @yield('dash') ">
                <a class="nav-link " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons">dashboard</i>
                    <p> Dropdown link</p>

                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
                {{-- <a class="nav-link" href="{{ route('dash') }}">
                <i class="material-icons">dashboard</i>
                <p>Principal</p>
                </a> --}}
            </li>
            <li class="nav-item @yield('dash') ">
                <a class="nav-link" href="{{ route('dash') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Principal</p>
                </a>
            </li>
            @if ( Auth::user()->id_permiso == 1)
            <li class="nav-item @yield('usuarios')">
                <a class="nav-link" href="{{ route('usuarios')}}">
                    <i class="material-icons">people</i>
                    <p>Usuarios</p>
                </a>
            </li>
            <li class="nav-item @yield('vendedores')">
                <a class="nav-link" href="{{ route('vendedores') }}">
                    <i class="material-icons">people</i>
                    <p>Vendedores</p>
                </a>
            </li>
            <li class="nav-item @yield('clientes')">
                <a class="nav-link" href="{{ route('clientes')}}">
                    <i class="material-icons">people</i>
                    <p>Clientes</p>
                </a>
            </li>
            <li class="nav-item @yield('permisos')">
                <a class="nav-link" href="{{ route('permisos')}}">
                    <i class="material-icons">toc</i>
                    <p>Permisos</p>
                </a>
            </li>
            <li class="nav-item @yield('tiendas')">
                <a class="nav-link" href="{{ route('tiendas')}}">
                    <i class="material-icons">storefront</i>
                    <p>Tiendas</p>
                </a>
            </li>
            <li class="nav-item @yield('categorias')">
                <a class="nav-link" href="{{route('categorias')}}">
                    <i class="material-icons">category</i>
                    <p>Categorias</p>
                </a>
            </li>
            <li class="nav-item @yield('productos')">
                <a class="nav-link" href="{{ route('productos') }}">
                    <i class="material-icons">amp_stories</i>
                    <p>Productos</p>
                </a>
            </li>
            <li class="nav-item @yield('publicaciones')">
                <a class="nav-link" href="{{ route('publicaciones') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Publicaciones</p>
                </a>
            </li>
            <li class="nav-item @yield('datosInteracciones')">
                <a class="nav-link" href="{{ route('datosInteracciones') }}">
                    <i class="material-icons">thumb_up</i>
                    <p>Datos de interacciones</p>
                </a>
            </li>
            <li class="nav-item @yield('interacciones')">
                <a class="nav-link" href="{{ route('interacciones') }}">
                    <i class="material-icons">timeline</i>
                    <p>Interacciones</p>
                </a>
            </li>
            <li class="nav-item @yield('reportes')">
                <a class="nav-link" href="{{ route('reportes') }}">
                    <i class="material-icons">timeline</i>
                    <p>Reportes</p>
                </a>
            </li>
            @endif
            @if ( Auth::user()->id_permiso == 2)
            <li class="nav-item @yield('miPerfilVendedor')">
                <a class="nav-link" href="{{ route('miPerfilVendedor')}}">
                    <i class="material-icons">storefront</i>
                    <p>Mi perfil de vendedor</p>
                </a>
            </li>
            <li class="nav-item @yield('tiendas')">
                <a class="nav-link" href="{{ route('misTiendas')}}">
                    <i class="material-icons">storefront</i>
                    <p>Mis tiendas</p>
                </a>
            </li>
            <li class="nav-item @yield('productos')">
                <a class="nav-link" href="{{ route('misProductos') }}">
                    <i class="material-icons">amp_stories</i>
                    <p>Mis productos</p>
                </a>
            </li>
            <li class="nav-item @yield('publicaciones')">
                <a class="nav-link" href="{{ route('misPublicaciones') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Mis publicaciones</p>
                </a>
            </li>
            <li class="nav-item @yield('interacciones')">
                <a class="nav-link" href="{{ route('misInteracciones') }}">
                    <i class="material-icons">timeline</i>
                    <p>Mis interacciones</p>
                </a>
            </li>
            @endif
        </ul>
    </div>
</div>

@push('custom-styles')
<style type="text/css">
    #sidebar ul li.active>a,
    a[aria-expanded="true"] {
        color: $text-sidebar;
        background: $lila-60;
    }

    a[data-toggle="collapse"] {
        position: relative;
    }

    .dropdown-toggle::after {
        display: block;
        position: absolute;
        top: 50%;
        right: 20px;
        transform: translateY(-50%);
    }
</style>

@endpush
